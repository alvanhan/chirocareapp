@extends('FrontEnd.layout.main')
@section('content')

<body class="main-layout inner_page">
    <div class="cases">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Form Pemesanan Layanan</h2>
                        <p>Silakan lengkapi form berikut untuk melakukan pemesanan layanan.</p>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class="container">
                    <form action="{{ route('sendpemabayaran.index') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_layanan" value="{{ $layanan->id }}">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" readonly class="form-control" id="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="no_telepon" value="{{ $user->no_telepon }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="alamat" value="{{ $user->alamat }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="usia" value="{{ $user->usia }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="jenis_kelamin" value="{{ $user->jenis_kelamin }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="berat_badan" value="{{ $user->berat_badan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="tinggi_badan" value="{{ $user->tinggi_badan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Layanan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="tinggi_badan" value="{{ $layanan->nama_layanan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required id="keluhan" name="keluhan" rows="4" placeholder="Deskripsikan keluhan Anda"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                            <div class="col-sm-10">
                                <select class="form-control" required id="metode_pembayaran" name="metode_pembayaran">
                                    <option value="tunai">Tunai</option>
                                    <option value="nontunai">Non Tunai / Transfer</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-danger">Pesan Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end cases -->
</body>
@endsection

@section('javascript')
@endsection
