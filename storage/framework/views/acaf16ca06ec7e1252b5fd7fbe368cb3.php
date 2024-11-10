  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(route('kodearsip')); ?>" role="button">
          <i class="fas fa-book"></i> Kode Surat
        </a>
      </li>

      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?php echo e(auth()->user()->name); ?></a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <li class="dropdown-submenu dropdown-hover">
            <form action="/logout" method="post">
              <?php echo csrf_field(); ?>
              <button class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views/components/navbar.blade.php ENDPATH**/ ?>