<div class="modal fade" id="modalCreateBuku" tabindex="-1" role="dialog" aria-labelledby="modalCreateBukuTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCreateBukuTitle">Tambah Buku</h5>
        <button type="button" class="close btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="." method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kode_buku-create" class="col-form-label">Kode Buku :</label>
                <input type="text" name="kode_buku" class="form-control" id="kode_buku-create" required>
            </div>
            <div class="form-group">
                <label for="nama_buku-create" class="col-form-label">Nama Buku :</label>
                <input type="text" name="nama_buku" class="form-control" id="nama_buku-create" required>
            </div>
            <div class="form-group">
                <label for="cover-create" class="col-form-label">Foto Cover :</label>
                <input type="file" name="cover" class="form-control" id="cover-create" accept="image/*">
            </div>
            <div class="form-group">
                <label for="id_kategori-create" class="col-form-label">Kategori :</label>
                <select name="id_kategori" class="form-control" id="id_kategori-create">
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
                <label for="penerbit-create" class="col-form-label">Penerbit :</label>
                <input type="text" name="penerbit" class="form-control" id="penerbit-create" required>
            </div>
            <div class="form-group">
                <label for="harga-create" class="col-form-label">Harga :</label>
                <input type="number" name="harga" class="form-control" id="harga-create" required>
            </div>
            <br>
            <div class="form-group">
                <center>
                <button type="submit" name="btn-Create" class="btn btn-primary">Simpan</button>
                </center>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>