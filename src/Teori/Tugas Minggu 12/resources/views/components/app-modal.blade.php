@props([
    'id' => 'defaultModalId', 
    'title' => 'Judul Modal', 
    'size' => '', 
    'scrollable' => '',
    'footer' => null
])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog {{ $size }} modal-dialog-centered {{ $scrollable }}">
        <div class="modal-content shadow-lg bg-off-white">
            
            <div class="modal-header bg-dark-slate">
                <h5 class="modal-title fw-bold text-light-gray" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-dark-slate">
                {{ $slot }}
            </div>

            <div class="modal-footer">
                @if ($footer)
                    {{ $footer }}
                @else
                    <button type="button" class="btn btn-outline-dark-slate" data-bs-dismiss="modal">Tutup</button>
                @endif
            </div>

        </div>
    </div>
</div>