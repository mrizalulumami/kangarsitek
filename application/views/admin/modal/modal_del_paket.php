<?php
if (isset($p_data)) {
    foreach ($p_data as $dp) { ?>
<div class="modal fade" id="paketmodaldel<?= $dp['id_paket'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Paket Desain</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('opaket/delete_paket/') . $dp['id_paket'] ?>" class="btn btn-danger"><i
                        class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->
<?php }
} ?>