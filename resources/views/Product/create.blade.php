@extends('layouts.conquer')

@section('css')
    <style>
        input {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <h3>Add New Product</h3>
    <form>
        @csrf
        <div class="form-group">
            <label for="productName">Nama Produk</label>
            <input type="text" id="productName" placeholder="Enter the new product name">
        </div>
        <div class="form-group">
            <label for="productDesc">Deskripsi Produk</label>
            <input type="text" id="productDesc" placeholder="Enter the new product description">
        </div>
        <div class="form-group">
            <label for="productCategory">Kategori Produk</label><br>
            <select name="productCategory" id="productCategory">
                <option value="-" selected disabled hidden>Choose Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->idcategories }}">{{ $category->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="productBrand">Brand Produk</label><br>
            <select name="productBrand" id="productBrand">
                <option value="-" selected disabled hidden>Choose Brand</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->idbrands }}">{{ $brand->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="productPrice">Harga Produk</label>
            <input type="number" id="productPrice" placeholder="Enter the new product price">
        </div>
        <button class="btn btn-primary" id="submit">Submit</button>
    </form>

    {{-- Modal --}}
    {{-- Modal Notif --}}
    <div class="modal fade" id="Notif" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="NotifLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="NotifLabel">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body flex">
                    <h4><span id='notif'></span></h4>
                </div>
                <div class="modal-footer">
                    {{-- button ok --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#submit').click(function(e) {
                e.preventDefault();
                let product_name = $("#productName").val().trim();
                let product_desc = $("#productDesc").val().trim();
                let category_id = $("#productCategory option:selected").val();
                let brand_id = $("#productBrand option:selected").val();
                let product_price = parseInt($("#productPrice").val());

                $.ajax({
                    type: 'POST',
                    url: "{{ route('home.store') }}",
                    data: {
                        '_token': $('meta[name=csrf-token]').attr("content"),
                        'product_name': product_name,
                        'product_description': product_desc,
                        'category_id': category_id,
                        'brand_id': brand_id,
                        'product_price': product_price,
                    },
                    success: function(data) {
                        $('#notif').text(data.msg)
                        $('#Notif').modal('show')
                    },
                    error: function() {
                        $('#notif').text("Oops!!! There's something wrong with the system!!")
                        $('#Notif').modal('show')
                    }
                })
            })
        });
    </script>
@endsection
