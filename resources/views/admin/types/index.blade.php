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
            <h1>{{__('Categories of parts')}}</h1>
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
                <h3 class="card-title">{{__('Liste des utilisateurs')}}</h3>
                @can('user-create')
                  <a class="btn btn-success float-sm-right" href="{{ route('admin.categories.create', ['language'=> app()->getlocale()]) }}"> {{__('Create New Category')}}</a>
                @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nom de la marque</th>
                        <th>الإسم</th>
                        <th>nombre de pieces</th>
                        <th>nombre des interressé</th>
                        <th width="15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($types as $key => $type)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      {{-- <td>{{ $type->nom }}</td>
                      <td>{{ $type->noma }}</td>
                      <td>
                        {{$type->modeles()->count()}}
                      </td>
                      <td>
                        {{$type->interesters()->count()}} --}}
                      </td>
                      {{-- <td>
                         <a class="btn btn-default btn-sm" onclick="handleDetail({{$user}}, {{ $user->getRoleNames()}})">{{__('Detail')}}</a>
                         @can('user-edit')
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', ['language'=> app()->getlocale(), 'user'=>$user->id]) }}">{{__('Editer')}}</a>
                         @endcan
                          @can('user-delete')
                            @if (Auth::user()->id == $user->id)
                                <a class="btn btn-danger btn-sm disabled">{{__('Supprimer')}}</a>
                            @else
                                <a class="btn btn-danger btn-sm" onclick="handleDelete( {{app()->getlocale()}} ,{{$user->id}})" >{{__('Supprimer')}}</a>
                            @endif
                          @endcan
                      </td>
                    </tr>
                   @endforeach --}}
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
  {{--
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
                <p for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} :</p>
                <p id="detailEmail" class="col-md-4 col-form-label"></p>
            </div>
            <div class="row">
                <p class="col-md-4 col-form-label text-md-right">{{__('Role' )}} :</p>
                <p id="detailRole" class="badge badge-success">{{ $v }}</p>
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
--}}
@endsection

@section('scripts')
    {{-- <script>
      function handleDetail(user, role ){
        $('#detailName').text(user.name);
        $('#detailEmail').text(user.email);
        $('#detailRole').text(role);
        $('#detailModal').modal('show');
      }

      function handleDelete(languge,id){
        $('#deleteModal').modal('show');
        $('#deleteForm').attr('action',languge+'admin/users/'+id);
      }
    </script> --}}
@endsection
