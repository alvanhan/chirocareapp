@extends('FrontEnd.layout.main')
@section('content')

    <body class="main-layout inner_page">
        <div class="cases">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center">
                            <h2>Kode Pemesanan Layanan</h2>
                            <p>Silakan tunjukan kode ini ke bagian resepsionis untuk emlakukan pembayaran layanan</p>
                        </div>
                    </div>
                </div>
                <div class="row d_flex">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-danger"><h1 class="text-white font-weight-bolder">{{ $pembayaran->pemesanan->kode_pemesanan }}</h1></a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Dipesan pada {{ $pembayaran->pemesanan->created_at }} oleh {{ $pembayaran->pemesanan->user->name }} <br> <br>
                                        <a href="{{ route('content.riwayat') }}" class="btn btn-success"><h5 class="text-white font-weight-bolder">Lihat riwayat pemesanan</h5></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cases -->
    </body>
@endsection

@section('javascript')
@endsection
