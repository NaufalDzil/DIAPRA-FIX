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
  <title>Tambah Kontrak/MoU</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kontrak/MoU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo e(route('mou.index')); ?>">Kontrak/MoU</a></li>
              <li class="breadcrumb-item active">Tambah Kontrak/MoU</li>
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
                          <form action="<?php echo e(route('mou.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
        
                            <div class="form-group">
                                <label>Nomor :</label>
                                <input type="text" class="form-control" placeholder="<?php echo e($newId); ?>" readonly>
                            </div>
                            
                              <div class="form-group">
                                <label>Nama Kegiatan : <b class="text-danger">*</b></label>
                                <input type="text" value="<?php echo e(old('nama_kegiatan')); ?>" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
                                <?php if($errors->has('nama_kegiatan')): ?>
                                <div class="text-danger">
                                  <?php echo e($errors->first('nama_kegiatan')); ?>

                                  </div>
                                <?php endif; ?>
                              </div>

                            <div class="form-group">
                              <label>Waktu Pelaksanaan : <b class="text-danger">*</b></label>
                              <input type="date" value="<?php echo e(old('tanggal')); ?>" name="tanggal" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                              <label>Besarnya :</label>
                              <input type="number" name="nominal" value="<?php echo e(old('nominal')); ?>" class="form-control" placeholder="Besarnya">
                              <?php if($errors->has('nominal')): ?>
                              <div class="text-danger">
                                <?php echo e($errors->first('nominal')); ?>

                                </div>
                              <?php endif; ?>
                            </div>

                            <div class="form-group">
                              <label>Nama Pihak Ketiga :</label>
                              <input type="text" name="nama" value="<?php echo e(old('nama')); ?>" class="form-control" placeholder="Nama Pihak Ketiga">
                              <?php if($errors->has('nama')): ?>
                              <div class="text-danger">
                                <?php echo e($errors->first('nama')); ?>

                                </div>
                              <?php endif; ?>
                            </div>

                            <div class="form-group">
                              <label>Nama PPTK :</label>
                              <input type="text" name="pptk" class="form-control" placeholder="Nama PPTK">
                              <?php if($errors->has('pptk')): ?>
                              <div class="text-danger">
                                <?php echo e($errors->first('pptk')); ?>

                                </div>
                              <?php endif; ?>
                            </div>

                            <div class="form-group">
                              <label>Surat: <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                              <input type="file" accept=".pdf" name="surat" class="form-control">
                              <?php if($errors->has('surat')): ?>
                              <div class="text-danger">
                                <?php echo e($errors->first('surat')); ?>

                                </div>
                              <?php endif; ?>
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
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views\mou\create.blade.php ENDPATH**/ ?>