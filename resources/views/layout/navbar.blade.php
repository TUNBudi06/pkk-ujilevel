<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset("img/logo-navbar.png")}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            BananaRoll
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->url() == route("home")) ? "active" : ""}}" aria-current="page" href="{{route("home")}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->url() == route("shop")) ? "active" : ""}}" href="{{route("shop")}}">Shop</a>
                </li>
                @if(!auth()->check())
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->url() == route("login")) ? "active" : ""}}" href="{{route("login")}}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("login")}}">{{auth()->user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("logout")}}">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
