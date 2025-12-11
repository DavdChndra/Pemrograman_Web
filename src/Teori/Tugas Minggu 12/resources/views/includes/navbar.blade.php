<nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3 bg-dark-slate"
     style="border-radius: 0 0 18px 18px;">
    <div class="container">

        {{-- Brand --}}
        <a class="navbar-brand fw-bold fs-4 d-flex align-items-center text-light-gray" href="{{ url('/') }}">
            <span class="me-2 text-slate">📖</span> Buku App
        </a>

        {{-- Toggler --}}
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    {{-- Nav Link: Pemesanan --}}
                    <a class="nav-link {{ Route::is('order.form') ? 'active' : '' }}"
                       aria-current="{{ Route::is('order.form') ? 'page' : '' }}"
                       href="{{ route('order.form') }}">
                        Pemesanan
                    </a>
                </li>

                <li class="nav-item">
                    {{-- Nav Link: Stok Buku --}}
                    <a class="nav-link {{ Route::is('stock.list') ? 'active' : '' }}"
                       aria-current="{{ Route::is('stock.list') ? 'page' : '' }}"
                       href="{{ route('stock.list') }}">
                        Stok Buku
                    </a>
                </li>

                <li class="nav-item">
                    {{-- Nav Link: Tracking DO --}}
                    <a class="nav-link {{ Route::is('tracking.do') ? 'active' : '' }}"
                       aria-current="{{ Route::is('tracking.do') ? 'page' : '' }}"
                       href="{{ route('tracking.do') }}">
                        Tracking DO
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>