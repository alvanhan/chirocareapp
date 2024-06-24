@extends('BackEnd.layout.main')

@section('content')
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jenis_layanan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_jenis_layanan">Nama Jenis Layanan</label>
                        <input type="text" name="nama_jenis_layanan" class="form-control" id="nama_jenis_layanan" required>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@section('scripts')
@endsection
