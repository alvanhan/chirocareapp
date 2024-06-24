@extends('FrontEnd.layout.main')
@section('css')
@endsection
@section('content')
    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8 mt-0">
                <div class="py-1 text-center">
                    <h2>DAFTAR AKUN</h2>
                </div>
                <div class="col-md-8 mx-auto">
                    <form class="needs-validation py-1" method="POST" action="{{ route('auth.register_post') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="firstName">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="" name="name"
                                    value="" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" required name="email" id="email" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="address">Password</label>
                            <input type="password" class="form-control" required name="password" placeholder=""
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="address">Alamat Lengkap</label>
                            <input type="text" class="form-control" required name="alamat" placeholder=""
                                required>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="country">Jenis Kelamin</label>
                                <select class="custom-select d-block w-100" required  name="jenis_kelamin" id="country" required>
                                    <option selected disabled >Pilih...</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">No Telepon</label>
                            <input type="number" class="form-control" required name="no_telepon" placeholder=""
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="address">Berat Badan</label>
                            <input type="number" class="form-control" required name="berat_badan" placeholder=""
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="address">Tinggi Badan</label>
                            <input type="number" class="form-control" required name="tinggi_badan" placeholder=""
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="address">Usia</label>
                            <input type="number" required class="form-control" required name="usia" placeholder=""
                                required>
                        </div>

                        <button class="btn btn-danger btn-lg btn-block" type="submit">DAFTAR AKUN</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
@section('javascript')
@endsection
