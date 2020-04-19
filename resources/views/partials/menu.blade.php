<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>

        @if(Auth::check())
            @if(Auth::user()->role =='admin_dinas')
                <li class="sub-menu children">
                    <a href="/pendaftaranPemakaman"> <i class="menu-icon fa fa-laptop"></i>Tambah TPU dan PIC TPU </a>
                </li>
                <li class="sub-menu children">
                    <a href="/managePemakaman"> <i class="menu-icon fa fa-gears"></i>Pengelolaan Pemakaman</a>
                </li>
                <li class="sub-menu children">
                    <a href="/jadwalPemakaman"> <i class="menu-icon fa fa-calendar"></i>Jadwal Pemakaman</a>
                </li>

            @elseif(Auth::user()->role=='admin_tpu')

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Cetak IPTM</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="/IPTM/perpanjangan">IPTM Perpanjangan</a>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="/IPTM/tumpangan">IPTM Tumpangan</a>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="/IPTM/pemindahan">IPTM Pemindahan</a>
                        </li>
                        <li>
                            <i class="fa fa-file"></i>
                            <a href="/IPTM/riwayat">Riwayat Cetak IPTM</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu children">
                    <a href="/pemakaman"> <i class="menu-icon fa fa-info"></i>Informasi Pemakaman</a>
                </li>
                <li class="sub-menu children">
                    <a href="/pemakaman/expired"> <i class="menu-icon fa fa-calendar"></i>Makam Kadaluarsa</a>
                </li>
                <li class="sub-menu children">
                    <a href="/pemakaman/jadwal"> <i class="menu-icon fa fa-calendar"></i>Jadwal Pemakaman</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-check"></i>Semua Permohonan</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="/pemakaman/pesanan/perpanjangan">Perpanjangan</a>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="/pemakaman/pesanan/tumpangan">Tumpangan</a>
                        </li>
                        <li>
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="/pemakaman/pesanan/pemindahan">Pemindahan</a>
                        </li>
                        <li>
                            <i class="fa fa-file"></i>
                            <a href="/pemakaman/pesanan/riwayat">Riwayat</a>
                        </li>
                    </ul>
                </li>

                <li class="sub-menu children">
                    <a href="/pemakaman/kelola"> <i class="menu-icon fa fa-gears"></i>Pengelolaan Makam</a>
                </li>


            @elseif(Auth::user()->role=='Member')

                <li class="sub-menu children">
                    <a href="/pemakaman/cari"> <i class="menu-icon fa fa-file"></i>Pemesanan IPTM</a>
                </li>
                <li class="sub-menu">
                    <a href="/pemakaman/pesanan"> <i class="menu-icon fa fa-shopping-cart"></i>Status Pemesanan</a>
                </li>
                <li class="sub-menu">
                    <a href="/pemakaman/pesanan/riwayat"><i class="menu-icon fa fa-shopping-cart"></i>Riwayat Pemesanan</a>
                </li>
                <li class="sub-menu">
                    <a href="/pemakaman/jadwal"><i class="menu-icon fa fa-calendar"></i>Jadwal Pemakaman</a>
                </li>
            @endif
        @endif
    </ul>
</div>
<!-- /.navbar-collapse -->