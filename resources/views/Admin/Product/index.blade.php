@extends('layouts.conquer')

@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection

@section('css')
    <style>
        .table-responsive {
            overflow: auto !important;
        }

        table {
            width: 100%;
        }

        table,
        thead,
        tbody,
        th,
        td {
            font-size: 14px;
            padding: 10px;
        }

        th,
        td.id,
        td.action {
            text-align: center;
        }

        a {
            cursor: pointer;
        }

        input,
        textarea {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <table border=1 class="table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Kategori Produk</th>
                <th>Brand Produk</th>
                <th>Harga Produk</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody id="data">
            <?php $i = 1; ?>
            @foreach ($product as $p)
                <tr id="{{ $i }}">
                    <td class="id">{{ $i }}</td>
                    <td class="nama">{{ $p->nama }}</td>
                    <td class="deskripsi">{{ $p->deskripsi }}</td>
                    <td id="{{ $p->category->idcategories }}" class="category">{{ $p->category->nama }}</td>
                    <td id="{{ $p->brand->idbrands }}" class="brand">{{ $p->brand->nama }}</td>
                    <td class="harga">{{ $p->harga }}</td>
                    <td class="action edit"><a>Edit</a></td>
                    <td class="action delete"><a>Delete</a></td>
                </tr>
                <?php $i++; ?>
            @endforeach
        </tbody>
    </table>

    {{-- Modal --}}
    {{-- Modal Notif --}}
    <div class="modal fade" id="Notif" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="NotifLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="NotifLabel">Notification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body flex">
                    <h4><span id='notif'></span></h4>
                </div>
                <div class="modal-footer">
                    {{-- button ok --}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Confirmation --}}
    <div class="modal fade" id="Confirm" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="ConfirmLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ConfirmLabel">Notification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>

                </div>
                <div class="modal-body flex">
                    <h4><span id='confirm'></span></h4>
                </div>
                <div class="modal-footer">
                    {{-- button ok --}}
                    <button type="button" class="btn btn-success confirmation" data-dismiss="modal">YES</button>
                    <button id="cancel" type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div class="modal fade" id="Edit" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="EditLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body flex">
                    <div>
                        <label for="productNameUpdate">Nama Product</label>
                        <input id="productNameUpdate" type="text" value="">
                    </div>
                    <div>
                        <label for="productDeskripsiUpdate">Deskripsi Product</label>
                        <textarea name="productDeskripsiUpdate" id="productDeskripsiUpdate" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <label for="productCategoryUpdate">Kategori Produk</label><br>
                        <select name="productCategoryUpdate" id="productCategoryUpdate">

                        </select>
                    </div>
                    <div>
                        <label for="productBrandUpdate">Brand Produk</label><br>
                        <select name="productBrandUpdate" id="productBrandUpdate">

                        </select>
                    </div>
                    <div>
                        <label for="productHargaUpdate">Harga Product</label>
                        <input id="productHargaUpdate" type="number" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- button ok --}}
                    <button type="button" class="btn btn-success confirmation" data-dismiss="modal">OK</button>
                    <button id="cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            let checkType = ""
            let url = ""

            let productName = ""
            let newProductName = ""
            let productDesc = ""
            let productCategory_id = ""
            let productBrand_id = ""
            let productPrice = ""

            $('a').click(function() {
                // alert($(this).text())
                // console.log($(this).parent('td').attr('class').split(' ')[1])
                // console.log($(this).parent('td').parent('tr').children('td.nama').text())

                checkType = $(this).parent('td').attr('class').split(' ')[1]
                productName = $(this).parent('td').parent('tr').children('td.nama').text()
                productDeskripsi = $(this).parent('td').parent('tr').children('td.deskripsi').text()
                productCategory = $(this).parent('td').parent('tr').children('td.category').text()
                productBrand = $(this).parent('td').parent('tr').children('td.brand').text()
                productHarga = $(this).parent('td').parent('tr').children('td.harga').text()


                if (checkType == "edit") {
                    url = "{{ route('updateProduct') }}"

                    $('#productNameUpdate').val(productName)
                    $('#productDeskripsiUpdate').val(productDeskripsi)

                    $('#productCategoryUpdate').html(`
                        <option value="${$(this).parent('td').parent('tr').children('td.category').attr('id')}" selected hidden>${productCategory}</option>
                    `)

                    $('#productBrandUpdate').html(`
                        <option value="${$(this).parent('td').parent('tr').children('td.brand').attr('id')}" selected hidden>${productBrand}</option>
                    `)

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getUpdate') }}",
                        data: {
                            '_token': '<?php echo csrf_token(); ?>',
                        },
                        success: function(data) {
                            $.each(data.data.categories, function(key, value) {
                                $('#productCategoryUpdate').append(`
                                    <option value="${value.idcategories}">${value.nama}</option>
                                `)
                            })

                            $.each(data.data.brands, function(key, value) {
                                $('#productBrandUpdate').append(`
                                    <option value="${value.idbrands}">${value.nama}</option>
                                `)
                            })
                        },
                        error: function() {
                            alert('error')
                        }
                    })

                    $('#productHargaUpdate').val(productHarga)
                    $('#Edit').modal('show')
                } else if (checkType == "delete") {
                    url = "{{ route('deleteProduct') }}"

                    $('#confirm').text(`Are you sure you want to ${checkType} this data?`)
                    $('#Confirm').modal('show')
                }

                // console.log($url)
            })

            $('#cancel').click(function() {
                productName = ""
            })

            $('.confirmation').click(function() {
                if (checkType == "edit") {
                    newProductName = $("#productNameUpdate").val()
                    productDesc = $("#productDeskripsiUpdate").val()
                    productCategory_id = $("#productCategoryUpdate").val()
                    productBrand_id = $("#productBrandUpdate").val()
                    productPrice = $("#productHargaUpdate").val()

                    console.log(newProductName)
                    console.log(productDesc)
                    console.log(productCategory_id)
                    console.log(productBrand_id)
                    console.log(productPrice)
                    console.log('test')
                }
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'productName': productName,
                        'newProductName': newProductName,
                        'productDesc': productDesc,
                        'productCategory_id': productCategory_id,
                        'productBrand_id': productBrand_id,
                        'productPrice': productPrice,

                    },
                    success: function(data) {
                        // alert('success')
                        $('#notif').text(data.msg)
                        $('#Notif').modal('show')
                        location.reload()
                    },
                    error: function() {
                        // alert('error')
                        $('#notif').text("Oops!!! There's something wrong with the system!!")
                        $('#Notif').modal('show')
                    }
                })
            })
        })
    </script>
@endsection
