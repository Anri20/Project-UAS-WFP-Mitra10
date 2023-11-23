@extends('Week6.layouts.conquer')

@section('content')
    <h2>Category</h2>
    <div class="text-center pt-3 pb-2">
        <td><a href="{{URL::to('/')}}/category/create">
            <i class="icon-book-open"></i>
            add stock</a></td>
    </div>
    <p>All available Categories!!</p>
    <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>

    <table class="table text-white mb-0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Parent Category</th>
                <th scope="col">All Category Product Average Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr class="fw-normal">
                    <td class="align-middle">
                        <span>{{ $c->idcategories }}</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">{{ $c->nama }}</h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">
                            {{ $c->parent_category == '' ? $c->parent_category : $c->parent_category->nama }}
                        </h6>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0">
                            Rp.{{ number_format($c->avgHarga, 2) }}
                        </h6>
                    </td>
                    <td>
                        <a class="btn btn-default"  href="#showphoto_{{$c->id}}" 
                            data-toggle="modal">show photo
                        </a>
                          <div class="modal fade" id="detail_{{$c->id}}" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h4 class="modal-title">{{$c->nama_produk}}</h4>
                                  </div>
                                  <div class="modal-body">
                                     <img src='image/{{ $c->id }}.png' height='200px' />
                                  </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                               </div>
                            </div>
                          </div>

                    </td>
                </tr>
            @endforeach

            <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">DISCLAIMER</h4>
                      </div>
                      <div class="modal-body">
                        Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement. 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                 </div>
              </div>

        </tbody>
    </table>
@endsection
