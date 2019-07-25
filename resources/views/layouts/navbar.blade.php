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
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Шукаємо..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
            </form>
        </div>
    </nav>
</header>