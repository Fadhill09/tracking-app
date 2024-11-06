<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tambah Barang</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')

</head>

<body class="index-page">

    @include('operasi.navbar')

    <main class="main">

        <div class="container mt-4 mb-4 col-lg-8 ">
            <h1 class="mb-4">Tambah Barang</h1>

            <form action="{{ route('store') }}" method="POST" class="p-4 border rounded shadow-sm">
                @csrf

                <h3 class="fw-bold mb-2">Bio Pengirim</h3>

                <div class="form-group">
                    <label for="nama_pengirim">Nama Pengirim:</label>
                    <input type="text" class="form-control border border-2" id="nama_pengirim" name="nama_pengirim" required>
                </div>

                <div class="form-group">
                    <label for="no_hp_pengirim">No HP Pengirim:</label>
                    <input type="text" class="form-control border border-2" id="no_hp_pengirim" name="no_hp_pengirim" required>
                </div>

                <div class="form-group">
                    <label for="alamat_pengirim">Alamat Pengirim:</label>
                    <textarea class="form-control border border-2" id="alamat_pengirim" name="alamat_pengirim" rows="3" required></textarea>
                </div>

                <h3 class="fw-bold mt-3 mb-2">Bio Penerima</h3>

                <div class="form-group">
                    <label for="nama_penerima">Nama Penerima:</label>
                    <input type="text" class="form-control border border-2" id="nama_penerima" name="nama_penerima" required>
                </div>

                <div class="form-group">
                    <label for="no_hp_penerima">No HP Penerima:</label>
                    <input type="text" class="form-control border border-2" id="no_hp_penerima" name="no_hp_penerima" required>
                </div>

                <div class="form-group">
                    <label for="alamat_penerima">Alamat Penerima:</label>
                    <textarea class="form-control border border-2" id="alamat_penerima" name="alamat_penerima" rows="3" required></textarea>
                </div>

                <h3 class="fw-bold mt-3 mb-2">Bio Barang</h3>

                <div class="form-group">
                    <label for="nama_barang">Jenis Barang:</label>
                    <input type="text" class="form-control border border-2" id="nama_barang" name="nama_barang" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang:</label>
                    <input type="number" class="form-control border border-2" id="jumlah_barang" name="jumlah_barang" required>
                </div>

                <div class="form-group">
                    <label>Jenis Pengiriman:</label>
                    <div class="d-flex mt-2">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="reguler" name="jenis_pengiriman"
                                value="reguler" required>
                            <label for="reguler" class="form-check-label">Reguler
                                <p>(Rp 10.000) 4 - 8 Hari</p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="cepat" name="jenis_pengiriman"
                                value="cepat" required>
                            <label for="cepat" class="form-check-label">Cepat
                                <p>(Rp 20.000) 1 - 3 Hari </p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pesan_pengirim">Pesan Pengirim:</label>
                    <textarea class="form-control border border-2" id="pesan_pengirim" name="pesan_pengirim" rows="3"></textarea>
                </div>

                <div class="d-flex  justify-content-between ">
                <button type="submit" class="btn btn-primary mt-2">Tambah Barang</button>
                <a href="{{ route('tampil') }}" class="btn btn-danger mt-2">Batal</a>
            </div>
            </form>
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
