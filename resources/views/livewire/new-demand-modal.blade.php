<div class="modal-content">
    <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="fw-200 text-center mb-2">New demand</h4>
        <p class="text-center mb-4"> {{__('Demmandez une pièces dans quelques étapes')}} </p>

        <form wire:submit.prevent="addDemand">
            <div class="row">
                <div class="col-md-6 form-group">
                    <select class="form-control @error('selectedMarque') is-invalid @enderror" placeholder="Select input" wire:model="selectedMarque">
                        <option class="text-grey-dark" value="">Select Marque</option>
                        @foreach ($marques as $marque)
                        <option value=" {{$marque->id}} ">{{$marque->noma}}</option>
                        @endforeach
                    </select>
                    @error('selectedMarque')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <select class="form-control" @if (count($modeles)==0) disabled @endif wire:model="selectedModele">
                        <option value="">Select Modele</option>
                        @foreach ($modeles as $modele)
                        <option value=" {{$modele->id}} ">{{$modele->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
    
    
    
    
            <div class="form-group" wire:ignore>
                <select class="form-control" placeholder="Select input" wire:model="selectedCategory">
                    <option value="">Select category</option>
                    @foreach ($categories as $cat)
                    <option value=" {{$cat->id}} ">{{$cat->nom}}</option>
                    @endforeach
                </select>
            </div>
    
    
            <div class="form-group">
                <select class="form-control" @if (count($subCategories)==0) disabled @endif
                    wire:model="selectedSubCategory">
                    <option value="">Select subCategory</option>
                    @foreach ($subCategories as $subCat)
                    <option value=" {{$subCat->id}} ">{{$subCat->nom}}</option>
                    @endforeach
                </select>
            </div>
    
    
    
            <div class="form-group">
                <select class="form-control" @if (count($subSubCategories)==0) disabled @endif
                    wire:model="selectedSubSubCategory">
                    <option value="">Select subCategory</option>
                    @foreach ($subSubCategories as $subSubCat)
                    <option value=" {{$subSubCat->id}} ">{{$subSubCat->nom}}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="note" placeholder="Ecrire quelques choses.." rows="3"></textarea>
            </div>
            <div class="form-group row">
                    <div class="custom-file col-md-8">
                        <input type="file" class="custom-file-input" id="customFile" wire:model="demandImages" multiple
                            accept=".png, .jpg, .jpeg">
                        <label class="custom-file-label" for="customFile">Choose Photos</label>
                    </div>
                    <div class="text-center ml-2">
                        <div wire:loading wire:target="demandImages" class="spinner-border spinner-border-sm text-primary"
                            role="status">
                            <span class="sr-only ">{{__('Loading...')}}</span>
                        </div>
                    </div>
                    @if ($demandImages)
                    <div class="text-center ml-2">
                        @foreach ($demandImages as $key=>$image)
                        <a href="{{ $image->temporaryUrl() }}" data-lightbox="demand-Images" >
                            @if ($key==0) <i class="fa fa-eye fa-lg btn btn-default" style="margin-left: 2%" aria-hidden="true"></i>@endif
                        </a>
                        @endforeach
                    </div>
                    @endif
            </div>

            <button class="btn btn-primary" type="submit"> Lancer </button>

        </form>


    </div>

</div>


@push('js')
<script>
    $(document).ready(function () {
        $('#marque-dropdown').select2({
            placeholder: "Select a state",
        });
        $('#marque-dropdown').on('change', function (e) {
            let data = $(this).val();
            @this.set('category', data);
        });
        window.livewire.on('productStore', () => {
            $('#marque-dropdown').select2();
        });
    });

</script>

@endpush
