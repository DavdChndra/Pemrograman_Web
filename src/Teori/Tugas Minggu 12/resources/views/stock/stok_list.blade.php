@extends('layouts.app')
@section('title', 'Daftar Stok Buku')
@section('content')
<div class="container py-4">
    <div class="card shadow mb-4 rounded-4 border-0">
        
        <div class="card-header bg-dark-slate border-bottom d-flex justify-content-between align-items-center py-3 rounded-top-4">
            <h2 class="h5 mb-0 d-flex align-items-center text-white">
                <i class="bi bi-list-columns-reverse me-2 text-white"></i>
                Daftar Stok Buku
            </h2>
            
            <a href="{{ route('order.form') }}" class="btn btn-off-white btn-sm rounded-pill px-3">
                <i class="bi bi-plus-circle me-1"></i> Buat Pesanan Baru
            </a>
        </div>

        <div class="card-body p-0 overflow-hidden">

            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead>
                        <tr>
                            <th class="text-center text-dark-slate" style="width: 50px;">#</th>
                            <th class="text-dark-slate">Judul Buku</th>
                            <th class="text-center text-dark-slate" style="width: 150px;">Stok Saat Ini</th>
                            <th class="text-center text-dark-slate" style="width: 150px;">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($books as $index => $book)
                        <tr>
                            <th class="text-center text-dark-slate">{{ $index + 1 }}</th>

                            <td>
                                <strong class="text-dark-slate">{{ $book['title'] }}</strong>
                                <div class="small text-slate">Kode: {{ $book['id'] }}</div>
                            </td>

                            <td class="text-center fw-bold {{ $book['stock'] <= 5 ? 'text-danger' : 'text-dark-slate' }}">
                                {{ number_format($book['stock']) }}
                            </td>

                            <td class="text-center">
                                @include('components.status-badge', [
                                    'status' => $book['stock'] > 0 ? 'Tersedia' : 'Habis'
                                ])
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-slate py-4">
                                <i class="bi bi-info-circle me-1"></i> Data stok buku belum tersedia.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>
@endsection