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
              <h2 class="my-4">Promos</h2>
            </div>

            <div class="text-center pt-3 pb-2">
                <td><a href="{{URL::to('/')}}/promos/create">
                    <i class="icon-book-open"></i>
                    add promos</a></td>
              </div>
          </div>
        </div>

      </div>
    </div>
    <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">

        <form method="POST" action="{{URL::to('/')}}/promos" class="needs-validation" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
                <label for="inputpromos">Nama promos</label>
                <input type="text" name="namapromos"
                class="form-control" id="namapromos">
            </div>

            <div class="form-group">
                <label for="input">deskripsi</label>
                <input type="text" name="deskripsi"
                class="form-control" id="deskripsi">
            </div>

            <div class="form-group">
                <label for="input">Kode</label>
                <input type="text" name="kode"
                class="form-control" id="kode">
            </div>

            <div class="form-group">
                <label for="input">diskon</label>
                <input type="text" name="diskon"
                class="form-control" id="diskon">
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto1" id="foto1" class="form-control" required>
                <p style="color:red">*File wajib jpg dan maksimal size 1 Mb</p>
            </div>

            <button type="submit" class="btn btn_primary">submit</button>
        </form>

    </div>

  </div>

  @endsection
