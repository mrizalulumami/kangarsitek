<?php
if (isset($artikel)) {
    foreach ($artikel as $da) { ?>
<div class="modal fade" id="delete_artikel<?= $da['id_artikel'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('oartikel/delete_artikel/') . $da['id_artikel'] ?>" class="btn btn-danger"><i
                        class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->
<?php }
} ?>