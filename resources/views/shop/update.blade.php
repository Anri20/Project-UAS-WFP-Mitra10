@extends('Week6.layouts.conquer')

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-white">

            <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Update shop</h2>
            </div>

          </div>
        </div>

      </div>
    </div>
    <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">

        <table class="table text-white mb-0">
            <thead>
              <tr>
                <th scope="col">Nama toko</th>
                <th scope="col">No Whatapp</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($promos as $show)
                <tr>

                    <td>{{$show->nama}}</td>
                    <td>{{$show->diskon}}%</td>
                    <td><a href="#{{route('shop.update, $show->idshops')}}" class="btn btn-primary" data-toggle='modal'>update</a></td>

             </tr>
               @endforeach
            </tbody>
        </table>


    </div>
    @foreach ($promos as $show)

        <div class="modal fade" id="{{$show->idpromos}}"  tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">update shop</h4>
                </div>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        </div>
    @endforeach

  </div>

  @endsection




