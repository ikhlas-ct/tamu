<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="logo-text">Protokol Sumbar</h3>
        </a>
        
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" 
                     src="{{ Auth::guard('admin')->user() && Auth::guard('admin')->user()->gambar 
                         ? asset(Auth::guard('admin')->user()->gambar) 
                         : asset('assets/img/user.jpg') }}" 
                     alt="" style="width: 60px; height: 60px;">

                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">
                    {{ Auth::guard('admin')->user() && Auth::guard('admin')->user()->nama 
                        ? Auth::guard('admin')->user()->nama 
                        : 'Guest' }}
                </h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('admin.profile') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Profil</a>
            <a href="{{ route('admin.data-tamu.index') }}" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Data-Tamu</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
        </div>
    </nav>
</div>
