@extends('layouts.conquer')

{{-- @section('tes')
<h2>our kategori
</h2>
<p>our kategory...
    <a href="#" onclick="showInfo()">
    <i class="icon-bulb"></i></a>
</p>
<div id="showinfo"></div>
@endsection

@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("products.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection --}}


@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-white">

            <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Product Stock</h2>
            </div>

            <div class="text-center pt-3 pb-2">
                <td><a href="{{URL::to('/')}}/productstock/create">
                    <i class="icon-book-open"></i>
                    add stock</a></td>
            </div>

            {{-- <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog modal-wide">
                   <div class="modal-content" id="showproducts">
                   </div>
                </div>
              </div> --}}


            <table class="table text-white mb-0">
              <thead>
                <tr>
                  <th scope="col">Nama Product</th>
                  <th scope="col">Shop</th>
                  <th scope="col">Category</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($toko as $show)
                      <tr class="fw-normal">
                          <td class="align-middle">
                              <span>{{$show->nama}}</span>
                          </td>
                          <td class="align-middle">
                               <h6 class="mb-0">{{$show->nama_toko}}</h6>
                          </td>
                          <td class="align-middle">
                              <h6 class="mb-0">{{$show->nama_kategori}}</h6>
                              </td>
                          <td class="align-middle">
                              <h6 class="mb-0">{{$show->nama_brand}}</h6>
                          </td>
                          <td class="align-middle">
                              <h6 class="mb-0">{{$show->stok}}</h6>
                          </td>

                          {{-- <td><a href="{{$show->product_id}}" class="btn btn-primary" data-toggle='modal'>delete</a></td>

                          <td><a href="#detail{{$show->product_id}}" class="btn btn-primary" data-toggle='modal'>detail</a></td> --}}

                          {{-- <td class="align-middle">
                              <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal'
                              onclick='showProducts({{ $show->idproducts }})'>
                              Detail</a>
                          </td> --}}
                      </tr>
                  @endforeach

              </tbody>
            </table>

            {{-- @foreach ($promos as $show)

        <div class="modal fade" id="detail{{$show->idpromos}}"  tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">detail stock</h4>
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
    @endforeach --}}


          </div>
        </div>

      </div>
    </div>
  </div>
  @endsection


