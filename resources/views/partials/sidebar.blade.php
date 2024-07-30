<!-- resources/views/partials/sidebar.blade.php -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/buttons') }}" aria-expanded="false">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span class="hide-menu">Buttons</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/alerts') }}" aria-expanded="false">
                        <i class="mdi mdi-alert-outline"></i>
                        <span class="hide-menu">Alerts</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/cards') }}" aria-expanded="false">
                        <i class="mdi mdi-credit-card-scan"></i>
                        <span class="hide-menu">Card</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/forms') }}" aria-expanded="false">
                        <i class="mdi mdi-file-document-box"></i>
                        <span class="hide-menu">Forms</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/typography') }}" aria-expanded="false">
                        <i class="mdi mdi-format-font"></i>
                        <span class="hide-menu">Typography</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/login') }}" aria-expanded="false">
                        <i class="mdi mdi-login"></i>
                        <span class="hide-menu">Login</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/register') }}" aria-expanded="false">
                        <i class="mdi mdi-account-plus"></i>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
