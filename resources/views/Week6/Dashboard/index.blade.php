@extends('Week6.layouts.conquer')

@section('cdn')
    <!-- Bootstrap CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
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
    </header>

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    @foreach ($products as $p)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{ asset('assets/images/' . $p->gambar . '.jpg') }}"
                                    width="100%" height="200">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class='d-flex flex-column '>
                                            <s>{{ 'Rp.' . number_format($p->harga, 2) }}</s>
                                            <b style='color:red;'>
                                                {{ 'Rp.' . number_format($p->harga * (1 - $p->diskon), 2) }}
                                            </b>
                                        </div>
                                        <div class='d-flex justify-content-center align-items-center rounded-circle text-white'
                                            style='background-color:#f32e3b; width:40px; height:40px'>
                                            <b>{{ $p->diskon * 100 }}%</b>
                                        </div>
                                    </div>
                                    <h5>{{ $p->nama }}</h5>
                                    <p class="card-text">
                                        <?php
                                        $desc = $p->deskripsi;
                                        $words = explode(' ', $p->deskripsi);
                                        $thres = 20;
                                        // if words in desc is longer than $thres words then cut
                                        if (str_word_count($p->deskripsi) > $thres) {
                                            $desc = array_slice($words, 0, $thres - 1);
                                            $desc = implode(' ', $desc);
                                        }
                                        echo $desc . ' ...';
                                        ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $p->category->nama }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a
                    href="../../getting-started/">getting started guide</a>.</p>
        </div>
    </footer>
@endsection
