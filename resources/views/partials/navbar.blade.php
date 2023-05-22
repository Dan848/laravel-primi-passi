<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="{{route($nav_bar["home"][1])}}">{{$app_title}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @foreach ($nav_bar as $link)
                    <a class="nav-link" href="{{ route($link[1])}}">{{$link[0]}}</a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
