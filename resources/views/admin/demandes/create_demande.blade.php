@extends('layouts.master')
@extends('layouts.navbar')
{{-- @extends('layouts.sidebar') --}}
<div class="card">
    <div class="card-header">Add a new Srore</div>

    <div class="card-body">
        <form method="POST" action="{{route('admin.demandes.store' ,['language'=>app()->getLocale()])}}"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label>Categorie</label>
                <select class="form-control select2 select2-danger" name="category" id="category" data-dropdown-css-class=""
                    style="width: 100%;">
                    @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label>Subcategorie</label>
                <select class="form-control select2 select2-danger" name="subcategorie" id="subcategorie" data-dropdown-css-class=""
                    style="width: 100%;">

                    @foreach ($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}"> {{$subcategory->nom}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label>Marque</label>
                <select class="form-control select2 select2-danger" multiple="multiple"  name="marques[]" id="marques" data-dropdown-css-class=""
                    style="width: 100%;">
                    @foreach ($marques as $marque)
                    <option value="{{$marque->id}}">{{$marque->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label>Modele</label>
                <select class="form-control select2 select2-danger" multiple="multiple"  name="modeles[]" id="modeles" data-dropdown-css-class=""
                    style="width: 100%;">
                    @foreach ($modeles as $modele)
                    <option value="{{$modele->id}}">{{$modele->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label>Etat</label>
                <select class="form-control select2 select2-danger" name="etat" id="etat" data-dropdown-css-class=""
                    style="width: 100%;">

                    @foreach ($etats as $etat)
                    <option value="{{$etat->id}}"> {{$etat->nom}} , {{$etat->noma}}  </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label>Wilaya</label>
                <select class="form-control select2 select2-danger" name="wilaya" id="wilaya" data-dropdown-css-class=""
                    style="width: 100%;">

                    @foreach ($wilayas as $wilaya)
                    <option value="{{$wilaya->id}}"> {{$wilaya->id}}   </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="slogan">Description</label>
                <textarea  name="description" cols="30" rows="6" class="form-control" placeholder="description"></textarea>
            </div>
            <div class="form-group">
                <label for="Images">Images of the piece</label>
                <input type="file"  multiple="multiple"  class="form-control" name="images[]" id="image">
            </div>




            <div class="form-group row mb-0">
                <div>
                    <button type="submit" class="btn-block btn btn-primary">
                        {{'Create'}}
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
