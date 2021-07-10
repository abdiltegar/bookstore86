<div class="modal fade" id="modalUpdateBuku" tabindex="-1" role="dialog" aria-labelledby="modalUpdateBukuTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUpdateBukuTitle">Edit Buku</h5>
        <button type="button" class="close btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="." method="post" enctype="multipart/form-data">
            <input type="hidden" name="kode_buku_before" id="kode_buku_before-update">
            <div class="form-group">
                <label for="kode_buku-update" class="col-form-label">Kode Buku :</label>
                <input type="text" name="kode_buku" class="form-control" id="kode_buku-update" required>
            </div>
            <div class="form-group">
                <label for="nama_buku-update" class="col-form-label">Nama Buku :</label>
                <input type="text" name="nama_buku" class="form-control" id="nama_buku-update" required>
            </div>
            <div class="form-group">
                <label for="cover-update" class="col-form-label">Foto Cover :</label>
                <input type="file" name="cover" class="form-control" id="cover-update" accept="image/*">
                <i>Kosongkan jika tidak ingin merubah foto cover</i>
            </div>
            <div class="form-group">
                <label for="id_kategori-update" class="col-form-label">Kategori :</label>
                <select name="id_kategori" class="form-control" id="id_kategori-update">
                    <option value="">-- Pilih Kategori --</option>
                    <?php 
                    foreach($allKategori as $kategori){
                        ?>
                        <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="penerbit-update" class="col-form-label">Penerbit :</label>
                <input type="text" name="penerbit" class="form-control" id="penerbit-update" required>
            </div>
            <div class="form-group">
                <label for="harga-update" class="col-form-label">Harga :</label>
                <input type="number" name="harga" class="form-control" id="harga-update" required>
            </div>
            <br>
            <div class="form-group">
                <center>
                <button type="submit" name="btn-Update" class="btn btn-primary">Simpan</button>
                </center>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>