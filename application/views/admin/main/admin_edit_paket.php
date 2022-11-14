<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('halaman') ?>">Home</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('halaman/paket') ?>">Paket</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <?= form_open_multipart('OPaket/edit_paket/'. $paket['id_paket']) ?>
        <div class="row mt-2">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lengkapi Data Paket</h5>
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" id="judul" class="form-control" value="<?= $paket['judul'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="jenis" id="judul" aria-label="Default select example">
                                    <?php foreach($jenis as $p): ?>
                                        <?php if($paket['jenis'] == $p['jenis']):  ?>
                                            <option value="<?= $p['jenis']; ?>" selected><?= $p['jenis']; ?></option>
                                        <?php else: ?>
                                            <option value="<?= $p['jenis']; ?>"><?= $p['jenis']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" style="height: 100px"><?= $paket['deskripsi']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="arsitek" class="col-sm-2 col-form-label">Aristek</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="arsitek" id="arsitek" aria-label="Default select example">
                                    <?php foreach($arsitek as $p): ?>
                                        <?php if($paket['id_arsitek'] == $p['id_arsitek']): ?>
                                        <option value="<?= $p['id_arsitek']; ?>" selected><?= $p['nama']; ?></option>
                                        <?php else: ?>
                                            <option value="<?= $p['id_arsitek']; ?>"><?= $p['nama']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
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
                        <h5 class="card-title">Pilih Foto Paket</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <center>
                                    <img src="<?= base_url() . $paket['gambar']; ?>" alt="Profile" width="50%"
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
            </form>
            <?= form_open_multipart('OPaket/tambah_slider/'. $paket['id_paket']) ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilih Foto Slider</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </form>


        </div><!-- End Right side columns -->
        <!-- End General Form Elements -->
    </section>

</main><!-- End #main -->