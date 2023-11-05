@extends('layouts.template')

@section('content')
    <main>
        <div class="container">
            @foreach ($brands as $index => $brandtype)
                <b>{{ $index }}</b>
                <div class="row">
                    @foreach ($brandtype as $brand)
                        <div class="col-3">
                            {{ $brand->nama }}
                        </div>
                    @endforeach
                </div>
                <br><br>
            @endforeach
        </div>
    </main>
@endsection
