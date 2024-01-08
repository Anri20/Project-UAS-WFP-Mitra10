@extends('layouts.template')
{{-- @extends('layout.conquer') --}}

@section('title')
<title>Home</title>
@endsection

@section('content')
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row" >
                    <h1>Detail Items</h1>
                    <table class="table text-black mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">qty</th>
                            <th scope="col">Total Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail as $show)
                                <tr class="fw-normal">
                                    <td class="align-middle">
                                        <span>{{$show->nama}}</span>
                                    </td>
                                    <td class="align-middle">
                                         <h6 class="mb-0">{{$show->jumlah}}</h6>
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0">{{number_format($show->total,0)}}</h6>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </main>


@endsection
