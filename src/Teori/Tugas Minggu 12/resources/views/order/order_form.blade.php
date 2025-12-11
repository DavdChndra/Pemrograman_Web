@extends('layouts.app')
@section('title', 'Pemesanan Buku')
@section('content')
<div class="row justify-content-center py-5">
    <div class="col-md-9 col-lg-7">

        <div class="card shadow border-0 rounded-4 overflow-hidden">

            <div class="card-header bg-dark-slate py-4 rounded-top-4">
                <h2 class="h4 mb-0 text-white text-center fw-bold">
                    <i class="bi bi-book-half me-2"></i> Formulir Pemesanan Buku
                </h2>
                <p class="text-center text-light-gray mb-0 mt-2">Isi detail pesanan Anda di bawah ini.</p>
            </div>

            <div class="card-body bg-body p-5">

                <form method="POST" action="{{ route('order.submit') }}">
                    @csrf

                    <h5 class="mb-3 text-dark-slate border-bottom pb-2">1. Informasi Pelanggan</h5>
                    
                    {{-- Nama Pemesan --}}
                    <div class="mb-3">
                        <label for="name" class="form-label text-slate">Nama Pemesan <span class="text-danger">*</span></label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="form-control rounded-3 border-slate @error('name') is-invalid @enderror" 
                            value="{{ old('name') }}" 
                            placeholder="Contoh: Budi Santoso"
                            required
                        >
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <h5 class="mb-3 mt-4 text-dark-slate border-bottom pb-2">2. Detail Pesanan</h5>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="book_id" class="form-label text-slate">Pilih Buku <span class="text-danger">*</span></label>
                            <select 
                                name="book_id" 
                                id="book_id" 
                                class="form-select rounded-3 border-slate @error('book_id') is-invalid @enderror"
                                required
                            >
                                <option value="" disabled selected class="text-slate">-- Pilih Buku --</option>
                                @foreach($books as $book)
                                <option 
                                    value="{{ $book['id'] }}" 
                                    {{ old('book_id') == $book['id'] ? 'selected' : '' }}
                                    {{ $book['stock'] <= 0 ? 'disabled' : '' }}
                                    class="{{ $book['stock'] <= 0 ? 'text-slate' : 'text-dark-slate' }}"
                                >
                                    {{ $book['title'] }} (Stok: {{ $book['stock'] }})
                                </option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="quantity" class="form-label text-slate">Jumlah <span class="text-danger">*</span></label>
                            <input 
                                type="number" 
                                name="quantity" 
                                id="quantity" 
                                class="form-control rounded-3 border-slate @error('quantity') is-invalid @enderror" 
                                value="{{ old('quantity', 1) }}" 
                                required 
                                min="1"
                                placeholder="Min 1"
                            >
                            @error('quantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <hr class="my-4 border-slate">

                    {{-- Button: Tombol utama menggunakan kelas btn-dark-slate --}}
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark-slate btn-lg rounded-pill fw-bold py-2">
                            <i class="bi bi-cart-check-fill me-2"></i> Proses Pesanan
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('tracking.do') }}" class="text-slate text-decoration-none small">
                            Lihat Status Pesanan Saya
                        </a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection