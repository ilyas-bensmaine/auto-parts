<div class="flex border-b border-solid border-grey-light">
    <div class="w-1/10 text-right pl-2 pt-2">
        <div></div>
    </div>
    <div class="w-9/10 p-3 pl-0">
        {{-- <div class="text-xs text-grey-dark">Pinned Tweet</div> --}}
        <div class="flex justify-between">
            <div>
                {{-- <span class="font-bold"><a href="#" class="text-black">{{$user->name}}</a></span> --}}
                <span class="text-grey-dark"> {{ $demand->created_at->diffForHumans() }} </span>
                {{-- <span class="text-grey-dark" wire:poll>Posted {{$user->created_at->diffForHumans()}}</span>
                --}}
            </div>
            <div>
            </div>
        </div>

        <div class="row">
            <div class=" col-md-8 mb-4">
                <p class="mb-2"> <strong>{{$demand->marques()->first()->nom}}</strong> {{$demand->modeles()->first()->nom}}</p>
                <span
                    class="mb-6 text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1">
                    {{$demand->marques()->first()->nom}}
                </span>
                <span
                    class="mb-6 text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1">
                    pink
                </span>
                <span
                    class="mb-6 text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-pink-600 bg-pink-200 uppercase last:mr-0 mr-1">
                    pink
                </span>
                
                <p class="mb-6">
                    {{$demand->note}}

                </p>
            </div>
            <div class="col-md-3">
                @if ($demand->image)
                <p><a href="{{asset('storage/'.$demand->image->url)}}" data-lightbox="demand-Images"><img src="{{asset('storage/'.$demand->image->url)}}" alt="tweet image"
                    class="border border-solid border-grey-light rounded-sm mt-2 mb-2"></a></p>
                @else
                <p><a href="" data-lightbox="demand-Images"><img src="{{asset('dist/img/tweet1.jpg')}}" alt="tweet image"
                    class="border border-solid border-grey-light rounded-sm mt-2 mb-2"></a></p>
                @endif
                
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="justify-content-start">
                
                @if ($this->isDemandLiked)
                <span>
                    <a wire:click="disliked" class="text-red hover:no-underline hover:text-grey-dark"><i
                            class="fa fa-heart fa-lg mr-1"></i></a>  {{ $countHearts }} 
                </span>    
                @else
                <span>
                    <a wire:click="liked" class="text-grey-dark hover:no-underline hover:text-red"><i
                            class="fa fa-heart fa-lg mr-1"></i> {{ $countHearts }} </a>
                </span>                
                @endif

                <span>
                    <a class="ml-3 text-grey-dark hover:no-underline hover:text-teal"><i
                            class="fa fa-envelope fa-lg mr-1"></i> {{ $countResponses }} </a>
                </span>

            </div>
            <div class="col-md-9 text-center">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="collapse"
                    data-target="#{{'demand-offers-'.$demand->id}}" aria-expanded="false" aria-controls="{{'demand-offers-'.$demand->id}}">
                    Dropdown button
                </button>
            </div>
            <div class="justify-content-end">
                <span>
                    <a href="#" class="text-grey-dark hover:no-underline hover:text-teal ml-8">
                        <i class="fa fa-map-marker-alt fa-lg"></i> {{$demand->wilaya->name}}
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse" id="{{'demand-offers-'.$demand->id}}" wire:ignore>
            <form wire:submit.prevent="newOffer">
                <div class="card card-body p-3">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <input type="number" wire:model="prix" class="form-control" placeholder="Prix en DA" required/>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" wire:model="selectedWilayaOfDisponibility">
                                @foreach ($wilayas as $wilaya)
                                    <option value="{{$wilaya->id}}">{{$wilaya->name}}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" wire:model="selectedEtat">
                                <option value="">Choose Etat</option>
                                @foreach ($etats as $etat)
                                    <option value="{{$etat->id}}">{{$etat->nom}}</option>                                  
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-file col-md-3">
                            <input type="file" class="custom-file-input" id="customFile" wire:model="reponseImages" multiple
                                accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="customFile">Choose Photos</label>
                        </div>
                        <div class="col-md-2 text-center" >
                            <button class="btn btn-success" type="submit"> Offer </button>
                        </div>
                    </div>
                    <div class="row form-group" >
                        <textarea class="form-control col-md-10 ml-2" rows="2"></textarea>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
