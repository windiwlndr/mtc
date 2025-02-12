<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">

        <!-- Navigation Section -->
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title d-flex align-items-center">
                    <img src="assets/images/logo/mtc.png" alt="Logo" style="width: 33px; height: 30px; margin-right: 8px;">
                    Madura Technovation
                </li>
                <li class="sidebar-item">
                    <a href=" <?= base_url('/'); ?> " class="sidebar-link">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-database"></i>
                        <span>Data Master</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="component-alert.html"><i class="fa-solid fa-cogs"></i> Pengaturan Toko</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-badge.html"><i class="fa-solid fa-user"></i> Member</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-breadcrumb.html"><i class="fa-solid fa-truck"></i> Supplier</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-button.html"><i class="fa-solid fa-box"></i> Barang</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-card.html"><i class="fa-solid fa-ruler"></i> Satuan</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-carousel.html"><i class="fa-solid fa-tags"></i> Kategori</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-dropdown.html"><i class="fa-solid fa-copyright"></i> Merk</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-list-group.html"><i class="fa-solid fa-credit-card"></i> Metode Bayar</a>
                        </li>
                        <li class="submenu-item">
                            <a href="<?= base_url('/admin'); ?>"><i class="fa-solid fa-user-shield"></i> Admin</a>
                        </li>
                        <li class="submenu-item">
                            <a href="component-navs.html"><i class="fa-solid fa-users"></i> Karyawan</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>