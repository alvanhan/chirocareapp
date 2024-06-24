@extends('BackEnd.layout.main')

@section('content')
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('layanan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_layanan">Nama Layanan</label>
                        <input type="text" name="nama_layanan" class="form-control" id="nama_layanan" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_layanan">Deskripsi Layanan</label>
                        <textarea name="deskripsi_layanan" class="form-control" id="deskripsi_layanan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga_layanan">Harga Layanan</label>
                        <input type="number" name="harga_layanan" class="form-control" id="harga_layanan">
                    </div>
                    <div class="form-group">
                        <label for="status_layanan">Status Layanan</label>
                        <select class="form-control" name="status_layanan" id="">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_layanan">Jenis Layanan</label>
                        <select class="form-control" name="jenis_layanan" id="">
                            @foreach ($jenisLayanans as $jenisLayanan)
                                <option value="{{ $jenisLayanan->id }}">{{ $jenisLayanan->nama_jenis_layanan }}</option>
                            @endforeach
                        </select>
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
