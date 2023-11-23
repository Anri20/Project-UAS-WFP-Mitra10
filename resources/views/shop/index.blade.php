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
              <h2 class="my-4">Toko</h2>
            </div>

            <div class="text-center pt-3 pb-2">
                <td><a href="{{URL::to('/')}}/shop/create">
                    <i class="icon-book-open"></i>
                    add shop</a></td>
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
                                   @foreach($toko as $key => $row)
                                       <option value="{{ $row->idshopareas}}">{{ $row->nama_area}}</option>
                                   @endforeach
                               </select>
                           </div>\

                           <button type="submit" class="btn btn_primary">submit</button>
                       </form>

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

    <table class="table text-white mb-0">
        <thead>
          <tr>
            <th scope="col">Nama Toko</th>
            <th scope="col">Area Toko</th>
            <th scope="col">Nomor Whatsapp</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($toko as $show)
                <tr class="fw-normal">
                    <td class="align-middle">
                        <span>{{$show->nama_toko}}</span>
                    </td>
                    <td class="align-middle">
                         <h6 class="mb-0">{{$show->nama_area}}</h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{$show->nomor_whatsapp}}</h6>
                        </td>
                    <td class="align-middle">
                        <button type="button" class="btn btn-primary">Beli di sini</button>
                    </td>

                    <td><a href="#detail{{$show->idshops}}" class="btn btn-primary" data-toggle='modal'>detail toko</a></td>

                    <td>
                        <form method="POST" action="{{URL::to('/')}}/shop/{{$show->idshops}}" class="needs-validation" enctype="multipart/form-data">
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

      @foreach ($toko as $show)

        <div class="modal fade" id="detail{{$show->idshops}}"  tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">detail toko</h4>
                </div>
                <div class="modal-body">

                    <tr>
                        {{$show->nama_toko}}
                    </tr>
                    <tr>
                        {{$show->nama_area}}
                    </tr>
                    <tr>
                        {{$show->nomor_whatsapp}}
                    </tr>
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


