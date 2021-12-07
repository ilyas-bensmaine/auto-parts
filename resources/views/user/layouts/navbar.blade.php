@section('navbar')
<!-- Navbar -->
<nav class="bg-white navbar navbar-expand-lg">
    <div class="container">
        <div class="row">
            <div class="col-8 col-lg-3 navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
                <a class="navbar-brand" href="#">
                    <img class="logo-dark" src="../assets/img/logo-dark.png" alt="logo">
                </a>
            </div>

            @livewire('user.layouts.navbar', ['user' => Auth::user()])

            <div class="col-4 col-lg-3 text-right">
                <button class="btn btn-sm btn-round btn-success" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-plus" aria-hidden="true"></i> Demand</button>
                {{-- <a class=" ml-4" href="#"><i class="fa fa-bell fa-lg" aria-hidden="true"></i></a> --}}
                <a class="btn">
                    <img src="{{asset('dist/img/avatar.png')}}" alt="avatar" class="h-8 w-8 rounded-full">
                </a>                
            </div>

        </div>
    </div>
</nav>

<!-- /.navbar -->


    <!-- Login 2 -->
    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">

            @livewire('new-demand-modal')

        </div>
      </div>


@endsection
