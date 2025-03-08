@extends('layouts.template')
{{-- @extends('layout.conquer') --}}

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row productList">
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
                                        <button class="buy" style='width: 20%;' value="{{ $p->nama }}">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div style='position: fixed; right: 0; top: 20%; width: 15%; border: solid black 1px;' id="keranjang">
                </div>
            </div>
        </div>

    </main>

    <script>
        $(document).ready(function() {
            console.log(localStorage.getItem('category'))
            console.log(localStorage.getItem('type'))

            let category = localStorage.getItem('category')
            let type = localStorage.getItem('type')

            if (category != null && type != null) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('getProductCategory') }}",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'category': category,
                        'type': type,
                    },
                    success: function(data) {
                        // alert('success')
                        // console.log(data.products)
                        $('.productList').html('')
                        console.log(data.products)
                        console.log(data.products.length == 0)
                        if (data.products.length == 0 && data.productsSC.length == 0) {
                            $('.productList').html(
                                `<h1>Sorry, Products Of This Kind Has Already Sold Out.</h1>`)
                        } else if (data.products.length != 0 && data.productsSC.length == 0) {
                            $.each(data.products, function(index, p) {
                                let diskon = p.harga * (1 - p.diskon)

                                let desc = p.deskripsi
                                let words = desc.split(' ')
                                let thres = 20
                                // if words in desc is longer than $thres words then cut
                                if (desc.trim().split(/\s+/).length > thres) {
                                    desc = words.slice(0, thres)
                                    desc = desc.join(' ')
                                }
                                $('.productList').append(`
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" src="{{ asset('assets/images/${p.gambar}.jpg') }}"
                                            width="100%" height="200">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class='d-flex flex-column '>
                                                    <s>Rp.${new Intl.NumberFormat(["ban", "id"]).format(p.harga)}</s>
                                                    <b style='color:red;'>
                                                        Rp.${new Intl.NumberFormat(["ban", "id"]).format(diskon)}
                                                    </b>
                                                </div>
                                                <div class='d-flex justify-content-center align-items-center rounded-circle text-white'
                                                    style='background-color:#f32e3b; width:40px; height:40px'>
                                                    <b>${p.diskon * 100}%</b>
                                                </div>
                                            </div>
                                            <h5>${p.namaProduct}</h5>
                                            <p class="card-text">
                                                ${desc} ...
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted">${p.namaKategori}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        } else if (data.products.length == 0 && data.productsSC.length != 0) {
                            $.each(data.productsSC, function(index, p) {
                                let diskon = p.harga * (1 - p.diskon)

                                let desc = p.deskripsi
                                let words = desc.split(' ')
                                let thres = 20
                                // if words in desc is longer than $thres words then cut
                                if (desc.trim().split(/\s+/).length > thres) {
                                    desc = words.slice(0, thres)
                                    desc = desc.join(' ')
                                }
                                $('.productList').append(`
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" src="{{ asset('assets/images/${p.gambar}.jpg') }}"
                                            width="100%" height="200">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class='d-flex flex-column '>
                                                    <s>Rp.${new Intl.NumberFormat(["ban", "id"]).format(p.harga)}</s>
                                                    <b style='color:red;'>
                                                        Rp.${new Intl.NumberFormat(["ban", "id"]).format(diskon)}
                                                    </b>
                                                </div>
                                                <div class='d-flex justify-content-center align-items-center rounded-circle text-white'
                                                    style='background-color:#f32e3b; width:40px; height:40px'>
                                                    <b>${p.diskon * 100}%</b>
                                                </div>
                                            </div>
                                            <h5>${p.namaProduct}</h5>
                                            <p class="card-text">
                                                ${desc} ...
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted">${p.namaKategori}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }
                    },
                    error: function() {
                        alert('error')
                    }
                })

                localStorage.removeItem('category')
                localStorage.removeItem('type')
            }

            console.log(localStorage.getItem('brand'))

            let brand = localStorage.getItem('brand')

            if (brand != null) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('getBrandCategory') }}",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'brand': brand,
                    },
                    success: function(data) {
                        // alert('success')
                        // console.log(data.products)
                        $('.productList').html('')
                        console.log(data.products)
                        console.log(data.products.length == 0)
                        if (data.products.length == 0) {
                            $('.productList').html(
                                `<h1>Sorry, Products Of This Kind Has Already Sold Out.</h1>`)
                        } else {
                            $.each(data.products, function(index, p) {
                                let diskon = p.harga * (1 - p.diskon)

                                let desc = p.deskripsi
                                let words = desc.split(' ')
                                let thres = 20
                                // if words in desc is longer than $thres words then cut
                                if (desc.trim().split(/\s+/).length > thres) {
                                    desc = words.slice(0, thres)
                                    desc = desc.join(' ')
                                }
                                $('.productList').append(`
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" src="{{ asset('assets/images/${p.gambar}.jpg') }}"
                                            width="100%" height="200">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class='d-flex flex-column '>
                                                    <s>Rp.${new Intl.NumberFormat(["ban", "id"]).format(p.harga)}</s>
                                                    <b style='color:red;'>
                                                        Rp.${new Intl.NumberFormat(["ban", "id"]).format(diskon)}
                                                    </b>
                                                </div>
                                                <div class='d-flex justify-content-center align-items-center rounded-circle text-white'
                                                    style='background-color:#f32e3b; width:40px; height:40px'>
                                                    <b>${p.diskon * 100}%</b>
                                                </div>
                                            </div>
                                            <h5>${p.namaProduct}</h5>
                                            <p class="card-text">
                                                ${desc} ...
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted">${p.namaKategori}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }
                    },
                    error: function() {
                        alert('error')
                    }
                })

                localStorage.removeItem('brand')
            }

            let keranjang = []
            let item = [] // nama, jumlah

            $('.buy').click(function() {

                if (keranjang.length == 0) {
                    item['nama'] = $(this).val()
                    item['jumlah'] = 1
                } else {
                    $.each(keranjang, function(index, value) {
                        if (value.nama == $(this).val()) {
                            item['jumlah'] += 1
                        }
                    })
                }
                keranjang.push(item)
                console.log(keranjang)
            })


        })
    </script>
@endsection
