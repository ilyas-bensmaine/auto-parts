@section('navbar')
<div class="bg-white">
    <div class="container mx-auto flex flex-col lg:flex-row items-center py-4">
        <nav class="w-full lg:w-2/5">
            <a href="#"><i class="fa fa- fa-lg text-blue"></i></a>
        </nav>
        <div class="w-full text-center">
            <a href="#" class="top-nav-item active"><i class="fa fa-home fa-lg"><span class="badge badge-warning ">0</span></i> Home</a>
            <a href="#" class="top-nav-item"><i class="fa fa-bolt fa-lg"></i> Moments</a>
            <a href="#" class="top-nav-item"><i class="fa fa-bell fa-lg"></i> Notifications</a>
            <a href="#" class="top-nav-item"><i class="fa fa-envelope fa-lg"></i> Messages</a>
        </div>
        <div class="w-full lg:w-2/5 flex lg:justify-end">
            <div>
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-lg"></i>
                    @if (Auth::user()->unreadNotifications()->count() > 0)
                    <span class="badge badge-warning navbar-badge">{{Auth::user()->unreadNotifications()->count()}}</span>
                    @endif
    
                </a>
            </div>
            <div class="mr-4">
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{asset('dist/img/avatar.png')}}" alt="avatar" class="h-8 w-8 rounded-full">
                </a>
                <div class="dropdown-menu dropdown-menu-left ml-2" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout', ['language'=>app()->getLocale()]) }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout', ['language'=>app()->getLocale()]) }}"
                        method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</div>
@endsection
