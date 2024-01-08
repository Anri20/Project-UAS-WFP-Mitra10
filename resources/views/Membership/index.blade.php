@extends('layouts.template')
{{-- @extends('layout.conquer') --}}

@section('title')
<title>Home</title>
@endsection

@section('content')
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row" >
                    <h1>list Members</h1>
                    <table class="table text-black mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Whatsapp</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $show)
                                <tr class="fw-normal">
                                    <td class="align-middle">
                                        <span>{{$show->nama_depan}} {{$show->nama_belakang}}</span>
                                    </td>
                                    <td class="align-middle">
                                         <h6 class="mb-0">{{$show->email}}</h6>
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0">{{$show->nomor_whatsapp}}</h6>
                                        </td>
                                    {{-- <td class="align-middle">
                                        <button type="button" class="btn btn-primary">Beli di sini</button>
                                    </td> --}}

                                    <td><a href="{{URL::to('/')}}/detailmembership/{{$show->idcustomers}}" class="btn btn-primary">Detail Belanja</a></td>

                                    {{-- <td>
                                        <form method="POST" action="{{URL::to('/')}}/shop/{{$show->idshops}}" class="needs-validation" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="hapus" class="btn btn-danger"
                                            onclick= "return confirm('anda yakin ingin mengapus data ini')">
                                        </form>
                                    </td> --}}

                                </td>
                            </form>

                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

    </main>


@endsection
