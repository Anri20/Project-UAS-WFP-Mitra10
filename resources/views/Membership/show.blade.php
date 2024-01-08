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

                    <h1>Detail Transaksi</h1>
                    <table class="table text-black mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Id Transaksi</th>
                            <th scope="col">Tgl Transaksi</th>
                            <th scope="col">Total Transaksi</th>
                            <th scope="col">Metode Bayar</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail as $show)
                                <tr class="fw-normal">
                                    <td class="align-middle">
                                        <span>{{$show->idtransactions}}</span>
                                    </td>
                                    <td class="align-middle">
                                         <h6 class="mb-0">{{$show->tanggal_pembayaran}}</h6>
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0">{{$show->metode_pembayaran}}</h6>
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0">{{number_format($show->total,0)}}</h6>
                                    </td>

                                    <td><a href="{{URL::to('/')}}/detailitem/{{$show->idtransactions}}" class="btn btn-primary">Detail Items</a></td>



                                </td>
                            </form>

                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </main>


@endsection
