<x-layout>
  <title>Tambah Pengguna</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/user">Pengguna</a></li>
              <li class="breadcrumb-item active">Tambah Pengguna</li>
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
                          <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
        
                            <div class="form-group">
                                <label>Nama : <b class="text-danger">*</b></label>
                                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}" required>
                                @if($errors->has('name'))
                                <div class="text-danger">
                                  {{ $errors->first('name')}}
                                  </div>
                                @endif
                            </div>

                            <div class="form-group">
                              <label>Username : <b class="text-danger">*</b></label>
                              <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                              @if($errors->has('username'))
                                <div class="text-danger">
                                  {{ $errors->first('username')}}
                                  </div>
                                @endif
                                <small class="text text-muted">(Username berisi minimal <b>5</b> karakter, maksimal <b>20</b> karakter dan hanya boleh diisi karakter <b>huruf kecil</b> dan tidak boleh ada <b>spasi</b>!)</small>
                          </div>

                          <div class="form-group">
                            <label>Role : <b class="text-danger">*</b></label>
                            <select name="role_id" class="form-control" value="{{ old('role_id') }}" required>
                              @foreach ($roles as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Email : <b class="text-danger">*</b></label>
                          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                          @if($errors->has('name'))
                                <div class="text-danger">
                                  {{ $errors->first('email')}}
                                  </div>
                                @endif
                      </div>
                      
                      <div class="form-group">
                        <label for="password">Password : <b class="text-danger">*</b></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        @if($errors->has('password'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password : <b class="text-danger">*</b></label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password" required>
                        @if($errors->has('password_confirmation'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                        <small class="text text-muted">(Password berisi minimal 8 karakter dan maksimal 12 karakter)</small>
                    </div>
                    

                            <div>
                              <i class="text-danger"><b>*</b> Menunjukkan form yang wajib diisi</i>
                              <div class="text-right">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
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