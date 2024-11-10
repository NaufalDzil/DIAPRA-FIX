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
  <title>Surat Keluar</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Surat Keluar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item active">Surat keluar</li>
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

            <div class="card">
              <div class="card-header">
                  <a href="<?php echo e(Route('suratkeluar.create')); ?>" class="btn btn-primary float-sm-right"><i class="fas fa-plus-circle"></i> Tambah Surat Keluar</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="suratmasuk" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>#</th>
                    <th>Nomor</th>
                    <th>Nomor Surat</th>                    
                    <th>Tujuan Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                    <th class="no-print">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $suratkeluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                      <td><?php echo e($key+1); ?></td>
                      <td><?php echo e($row->id); ?></td>
                      <td><?php echo e($row->nomor_surat); ?></td>                      
                      <td><?php echo e($row->alamat); ?></td>
                      <td><?php echo e(\Carbon\Carbon::parse($row->tanggal_surat)->translatedFormat('d F Y')); ?></td>
                      <td><?php echo e($row->perihal); ?></td>
                      <td class="text-center"><?php if($row->surat): ?>
                        <a href="<?php echo e(route('suratkeluar.surat', $row->id)); ?>" class="btn btn-outline-success btn-sm">
                            <i class="far fa-file-pdf"></i></i> Surat
                        </a>
                    <?php endif; ?>
                        <a href="<?php echo e(route('suratkeluar.edit', $row->id)); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Edit</a>
                      </td>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                </table>
                
              
              </div>
              <!-- /.card-body -->
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
  <!-- /.content-wrapper -->

  
  


   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views/suratkeluar/index.blade.php ENDPATH**/ ?>