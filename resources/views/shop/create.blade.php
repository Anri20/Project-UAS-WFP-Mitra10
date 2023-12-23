@extends('layouts.conquer')

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-white">

            <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Shop</h2>
            </div>

            <div class="text-center pt-3 pb-2">
                <td><a href="{{URL::to('/')}}/shop/create">
                    <i class="icon-book-open"></i>
                    add Shop</a></td>
              </div>
          </div>
        </div>

      </div>
    </div>
    <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">

        <form method="POST" action="{{URL::to('/')}}/shop" class="needs-validation" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
                <label for="inputpromos">Nama shop</label>
                <input type="text" name="namashop"
                class="form-control" id="namashop">
            </div>

            <div class="form-group">
                <label for="input">No Whatapp</label>
                <input type="text" name="nowhatapp"
                class="form-control" id="nowhatapp">
            </div>

            <div class="form-group">
                <label>daerah toko</label>

                <select name="shoparea" class="form-control" required>
                    @foreach($shoparea as $key => $row)
                        <option value="{{ $row->idshopareas}}">{{ $row->nama}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn_primary">submit</button>
        </form>

    </div>

  </div>

  @endsection
