<x-layout>
  <title>Edit Pengguna</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/user">Pengguna</a></li>
              <li class="breadcrumb-item active">Edit Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

                        <!-- general form elements -->
                        <div class="card card-primary">
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
        
                            <div class="form-group">
                                <label>Nama : <b class="text-danger">*</b></label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                @if($errors->has('name'))
                                <div class="text-danger">
                                  {{ $errors->first('name')}}
                                  </div>
                                @endif
                            </div>

                            <div class="form-group">
                              <label>Username : <b class="text-danger">*</b></label>
                              <input type="text" name="username" class="form-control" value="{{$user->username}}" required>
                              @if($errors->has('username'))
                              <div class="text-danger">
                                {{ $errors->first('username')}}
                                </div>
                              @endif
                              <small class="text text-muted">(Username berisi minimal <b>5</b> karakter, maksimal <b>20</b> karakter dan hanya boleh diisi karakter <b>huruf</b> dan tidak boleh ada <b>spasi</b>!)</small>
                          </div>

                          <div class="form-group">
                            <label>Role : <b class="text-danger">*</b></label>
                            <select name="role_id" class="form-control" value="{{ $user->role_id }}" required>
                              @if($user->role_id == "1")
                              <option value="1">Admin</option>
                              <option value="2">User</option>
                              @else
                              <option value="2">User</option>
                              <option value="1">Admin</option>
                              @endif
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Email : <b class="text-danger">*</b></label>
                          <input type="text" name="email" class="form-control" value="{{$user->email}}" required>
                      </div>

                      <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        @if($errors->has('password'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password : </label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password">
                        @if($errors->has('password_confirmation'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                        <small class="text text-muted">(Password berisi minimal 8 karakter dan maksimal 12 karakter)</small>
                    </div>

                        <i class="text-danger"><b>*</b> Menunjukkan form yang wajib diisi</i>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                        </form>
                        </div>
                        <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
  


  </x-layout>