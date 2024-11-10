<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('role')->get();
    
        return view('user.index', compact('user'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => [
                'required',
                'min:5',
                'max:20',
                'unique:users',
                'regex:/^[a-z.]+$/'
            ],            
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:8|max:12|confirmed',
            'role_id' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(string $id)
    {       
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => [
                'required',
                'min:5',
                'max:20',
                'unique:users,username,' . $user->id,
                'regex:/^[a-z.]+$/'
            ],
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role_id' => 'required',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role_id');
    
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->route('user.index')->with('success', 'Pengguna berhasil diubah.');
    }
    

    public function destroy(string $id)
    {
    $user = User::findOrFail($id);
    
    $user->delete();

    return redirect()->route('user.index')->with('success', 'Pengguna berhasil dihapus!');
    }
}
