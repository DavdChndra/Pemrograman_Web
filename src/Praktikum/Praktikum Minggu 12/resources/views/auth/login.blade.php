@extends('layouts.tidakada_navbar')
@section('title', 'Login')
@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 bg-off-white">
                <div class="card-body p-4 p-md-5">

                    <h2 class="card-title text-center mb-4 text-dark-slate">Masuk ke Akun</h2>

                    @if (session('error')) 
                        <div class="alert alert-danger text-center" role="alert">
                            {{ session('error') }}
                        </div> 
                    @endif
                    @if (session('success')) 
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('success') }}
                        </div> 
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label text-slate">Alamat Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control" 
                                id="email" 
                                placeholder="Masukkan email Anda" 
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
                                placeholder="Masukkan kata sandi" 
                                required
                            >
                        </div>
                        
                        <button type="submit" class="btn btn-dark-slate w-100 mb-3">
                            Login
                        </button>
                    </form>

                    <p class="text-center mt-3 text-dark-slate">
                        Belum punya akun? 
                        <a href="/register" class="text-decoration-none text-slate">Daftar Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection