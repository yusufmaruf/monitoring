<aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('image/Logo UPN.png') }}" alt="Logo" class="brand-image text-center"
            style="max-width: 18%; max-height: 18%; object-fit: contain; opacity: .8">
        <div class="brand-text-container">
            <span class="brand-text font-weight-light brand-text-ellipsis">Monitoring</span>
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="pull-left image">
                <img src="{{ asset('image/Logo UPN.png') }}" class="img-circle brand-image text-center"
                    style="max-width: 100%; max-height: 100%; object-fit: contain;" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nama User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('adminDashboard.index') }}"
                        class="nav-link {{ request()->is('admin/adminDashboard*') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Maste Data</li>
                <li class="nav-item">
                    <a href="{{ route('admins.index') }}"
                        class="nav-link {{ request()->is('admin/admin*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('direktur.index') }}"
                        class="nav-link {{ request()->is('admin/direktur*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Direktur
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kadepartement.index') }}"
                        class="nav-link {{ request()->is('admin/kadepartement*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-ninja"></i>
                        <p>
                            KA Departemen
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/assesor*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            KA Bidang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/standard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>
                            Staff
                        </p>
                    </a>
                </li>
                <li class="nav-header">Manajemen Tugas</li>

                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/aspect*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Tugas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/task*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-word"></i>
                        <p>
                            Draft Surat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/dokumenaspek*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-pdf"></i>
                        <p>
                            Dokumen Surat
                        </p>
                    </a>
                </li>
                <li class="nav-header">Broadcasting</li>

                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/dokumenaspek*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            WhatssApp Single
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/dokumenaspek*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-whatsapp"></i>
                        <p>
                            WhatssApp Broadcasting
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/dokumenaspek*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Gmail Single
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/dokumenaspek*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                            Gmail Broadcasting
                        </p>
                    </a>
                </li>
                <li class="nav-header">Settings</li>

                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/setting*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
