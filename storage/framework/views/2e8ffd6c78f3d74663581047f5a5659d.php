<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DIAPRA Login</title>
  
  <link rel="icon" href="<?php echo e(asset('AdminLTE/docs/assets/img/logo.png')); ?>" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE/dist/css/adminlte.min.css')); ?>">
  <!-- CSS Responsif -->
  <style>
    body {
      background-color: #add2ff !important; /* Ganti dengan warna latar belakang yang diinginkan */
    }

    @media (max-width: 768px) {
      .login-box {
        width: 80%; /* Atur lebar kotak login */
    margin: 0 auto; /* Pusatkan kotak login secara horizontal */ /* Sesuaikan untuk menyesuaikan posisi vertikal */
      }
    }
  </style>
</head>
<body class="hold-transition login-page">
  <?php echo $__env->yieldContent('login'); ?>

<!-- jQuery -->
<script src="<?php echo e(asset('/AdminLTE/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/AdminLTE/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Kuliah\Magang\Web\WEB LAST\DIAPRA\resources\views\components\auth.blade.php ENDPATH**/ ?>