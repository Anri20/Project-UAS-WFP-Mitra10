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
              <h2 class="my-4">Promos</h2>
            </div>

            <div class="text-center pt-3 pb-2">
                <td><a href="{{URL::to('/')}}/promos/create">
                    <i class="icon-book-open"></i>
                    add promos</a></td>
            </div>

            <div class="text-center pt-3 pb-2">
                <td><a href="#promoscreate" class="btn btn-primary" data-toggle='modal'>tambah promos +</a></td>
            </div>

            <div class="modal fade" id="promoscreate" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" >
                    <div class="modal-header">
                      <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title">Add New promos</h4>
                    </div>
                    <div class="modal-body">

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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


          </div>
        </div>

      </div>
    </div>
    <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">

        <table class="table text-white mb-0">
            <thead>
              <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama promo</th>
                <th scope="col">diskon</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($promos as $show)
                <tr>

                    <td><img width="100" src="{{asset($show->gambar)}}" class="card-img-top" alt="Fissure in Sandstone"/></td>
                    <td>{{$show->nama}}</td>
                    <td>{{$show->diskon}}%</td>
                    <td><a href="#detail{{$show->idpromos}}" class="btn btn-primary" data-toggle='modal'>detail</a></td>

                    <td><a href="#update{{$show->idpromos}}" class="btn btn-primary" data-toggle='modal'>ubah data</a></td>

                    <td>
                        <form method="POST" action="{{URL::to('/')}}/promos/{{$show->idpromos}}" class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="hapus" class="btn btn-danger"
                            onclick= "return confirm('anda yakin ingin mengapus data ini')">
                        </form>
                    </td>
                </form>

                </tr>
               @endforeach
            </tbody>
        </table>


    </div>
    @foreach ($promos as $show)

        <div class="modal fade" id="update{{$show->idpromos}}"  tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Ubah data</h4>
                </div>
                <div class="modal-body">
                    <img width="100" src="{{asset($show->gambar)}}" class="card-img-top" alt="Fissure in Sandstone"/>
                    {{$show->deskripsi}}

                    <form method="POST" action="{{URL::to('/')}}/promos/{{$show->idpromos}}" class="needs-validation" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       <div class="form-group">
                           <label for="inputpromos">Nama promos</label>
                           <input value="{{$show->nama}}" type="text" name="namapromos"
                           class="form-control" id="namapromos">
                       </div>

                       <div class="form-group">
                           <label for="input">deskripsi</label>
                           <input value="{{$show->deskripsi}}" type="text" name="deskripsi"
                           class="form-control" id="deskripsi">
                       </div>

                       <div class="form-group">
                           <label for="input">Kode</label>
                           <input value="{{$show->kode}}" type="text" name="kode"
                           class="form-control" id="kode">
                       </div>

                       <div class="form-group">
                           <label for="input">diskon</label>
                           <input value="{{$show->diskon}}" type="text" name="diskon"
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
                <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        </div>
    @endforeach

    @foreach ($promos as $show)

        <div class="modal fade" id="detail{{$show->idpromos}}"  tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">detail promos</h4>
                </div>
                <div class="modal-body">
                    Promos

                    <img width="100" src="{{asset($show->gambar)}}" class="card-img-top" alt="Fissure in Sandstone"/>
                    {{$show->deskripsi}}

                </div>
                <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        </div>
    @endforeach

  </div>

  @endsection




