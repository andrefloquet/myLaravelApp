<!-- nav class="navbar navbar-expand-lg navbar-light bg-light" -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Company Name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link {{ Request::path() === '/' ? 'active': ''}}" href="/">Home</a>
            <a class="nav-item nav-link {{ Request::path() === 'about' ? 'active': ''}}" href="/about">About</a>
            <a class="nav-item nav-link {{ Request::path() === 'blog' ? 'active': ''}}" href="/blog">Blog</a>
            <!-- a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a -->
        </div>
    </div>
</nav>



        <!-- div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div -->