
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('style.gaya')

    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('operasi.navbar')

    <main class="main">
        <div class="container">
            <h2>Tambah Pembelian</h2>
       z
            <form action="{{ route('store') }}" method="post">
                @csrf
                {{-- <div class="form-group">
                    <label for="seri">Seri</label>
                    <input type="text" name="seri" id="seri" class="form-control" required>
                </div> --}}
                <div class="form-group">
                    <label for="nama_pengguna">Nama Pengguna</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Satuan</label>
                    <input type="number" name="harga" id="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="ongkir">Ongkir</label>
                    <text type="input" value="7000" name="ongkir" id="ongkir" class="form-control" required>7000
                </div> 
                <input type="submit" value="Simpan" class="btn btn-success">

            </form>
            <form action="{{route ('dasboard')}}" method="get">
                <input type="submit" value="Batal" class="btn btn-danger">
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


