@extends('Week6.layouts.conquer')

@section('content')
    <h2>Products</h2>
    <p>All Products Stock!!</p>
    <table class="table text-white mb-0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr class="fw-normal">
                    <td class="align-middle">
                        <span>{{ $p->idproducts }}</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $p->nama }}</h6>
                    </td>
                    {{-- <td class="align-middle">
                        <h6 class="mb-0">
                            Rp.{{ number_format($c->avgHarga, 2) }}
                        </h6>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
