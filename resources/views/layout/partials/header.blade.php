<header class="header-top bg-dark py-4">
    <div class="container">
        <nav class="navbar navbar-expand-lg navigation menu-white">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-w.png') }}" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu  text-white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="menu navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/">Home</a>                           
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog Posts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="/">Standard Fullwidth</a>
                        </div>
                    </li>                    
                </ul>

            </div>
        </nav>
    </div>
</header>
