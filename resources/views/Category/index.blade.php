@extends('layouts.template')

@section('content')
    <div class="container d-flex flex-row">
        <table>
            <thead>
                @foreach ($parent_categories as $pc)
                    <tr>
                        <th class="parent">{{ $pc->nama }}</th>
                    </tr>
                @endforeach
            </thead>
        </table>
        <table>
            <tbody id="sub_categories">

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('.parent').hover(function() {
                $(this).css('cursor', 'pointer')
            })

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
                        console.log(data)

                    },
                    error: function() {
                        alert('error')
                    }
                })
            })
        })
    </script>
@endsection
