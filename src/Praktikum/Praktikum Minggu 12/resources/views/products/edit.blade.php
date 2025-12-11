@extends('layouts.tidakada_navbar')
@section('title', 'Edit Produk')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
        <h2 class="mb-4 text-dark-slate">Edit Produk: {{ $product->name }}</h2>

        <div class="card shadow border-0 bg-off-white">
            <div class="card-body p-4">

                <form method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="name" class="form-label text-slate">Nama Produk</label>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-control" 
                            id="name" 
                            value="{{ $product->name }}" 
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
                        >{{ $product->description }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label text-slate">Stok</label>
                            <input 
                                type="number" 
                                name="stock" 
                                class="form-control" 
                                id="stock" 
                                value="{{ $product->stock }}" 
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
                                value="{{ $product->price }}" 
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
                            <option value="" disabled 
                                @if ($product->toko == '') selected @endif>
                                Pilih asal toko/penjual
                            </option>
                            
                            <option value="toko_1" 
                                @if ($product->toko == 'toko_1') selected @endif>
                                Toko 1
                            </option>
                            
                            <option value="toko_2" 
                                @if ($product->toko == 'toko_2') selected @endif>
                                Toko 2
                            </option>
                            
                            <option value="toko_3" 
                                @if ($product->toko == 'toko_3') selected @endif>
                                Toko 3
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark-slate">
                        Update Produk
                    </button>
                </form>
            </div>
        </div>

        <a href="/" class="btn btn-outline-dark-slate mt-3">
            &larr; Kembali ke Daftar Produk
        </a>

    </div>
</div>

@endsection