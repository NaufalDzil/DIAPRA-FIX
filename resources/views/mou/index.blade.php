<x-layout>
  <title>Kontrak/MoU</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kontrak/MoU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item active">Kontrak/MoU</li>
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

            <div class="card">
              <div class="card-header">
                  <a href="{{route('mou.create')}}" class="btn btn-primary float-sm-right"><i class="fas fa-plus-circle"></i> Tambah Kontrak/MoU</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="suratmasuk" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>#</th>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Waktu Pelaksanaan</th>
                    <th>Besarnya</th>
                    <th>Nama Pihak Ketiga</th>
                    <th>Nama PPTK</th>
                    <th class="no-print">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($mou as $key => $row)
                    <tr class="text-center">
                      <td>{{ $key+1 }}</td>
                      <td>{{$row->id}}</td>
                      <td>{{$row->nama_kegiatan}}</td>
                      <td>{{ \Carbon\Carbon::parse($row->tanggal)->translatedFormat('d F Y') }}</td>
                      <td>{{ 'Rp ' . number_format($row->nominal, 0, ',', '.') }}</td>
                      <td>{{$row->nama}}</td>
                      <td>{{$row->pptk}}</td>
                      <td class="text-center">@if($row->surat)
                        <a href="{{route('mou.surat', $row->id)}}" class="btn btn-outline-success btn-sm">
                            <i class="far fa-file-pdf"></i></i> Surat
                        </a>
                    @endif
                        <a href="{{route('mou.edit', $row->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Edit</a>
                      </td>
                      @endforeach
                    </tr>
                </table>
                
              
              </div>
              <!-- /.card-body -->
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
  <!-- /.content-wrapper -->
  
  


  </x-layout>