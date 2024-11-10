<x-layout>
  <title>Edit SK</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit SK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('sk.index')}}">SK</a></li>
              <li class="breadcrumb-item active">Edit SK</li>
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
                          <form action="{{ route('sk.update', $sk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                              <div class="form-group">
                                <label>Nomor :</label>
                                <input type="text" class="form-control" value="{{$sk->id}}" readonly>
                            </div>

                            <div class="form-group">
                              <label>Tanggal : <b class="text-danger">*</b></label>
                              <input type="date" name="tanggal" class="form-control" value="{{$sk->tanggal}}" required>
                          </div>
                            
                            <div class="form-group">
                              <label>Perihal : <b class="text-danger">*</b></label>
                              <input type="text" name="perihal" placeholder="Perihal" class="form-control" value="{{$sk->perihal}}" required>
                              @if($errors->has('perihal'))
                              <div class="text-danger">
                                {{ $errors->first('perihal')}}
                                </div>
                              @endif
                            </div>

                          <div class="form-group">
                            <label>Surat : </label>
                            <input type="file" accept=".pdf" name="surat" class="form-control" value="{{$sk->surat}}">
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