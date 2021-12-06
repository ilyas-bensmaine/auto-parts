@extends('user.layouts.app')
@extends('user.layouts.navbar')


@section('content')
<div class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
    <div class="w-full lg:w-2/5 pl-4 lg:pl-0 pr-6 mb-4 ">
        <div class="bg-white p-3 mb-3">
            <div>
                <span class="text-lg font-bold">Filters</span>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <div class="py-2">
                    <a href="#"><img src="/img/twitter/follow1.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                </div>
                <div class="pl-2 py-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="#" class="font-bold text-black">Nuxt.js</a> <a href="#"
                                class="text-grey-dark">@nuxt_js</a>
                        </div>

                        <div>
                            <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button
                            class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                            Follow
                        </button>
                    </div>
                </div>
            </div>


            <div class="pt-2">
                <a href="#" class="text-xs">Connect other address book</a>
            </div>
        </div>

        <div class="mb-3 text-xs">
            <span class="mr-2"><a href="#" class="text-grey-darker">&copy; 2018 Twitter</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">About</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Help Center</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Terms</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Privacy policy</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Cookies</a></span>
            <span class="mr-2"><a href="#" class="text-grey-darker">Ads info</a></span>
        </div>
    </div>

    <div class="w-full lg:w-3/5 bg-white mb-4">
        <div class="p-3 border-b border-solid border-grey-light ">
            <span class="text-lg font-bold">Home</span>
            <div class="float-right">
                Sort by
                <select class="border-solid border-grey-light form-select" aria-label="Default select example">
                    <option value="1" selected>One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="flex border-b border-solid border-grey-light">
            <div class="w-1/10 text-right pl-2 pt-2">
                <div><i class="fa fa-thumb-tack text-teal mr-2"></i></div>
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


                {{-- <div class="card">
                    <div class="card-header border-transparent">
                      <h3 class="card-title">Latest Orders</h3>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        hello
                    </div>
                    <!-- /.card-body -->
                  </div> --}}





            </div>
        </div>
        

    </div>

</div>

@endsection
@section('scripts')
@parent

@endsection
