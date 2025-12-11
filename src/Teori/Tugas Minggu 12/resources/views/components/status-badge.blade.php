@php
    // Ganti kelas Bootstrap dengan kelas kustom atau kombinasi warna baru
    $classes = [
        // Positif / Berhasil -> Menggunakan Dark Slate untuk kesan premium/utama
        'Tersedia' => 'badge bg-dark-slate text-light-gray rounded-pill',
        'Terkirim' => 'badge bg-dark-slate text-light-gray rounded-pill', 
        
        // Negatif / Bahaya -> Pertahankan bg-danger untuk visibilitas (karena tidak ada warna bahaya kustom)
        'Habis' => 'badge bg-danger text-white rounded-pill', 
        
        // Info / Sedang Berlangsung -> Menggunakan Slate (abu-abu sedang)
        'Pending' => 'badge bg-slate text-dark-slate rounded-pill', 
        'Dipesan' => 'badge bg-slate text-dark-slate rounded-pill',
    ];
    
    // Default menggunakan Light Gray
    $defaultClass = 'badge bg-light-gray text-dark-slate rounded-pill';

    $badgeClass = $classes[$status] ?? $defaultClass;
@endphp

<span class="{{ $badgeClass }} fw-bold text-uppercase p-2">
    @if ($status == 'Tersedia' || $status == 'Terkirim') 
        <i class="bi bi-check-circle-fill me-1"></i>
    @elseif ($status == 'Habis')
        <i class="bi bi-x-octagon-fill me-1"></i>
    @elseif ($status == 'Pending' || $status == 'Dipesan')
        <i class="bi bi-clock-fill me-1"></i> 
    @endif
    {{ $status }}
</span>