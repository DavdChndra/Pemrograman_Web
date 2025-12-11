@extends('layouts.main')
@section('title', 'Contact')
@section('content')
<section class="text-center">
    <div class="row">
        <div class="col-lg-8 mx-auto"> 

            <h1 class="display-4 fw-bold text-dark-slate mb-3">
                Yuk, Ngobrol Santai! ☕
            </h1>
            
            <p class="lead text-dark-slate opacity-75 mb-5">
                Pengen kenalan lebih dekat, atau mau tahu lebih banyak tentang saya? Hubungi saya di platform dibawah ini!
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-4">
                
                <a href="https://linkedin.com/in/davdchndra" class="btn btn-outline-dark-slate btn-lg rounded-pill px-5 fw-bold shadow" target="_blank">
                    <i class="bi bi-linkedin me-2"></i> Konek di LinkedIn
                </a>

                <a href="https://github.com/davdchndra" class="btn btn-outline-dark-slate btn-lg rounded-pill px-5 fw-bold shadow" target="_blank">
                    <i class="bi bi-github me-2"></i> Lihat Proyek di GitHub
                </a>
                
                <a href="https://instagram.com/davdchndra" class="btn btn-outline-dark-slate btn-lg rounded-pill px-5 fw-bold shadow" target="_blank">
                    <i class="bi bi-instagram me-2"></i> Follow di Instagram
                </a>
                
            </div>
        </div>
    </div>
</section>
@endsection