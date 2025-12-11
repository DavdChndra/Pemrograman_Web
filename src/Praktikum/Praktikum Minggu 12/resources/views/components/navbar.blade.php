<div class="p-4"> 
    
    <nav class="navbar navbar-expand-lg bg-dark-slate py-3 rounded-pill shadow-sm">
        <div class="container px-4">
            
            <a class="navbar-brand fs-3 fw-bold text-white" href="#">TokoMadura.id</a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span> 
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto gap-2"> 
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" 
                           aria-current="page" href="/">Daftar Produk</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('products/create') ? 'active' : '' }}" 
                           href="/products/create">Tambah Produk</a>
                    </li>
                    
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link {{ Request::is('logout') ? 'active' : '' }}">Logout</button>
                        </form>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>