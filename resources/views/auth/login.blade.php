@extends('components.auth')

@section('login')
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            @if(session()->has('loginError'))
            <div class="alert text-center alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            </div>
            @endif
            <div class="login-logo">
                <a>
                    <img style="vertical-align: middle; margin-bottom: 15px;" src="{{asset('AdminLTE/docs/assets/img/logo.png')}}" alt="logo.png" width="120">
                    <p style="font-size: 16px;">Digitalisasi Administrasi Persuratan</p>
                </a>
            </div>
            <!-- /.login-logo -->
            <p class="login-box-msg">Login ke Akun Anda</p>

            <form action="{{route('login')}}" method="post">
                @csrf
                @error('username')
                <div>
                    <small class="text text-danger">{{$message}}</small>
                </div>
                @enderror
                <div class="input-group mb-3 @error('username') is-invalid @enderror">
                    <input id="username" type="text" name="username" class="form-control" placeholder="Username" value="{{old('username')}}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 offset-md-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat login-btn">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection