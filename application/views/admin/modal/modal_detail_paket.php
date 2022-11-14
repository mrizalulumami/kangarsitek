<?php
if (isset($p_data)) {
    foreach ($p_data as $d_a) { ?>
<div class="modal fade" id="Detail<?= $d_a['id_paket'] ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Paket <?= $d_a['judul'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <div class="col-lg-4">
                                    <img src="<?= base_url() . $d_a['gambar'] ?>" class="card-img-top" alt="...">
                                    </div>
                                    <h3 class="h3 mt-2"><?= $d_a['judul'] ?></h3>
                                </center>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3 mt-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="judul" value="<?= $d_a['judul'] ?>"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                               <!-- <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan" value="<?= $d_a['perusahaan'] ?>"
                                            class="form-control" readonly>
                                    </div>-->
                                </div>
                                
                            <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea readonly class="form-control" name="deskripsi" style="height: 100px"><?=$d_a['deskripsi']?></textarea>
                            </div>
                        </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Right side columns -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div><!-- End Extra Large Modal-->
<?php }
} ?>