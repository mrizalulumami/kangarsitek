<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="<?= base_url('assets/admin/') ?>assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Kangarsitek</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->
            <li class="nav-item d-block pe-auto">
                <a class="nav-link nav-icon " href="<?= base_url('landing') ?>">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABsElEQVRIS7WVYVHEQAyF7xyAg+IAFFAUAA6KA1AAKAAHHAoABdQBOKAoAAfwvs6mE7a73eVHM5PpXTfJS16y6XazsmxXjr+pAWiVxKmUZxMSGvR8l75In5eSXAI4lOO19KxQJUDnUkBnkgPoZHkn3SsEJ6hVdaXf97F9CuAyBC/EHik6knr7GUgMQDZvFZn3snmU7kIWrZ6v4TeggI8SA2CE8ZLkaLVKBjkfpABo5lMhuNGSM/vQASxcWHU+mwe97EJ5TFAsvV54WlIg+BOH0WWy/lAE9wTm4FhKyV5q7gz+xPmW7scAVh78DVLG1IPUADDWXzkADjAwABLwIP8BmJL3TkbRiU57x81PRJX9xeY2sjWKYGCcpFST48uSA8B/ChRQOz2zTbYxnRoUnOJexAVZktDLPbJBGZdgzKvRxE6hEpMlEKog2KcUO+4KNJPoDKDRO6YJYVz9Ki5Vgg9B8ests9Kyo4k3rpKlfmAW22c/OH5DUjIZcYuhMCVkTvBdqGKyKX1wmIjU2vAgJMDumTaoP6y5PJ0cWB2ttAkZkvEQqqJPY0NTUgOQ8616vzrALwmDYBlXU6bdAAAAAElFTkSuQmCC" />
                </a>
            </li><!-- End Search Icon-->
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?= base_url().$d_user['gambar'] ?>" alt="Profile"
                        class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?=$d_user['nama']?></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?=$d_user['nama']?></h6>
                        <span><?=$d_user['email']?></span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?=base_url('auth/logout')?>">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->