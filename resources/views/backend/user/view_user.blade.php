@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Lista de Clientes</h3>
                <a href="{{ route('user.add') }}" style="float:right" class="btn btn-rounded btn-primary mb-5">Adicionar Clientes</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">ID</th>
                              <th>Tipo</th>
                              <th>Nome</th>
                              <th>Email</th>
                              <th width="25%">Ação</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key => $user)
                          <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $user->usertype }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                                <div class="row">
                                  <div class="pl-3">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Editar</a>
                                  </div>
                                  <div class="pl-3">
                                    <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger" id="delete">Remover</a>
                                  </div>
                                </div>                                  
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>

@endsection