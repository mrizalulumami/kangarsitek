<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('halaman') ?>">Home</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('halaman/artikel') ?>">Artikel</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <?= form_open_multipart('OArtikel/edit_artikel/'. $a_data['id_artikel']) ?>
        <div class="row mt-2">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lengkapi Data Artikel</h5>
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" id="artikel" class="form-control" value="<?= $a_data['judul'] ?>">
                            </div>
                        </div>
                       <!-- <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="jenis" id="judul" aria-label="Default select example">
                                    <?php foreach($jenis as $p): ?>
                                        <?php if($artikel['jenis'] == $p['jenis']):  ?>
                                            <option value="<?= $p['jenis']; ?>" selected><?= $p['jenis']; ?></option>
                                        <?php else: ?>
                                            <option value="<?= $p['jenis']; ?>"><?= $p['jenis']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" style="height: 100px"><?= $a_data['deskripsi']; ?></textarea>
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
                        <h5 class="card-title">Pilih Foto Artikel</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <center>
                                    <img src="<?= base_url() . $a_data['gambar']; ?>" alt="Profile" width="50%"
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