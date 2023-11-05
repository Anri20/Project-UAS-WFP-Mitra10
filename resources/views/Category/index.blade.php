@extends('layouts.template')

@section('content')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>
                        parent_categories
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parent_categories as $pc)
                    <tr>
                        <td class="parent">{{ $pc->nama }}</td>
                    </tr>
                @endforeach
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
                    },
                    success: function(data) {
                        // alert(data);
                        alert('success')
                    },
                    error: function() {
                        alert('error')
                    }
                })
            })
        })
    </script>
@endsection
