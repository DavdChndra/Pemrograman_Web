@extends('layouts.main')
@section('title', 'Tambah Produk')
@section('content')

<div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">

            <h2 class="mb-4 text-dark-slate">Tambah Produk Baru</h2>

            <div class="card shadow border-0 bg-off-white">
                <div class="card-body p-4">

                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label text-slate">Nama Produk</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control" 
                                id="name" 
                                placeholder="Masukkan nama produk" 
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label text-slate">Deskripsi</label>
                            <textarea 
                                name="description" 
                                class="form-control" 
                                id="description" 
                                rows="3" 
                                placeholder="Jelaskan detail produk"
                            ></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label text-slate">Stok</label>
                                <input 
                                    type="number" 
                                    name="stock" 
                                    class="form-control" 
                                    id="stock" 
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label text-slate">Harga (Rp)</label>
                                <input 
                                    type="number" 
                                    name="price" 
                                    class="form-control" 
                                    id="price" 
                                    step="0.01" 
                                    required
                                >
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="toko" class="form-label text-slate">Nama Toko</label>
                            <select 
                                name="toko" 
                                class="form-select" 
                                id="toko"
                            >
                                <option value="" disabled selected>Pilih asal toko/penjual</option>
                                <option value="toko_1">Toko 1</option>
                                <option value="toko_2">Toko 2</option>
                                <option value="toko_3">Toko 3</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark-slate">
                            Simpan Produk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection