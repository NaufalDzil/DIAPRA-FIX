<x-layout>
  <title>Kepala Dinas</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kepala Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item active">Kepala Dinas</li>
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
                <a href="{{route('kadis.edit', $kadis->id)}}" class="btn btn-danger float-sm-right"><i class="fas fa-edit"></i> Edit Kepala Dinas</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>Nama Kepala Dinas</th>
                    <th>Pangkat Kepala Dinas</th>
                    <th>NIP Kepala Dinas</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>{{ $kadis->nama }}</td>
                      <td>{{ $kadis->pangkat }}</td>
                      <td>{{ $kadis->NIP }}</td>
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