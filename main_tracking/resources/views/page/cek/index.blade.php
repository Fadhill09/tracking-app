<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar Tracking Barang</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')

    <style>
        /* Style tambahan untuk efek hover pada card */
        .tracking-card {
            position: relative;
            transition: box-shadow 0.3s ease;
            padding: 1rem;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
        }

        /* Tabel data yang akan muncul hanya saat card di-hover */
        .tracking-data {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            z-index: 10;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            margin-top: 10px;
            border-radius: 8px;
        }

        /* Tampilkan tabel saat card di-hover */
        .tracking-card:hover .tracking-data {
            display: block;
        }
    </style>
</head>

<body class="index-page">

    @include('operasi.navbar')

    <main class="main">

        <div class="container mt-4">
            <h1 class="mb-4">Daftar Tracking Barang</h1>
            <a href="{{ route('create') }}" class="btn btn-primary mb-3">Tambah Tracking</a>

            <!-- Card untuk tracking barang -->
            <div class="tracking-card">
                <h5 class="card-title">Tracking Barang</h5>
                <p class="card-text">Arahkan kursor ke sini untuk melihat daftar tracking barang</p>

                <!-- Tabel yang akan muncul saat hover -->
                <div class="tracking-data">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Pengirim</th>
                                <th>No Pengirim</th>
                                <th>Penerima</th>
                                <th>No Penerima</th>
                                <th>Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Jenis Pengiriman</th>
                                <th>Biaya Pengiriman</th>
                                <th>Pesan Pengirim</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trackings as $tracking)
                                <tr>
                                    <td>{{ $tracking->nama_pengirim }}</td>
                                    <td>{{ $tracking->no_hp_pengirim }}</td>
                                    <td>{{ $tracking->nama_penerima }}</td>
                                    <td>{{ $tracking->no_hp_penerima }}</td>
                                    <td>{{ $tracking->nama_barang }}</td>
                                    <td>{{ $tracking->jumlah_barang }}</td>
                                    <td>{{ ucfirst($tracking->jenis_pengiriman) }}</td>
                                    <td>Rp {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }}</td>
                                    <td>{{ $tracking->pesan_pengirim }}</td>
                                    <td>
                                        <a href="{{ route('trackings.edit', $tracking) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <!-- Uncomment form untuk menghapus jika diperlukan -->
                                        <!--
                                        <form action="{{ route('trackings.destroy', $tracking) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                        -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    @include('operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('style.gaya')

</body>

</html>
