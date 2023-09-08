<aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="" alt="Logo" class="brand-image text-center"
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
                <img src="" class="img-circle brand-image text-center"
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
                    <a href="" class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/admins*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/guru*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/tendik*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-ninja"></i>
                        <p>
                            Tendik
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/assesor*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Assessor
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/standard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-server"></i>
                        <p>
                            Standard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/aspect*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Aspek
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/task*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Task
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->is('admin/dokumenaspek*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-pdf"></i>
                        <p>
                            Dokumen
                        </p>
                    </a>
                </li>
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
