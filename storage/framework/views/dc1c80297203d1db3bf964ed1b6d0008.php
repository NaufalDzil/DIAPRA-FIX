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
  <title>Disposisi</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Disposisi <i><b><?php echo e($suratmasuk->nomor_surat); ?></b></i></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo e(route('suratmasuk.index')); ?>">Surat Masuk</a></li>
              <li class="breadcrumb-item active">Disposisi</li>
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
                 <a href="<?php echo e(route('disposisi.cetak', $suratmasuk->id)); ?>" class="btn btn-primary float-sm-right"><i class="fa fa-print"></i> Cetak Disposisi</a>
                  <a href="<?php echo e(route('disposisi.create', $suratmasuk->id)); ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Unggah Disposisi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Tujuan Disposisi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if($disposisi->isEmpty()): ?>
                        <tr>
                            <td colspan="3" class="text-center">Silakan Unggah Disposisi Terlebih Dahulu!</td>
                        </tr>
                    <?php else: ?>
                        <?php $__currentLoopData = $disposisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo e($row->tujuan); ?></td>
                                <td class="text-center">
                                  <?php if($row->disposisi): ?>
                                      <a href="<?php echo e(route('disposisi.surat', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id])); ?>" class="btn btn-outline-success btn-sm mb-1">
                                          <i class="far fa-file-pdf"></i> Lembar Disposisi
                                      </a>
                                  <?php endif; ?>
                              
                                  <a href="<?php echo e(route('disposisi.edit', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id])); ?>" class="btn btn-outline-primary btn-sm">
                                      <i class="fas fa-edit"></i> Edit
                                  </a>
                                  <form action="<?php echo e(route('disposisi.delete', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id])); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="<?php echo e(route('disposisi.delete', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id])); ?>">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                              </td>
                              
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
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
  <?php echo $__env->make('disposisi.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  


   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views\disposisi\index.blade.php ENDPATH**/ ?>