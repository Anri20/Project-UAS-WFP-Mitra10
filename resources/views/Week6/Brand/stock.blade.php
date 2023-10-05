@extends('Week6.layouts.conquer')

@section('content')
    <h2>Brand Supplier</h2>
    <p>All Brands Suppliers Stocks!!</p>
    <table class="table text-white mb-0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Products Stocks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $b)
                <tr class="fw-normal">
                    <td class="align-middle">
                        <span>{{ $loop->index + 1 }}</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $b->nama }}</h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $b->supplied_products }}</h6>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
