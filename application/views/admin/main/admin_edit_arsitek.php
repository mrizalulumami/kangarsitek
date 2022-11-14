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
        <?= form_open_multipart('OArsitek/edit_arsitek/' . $a_data->id_arsitek) ?>
        <div class="row mt-2">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data Arsitek</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="<?= $a_data->nama ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="pekerjaan" value="<?= $a_data->pekerjaan ?>"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="perusahaan" value="<?= $a_data->perusahaan ?>"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">WA</label>
                            <div class="col-sm-10">
                                <input type="text" name="wa" value="<?= $a_data->no_wa ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" value="<?= $a_data->instagram ?>"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="alamat"
                                    style="height: 100px"><?= $a_data->alamat ?></textarea>
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
                                <center>
                                    <img src="<?= base_url() . $a_data->foto ?>" alt="Profile" width="50%"
                                        class="rounded-circle">
                                </center>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>

            </div>


        </div><!-- End Right side columns -->
        </form><!-- End General Form Elements -->
    </section>

</main><!-- End #main -->