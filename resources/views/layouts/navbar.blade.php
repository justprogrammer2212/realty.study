<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('index')}}">Realty Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('index')}}">Головна<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{Request::is('offers') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('offers')}}">Оголошення</a>
                </li>
                @if(Auth::user())
                <li class="nav-item {{Request::is('add') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('addOffer')}}">Додати оголошення</a>
                </li>
                @endif
                @if(Auth::user())
                <li class="nav-item {{Request::is('/articles/add') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('addArticle')}}">Додати статтю</a>
                </li>
                    @endif
            </ul>
            <ul class="navbar-nav mr-4">
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
            </ul>
            <ul class="navbar-nav">
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Шукаємо..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
                </form>

            </ul>
        </div>
    </nav>
</header>
