<header>

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between p-3">
                <a class="logo" href="{{ route('home') }}">
                    <img src="/image/dc-logo.png" alt="logo">
                </a>
                <div>
                    <ul class="d-flex justify-center align-items-center h-100 ">
                        @foreach (['comics', 'movies', 'tv', 'characters', 'games', 'videos', 'mews', 'shop'] as $comic)
                            <li class="p-3  ">
                                <a class="head-link" href="/">{{ $comic }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
