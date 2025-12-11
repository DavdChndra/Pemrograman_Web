@extends('layouts.main')
@section('title', 'About')
@section('content')

<section> 
    
    <div class="row align-items-center g-5"> 
        <div class="col-lg-4 col-md-4 d-flex justify-content-center">
            <img src="{{ asset('images/gambar2.jpg') }}" 
                 alt="Foto Profil David Chandra" 
                 class="img-fluid shadow-sm rounded-circle" 
                 style="width: 280px; height: 280px; object-fit: cover; border: 5px solid var(--color-dark-slate);"> 
        </div>
        
        <div class="col-lg-8 col-md-8">
            
            <h4 class="text-dark-slate mb-4 opacity-75">Halo, senang berkenalan!</h4>

            <h1 class="display-5 fw-bold mb-4">
                Saya <span class="text-dark-slate py-2 px-4 rounded-pill shadow-sm" style="border: 2px solid var(--color-dark-slate);">David Chandra</span>
            </h1>
            
            <p class="lead text-dark-slate mb-4">
                Saya adalah mahasiswa S1 di 
                <span class="fw-bold text-slate">Telkom University</span> 
                pada Program Studi Teknologi Informasi Semester 5.
            </p>

            <p class="text-dark-slate fs-5 mb-4">
                Ketertarikan besar saya tertuju pada pengembangan perangkat lunak, dengan fokus mendalam di:
            </p>

            <div class="d-flex flex-wrap gap-3">
                
                <span class="bg-dark-slate text-light-gray fw-bold py-2 px-4 rounded-pill shadow-sm">
                    Back-End Development
                </span>
                
                <span class="bg-dark-slate text-light-gray fw-bold py-2 px-4 rounded-pill shadow-sm">
                    Kecerdasan Buatan (AI)
                </span>
            </div>
            
        </div>
    </div>
</section>

@endsection