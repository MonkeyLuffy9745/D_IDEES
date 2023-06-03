<header class="header_area bg-white">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('app.index') }}">
                    <h2>D_ZIDEES??</h2>
                </a>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li
                            @isset($_index) class="nav-item active" @else class="nav-item" @endisset>
                            <a class="nav-link" href="{{ route('app.index') }}">Acceuil</a>
                        </li>
                        <li @isset($_blog) class="nav-item active" @else class="nav-item" @endisset>
                            <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                        </li>l
                        <li @isset($_forum) class="nav-item active" @else class="nav-item" @endisset>
                            <a class="nav-link" href="{{ route('forum.index') }}">Forum</a>
                        </li>
                        <li @isset($_about) class="nav-item active" @else class="nav-item" @endisset>
                            <a class="nav-link" href="{{ route('app.about-us') }}">A propos</a>
                        </li>
                        <li @isset($_contact) class="nav-item active" @else class="nav-item" @endisset>
                            <a class="nav-link" href="{{ route('app.contact') }}">Contact</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/" class="nav-link search" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li> --}}
                        @guest
                            <li @isset($_login) class="nav-item active" @else class="nav-item" @endisset>
                                <a class="nav-link" href="{{ route('app.login') }}">Se connecter</a>
                            </li>
                            <li @isset($_register) class="nav-item active" @else class="nav-item" @endisset>
                                <a class="nav-link" href="{{ route('app.register') }}">S'enregistrer</a>
                            </li>
                        @endguest
                        @auth
                            <li @isset($_disconnect) class="nav-item active" @else class="nav-item" @endisset>
                                <a class="nav-link" href="{{ route('app.logout') }}">Se deconnecter</a>
                            </li>
                            <li @isset($_profil) class="nav-item active" @else class="nav-item" @endisset>
                                <a class="nav-link" href="{{ route('app.contact') }}">Profil</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
