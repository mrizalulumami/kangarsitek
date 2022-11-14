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
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mt-1">
                        <a href="<?= base_url(); ?>Halaman/add_artikel" class="btn btn-primary ms-auto">Tambah paket<i class="bi bi-plus"></i></a>
                    </div>

                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">View</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Tabel</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row mt-2">
                                <?php
                                if (isset($artikel)) {
                                    foreach ($artikel as $pd) {
                                ?>
                                  <div class="col-xl-4 col-md-6">
                                  <div class="card p-3">

                                        <div class="post-img">
                                            <img src="<?= base_url().$pd['gambar'] ?>" alt=""
                                                class="img-fluid">
                                        </div>
                                        <h5 class="card-title text-center">
                                            <a href="<?=base_url('landing/detail_artikel/').$pd['id_artikel']?>"><?=$pd['judul']?> </a>
                                        </h5>
                                        <p class="card-text"  style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?=$pd['deskripsi']?></p>

                                        <div class="row justify-content-center mt-1">
                                            <div class="col-sm-3">
                                                <a href="<?= base_url('halaman/edit_artikel/') . $pd['id_artikel'] ?>"
                                                    class="btn btn-warning"><i class="bi bi-brush"></i></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- Vertically centered Modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#delete_artikel<?= $pd['id_artikel'] ?>">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                </div><!-- End post list item -->
                                <?php }
                                } ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (isset($artikel)) {
                                            foreach ($artikel as $pd) {
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td class="text-nowrap"><?= $pd['judul'] ?></td>
                                            <td><img src="<?= base_url().$pd['gambar'] ?>" class="img-thumbnail"
                                                    width="20%" height="100%"></td>
                                            <td class="text-wrap"
                                                style="white-space: nowrap;overflow-y: hidden;text-overflow: ellipsis;">
                                                <?= $pd['deskripsi'] ?></td>
                                            <td class="d-flex">
                                                <a href="" class="btn btn-warning"><i class="bi bi-brush"></i></a>
                                                <!-- Vertically centered Modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#paketmodaldel<?= $pd['id_artikel'] ?>">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#Detail<?= $pd['id_artikel'] ?>">
                                                <i class="bi bi-eye"></i>
                                                 </button>
                                            </td>
                                        </tr>
                                        <?php }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div><!-- End Right side columns -->
    </section>

</main><!-- End #main -->