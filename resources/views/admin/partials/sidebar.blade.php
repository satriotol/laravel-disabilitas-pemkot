<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-2">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('dist/img/pemkot.png') }}" alt="pemkot logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">PEMKOT SEMARANG</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/ava.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('product') }}" class="nav-link {{ active_class(['product', 'product.*']) }}">
                        <i class="nav-icon fas fa-tshirt"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori') }}" class="nav-link {{ active_class(['kategori','kategori.*']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slider') }}" class="nav-link {{ active_class(['slider','slider.*']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ active_class(['about','about.*']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link {{ active_class(['faq','faq.*']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            FAQ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('socialmedia') }}" class="nav-link {{ active_class(['socialmedia','socialmedia.*']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Social Media
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user') }}" class="nav-link {{ active_class(['user','user.*']) }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            User
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
