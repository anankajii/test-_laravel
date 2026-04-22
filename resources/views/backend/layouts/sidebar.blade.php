<aside class="left-sidebar">

    <div class="scroll-sidebar">

        <nav class="sidebar-nav">

            <ul id="sidebarnav">

                <!-- Dashboard -->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark"
                        href="/dashboard">

                        <i class="mdi mdi-view-dashboard"></i>

                        <span class="hide-menu">
                            Dashboard
                        </span>

                    </a>
                </li>

                {{-- RIWAYAT HIDUP --}}
                <li class="sidebar-item">

                    <a class="sidebar-link waves-effect waves-dark"
                        href="javascript:void(0)"
                        data-bs-toggle="collapse"
                        data-bs-target="#riwayatMenu"
                        aria-expanded="false">

                        <i class="mdi mdi-folder"></i>
                        <span class="hide-menu">Riwayat Hidup</span>
                    </a>

                    <ul class="collapse list-unstyled ms-3" id="riwayatMenu">

                        <li class="sidebar-item">
                            <a href="/pengalaman_kerja"
                                class="sidebar-link {{ request()->is('backend/pengalaman_kerja*') ? 'active' : '' }}">
                                <span class="hide-menu">Pengalaman Kerja</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="/pendidikan"
                                class="sidebar-link {{ request()->is('backend/pendidikan*') ? 'active' : '' }}">
                                <span class="hide-menu">Pendidikan</span>
                            </a>
                        </li>

                    </ul>

                </li>

                <!-- Logout -->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark"
                        href="/logout">

                        <i class="mdi mdi-logout"></i>

                        <span class="hide-menu">
                            Logout
                        </span>

                    </a>
                </li>

            </ul>

        </nav>

    </div>

</aside>