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
                <a href="{{ route('pemesanan.laporan') }}" class="btn btn-success mb-3">Export Data</a>
                <table class="table" id="pemesananTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Pemesanan</th>
                            <th>Status Pembayaran</th>
                            <th>Total Harga</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $pesanan)
                            <tr>
                                <td>{{ $pesanan->id }}</td>
                                <td>{{ $pesanan->kode_pemesanan }}</td>
                                <td>{{ $pesanan->pembayaran->status_pembayaran }}</td>
                                <td>{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('pemesanan.edit', $pesanan->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
        $('#pemesananTable').DataTable();
    });
</script>
@endsection
