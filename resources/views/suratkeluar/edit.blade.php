<x-layout>
  <title>Edit Surat Keluar</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Surat Keluar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/suratkeluar">Surat Keluar</a></li>
              <li class="breadcrumb-item active">Edit Surat Keluar</li>
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
                          <form action="{{ route('suratkeluar.update', $suratkeluar->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                              <div class="form-group">
                                <div class="form-group">

                                  <label>Nomor :</label>
                                  <input type="text" class="form-control" value="{{$suratkeluar->id}}" readonly>
                              </div>

                                <label>Nomor Surat : <b class="text-danger">*</b></label>
                                <input type="text" placeholder="Nomor Surat" name="nomor_surat" class="form-control" value="{{$suratkeluar->nomor_surat}}" required>
                                @if($errors->has('nomor_surat'))
                                <div class="text-danger">
                                  {{ $errors->first('nomor_surat')}}
                                  </div>
                                @endif
                              </div>
        
                            <div class="form-group">
                                <label>Tujuan Surat : <b class="text-danger">*</b></label>
                                <input type="text" placeholder="Tujuan Surat" name="alamat" class="form-control" value="{{$suratkeluar->alamat}}" required>
                                @if($errors->has('alamat'))
                                <div class="text-danger">
                                  {{ $errors->first('alamat')}}
                                  </div>
                                @endif
                              </div>

                            <div class="form-group">
                              <label>Tanggal Surat : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal_surat" class="form-control" value="{{$suratkeluar->tanggal_surat}}" required>
                              @if($errors->has('tanggal_terima'))
                              <div class="text-danger">
                                {{ $errors->first('tanggal_terima')}}
                                </div>
                              @endif
                            </div>
                            
                            <div class="form-group">
                              <label>Perihal : <b class="text-danger">*</b></label>
                              <input type="text" placeholder="Perihal" name="perihal" class="form-control" value="{{$suratkeluar->perihal}}" required>
                              @if($errors->has('perihal'))
                              <div class="text-danger">
                                {{ $errors->first('perihal')}}
                                </div>
                              @endif
                            </div>

                          <div class="form-group">
                            <label>Surat : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" name="surat" accept=".pdf" class="form-control" value="{{$suratkeluar->surat}}">
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