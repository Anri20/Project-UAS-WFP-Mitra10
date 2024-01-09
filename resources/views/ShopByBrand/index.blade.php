@extends('layouts.template')

@section('content')
    <main>
        <div class="container">
            @foreach ($brands as $index => $brandtype)
                <b>{{ $index }}</b>
                <div class="row">
                    @foreach ($brandtype as $brand)
                        <div class="col-3">
                            <span class="brand" style="cursor: pointer;">{{ $brand->nama }}</span>
                        </div>
                    @endforeach
                </div>
                <br><br>
            @endforeach
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('.brand').click(function(){
                let namaBrand = $(this).text();
                // console.log(namaBrand)
                localStorage.setItem('brand', namaBrand)
                window.location = "{{ route('home.index') }}"
            })
        })
    </script>
@endsection
