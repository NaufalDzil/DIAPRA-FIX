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
<title>Dashboard</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li>Dashboard</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content-header -->

  
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-lime">
            <div class="inner">
              <h3><?php echo e($totalsuratmasuk); ?></h3>
              <p>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-envelope-open"></i>
            </div>
            <a href="<?php echo e(Route('suratmasuk.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php echo e($totalsuratkeluar); ?></h3>
              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-envelope"></i>
            </div>
            <a href="<?php echo e(Route('suratkeluar.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3><?php echo e($totalspj); ?></h3>

              <p>SPJ UMPEG</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="<?php echo e(route('spj.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo e($totalnodin); ?></h3>

              <p>Nota Dinas</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="<?php echo e(route('nodin.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-fuchsia">
            <div class="inner">
              <h3><?php echo e($totalsk); ?></h3>

              <p>SK</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="<?php echo e(route('sk.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-pink">
            <div class="inner">
              <h3><?php echo e($totalmou); ?></h3>

              <p>Kontrak/MoU</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="<?php echo e(route('mou.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo e($totalsppd); ?></h3>

              <p>SPPD</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="<?php echo e(route('sppd.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo e($totalst); ?></h3>

              <p>Surat Tugas</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="<?php echo e(route('st.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo e($totalterdisposisi); ?></h3>
              <p>Surat Masuk Terdisposisi</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-copy"></i>
            </div>
            <a href="<?php echo e(Route('suratmasuk.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo e($totalbelumdisposisi); ?></h3>
              <p>Surat Masuk Belum Terdisposisi</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-copy"></i>
            </div>
            <a href="<?php echo e(Route('suratmasuk.index')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
          <div class="card-header">
            <h3>Surat Masuk</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Tanggal Terima Surat</th>
                <th>Alamat Pengirim Surat</th>
                <th>Tanggal Surat</th>
                <th>Nomor Surat</th>
                <th>Perihal</th>
              </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $suratmasuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                  <td><?php echo e($key+1); ?></td>
                  <td><?php echo e(\Carbon\Carbon::parse($row->tanggal_diterima)->translatedFormat('d F Y')); ?></td>
                  <td><?php echo e($row->alamat); ?></td>
                  <td><?php echo e(\Carbon\Carbon::parse($row->tanggal_surat)->translatedFormat('d F Y')); ?></td>
                  <td><?php echo e($row->nomor_surat); ?></td>
                  <td><?php echo e($row->perihal); ?></td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </table>
            
          </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
          <div class="card-header">
            <h3>Surat Keluar</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Nomor Surat</th>                    
                <th>Tujuan</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
              </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $suratkeluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                  <td><?php echo e($key+1); ?></td>
                  <td><?php echo e($row->nomor_surat); ?></td>                      
                  <td><?php echo e($row->alamat); ?></td>
                  <td><?php echo e(\Carbon\Carbon::parse($row->tanggal_surat)->translatedFormat('d F Y')); ?></td>
                  <td><?php echo e($row->perihal); ?></td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </table>
            
          </div>
          </div>
        </div>

              <!-- /.d-flex -->
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
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
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views/dashboard.blade.php ENDPATH**/ ?>