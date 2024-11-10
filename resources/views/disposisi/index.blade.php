<x-layout>
  <title>Disposisi</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Disposisi <i><b>{{$suratmasuk->nomor_surat}}</b></i></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('suratmasuk.index')}}">Surat Masuk</a></li>
              <li class="breadcrumb-item active">Disposisi</li>
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
                 <a href="{{route('disposisi.cetak', $suratmasuk->id)}}" class="btn btn-primary float-sm-right"><i class="fa fa-print"></i> Cetak Disposisi</a>
                  <a href="{{route('disposisi.create', $suratmasuk->id)}}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Unggah Disposisi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Tujuan Disposisi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if ($disposisi->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">Silakan Unggah Disposisi Terlebih Dahulu!</td>
                        </tr>
                    @else
                        @foreach ($disposisi as $key => $row)
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->tujuan }}</td>
                                <td class="text-center">
                                  @if($row->disposisi)
                                      <a href="{{ route('disposisi.surat', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id]) }}" class="btn btn-outline-success btn-sm mb-1">
                                          <i class="far fa-file-pdf"></i> Lembar Disposisi
                                      </a>
                                  @endif
                              
                                  <a href="{{ route('disposisi.edit', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id]) }}" class="btn btn-outline-primary btn-sm">
                                      <i class="fas fa-edit"></i> Edit
                                  </a>
                                  <form action="{{ route('disposisi.delete', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('disposisi.delete', ['suratmasuk' => $suratmasuk->id, 'disposisi' => $row->id]) }}">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                              </td>
                              
                            </tr>
                        @endforeach
                    @endif
                </tbody>
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
  @include('disposisi.modal-delete')  


  </x-layout>