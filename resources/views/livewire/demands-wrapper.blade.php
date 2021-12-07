<div class="w-full lg:w-3/5 bg-white mb-4">
    <div class="p-3 border-b border-solid border-grey-light ">
        <span class="text-lg font-bold">Home</span>
        <div class="float-right" >
            Sort by
            <select wire:model="filter" class="border-solid border-grey-light form-select" aria-label="Default select example">
                <option value="1" selected>{{__('One')}}</option>
                <option value="2">{{__('Two')}}</option>
                <option value="3">{{__('Three')}}</option>
                <option value="4">{{__('four')}}</option>
            </select>
        </div>
    </div>

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
                    {{-- <span class="text-grey-dark" wire:poll>Posted {{$user->created_at->diffForHumans()}}</span> --}}
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
                    <span><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i
                                class="fa fa-heart fa-lg mr-2"></i> 135</a></span>
                </div>
                <div class="col-md-9 text-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="collapse"
                        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Dropdown button
                    </button>
                </div>
                <div class="justify-content-end">
                    <span class="mr-2"><a href="#"
                            class="text-grey-dark hover:no-underline hover:text-blue-light"><i
                                class="fa fa-eye fa-lg"></i> 9</a></span>
                    <span><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i
                                class="fa fa-heart fa-lg"></i> 135</a></span>
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                    proident.
                </div>
            </div>


        </div>
    </div>
    

</div>