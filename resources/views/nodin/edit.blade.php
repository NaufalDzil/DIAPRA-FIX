<x-layout>
  <title>Edit Nota Dinas</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Nota Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('nodin.index')}}">Nota Dinas</a></li>
              <li class="breadcrumb-item active">Edit Nota Dinas</li>
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
                          <form action="{{ route('nodin.update', $nodin->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nomor Agenda :</label>
                                <input type="text" class="form-control" value="{{$nodin->id}}" readonly>
                            </div>

                            <div class="form-group">
                              <label>Tanggal Penomoran : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal_penomoran" class="form-control" value="{{$nodin->tanggal_penomoran}}" required>
                          </div>
                            
                            <div class="form-group">
                              <label>Alamat Penerima : <b class="text-danger">*</b></label>
                              <input type="text" name="alamat" placeholder="Alamat Penerima" class="form-control" value="{{$nodin->alamat}}" required>
                              @if($errors->has('alamat'))
                              <div class="text-danger">
                                {{ $errors->first('alamat')}}
                                </div>
                              @endif
                            </div>

                          <div class="form-group">
                            <label>Tanggal Surat : <b class="text-danger">*</b></label>
                            <input type="date" name="tanggal_surat" class="form-control" value="{{$nodin->tanggal_surat}}" required>
                        </div>

                        <div class="form-group">
                          <label>Perihal : <b class="text-danger">*</b></label>
                          <input type="text" name="perihal" placeholder="Perihal" class="form-control" value="{{$nodin->perihal}}" required>
                          @if($errors->has('perihal'))
                          <div class="text-danger">
                            {{ $errors->first('perihal')}}
                            </div>
                          @endif
                        </div>

                          <div class="form-group">
                            <label>Surat : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" accept=".pdf" name="surat" class="form-control" value="{{$nodin->surat}}">
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