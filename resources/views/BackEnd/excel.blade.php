<html>
<head>
    <title>Export Excel</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Pemesanan</th>
                <th>Status Pembayaran</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $pesanan)
                <tr>
                    <td>{{ $pesanan->id }}</td>
                    <td>{{ $pesanan->kode_pemesanan }}</td>
                    <td>{{ $pesanan->pembayaran->status_pembayaran }}</td>
                    <td>{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</html>
