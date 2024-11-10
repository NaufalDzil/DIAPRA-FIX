<!DOCTYPE html>
<html lang="en">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/disposisi.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE//plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE//plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE//plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">  
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('/AdminLTE/plugins/toastr/toastr.min.css')}}">
    {{-- Icon --}}
    <link rel="icon" href="{{asset('AdminLTE/docs/assets/img/logo.png')}}" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/AdminLTE/dist/css/adminlte.min.css')}}">
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
  </head>

<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">

<x-navbar></x-navbar>

<x-sidebar></x-sidebar>

  {{$slot}}

  <!-- Main Footer -->
  <x-footer></x-footer>
  

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="{{asset('/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('/AdminLTE/dist/js/adminlte.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE//plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE//plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('AdminLTE/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('AdminLTE/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>


@if(session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif
<script>
  $(document).ready(function() {
      @if(session('success'))
          toastr.success("{{ session('success') }}");
      @endif
  });
</script>
<script>
  $(document).ready(function () {
    $('#surat').on('change', function() {
      // Mendapatkan nama file
      var fileName = $(this).val().split('\\').pop();
      // Mengubah label sesuai nama file
      $(this).next('.custom-file-label').html(fileName);
    });
  });
</script>

<script>
  $(function () {
    var pageTitle = $('title').text(); // Jika tidak ada h1, gunakan default 'Surat Masuk'
    $("#suratmasuk").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": [
        {
          extend: "copy",
          title: pageTitle, // Gunakan judul dari body
          exportOptions: {
            columns: ':not(.no-print)' // Kecualikan kolom dengan kelas "no-print"
          }
        }, 
        {
          extend: "csv",
          title: pageTitle, // Gunakan judul dari body
          exportOptions: {
            columns: ':not(.no-print)' // Kecualikan kolom dengan kelas "no-print"
          }
        }, 
        {
          extend: "excel",
          title: pageTitle, // Gunakan judul dari body
          exportOptions: {
            columns: ':not(.no-print)' // Kecualikan kolom dengan kelas "no-print"
          }
        }, 
        {
          extend: "pdf",
          title: pageTitle, // Gunakan judul dari body
          exportOptions: {
            columns: ':not(.no-print)' // Kecualikan kolom dengan kelas "no-print"
          }
        }, 
        {
          extend: "print",
          title: pageTitle, // Gunakan judul dari body
          exportOptions: {
            columns: ':not(.no-print)' // Kecualikan kolom dengan kelas "no-print"
          }
        }, 
        "colvis"
      ]
    }).buttons().container().appendTo('#suratmasuk_wrapper .col-md-6:eq(0)');
  });

</script>

<script>
  $(function () {
    var pageTitle = $('title').text(); // Jika tidak ada h1, gunakan default 'Surat Masuk'
    $("#pengguna").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
    }).buttons().container().appendTo('#pengguna_wrapper .col-md-6:eq(0)');
  });
</script>

</body>
</html>

