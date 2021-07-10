<div class="modal fade" id="modalDeleteBuku" tabindex="-1" role="dialog" aria-labelledby="modalDeleteBukuTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modalDeleteBukuTitle">Hapus Buku</h6>
        <button type="button" class="close btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="." method="post" enctype="multipart/form-data">
            <input type="hidden" name="kode_buku" id="kode_buku-delete">
            Apakah anda yakin ingin menghapus buku <span id="nama_buku-delete"></span> ini ?
            <br>
            <div class="form-group">
                <center>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" name="btn-Delete" class="btn btn-sm btn-danger">Hapus</button>
                </center>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>