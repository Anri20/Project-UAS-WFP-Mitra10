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

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            grid-auto-rows: auto;
        }

        .grid-container-child {
            display: grid;
            grid-template-columns: auto;
            grid-auto-rows: auto;
        }

        .grid-item {}
    </style>
@endsection

@section('content')
    <div class="container d-flex flex-row">
        <table border=1>
            <tbody>
                @foreach ($categories as $c)
                    <tr>
                        <th>
                            <span class="parent">{{ $c->nama }}</span>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="grid-container sub_categories" style="width: 100%; border: solid black 1px;">

        </div>
    </div>

    <div class="grid-container">

    </div>

    <script>
        function displayProduct(category, type) {
            localStorage.setItem('category', category)
            localStorage.setItem('type', type)
            window.location = "{{ route('home.index') }}"
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
                        console.log(data)

                        let child_categories = ''
                        $.each(data.sub_categories, function(sub_index, sub_value) {
                            $.each(data.child_categories, function(child_index,
                                child_value) {
                                if (sub_value.nama == child_value
                                    .sub_categories) {
                                    child_categories += `
                                    <div class='grid-item' style='font-size: 12px; cursor: pointer;''>
                                        <span onclick='displayProduct(this.innerHTML, 2)'>${(child_value.child_categories != null) ? child_value.child_categories : ''}</span>
                                    </div>`
                                }
                            })

                            $('.sub_categories').append(`
                            <div class='grid-item' style='cursor: pointer;'>
                                <span onclick='displayProduct(this.innerHTML, 1)'>${sub_value.nama}</span>
                                <div class='grid-container-child'>
                                    ${child_categories}
                                </div>
                            </div>`)

                            child_categories = ''
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
