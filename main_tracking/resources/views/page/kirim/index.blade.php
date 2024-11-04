
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
<body>



 <div class="container">
    <h2>Daftar Pembelian</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('tambah') }}" class="btn btn-primary">Tambah Pembelian</a>
    <table class="table">
        <thead>
            <tr>
                <th>Seri</th>
                <th>Nama Barang</th>
                <th>Alamat</th>
                <th>Harga</th>
                <th>Ongkir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelian as $item)
                <tr>
                    <td>{{ $item->seri }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->ongkir }}</td>
                    <td>
                        <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('destroy', $item->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 



</html>







