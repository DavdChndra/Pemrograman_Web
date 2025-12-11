<div class="p-4"> 
    
    <nav class="navbar navbar-expand-lg bg-dark-slate py-3 rounded-pill shadow-sm">
        <div class="container px-4">
            
            <a class="navbar-brand fs-3 fw-bold text-white" href="#">DavdChndra</a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span> 
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto gap-2"> 
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" 
                           aria-current="page" href="/">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" 
                           href="/about">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" 
                           href="/contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>