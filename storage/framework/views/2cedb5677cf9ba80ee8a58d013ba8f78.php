<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                          <form action="<?php echo e(route('user.update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
        
                            <div class="form-group">
                                <label>Nama : <b class="text-danger">*</b></label>
                                <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" required>
                                <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                  <?php echo e($errors->first('name')); ?>

                                  </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                              <label>Username : <b class="text-danger">*</b></label>
                              <input type="text" name="username" class="form-control" value="<?php echo e($user->username); ?>" required>
                              <?php if($errors->has('username')): ?>
                              <div class="text-danger">
                                <?php echo e($errors->first('username')); ?>

                                </div>
                              <?php endif; ?>
                              <small class="text text-muted">(Username berisi minimal <b>5</b> karakter, maksimal <b>20</b> karakter dan hanya boleh diisi karakter <b>huruf</b> dan tidak boleh ada <b>spasi</b>!)</small>
                          </div>

                          <div class="form-group">
                            <label>Role : <b class="text-danger">*</b></label>
                            <select name="role_id" class="form-control" value="<?php echo e($user->role_id); ?>" required>
                              <?php if($user->role_id == "1"): ?>
                              <option value="1">Admin</option>
                              <option value="2">User</option>
                              <?php else: ?>
                              <option value="2">User</option>
                              <option value="1">Admin</option>
                              <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Email : <b class="text-danger">*</b></label>
                          <input type="text" name="email" class="form-control" value="<?php echo e($user->email); ?>" required>
                      </div>

                      <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <?php if($errors->has('password')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('password')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password : </label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password">
                        <?php if($errors->has('password_confirmation')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('password_confirmation')); ?>

                            </div>
                        <?php endif; ?>
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

  
  


   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views\user\edit.blade.php ENDPATH**/ ?>