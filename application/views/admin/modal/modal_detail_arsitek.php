<?php
if (isset($ar_data)) {
    foreach ($ar_data as $d_a) { ?>
<div class="modal fade" id="Detail<?= $d_a['id_arsitek'] ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Profil <?= $d_a['nama'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <div class="col-lg-4">
                                        <img src="<?= base_url() . $d_a['foto'] ?>" alt="Profile" width="50%"
                                            class="rounded-circle mt-2">
                                    </div>
                                    <h3 class="h3 mt-2"><?= $d_a['nama'] ?></h3>
                                </center>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3 mt-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pekerjaan" value="<?= $d_a['pekerjaan'] ?>"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan" value="<?= $d_a['perusahaan'] ?>"
                                            class="form-control" readonly>
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