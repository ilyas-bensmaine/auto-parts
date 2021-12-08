
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="fw-200 text-center mb-2">New demand</h4>
                    <p class="text-center mb-4">Sign into your account using your credentials.</p>
                    
                    <div class="row">
                        <div class="col-md-6 form-group" wire:ignore>
                            <select class="form-control" placeholder="Select input" wire:model="selectedMarque">
                                <option value="">Select Marque</option>
                                @foreach ($marques as $marque)
                                    <option value=" {{$marque->id}} ">{{$marque->noma}}</option>                    
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <select class="form-control" placeholder="Select input" wire:model="selectedModele">
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
                        <select class="form-control" @if (count($subCategories)==0) disabled @endif placeholder="Select input" wire:model="selectedSubCategory">
                            <option value="">Select subCategory</option>
                            @foreach ($subCategories as $subCat)
                                <option value=" {{$subCat->id}} ">{{$subCat->nom}}</option>                    
                            @endforeach
                        </select>
                    </div>            
                    
            
                    
                    <div class="form-group">
                        <select class="form-control" @if (count($subSubCategories)==0) disabled @endif placeholder="Select input" wire:model="selectedSubSubCategory">
                            <option value="">Select subCategory</option>
                            @foreach ($subSubCategories as $subSubCat)
                                <option value=" {{$subSubCat->id}} ">{{$subSubCat->nom}}</option>                    
                            @endforeach
                        </select>
                    </div>            
                    
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Desc.." rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file col-md-10">
                            <input type="file" class="custom-file-input" id="customFile" multiple accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="customFile">Choose Photos</label>
                        </div>
                    </div>
            
                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                        
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
