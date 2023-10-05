@extends('Week6.layouts.conquer')

@section('content')
    <h2>Category</h2>
    <p>All available Categories!!</p>
    <table class="table text-white mb-0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Parent Category</th>
                <th scope="col">All Category Product Average Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr class="fw-normal">
                    <td class="align-middle">
                        <span>{{ $c->idcategories }}</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $c->nama }}</h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">
                            {{ $c->parent_category == '' ? $c->parent_category : $c->parent_category->nama }}
                        </h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">
                            Rp.{{ number_format($c->avgHarga, 2) }}
                        </h6>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
