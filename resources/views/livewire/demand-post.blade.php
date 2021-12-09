<div class="flex border-b border-solid border-grey-light">
    <div class="w-1/10 text-right pl-2 pt-2">
        <div></div>
    </div>
    <div class="w-9/10 p-3 pl-0">
        {{-- <div class="text-xs text-grey-dark">Pinned Tweet</div> --}}
        <div class="flex justify-between">
            <div>
                {{-- <span class="font-bold"><a href="#" class="text-black">{{$user->name}}</a></span> --}}
                <span class="text-grey-dark">&middot;</span>
                {{-- <span class="text-grey-dark" wire:poll>Posted {{$user->created_at->diffForHumans()}}</span>
                --}}
            </div>
            <div>
            </div>
        </div>

        <div class="row">
            <div class=" col-md-8 mb-4">
                <p class="mb-2">Tailwind CSS v0.4.0 is out!</p>
                <span
                    class="mb-6 text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1">
                    pink
                </span>
                <span
                    class="mb-6 text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1">
                    pink
                </span>
                <span
                    class="mb-6 text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1">
                    pink
                </span>

                <p class="mb-6">Makes `apply` more useful when using !important utilities, and includes an
                    improved default color palette:
                    Makes `apply` more useful when using !important utilities, and includes an improved default
                    color palette:

                </p>
            </div>
            <div class="col-md-3">
                <p><a href="#"><img src=" {{asset('dist/img/tweet1.jpg')}} " alt="tweet image"
                            class="border border-solid border-grey-light rounded-sm mt-2 mb-2"></a></p>
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="justify-content-start">
                
                @if (auth()->user()->viewedDemandes->contains($demand->id))
                <span>
                    <a href="#" class="text-red hover:no-underline hover:text-grey-dark"><i
                            class="fa fa-heart fa-lg mr-2"></i> {{ $countHearts }} </a>
                </span>    
                @else
                <span>
                    <a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i
                            class="fa fa-heart fa-lg mr-2"></i> {{ $countHearts }} </a>
                </span>                
                @endif

            </div>
            <div class="col-md-9 text-center">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="collapse"
                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Dropdown button
                </button>
            </div>
            <div class="justify-content-end">
                <span class="mr-2"><a href="#" class="text-grey-dark hover:no-underline hover:text-blue-light"><i
                            class="fa fa-eye fa-lg"></i> 9</a></span>
                <span><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i
                            class="fa fa-heart fa-lg"></i> 135</a></span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body p-3">
                <div class="row">
                    <div class="col-md-3">
                        <input type="number" class="form-control" placeholder="Prix en DA" />
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" wire:model="selectedSubSubCategory">
                            <option value="">Wilaya</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" wire:model="selectedSubSubCategory">
                            <option value="">Etat</option>
                        </select>
                    </div>
                    <div class="custom-file col-md-3">
                        <input type="file" class="custom-file-input" id="customFile" wire:model="demandImages" multiple
                            accept=".png, .jpg, .jpeg">
                        <label class="custom-file-label" for="customFile">Choose Photos</label>
                    </div>
                    <div class="col-md-2 text-center">
                        <button class="btn btn-success"> Offer </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
