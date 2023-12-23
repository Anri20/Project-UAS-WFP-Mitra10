{{-- <html>
    <head>
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
        rel="stylesheet"
        />
        <style>
            .gradient-custom-2 {
            /* fallback for old browsers */
            background: #7e40f6;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );
            }

            .mask-custom {
            background: rgba(24, 24, 16, 0.2);
            border-radius: 2em;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
            }
        </style>
    </head>
    <body>
        <section class="vh-100 gradient-custom-2">
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



                    </div>
                  </div>

                </div>
              </div>
              <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">
                @foreach ($promos as $show)
                    <div class="col" style="padding:10px;">
                        <div class="card">
                            <img width="100" src="{{asset('image/'.$show->gambar)}}" class="card-img-top" alt="Fissure in Sandstone"/>
                            <div class="card-body">
                            <h5 class="card-title">{{$show->nama}} ({{$show->diskon}}%)</h5>
                            <p class="card-text">{{$show->deskripsi}}</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>

                @endforeach
              </div>
            </div>

          </section>
          <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    </body>
</html> --}}

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
                            <td><a href="{{ URL::to('/') }}/promos/create" class="btn btn-primary" data-toggle='modal'>
                                tambah promos +
                                    {{-- <i class="icon-book-open"></i>
                                    add promos --}}

                                </a></td>
                        </div>

                        {{-- <div class="text-center pt-3 pb-2">
                            <td><a href="#promoscreate" class="btn btn-primary" data-toggle='modal'>tambah promos +</a></td>
                        </div>

                        <div class="modal fade" id="promoscreate" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true"></button>
                                        <h4 class="modal-title">Add New promos</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form method="POST" action="{{ URL::to('/') }}/promos" class="needs-validation"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputpromos">Nama Promos</label>
                                                <input type="text" name="nama" class="form-control" id="nama">
                                            </div>

                                            <div class="form-group">
                                                <label for="input">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                                            </div>

                                            <div class="form-group">
                                                <label for="input">Kode</label>
                                                <input type="text" name="kode" class="form-control" id="kode">
                                            </div>

                                            <div class="form-group">
                                                <label for="input">Diskon</label>
                                                <input type="text" name="diskon" class="form-control" id="diskon">
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="foto1" id="foto1" class="form-control" required>
                                        <p style="color:red">*File wajib jpg dan maksimal size 1 Mb</p>
                                    </div>

                                    <button type="submit" class="btn btn_primary">submit</button>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>

        </div>
    </div>

    <table class="table text-white mb-0">
        <thead>
            <tr>
                <th scope="col">Nama promos</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kode</th>
                <th scope="col">Diskon</th>
                <th scope="col">Gambar</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promos as $show)
                <tr class="fw-normal">
                    <td class="align-middle">
                        <span>{{ $show->nama }}</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $show->deskripsi }}</h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $show->kode }}</h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $show->diskon }}</h6>
                    </td>
                    <td class="align-middle">
                        <img height="100px" src="{{ $show->gambar }}" />
                    </td>


                    <td><a href="#detail{{ $show->idpromos }}" class="btn btn-primary" data-toggle='modal'>detail Promos</a>
                    </td>

                    <td><a href="#update{{ $show->idpromos }}" class="btn btn-primary" data-toggle='modal'>Update Promos</a>
                    </td>

                    <td>
                        <form method="POST" action="{{ URL::to('/') }}/promos/{{ $show->idpromos }}"
                            class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="hapus" class="btn btn-danger"
                                onclick= "return confirm('anda yakin ingin mengapus data ini')">
                        </form>
                    </td>

                    </td>
                    </form>

                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($promos as $show)
        <div class="modal fade" id="detail{{ $show->idpromos }}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">detail promos</h4>
                    </div>
                    <div class="modal-body">

                        <tr>
                            <img height="100px" src="{{ $show->gambar }}" />
                        </tr>
                        <tr>
                            {{ $show->nama }}
                        </tr>
                        <tr>
                            {{ $show->deskripsi }}
                        </tr>
                        <tr>
                            {{ $show->diskon }}
                        </tr>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($promos as $show)
        <div class="modal fade" id="update{{ $show->idpromos }}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" id="#update" method="POST" action="/promos/{{ $show->idpromos }}"
                    class="needs-validation" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">update promos</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <img height="100px" src="{{ $show->gambar }}" />
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto1" id="foto1" class="form-control" >
                            <p style="color:red">*File wajib jpg dan maksimal size 1 Mb</p>
                        </div>
                        <div class="form-group">
                            <label for="inputpromos">Nama promos</label>
                            <input type="text" name="namapromos" value="{{ $show->nama }}" class="form-control"
                                id="namapromos">
                        </div>

                        <div class="form-group">
                            <label for="inputpromos">Diskon</label>
                            <input type="text" name="diskon" value="{{ $show->diskon }}" class="form-control"
                                id="diskon">
                        </div>

                        <div class="form-group">
                            <label for="inputpromos">deskripsi</label>
                            <input type="text" name="deskripsi" value="{{ $show->deskripsi }}" class="form-control"
                                id="deskripsi">
                        </div>

                        <div class="form-group">
                            <label for="inputpromos">kode</label>
                            <input type="text" name="kode" value="{{ $show->kode }}" class="form-control"
                                id="kode">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    </div>

    </div>
@endsection
