@extends('layouts.master')
@extends('layouts.navbar')
{{-- @extends('layouts.sidebar') --}}

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
                            <h3 class="card-title">{{__('Create demande')}}</h3>
                            @can('user-create')
                            <a class="btn btn-success float-sm-right"
                                href="{{ route('admin.marques.create', ['language'=> app()->getlocale()]) }}">
                                {{__('Create New Category')}}</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('create_demande') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="marque">Marque</label>
                                    <select class="select2 " name="marque" id="marque" style="width:100%">
                                        @foreach ($marques as $marque)
                                            <option value="{{$marque->id}}">{{$marque->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="modele">Modele</label>
                                    <select class="select2 " name="modele" id="modele" style="width:100%">
                                        @foreach ($modeles as $modele)
                                            <option value="{{$modele->id}}">{{$modele->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="piece">Piece</label>
                                    <select class="select2 " name="piece" id="piece" style="width:100%">
                                        @foreach ($pieces as $piece)
                                            <option value="{{$piece->id}}">{{$piece->lib}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="slogan">Note</label>
                                    <input type="text" name="slogan" id="slogan" required class="form-control"
                                        placeholder="" aria-describedby="help">
                                </div>
                                {{-- <div class="form-group row select2-blue">
                                    <label for>Types</label>

                                    <select class="select2" multiple="multiple" name="types[]" id="types"
                                        data-placeholder="Select a Type" style="width: 100%;">
                                        @foreach ($types as $type)
                                        <option value="{{$type->id}}"> {{$type->name}} </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group row">
                                    <label for="phone">Phone</label>
                                    <input type="text" required name="phone" id="phone" class="form-control"
                                        data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                </div> --}}

                                {{-- <div class="form-group row select2-blue">
                                    <label for>Types</label>

                                    <select class="select2" multiple="multiple" name="types[]" id="types"
                                        data-placeholder="Select a Type" style="width: 100%;">
                                        @foreach ($types as $type)
                                        <option value="{{$type->id}}"> {{$type->name}} </option>
                                        @endforeach
                                    </select>
                                </div> --}}


                                {{-- <div class="form-group row">
                                    <div class="col-6">
                                        <label for="start">Start At:</label>
                                        <input class="timepicker mx-5" type="text" name="start" id="start"
                                            class="form-control" placeholder="" aria-describedby="help">
                                    </div>
                                    <div class="col-6">
                                        <label for="end">Ends At:</label>
                                        <input class="timepicker mx-5" type="text" name="end" id="end"
                                            class="form-control" placeholder="" aria-describedby="help">
                                    </div>

                                </div> --}}


                                <div class="form-group">
                                    <label for="Image">Image de la piece</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>

                                <div class="form-group row mb-0">
                                    <div>
                                        <button type="submit" class="btn-block btn btn-primary">
                                            {{'Demander'}}
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                    <p for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }} :</p>
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
