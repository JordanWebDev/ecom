<header>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: black;">
        <div class="container">

            <img id="logo-nav" src="../images/navlogo.jpg" alt="mug-logo" height="45px"></img>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/shop?category=beer">BEER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop?category=wine">WINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop?category=liquor">LIQUOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop?category=extras">EXTRAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">CORPORATE</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <a href="{{ route('cart.index') }}">
                        <i class="fa fa-opencart" id="open-cart">
                            @if (Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span>
                            @endif
                        </i>
                    </a>

                </ul>
            </div>
        </div>
    </nav>
</header>
