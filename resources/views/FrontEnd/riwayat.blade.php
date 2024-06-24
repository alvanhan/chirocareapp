@extends('FrontEnd.layout.main')
@section('content')
    <body class="main-layout">
        <div class="cases">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center ">
                            <h2>Riwayat Pemesanan Layanan Anda</h2>
                            <p>Berikut adalah riwayat pemesanan layanan yang telah Anda lakukan.</p>
                        </div>
                    </div>
                </div>
                <div class="row d_flex">
                    <div class="container">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kode Pemesanan</th>
                                    <th>Nama Layanan</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Total Harga</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pemesanan as $data)
                                <tr>
                                    <td>{{ $data->kode_pemesanan }}</td>
                                    <td>{{ $data->layanan->nama_layanan }}</td>
                                    <td>{{ $data->metode_pembayaran }}</td>
                                    <td>{{ $data->pembayaran->status_pembayaran }}</td>
                                    <td>Rp {{ number_format($data->total_harga, 0, ',', '.') }}</td>
                                    <td>
                                        @if (!empty($data->pembayaran->url_pembayaran) && $data->metode_pembayaran == 'nontunai')
                                            <a href="{{ $data->pembayaran->url_pembayaran }}" target="_blank" class="btn btn-success"><h5 class="text-white font-weight-bolder">Bayar</h5></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cases -->
    </body>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
@endsection
