<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    @yield('title')

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- FontAwesome 6.2.1 CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">

    @yield('head')
</head>

<body>
    {{-- <header>
        <div class="collapse bg-dark" id="navbarCollapse">
            <div class="container">
                <div class="d-flex text-white">
                    uwyahjfblskdb
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <strong class="text-white">Menu</strong>
            </div>
        </div>
    </header> --}}

    <nav class="navbar navbar-expand-lg sticky-top bg-dark">
        <div class="container-fluid gap-5">
            <a class="navbar-brand" href="/">
                {{-- <img src="{{ asset('assets') }}/logo/Logo_IG_Header.png" alt="Logo IGXXX" style="max-height: 40px"> --}}
            </a>

            <div class="collapse navbar-collapse" id="navbarCollapse" style="justify-content: center;">

                <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.index') }}"> <i class="fa-solid fa-house"></i>&nbsp; Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.index') }}"> <i class="fa-solid fa-bars"></i>&nbsp; All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('brand.index') }}"> <i class="fa-regular fa-copyright"></i>&nbsp; Shop By
                            Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('promos.index') }}"> <i class="fa-solid fa-ticket"></i>&nbsp; Promotion</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.index') }}">Inspiration</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.index') }}"> <i class="fa-solid fa-wrench"></i>&nbsp; Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.index') }}"> <i class="fa-regular fa-credit-card"></i>&nbsp;
                            Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.index') }}"> <i class="fa-brands fa-whatsapp"></i>&nbsp; Whatsapp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="padding-left:0.5em" aria-current="page"
                            href="{{ route('home.admin') }}"> <i class="fa-solid fa-lock"></i>&nbsp; Admin</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
