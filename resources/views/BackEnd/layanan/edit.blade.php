@extends('BackEnd.layout.main')

@section('content')
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('layanan.update', $service->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_layanan">Nama Layanan</label>
                        <input type="text" name="nama_layanan" class="form-control" id="nama_layanan" value="{{ $service->nama_layanan }}" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_layanan">Deskripsi Layanan</label>
                        <textarea name="deskripsi_layanan" class="form-control" id="deskripsi_layanan">{{ $service->deskripsi_layanan }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="harga_layanan">Harga Layanan</label>
                        <input type="number" name="harga_layanan" class="form-control" id="harga_layanan" value="{{ $service->harga_layanan }}">
                    </div>

                    <div class="form-group">
                        <label for="status_layanan">Status Layanan</label>
                        <select class="form-control" name="status_layanan" id="status_layanan">
                            <option value="active" {{ $service->status_layanan == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $service->status_layanan == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jenis_layanan">Jenis Layanan</label>
                        <select class="form-control" name="jenis_layanan" id="">
                            @foreach ($jenisLayanans as $jenisLayanan)
                                <option value="{{ $jenisLayanan->id }}" {{ $service->jenis_layanan == $jenisLayanan->id ? 'selected' : '' }}>{{ $jenisLayanan->nama_jenis_layanan }}</option>
                            @endforeach
                        </select>
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
