@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('barangs.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BARANG</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th width="20%" scope="col">Gambar</th>
                                    <th width="20%" scope="col">Nama Produk</th>
                                    <th width="25%" scope="col">Deskripsi</th>
                                    <th width="20%" scope="col">Harga</th>
                                    <th width="15%" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($barang as $data)
                                    <tr class="text-center">
                                        <td class="text-center">
                                            <img src="{{ Storage::url('public/gambar/') . $data->image }}" class="rounded"
                                                style="width: 150px">
                                        </td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{!! $data->description !!}</td>
                                        <td>{{ $data->harga }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('barangs.destroy', $data->id) }}" method="POST">
                                                <a href="{{ route('barangs.edit', $data->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Barang belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $barang->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endsection
