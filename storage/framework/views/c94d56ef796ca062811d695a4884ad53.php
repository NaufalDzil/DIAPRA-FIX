<?php $__env->startSection('login'); ?>
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <?php if(session()->has('loginError')): ?>
            <div class="alert text-center alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('loginError')); ?>

            </div>
            <?php endif; ?>
            <div class="login-logo">
                <a>
                    <img style="vertical-align: middle; margin-bottom: 15px;" src="<?php echo e(asset('AdminLTE/docs/assets/img/logo.png')); ?>" alt="logo.png" width="120">
                    <p style="font-size: 16px;">Digitalisasi Administrasi Persuratan</p>
                </a>
            </div>
            <!-- /.login-logo -->
            <p class="login-box-msg">Login ke Akun Anda</p>

            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div>
                    <small class="text text-danger"><?php echo e($message); ?></small>
                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="input-group mb-3 <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <input id="username" type="text" name="username" class="form-control" placeholder="Username" value="<?php echo e(old('username')); ?>" required autofocus>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views\auth\login.blade.php ENDPATH**/ ?>