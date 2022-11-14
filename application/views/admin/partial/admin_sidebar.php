<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= $page == 'dashboard' || $page == '' ? '' : 'collapsed' ?>"
                href="<?= base_url('halaman') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page == 'arsitek' || $page == '' ? '' : 'collapsed' ?>"
                href="<?= base_url('halaman/arsitek') ?>">
                <i class="bi bi-person-lines-fill"></i>
                <span>Arsitek</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?= $page == 'paket' || $page == '' ? '' : 'collapsed' ?>"
                href="<?= base_url('halaman/paket') ?>">
                <i class="bi bi-building"></i>
                <span>Paket Desain</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link <?= $page == 'artikel' || $page == '' ? '' : 'collapsed' ?>"
                href="<?= base_url('halaman/artikel') ?>">
                <i class="bi bi-newspaper"></i>
                <span>Artikel</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=base_url('auth/logout')?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->