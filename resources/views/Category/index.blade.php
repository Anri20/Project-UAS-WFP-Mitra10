@extends('layouts.template')

@section('css')
    <style>
        .parent {
            cursor: pointer;
        }

        table {
            border: black solid 1px;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex flex-row">
        <table border=1>
            <tbody>
                @foreach ($categories as $c)
                    <tr>
                        <th class="parent">{{ $c->nama }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody class="sub_categories">
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function displayProduct() {
            console.log('test')
        }
        
        $(document).ready(function() {

            $('.parent').click(function() {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('displayCategories') }}",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'parentKategori': $(this).text(),
                    },
                    success: function(data) {
                        // alert('success')
                        $('.sub_categories').html('')

                        let nama_count = 0
                        let row = ''
                        let row_count = 0
                        $.each(data.sub_categories, function(index, value) {
                            row +=
                                `<td style='width:33%; cursor: pointer;' onclick='displayProduct()'>${value.nama}</td>`
                            nama_count += 1

                            if (nama_count == 3 || value.nama == data.sub_categories[
                                    data.sub_categories.length - 1].nama) {
                                $('.sub_categories').append(
                                    `<tr style='padding: 5px;'>${row}</tr>`)
                                row = ''
                                nama_count = 0
                                row_count += 1
                            }

                            if (value.nama == data.sub_categories[data.sub_categories
                                    .length - 1].nama) {
                                // console.log('print row tambahan')
                                for (let i = 0; i < (12 - row_count); i++) {
                                    $('.sub_categories').append(
                                        `<tr><td style='padding: 17px;'></td></tr>`)
                                }
                            }
                        })
                    },
                    error: function() {
                        alert('error')
                    }
                })
            })
        })
    </script>
@endsection
