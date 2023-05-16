<header>
    <div class="nav-more-info">
        <div class="container-1000">
            <ul>
                <li>Dc power visa</li>
                <li>Additional dc sites</li>
            </ul>
        </div>
    </div>

    <div class="container-1000">

        <nav>
            <div class="nav-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </div>

            <div class="links-nav">
                <ul>
                    @foreach ($links as $singleLink)
                    <li><a href="{{ route($singleLink['route']) }}">{{ $singleLink['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>


            <div class="input">
                <input type="text" class="form-control no-border" placeholder="Search">
            </div>
        </nav>

    </div>

    <div class="img-header-container">

    </div>
</header>