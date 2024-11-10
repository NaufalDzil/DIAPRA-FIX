<x-layout>
  <title>Edit Kontrak/MoU</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kontrak/MoU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('mou.index')}}">Kontrak/MoU</a></li>
              <li class="breadcrumb-item active">Edit Kontrak/MoU</li>
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
                          <form action="{{ route('mou.update', $mou->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nomor :</label>
                                <input type="text" class="form-control" placeholder="{{$mou->id}}" readonly>
                            </div>

                              <div class="form-group">
                                <label>Nama Kegiatan : <b class="text-danger">*</b></label>
                                <input type="text" placeholder="Nama Kegiatan" placeholder="Nama Kegiatan" name="nama_kegiatan" class="form-control" value="{{$mou->nama_kegiatan}}" required>
                                @if($errors->has('nama_kegiatan'))
                                <div class="text-danger">
                                  {{ $errors->first('nama_kegiatan')}}
                                  </div>
                                @endif
                              </div>

                            <div class="form-group">
                              <label>Waktu Pelaksanaan : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal" class="form-control" value="{{$mou->tanggal}}" required>
                          </div>
                            
                          <div class="form-group">
                            <label>Besarnya :</label>
                            <input type="number" placeholder="Besarnya" name="nominal" class="form-control" value="{{$mou->nominal}}">
                            @if($errors->has('nominal'))
                            <div class="text-danger">
                              {{ $errors->first('nominal')}}
                              </div>
                            @endif
                          </div>

                        <div class="form-group">
                          <label>Nama Pihak Ketiga :</label>
                          <input type="text" name="nama" placeholder="Nama Pihak Ketiga" class="form-control" value="{{$mou->nama}}">
                          @if($errors->has('nama'))
                          <div class="text-danger">
                            {{ $errors->first('nama')}}
                            </div>
                          @endif
                        </div>

                            <div class="form-group">
                              <label>Nama PPTK :</label>
                              <input type="text" placeholder="Nama PPTK" name="pptk" class="form-control" value="{{$mou->pptk}}">
                              @if($errors->has('pptk'))
                              <div class="text-danger">
                                {{ $errors->first('pptk')}}
                                </div>
                              @endif
                            </div>

                          <div class="form-group">
                            <label>Surat : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" accept=".pdf" name="surat" class="form-control" value="{{$mou->surat}}">
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