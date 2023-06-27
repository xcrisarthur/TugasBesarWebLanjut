<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 bg-gradient-warning">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link" style="color: black; text-decoration: none;">
        <h1 style="font-size: 28px;">UKM</h1>
        <span class="brand-text font-weight-light" style="font-size: 16px;">Universitas Kristen Maranatha</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        @auth
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('storage/img/' . Auth::user()->foto) }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>
        @endauth

        <!-- Sidebar Menu -->
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p class="text-black">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people-fill"></i>
                        <p class="text-black">
                            Mahasiswa
                            <i class="right bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('perwalianList')}}" class="nav-link">
                                <i class="nav-icon bi bi-calendar3"></i>
                                <p class="text-black">Perwalian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('jadwalList')}}" class="nav-link">
                                {{--                            <a href="{{route('perwalianList')}}" class="nav-link">--}}
                                <i class="nav-icon bi bi-calendar-check-fill"></i>
                                <p class="text-black">Jadwal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dkbsList')}}" class="nav-link">
                                {{--                            <a href="{{route('perwalianList')}}" class="nav-link">--}}
                                <i class="nav-icon bi bi-clipboard"></i>
                                <p class="text-black">DKBS</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('profileList')}}" class="nav-link">
                        <i class="nav-icon bi bi-person-fill"></i>
                        <p class="text-black">Update Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form id="logout-form" action="{{route('logout')}}" method="post">
                        @csrf
                    </form>
                    <a href="javascript:void(0)" class="nav-link" onclick="$('#logout-form').submit();">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p class="text-black">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
