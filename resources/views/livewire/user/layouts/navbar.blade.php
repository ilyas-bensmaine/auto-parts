<section class="col-lg-6 navbar-mobile">
    <nav class="nav nav-navbar mx-auto">
        <a href="#" class="nav-link top-nav-item @if (Route::currentRouteName()== 'user.home') active @endif"><i
                class="fa fa-home fa-lg"><span class="badge badge-warning ">
                    {{auth()->user()->unreadNotifications->count()}} </span></i> </a>
        <a href="#" class="nav-link top-nav-item @if (Route::currentRouteName()== 'user.home') active @endif"><i
                class="fa fa-bolt fa-lg"> <span class="badge badge-danger "> 0 </span> </i> </a>
        <a href="#" class="nav-link top-nav-item @if (Route::currentRouteName()== 'user.home') active @endif"><i
                class="fa fa-bell fa-lg"> <span class="badge badge-danger "> 0 </span> </i> </a>
        <a href="#" class="nav-link top-nav-item @if (Route::currentRouteName()== 'user.home') active @endif"><i
                class="fa fa-envelope fa-lg"> <span class="badge badge-danger "> 0 </span> </i> </a>
    </nav>
</section>
