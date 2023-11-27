@extends('layouts.conquer')

@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection

@section('css')
    <style>
        input {
            width: 100%;
        }

        option:disabled {
            font-weight: bold;
            text-align: left;
        }
    </style>
@endsection

@section('content')
    <h3>Add New Product</h3>
    <form>
        @csrf
        <div class="form-group">
            <label for="parentCategory">Parent Kategori</label><br>
            <select name="parentCategory" id="parentCategory">
                <option value="-" selected disabled hidden>Choose Category</option>
                <option value="-" disabled>Main Category</option>
                @foreach ($main_categories as $mc)
                    <option value="{{ $mc->idcategories }}">&emsp;<span id="mc_text">{{ $mc->nama }}</span></option>
                @endforeach
                <option value="-" disabled>Sub Category</option>
                @foreach ($sub_categories as $sc)
                    <option value="{{ $sc->idcategories }}">&emsp;<span id="sc_text">{{ $sc->nama }}</span></option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="categoryName">Nama Kategori</label>
            <input type="text" id="categoryName" placeholder="Enter the new product name">
        </div>
        <button class="btn btn-primary" id="submit">Submit</button>
    </form>

    {{-- Modal --}}
    {{-- Modal Notif --}}
    <div class="modal fade" id="Notif" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="NotifLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="NotifLabel">Notification</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
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


    <script>
        $(document).ready(function() {
            $('#submit').click(function(e) {
                e.preventDefault();
                let parent_category_id = $("#parent_category option:selected").val();
                let category_name = $("#categoryName").val().trim();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('category.store') }}",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'parent_category_id': parent_category_id,
                        'category_name': category_name,
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
