@extends('BackEnd.layout.main')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class=" card-body">
                <div class="">
                    <a href="{{ route('layanan.create') }}" class="btn btn-success mb-3">Create New Layanan</a>
                    <table id="servicesTable" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Layanan</th>
                                <th>Harga Layanan</th>
                                <th>Status Layanan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($layanan as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->nama_layanan }}</td>
                                    <td>{{ $service->harga_layanan }}</td>
                                    <td>{{ $service->status_layanan }}</td>
                                    <td>
                                        <a href="{{ route('layanan.edit', $service->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('layanan.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#servicesTable').DataTable();
    });
</script>
@endsection
