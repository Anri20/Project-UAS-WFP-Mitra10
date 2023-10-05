<html>
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
                        <h2 class="my-4">Laporan Pembelian terbanyak</h2>
                      </div>

                      <table class="table text-white mb-0">
                        <thead>
                          <tr>
                            <th scope="col">id pelanggan</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlaj</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $show)
                                <tr class="fw-normal">
                                    <td class="align-middle">
                                        <span>{{$show->idcustomers}}</span>
                                    </td>
                                    <td class="align-middle">
                                         <h6 class="mb-0">{{$show->nama_depan}}</h6>
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0">{{number_format($show->total,3)}}</h6>
                                        </td>

                                </tr>
                            @endforeach
                        </tbody>
                      </table>


                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>
          <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    </body>
</html>


