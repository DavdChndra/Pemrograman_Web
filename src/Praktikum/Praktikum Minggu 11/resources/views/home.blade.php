@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="row align-items-center">
        
        <div class="col-lg-4 col-md-5 d-flex flex-column align-items-center text-center mb-5 mb-lg-0">
            
            <div class="mb-4">
                <img src="{{ asset('images/gambar.jpg') }}" alt="Gambar Profil David Chandra" class="img-fluid shadow-sm rounded-5" style="width: 250px; height: 250px; object-fit: cover; border: 2px solid var(--color-dark-slate);">
            </div>
            
            <div class="d-flex justify-content-center gap-3 w-100"> 
                <a href="/about" class="btn btn-outline-dark-slate py-2 px-4 rounded-pill fw-bold">About</a>
                <a href="/contact" class="btn btn-outline-dark-slate py-2 px-4 rounded-pill fw-bold">Contact</a>
            </div>
        </div>

        <div class="col-lg-8 col-md-7">
            
            <h2 class="text-dark-slate mb-3">Hai semua,</h2>
            
            <h1 class="display-4 fw-light mb-4">
                saya 
                <span class="fw-bold text-dark-slate py-2 px-4 rounded-pill shadow-sm d-inline-block mt-2" style="border: 2px solid var(--color-dark-slate);">
                    David Chandra
                </span>
            </h1>
            
            <p class="lead text-dark-slate opacity-75">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aliquid nemo corrupti magnam temporibus dicta! Architecto deleniti, dolor.
            </p>
            
            <div class="text-end"> 
                <a href="#" class="btn btn-dark-slate btn-lg mt-4 rounded-pill px-5">Lihat Portofolio</a>
            </div>
        </div>
    </div>
@endsection