<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('halaman') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="d-flex">
            <a href="<?= base_url('halaman/add_arsitek') ?>" class="btn btn-primary ms-auto">Tambah Arsitek<i
                    class="bi bi-plus"></i></a>
        </div>
        <div class="row mt-2">

            <?php
            if (isset($ar_data)) {
                foreach ($ar_data as $ad) {
            ?>

            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?= base_url() . $ad['foto'] ?>" alt="Profile" width="50%" class="rounded-circle">
                        <h2><?= $ad['nama'] ?></h2>
                        <h5><?= $ad['pekerjaan'] ?></h5>
                        <h6><?= $ad['perusahaan'] ?></h6>
                        <div class="row justify-content-center mt-1">
                            <div class="col-sm-3">
                                <a href="" class="btn btn-warning"><i class="bi bi-brush"></i></a>
                            </div>
                            <div class="col-sm-3">
                                <!-- Vertically centered Modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#verticalycentered<?= $ad['id_arsitek'] ?>">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <a href="" class="btn btn-success"><i class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php }
            } ?>

        </div><!-- End Right side columns -->
    </section>

</main><!-- End #main -->