@extends('BackEnd.layout.main')

@section('styles')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('jenis_layanan.create') }}" class="btn btn-success mb-3">Create New</a>
                <table class="table" id="jenisLayananTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Jenis Layanan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenisLayanans as $jenisLayanan)
                            <tr>
                                <td>{{ $jenisLayanan->id }}</td>
                                <td>{{ $jenisLayanan->nama_jenis_layanan }}</td>
                                <td>
                                    <a href="{{ route('jenis_layanan.edit', $jenisLayanan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('jenis_layanan.destroy', $jenisLayanan->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#jenisLayananTable').DataTable();
    });
</script>
@endsection
