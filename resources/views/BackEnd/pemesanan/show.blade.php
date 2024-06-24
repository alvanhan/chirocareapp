@extends('BackEnd.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pemesanan.update',$pemesanan->id) }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="no_telepon" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="no_telepon"
                                    value="{{ $pemesanan->user->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telepon" class="col-sm-2 col-form-label">Layanan di Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="no_telepon"
                                    value="{{ $pemesanan->layanan->nama_layanan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="no_telepon"
                                    value="{{ $pemesanan->user->no_telepon }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="alamat"
                                    value="{{ $pemesanan->user->alamat }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="usia"
                                    value="{{ $pemesanan->user->usia }} Tahun">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="jenis_kelamin"
                                    value="{{ $pemesanan->user->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="berat_badan"
                                    value="{{ $pemesanan->user->berat_badan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="tinggi_badan"
                                    value="{{ $pemesanan->user->tinggi_badan }} cm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required readonly disabled id="keluhan" name="keluhan" rows="4"
                                    placeholder="Deskripsikan keluhan Anda">
                                    {!! $pemesanan->keluhan !!}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" required id="tinggi_badan"
                                    value="{{ $pemesanan->pembayaran->status_pembayaran }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_layanan" class="col-sm-2 col-form-label"><b>Update Status Pembayaran</b></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status_pembarayan" id="">
                                    <option value="belum dibayar"
                                        {{ $pemesanan->pembayaran->status_pembayaran == 'belum dibayar' ? 'selected' : '' }}>
                                        Belum Bayar</option>
                                    <option value="pending"
                                        {{ $pemesanan->pembayaran->status_pembayaran == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="success"
                                        {{ $pemesanan->pembayaran->status_pembayaran == 'success' ? 'selected' : '' }}>
                                        Sudah Bayar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <span><b>Total Pembayaran di terima : {{  number_format($pemesanan->pembayaran->pembayaran_diterima, 0, ',', '.')  }}</b></span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
