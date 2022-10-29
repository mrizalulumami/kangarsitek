<?php
if (isset($d_arsitek)) {
    foreach ($_arsitek as $da) { ?>
<div class="modal fade" id="verticalycentered<?= $ad['id_arsitek'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Arsitek</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('oarsitek/delete_arsitek/') . $ad['id_arsitek'] ?>" class="btn btn-danger"><i
                        class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->
<?php }
} ?>