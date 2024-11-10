<x-layout>
  <title>Edit Disposisi</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Disposisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/suratmasuk">Surat Masuk</a></li>
              <li class="breadcrumb-item"><a href="javascript:history.back()">Disposisi</a></li>
              <li class="breadcrumb-item active">Edit Disposisi</li>
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
                          <form action="{{ route('disposisi.update', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $disposisi->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nomor Surat :</label>
                                <input type="text" name="no" class="form-control" value="{{$disposisi->no}}" readonly>
                              </div>

                              <div class="form-group">
                                <label>Tujuan Disposisi : <b class="text-danger">*</b></label>
                                <input list="tujuan-options" name="tujuan" id="tujuan" class="form-control" value="{{ $disposisi->tujuan }}">
                                <datalist id="tujuan-options">
                                  <option value="Sekretaris">
                                  <option value="Kabid Keluarga Berencana">
                                  <option value="Kabid Keluarga Sejahtera">
                                  <option value="Kabid Pengendalian Penduduk dan Informasi Data">
                                  <option value="Kabid Pemberdayaan Masyarakat">
                              </datalist>
                            </div>
                            

                          <div class="form-group">
                            <label>Disposisi : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" accept=".pdf" name="disposisi" class="form-control">
                        </div>
        
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