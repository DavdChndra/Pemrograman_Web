@extends('layouts.main')
@section('title', 'Daftar Produk')
@section('content')

<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-dark-slate mb-0">Daftar Produk</h2>
        
        <p>Selamat datang kembali, {{ auth()->user()->name }}!</p>
    </div>

    @if (session('success')) 
        <div class="alert alert-success text-center mb-4" role="alert">
            {{ session('success') }}
        </div> 
    @endif
    
    <div class="mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-dark-slate">
            + Tambah Produk Baru
        </a>
    </div>

    <div class="card shadow border-0 bg-off-white">
        <div class="card-body p-0">
            <div class="table-responsive rounded">
                <table class="table table-striped table-hover mb-0">
                    <thead class="bg-slate text-white">
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Stok</th>
                            <th>Harga</th>
                            <th>Toko</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                        <tr>
                            <td class="text-dark-slate">{{ $p->name }}</td>
                            <td class="text-slate">{{ Str::limit($p->description, 50) }}</td>
                            <td class="text-center text-dark-slate">{{ $p->stock }}</td>
                            <td class="text-dark-slate">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                            <td class="text-slate">{{ $p->toko }}</td>
                            <td class="text-center d-flex gap-2 justify-content-center">
                                <a href="/products/{{ $p->id }}/edit" class="btn btn-sm btn-slate">
                                    Edit
                                </a>

                                <form action="/products/{{ $p->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @if ($products->isEmpty())
                <p class="text-center p-4 text-slate">Belum ada produk yang tersedia.</p>
            @endif
            
        </div>
    </div>
</div>

@endsection