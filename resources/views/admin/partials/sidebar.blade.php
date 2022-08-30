<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">PEMKOT SEMARANG</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('tabel.1') }}" class="nav-link {{ active_class(['tabel.1']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Tabel 1
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tabel.2') }}" class="nav-link {{ active_class(['tabel.2']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Tabel 2
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tabel.3') }}" class="nav-link {{ active_class(['tabel.3']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Tabel 3
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" class="nav-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Log Out</p>
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
