@extends('layouts.conquer')

@section('cdn')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection

@section('css')
    <style>
        input {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <h3>Add New Brand</h3>
    <form>
        @csrf
        <div class="form-group">
            <label for="brandName">Nama Brand</label>
            <input type="text" id="brandName" placeholder="Enter the new product name">
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
                let brand_name = $("#brandName").val().trim();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('brand.store') }}",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'brand_name': brand_name,
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
