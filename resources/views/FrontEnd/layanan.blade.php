@extends('FrontEnd.layout.main')
@section('content')

<body class="main-layout inner_page">
    <div class="cases">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Layanan Chiro Care</h2>
                        <p>Klinik Pelayanan Chiro Terapi menyediakan layanan yang holistik, menggabungkan metode
                            tradisional dan modern untuk memberikan perawatan yang efektif dan aman bagi pasien dari
                            berbagai usia.</p>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                @foreach($layanan as $data)
                <div class="col-md-2">
                    <div class="latest text_align_center">
                        {{-- <figure><img src="{{ asset('images/' . $layanan->foto_layanan) }}" alt="{{ $layanan->nama_layanan }}" /></figure> --}}
                        <div class="nostrud">
                            <h3>{{ $data->nama_layanan }}</h3>
                            <p>{{ Str::limit($data->deskripsi_layanan, 120) }}</p>
                            <p><strong>Harga: </strong>Rp {{ number_format($data->harga_layanan, 0, ',', '.') }}</p>
                            <a href="{{ route('prosespesan.index', $data->id) }}" class="btn btn-primary mb-5">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end cases -->
</body>
@include('FrontEnd.layout.footer')

@endsection

@section('javascript')
@endsection
