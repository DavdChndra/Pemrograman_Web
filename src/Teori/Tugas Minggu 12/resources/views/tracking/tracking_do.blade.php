@extends('layouts.app')
@section('title', 'Tracking DO')
@section('content')
<div class="container py-4">
    <div class="card shadow-sm mb-4 border-0 rounded-4 overflow-hidden bg-off-white">
        
        <div class="card-header bg-dark-slate border-bottom d-flex justify-content-between align-items-center py-3 rounded-top-4">
            <h2 class="h5 mb-0 d-flex align-items-center text-white">
                <i class="bi bi-geo-alt-fill me-2 text-white"></i>
                Tracking Delivery Order
            </h2>
            
            <a href="{{ route('order.form') }}" class="btn btn-off-white btn-sm rounded-pill px-3">
                <i class="bi bi-plus-circle me-1"></i> Buat Pesanan Baru
            </a>
        </div>

        <div class="card-body p-0 overflow-hidden">

            <div class="table-responsive">
                <table class="table align-middle mb-0 table-hover">
                    <thead class="bg-light-gray">
                        <tr>
                            <th style="width: 150px;" class="text-dark-slate">No. DO</th>
                            <th class="text-dark-slate">Status</th>
                            <th style="width: 200px;" class="text-dark-slate">Update Terakhir</th>
                            <th style="width: 100px;" class="text-center text-dark-slate">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($trackingData as $row)
                        <tr class="text-dark-slate">
                            <td class="fw-bold">{{ $row['do_number'] }}</td>

                            <td>
                                @include('components.status-badge', [
                                    'status' => $row['status']
                                ])
                            </td>

                            <td class="text-slate">
                                {{ \Carbon\Carbon::parse($row['updated_at'])->translatedFormat('d F Y, H:i') }}
                            </td>

                            <td class="text-center">
                                <button 
                                    type="button" 
                                    class="btn btn-outline-dark-slate btn-sm rounded-pill px-3" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#detailModal{{ $row['do_number'] }}"
                                >
                                    <i class="bi bi-eye me-1"></i> Detail
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-slate py-4">
                                <i class="bi bi-box-seam-fill me-1"></i> Belum ada pesanan yang dilacak.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

{{-- MODAL --}}
@foreach($trackingData as $row)
    <x-app-modal 
        id="detailModal{{ $row['do_number'] }}"
        title="Detail DO {{ $row['do_number'] }}"
        size="modal-lg"
    >
        <div>
            <p class="text-dark-slate"><strong>No. DO:</strong> {{ $row['do_number'] }}</p>
            <p class="text-dark-slate"><strong>Status:</strong> {{ $row['status'] }}</p>
            <p class="text-dark-slate"><strong>Update Terakhir:</strong> <span class="text-slate">{{ $row['updated_at'] }}</span></p>
        </div>
    </x-app-modal>
@endforeach

@endsection