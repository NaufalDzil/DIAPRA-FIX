<x-layout>
  <title>Pengguna</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
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
                  <a href="{{route('user.create')}}" class="btn btn-primary float-sm-right"><i class="fas fa-plus-circle"></i> Tambah Pengguna</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                      <tr class="text-center">
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Role</th>
                          <th>Email</th>
                          <th class="no-print">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($user as $row)
                      <tr class="text-center">
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->username }}</td>
                          <td>{{ $row->role->name }}</td>
                          <td>{{ $row->email }}</td>
                          <td>
                              <a href="{{route('user.edit', $row->id)}}" class="btn btn-outline-primary btn-sm">
                                  <i class="far fa-edit"></i> Edit
                              </a>
                              <form action="{{ route('user.destroy', $row->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                @if (strtolower($row->name) !== 'admin')
                                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('user.destroy', $row->id) }}">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            @endif                            
                            </form>
                          </td>
                      </tr>
                      @endforeach
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
@include('user.modal-delete')


  </x-layout>