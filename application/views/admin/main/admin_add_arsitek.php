<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('halaman') ?>">Home</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('halaman/arsitek') ?>">Arsitek</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <?= form_open_multipart('oarsitek/add_arsitek') ?>
        <div class="row mt-2">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lengkapi Data Arsitek</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="pekerjaan" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="perusahaan" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">WA</label>
                            <div class="col-sm-10">
                                <input type="text" name="wa" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="alamat" style="height: 100px"></textarea>
                            </div>
                        </div>




                    </div>
                </div>

            </div>

            <!-- <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lengkapi Data Arsitek</h5>


                        <div class="quill-editor-full">
                            <p>Hello World!</p>
                            <p>This is Quill <strong>full</strong> editor</p>
                        </div>

                    </div>
                </div>

            </div> -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilih Foto Arsitek</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>

            </div>


        </div><!-- End Right side columns -->
        </form><!-- End General Form Elements -->
    </section>

</main><!-- End #main -->