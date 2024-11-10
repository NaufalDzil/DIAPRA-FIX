<x-layout>
<title>Dashboard</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li>Dashboard</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content-header -->

  
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-lime">
            <div class="inner">
              <h3>{{$totalsuratmasuk}}</h3>
              <p>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-envelope-open"></i>
            </div>
            <a href="{{Route('suratmasuk.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3>{{$totalsuratkeluar}}</h3>
              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-envelope"></i>
            </div>
            <a href="{{Route('suratkeluar.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3>{{$totalspj}}</h3>

              <p>SPJ UMPEG</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="{{route('spj.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$totalnodin}}</h3>

              <p>Nota Dinas</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="{{route('nodin.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-fuchsia">
            <div class="inner">
              <h3>{{$totalsk}}</h3>

              <p>SK</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="{{route('sk.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-pink">
            <div class="inner">
              <h3>{{$totalmou}}</h3>

              <p>Kontrak/MoU</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="{{route('mou.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>{{$totalsppd}}</h3>

              <p>SPPD</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="{{route('sppd.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$totalst}}</h3>

              <p>Surat Tugas</p>
            </div>
            <div class="icon">
              <i class="far fa-file"></i>
            </div>
            <a href="{{route('st.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{$totalterdisposisi}}</h3>
              <p>Surat Masuk Terdisposisi</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-copy"></i>
            </div>
            <a href="{{Route('suratmasuk.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$totalbelumdisposisi}}</h3>
              <p>Surat Masuk Belum Terdisposisi</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-copy"></i>
            </div>
            <a href="{{Route('suratmasuk.index')}}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
          <div class="card-header">
            <h3>Surat Masuk</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Tanggal Terima Surat</th>
                <th>Alamat Pengirim Surat</th>
                <th>Tanggal Surat</th>
                <th>Nomor Surat</th>
                <th>Perihal</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($suratmasuk as $key => $row)
                <tr class="text-center">
                  <td>{{ $key+1 }}</td>
                  <td>{{ \Carbon\Carbon::parse($row->tanggal_diterima)->translatedFormat('d F Y') }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>{{ \Carbon\Carbon::parse($row->tanggal_surat)->translatedFormat('d F Y') }}</td>
                  <td>{{ $row->nomor_surat }}</td>
                  <td>{{ $row->perihal }}</td>
                  @endforeach
                </tr>
            </table>
            
          </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
          <div class="card-header">
            <h3>Surat Keluar</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Nomor Surat</th>                    
                <th>Tujuan</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($suratkeluar as $key => $row)
                <tr class="text-center">
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->nomor_surat }}</td>                      
                  <td>{{ $row->alamat }}</td>
                  <td>{{ \Carbon\Carbon::parse($row->tanggal_surat)->translatedFormat('d F Y') }}</td>
                  <td>{{ $row->perihal }}</td>
                  @endforeach
                </tr>
            </table>
            
          </div>
          </div>
        </div>

              <!-- /.d-flex -->
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>


</x-layout>