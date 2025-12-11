@extends('layouts.tidakada_navbar')
@section('title', 'Register')
@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow-lg border-0 bg-off-white">
                <div class="card-body p-4 p-md-5">

                    <h2 class="card-title text-center mb-4 text-dark-slate">Buat Akun Baru</h2>

                    @if (session('success')) 
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('success') }}
                        </div> 
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label text-slate">Nama Lengkap</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control" 
                                id="name" 
                                placeholder="Masukkan nama lengkap Anda" 
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-slate">Alamat Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control" 
                                id="email" 
                                placeholder="Masukkan email yang valid" 
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-slate">Kata Sandi</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                id="password" 
                                placeholder="Minimal 8 karakter" 
                                required
                            >
                        </div>
                        
                        <button type="submit" class="btn btn-dark-slate w-100 mb-3">
                            Register
                        </button>
                    </form>

                    <p class="text-center mt-3 text-dark-slate">
                        Sudah punya akun? 
                        <a href="/login" class="text-decoration-none text-slate">Masuk di sini</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection