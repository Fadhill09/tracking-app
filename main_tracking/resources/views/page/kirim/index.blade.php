@extends('page.kirim.layout')
@section('content')

<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-white bg-success">
                    <h2 class="mb-0">Kirim Barang</h2>
                </div>
                <div class="card-body">
                    <!-- Form Pencarian -->
                    <form action="{{ url('/kirim') }}" method="GET" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="search_id" class="form-control" placeholder="Cari berdasarkan ID" required>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>

                    <a href="{{ url('/kirim/create') }}" class="btn btn-light btn-sm mb-3" title="Add New Kirim">
                        <i class="fa fa-plus"></i> Tambah Barang
                    </a>

                    <!-- Tabel Kirim -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="table-success">
                                    <th>ID</th>
                                    <th>Nama Barang</th>
                                    <th>Seri</th>
                                    <th>Alamat</th>
                                    <th>Harga</th>
                                    <th>Ongkir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($kirim->isEmpty())
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data yang ditemukan.</td>
                                    </tr>
                                @else
                                    @foreach($kirim as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->seri }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>Rp. {{ number_format($item->harga, 2, ',', '.') }}</td>
                                            <td>Rp. {{ number_format($item->ongkir, 2, ',', '.') }}</td>
                                            <td>
                                                <a href="{{ url('/kirim/' . $item->id) }}" class="btn btn-info btn-sm" title="View Kirim">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> Lihat
                                                </a>
                                                <a href="{{ url('/kirim/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit Kirim">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </a>
                                                <form method="POST" action="{{ url('/kirim' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Kirim" onclick="return confirm('Confirm delete?')">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
