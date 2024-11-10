<x-layout>
  <title>Edit Surat Tugas</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Surat Tugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('st.index')}}">Surat Tugas</a></li>
              <li class="breadcrumb-item active">Edit Surat Tugas</li>
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
                          <form action="{{ route('st.update', $st->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nomor :</label>
                                <input type="text" class="form-control" value="{{$st->Id}}" readonly>
                            </div>

                            <div class="form-group">
                              <label>Tanggal : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal" class="form-control" value="{{$st->tanggal}}" required>
                          </div>

                          <div class="form-group">
                            <label>Nama/NIP : <b class="text-danger">*</b></label>
                            <input type="text" placeholder="Nama/NIP" name="nama" class="form-control" value="{{$st->nama}}" required>
                            @if($errors->has('nama'))
                            <div class="text-danger">
                              {{ $errors->first('nama')}}
                              </div>
                            @endif
                          </div>

                        <div class="form-group">
                          <label>Maksud Perjalanan Dinas : <b class="text-danger">*</b></label>
                          <input type="text" placeholder="Maksud Perjalanan Dinas" name="maksud" class="form-control" value="{{$st->maksud}}" required>
                          @if($errors->has('maksud'))
                          <div class="text-danger">
                            {{ $errors->first('maksud')}}
                            </div>
                          @endif
                        </div>

                      <div class="form-group">
                        <label>Tujuan : <b class="text-danger">*</b></label>
                        <input type="text" placeholder="Tujuan" name="tujuan" class="form-control" value="{{$st->tujuan}}" required>
                        @if($errors->has('tujuan'))
                        <div class="text-danger">
                          {{ $errors->first('tujuan')}}
                          </div>
                        @endif
                      </div>

                    <div class="form-group">
                      <label>Lamanya : <b class="text-danger">*</b></label>
                      <input type="text" name="lamanya" class="form-control" placeholder="Lamanya" value="{{$st->lamanya}}" required>
                      @if($errors->has('lamanya'))
                      <div class="text-danger">
                        {{ $errors->first('lamanya')}}
                        </div>
                      @endif
                    </div>

                  <div class="form-group">
                    <label>Tanggal Berangkat : <b class="text-danger">*</b></label>
                    <input type="date" name="tanggal_berangkat" class="form-control" value="{{$st->tanggal_berangkat}}" required>
                    @if($errors->has('tanggal_berangkat'))
                    <div class="text-danger">
                      {{ $errors->first('tanggal_berangkat')}}
                      </div>
                    @endif
                  </div>

                <div class="form-group">
                  <label>Tanggal Kembali : <b class="text-danger">*</b></label>
                  <input type="date" name="tanggal_kembali" class="form-control" value="{{$st->tanggal_kembali}}" required>
                  @if($errors->has('tanggal_kembali'))
                  <div class="text-danger">
                    {{ $errors->first('tanggal_kembali')}}
                    </div>
                  @endif
                </div>

                        <div class="form-group">
                          <label>Keterangan :</label>
                          <input type="text" name="ket" class="form-control" placeholder="Keterangan" value="{{$st->ket}}">
                          @if($errors->has('ket'))
                          <div class="text-danger">
                            {{ $errors->first('ket')}}
                            </div>
                          @endif
                        </div>
                            
                          <div class="form-group">
                            <label>Surat : <small class="text text-muted">(Maksimal ukuran file 10MB)</small></label>
                            <input type="file" name="surat" accept=".pdf" class="form-control" value="{{$st->surat}}">
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