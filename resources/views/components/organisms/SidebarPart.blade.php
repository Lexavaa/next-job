<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->username }}
                            <span class="user-level">{{ auth()->user()->jabatan->jabatan }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="/dashboard/change-profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
<li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MENU</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('dashboard.home') ? 'active' : '' }}">
                    <a href="/dashboard/home">
                        <i class="fa-solid fa-rocket"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('dashboard.hakAkses') || request()->routeIs('dashboard.pegawai') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#masterData">
                        <i class="fa-solid fa-toolbox"></i>
                        <p>Master Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="masterData">
                        <ul class="nav nav-collapse">
                            <li class=" {{ request()->routeIs('dashboard.pegawai') ? 'text-primary' : '' }}">
                                <a href="/dashboard/pegawai">
                                    <span class="sub-item">Pegawai</span>
                                </a>
                            </li>
                            <li class=" {{ request()->routeIs('dashboard.hakAkses') ? 'text-primary' : '' }}">
                                <a href="/dashboard/hak-akses">
                                    <span class="sub-item">Hak Akses</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('dashboard.setDeadline') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#Setting">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <p>Setting</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="Setting">
                        <ul class="nav nav-collapse">
                            <li class=" {{ request()->routeIs('dashboard.setDeadline') ? 'text-primary' : '' }}">
                                <a href="/dashboard/set-deadline">
                                    <span class="sub-item">Setting Deadline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('dashboard.kasHarian') ? 'active' : '' }}">
                    <a href="/dashboard/kas-harian">
                        <i class="fa-solid fa-clipboard"></i>
                        <p>Kas Harian</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item  {{ request()->routeIs('dashboard.inputJurnalUmum') || request()->routeIs('dashboard.inputJurnalPenyesuaian') || request()->routeIs('dashboard.lapJurnalUmum') || request()->routeIs('dashboard.lapJurnalPenyesuaian') || request()->routeIs('dashboard.lapNeracaSaldo') || request()->routeIs('dashboard.lapNeraca') || request()->routeIs('dashboard.lapLabaRugi') || request()->routeIs('dashboard.lapBukuBesar') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#Accounting">
                        <i class="fa-solid fa-money-bill-wave"></i>
                        <p>Akuntansi</p>
                        <span class="caret"></span>
                    </a>
                <div class="collapse" id="Accounting">
                    <ul class="nav nav-collapse">
                        <li class=" {{ request()->routeIs('dashboard.inputJurnalUmum') ? 'text-primary' : '' }}">
                            <a href="/dashboard/input-jurnal-umum">
                                <span class="sub-item">Input Jurnal Umum</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.inputJurnalPenyesuaian') ? 'text-primary' : '' }}">
                            <a href="/dashboard/input-jurnal-penyesuaian">
                                <span class="sub-item">Input Jurnal Penyesuaian</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.lapJurnalUmum') ? 'text-primary' : '' }}">
                            <a href="/dashboard/lap-jurnal-umum">
                                <span class="sub-item">Lap Jurnal Umum</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.lapJurnalPenyesuaian') ? 'text-primary' : '' }}">
                            <a href="/dashboard/lap-jurnal-penyesuaian">
                                <span class="sub-item">Lap Jurnal Penyesuaian</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.lapNeracaSaldo') ? 'text-primary' : '' }}">
                            <a href="/dashboard/lap-neraca-saldo">
                                <span class="sub-item">Lap Neraca Saldo</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.lapNeraca') ? 'text-primary' : '' }}">
                            <a href="/dashboard/lap-neraca">
                                <span class="sub-item">Lap Neraca</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.lapLabaRugi') ? 'text-primary' : '' }}">
                            <a href="/dashboard/lap-laba-rugi">
                                <span class="sub-item">Lap Laba Rugi</span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('dashboard.lapBukuBesar') ? 'text-primary' : '' }}">
                            <a href="/dashboard/lap-buku-besar">
                                <span class="sub-item">Lap Buku Besar</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="nav-item  {{ request()->routeIs('dashboard.lapPemasukan') || request()->routeIs('dashboard.lapPengeluaran') || request()->routeIs('dashboard.lapKasHarian') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#LapKeuangan">
                        <i class="fa-solid fa-newspaper"></i>
                        <p>Laporan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="LapKeuangan">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->routeIs('dashboard.lapPemasukan') ? 'text-primary' : '' }}">
                                <a href="/dashboard/lap-pemasukan">
                                    <span class="sub-item">Laporan Pemasukan</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('dashboard.lapPengeluaran') ? 'text-primary' : '' }}">
                                <a href="/dashboard/lap-pengeluaran">
                                    <span class="sub-item">Laporan Pengeluaran</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('dashboard.lapkasHarian') ? 'text-primary' : '' }}">
                                <a href="/dashboard/lap-kas-harian">
                                    <span class="sub-item">Laporan Kas Harian</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        </li>
        </ul>
    </div>
</div>
</div>
