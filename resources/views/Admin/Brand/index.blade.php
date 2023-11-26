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

        input{
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <table border=1 class="table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Brand</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($brands as $b)
                <tr id="{{ $i }}">
                    <td class="id">{{ $i }}</td>
                    <td class="nama">{{ $b->nama }}</td>
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
                    <label for="brandNameUpdate">Nama Brand</label>
                    <input id="brandNameUpdate" type="text" value="">
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
            let newBrandName = ""
            let brandName = ""
            let checkType = ""
            let url = ""
            $('a').click(function() {
                // alert($(this).text())
                // console.log($(this).parent('td').attr('class').split(' ')[1])
                // console.log($(this).parent('td').parent('tr').children('td.nama').text())

                checkType = $(this).parent('td').attr('class').split(' ')[1]
                brandName = $(this).parent('td').parent('tr').children('td.nama').text()

                
                if (checkType == "edit") {
                    url = "{{ route('updateBrand') }}"

                    $('#brandNameUpdate').val(brandName)
                    $('#Edit').modal('show')
                } else if (checkType == "delete") {
                    url = "{{ route('deleteBrand') }}"

                    $('#confirm').text(`Are you sure you want to ${checkType} this data?`)
                    $('#Confirm').modal('show')
                }

                // console.log($url)
            })

            $('#cancel').click(function() {
                brandName = ""
            })

            $('.confirmation').click(function() {
                if (checkType == "edit"){
                    newBrandName = $("#brandNameUpdate").val()
                    // console.log($brandName)
                }
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'brandName': brandName,
                        'newBrandName': newBrandName,
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
