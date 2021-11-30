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

        @livewire('demande-post', ['user' => Auth::user()])


    </div>

</div>
@endsection
@section('scripts')
@parent

@endsection
