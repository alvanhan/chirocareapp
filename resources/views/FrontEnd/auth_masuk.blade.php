@extends('FrontEnd.layout.main')
@section('css')
@endsection
@section('content')
    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8">
                <div class="py-5 text-center">
                    <h2>MASUK</h2>
                </div>
                <div class="col-md-8 mx-auto">
                    <form class="needs-validation py-5" method="POST" action="{{ route('auth.login_post') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="address">Password</label>
                            <input type="password" class="form-control" name="password" placeholder=""
                                required>
                        </div>
                        <button class="btn btn-danger btn-lg btn-block" type="submit">MASUK</button>
                        <span>Tidak punya akun? <a href="{{ route('auth.register') }}" class="text-danger">Daftar</a></span>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
@section('javascript')
@endsection
