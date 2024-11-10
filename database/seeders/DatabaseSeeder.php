<?php

namespace Database\Seeders;

use App\Models\Kadis;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        
        Kadis::create([
            'nama' => 'Drs. M. HELFIANNOOR, M.Si',
            'pangkat' => 'Pembina Utama Muda',
            'NIP' => '19730719 199302 1 002'
        ]);
        
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@gmail.com',
            'role_id' => '1'
        ]);

        User::create([
            'name' => 'Dalduk',
            'username' => 'dalduk',
            'password' => Hash::make('12345678'),
            'email' => 'dalduk@gmail.com',
            'role_id' => '2'
        ]);
    }
}
