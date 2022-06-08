<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link pt-0" data-toggle="dropdown" href="#">
                <div class="user-panel  d-flex btn p-0">
                    <div class="image">
                        @if (Auth::user()->image)
                        <img src="{{asset('assets/img/users/'.Auth::user()->image)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        @else 
                        <img src="{{asset('assets/img/users/user')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">

                        @endif
                    </div>
                    <div class="info">
                        @auth
                            <span>Xin chào, {{Auth::user()->name}}</span>
                            
                        @endauth
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <a class="dropdown-item" asp-controller="People" asp-action="Profile">
                    <i class="fas fa-address-card mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    @method('POST')
                    <a onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item" asp-controller="Account" asp-action="Login">
                        <i class="fas fa-sign-out-alt mr-2"></i> Sign-out
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>