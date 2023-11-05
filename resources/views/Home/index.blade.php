@extends('layouts.template')
{{-- @extends('layout.conquer') --}}

@section('content')
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

    
@endsection
