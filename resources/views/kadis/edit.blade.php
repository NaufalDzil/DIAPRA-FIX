<x-layout>
  <title>Edit Kepala Dinas</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kepala Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('kadis.index')}}">Kepala Dinas</a></li>
              <li class="breadcrumb-item active">Edit Kepala Dinas</li>
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
                          <form action="{{ route('kadis.update', $kadis->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nama Kepala Dinas : <b class="text-danger">*</b></label>
                                <input type="text" name="nama" class="form-control" value="{{$kadis->nama}}" required>
                            </div>

                            <div class="form-group">
                              <label>Pangkat Kepala Dinas : <b class="text-danger">*</b></label>
                              <input type="text" name="pangkat" class="form-control" value="{{$kadis->pangkat}}" required>
                          </div>

                          <div class="form-group">
                            <label>NIP Kepala Dinas : <b class="text-danger">*</b></label>
                            <input type="text" name="NIP" class="form-control" value="{{$kadis->NIP}}" required>
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

  
  


  </x-layout>