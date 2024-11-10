<x-layout>
  <title>Tambah SPJ UMPEG</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah SPJ UMPEG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('spj.index')}}">SPJ UMPEG</a></li>
              <li class="breadcrumb-item active">Tambah SPJ UMPEG</li>
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
                          <form action="{{ route('spj.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                            <div class="form-group">
                                <label>Nomor :</label>
                                <input type="text" class="form-control" value="{{$newId}}" readonly>
                            </div>
        
                            <div class="form-group">
                              <label>Tanggal : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                              <label>Nama Kegiatan : <b class="text-danger">*</b></label>
                              <input type="text" value="{{old('nama_kegiatan')}}" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
                              @if($errors->has('nama_kegiatan'))
                              <div class="text-danger">
                                {{ $errors->first('nama_kegiatan')}}
                                </div>
                              @endif
                            </div>

                            <div class="form-group">
                              <label>Surat: <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                              <input type="file" accept=".pdf" name="surat" class="form-control">
                              @if($errors->has('surat'))
                              <div class="text-danger">
                                {{ $errors->first('surat')}}
                                </div>
                              @endif
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