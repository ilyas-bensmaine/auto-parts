@extends('layouts.master')
@extends('layouts.navbar')
@extends('layouts.sidebar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('Gestion des rôles')}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{__('Liste des rôles')}}</h3>
                @can('role-create')
                  <a class="btn btn-success float-sm-right" href="{{ route('roles.create') }}"> {{__('Create New role')}}</a>
                @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>{{__('Rôle')}}</th>
                        <th>{{__('Description')}}</th>
                        <th width="15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($roles as $key => $role)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $role->name }}</td>
                      <td>  ... </td>
                      <td>
                         <a class="btn btn-default btn-sm" onclick="handleDetail({{$role}})">{{__('Detail')}}</a>
                         @can('role-edit')
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">{{__('Editer')}}</a>
                         @endcan
                         @can('role-delete')
                            <a class="btn btn-danger btn-sm" onclick="handleDelete({{$role->id}})" >{{__('Supprimer')}}</a>
                         @endcan
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
                {{-- {!! $data->render() !!} --}}
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
  <div class="modal" id="detailModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{_('Details')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <p for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name')   }} :</p>
                <p id="detailName" class="col-md-4 col-form-label"></p>
            </div>
            <div class="row">
                <p for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }} :</p>
                <p id="detailDescription" class="col-md-4 col-form-label"></p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">{{__('Fermer')}}</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{__('Vous êtes sûr ?')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{__('Voulez-vous vraiment supprimer cet utilisateur ?')}}</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Non')}}</button>
          <form id="deleteForm" action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">{{__('Oui')}}</button>
          </form>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

@endsection

@section('scripts')
    <script>
      function handleDetail( role ){
        console.log(role)
        $('#detailName').text(role.name);
        $('#detailEmail').text(role.description);
        $('#detailModal').modal('show');
      }

      function handleDelete(id){
        $('#deleteModal').modal('show');
        $('#deleteForm').attr('action','/roles/'+id);
      }
    </script>
@endsection