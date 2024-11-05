<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')


</head>

<body class="index-page">

    @include('operasi.navbar')

    <main class="main">

        <div class="container mt-4">
            <h1 class="mb-4">Daftar Tracking Barang</h1>
            <a href="{{ route('create') }}" class="btn btn-primary mb-3">Tambah Tracking</a>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Pengirim</th>
                        <th>No Pengirim</th>
                        <th>Penerima</th>
                        <th>No Penerima</th>
                        <th>Barang</th>
                        <th>jumlah Barang</th>
                        <th>Jenis Pengiriman</th>
                        <th>Biaya Pengiriman</th>
                        <th>Pesan Pengirim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trackings as $tracking)
                        <tr>
                            <td>{{ $tracking->nama_pengirim }} </td>
                            <td>{{ $tracking->no_hp_pengirim }}</td>
                            <td> {{ $tracking->no_hp_penerima }}</td>
                            <td>{{ $tracking->nama_penerima }}</td>
                            <td>{{ $tracking->nama_barang }}</td>
                            <td> ({{ $tracking->jumlah_barang }})</td>
                            <td>{{ ucfirst($tracking->jenis_pengiriman) }}</td>
                            <td>Rp {{ number_format($tracking->biaya_pengiriman, 0, ',', '.') }}</td>
                            <td>{{ $tracking->pesan_pengirim}}</td>
                            <td>
                                <a href="{{ route('trackings.edit', $tracking) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                {{-- <form action="{{ route('trackings.destroy', $tracking) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>

    @include('operasi.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('style.gaya')

</body>

</html>
