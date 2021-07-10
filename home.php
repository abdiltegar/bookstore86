<?php
include 'layout/popup-create.php';
include 'layout/popup-detail.php';
include 'layout/popup-update.php';
include 'layout/popup-delete.php';
?>
<center>
    <img src="images/books.png" alt="" class="logo">
    <br>
    <h5 class="text-white"> &nbsp; Bookstore 86</h5>
    <br>
</center>
<div class="row">
    <!-- <div class="col-md-1">
    </div> -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><center>Data Buku</center></div>
            <div class="card-body">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalCreateBuku">Tambah</button>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm" id="tableBarang">
                        <thead>
                            <tr style="text-align:center">
                                <th>Gambar Cover</th>
                                <th>Kode Buku</th>
                                <th>Nama Buku</th>
                                <th>Kategori</th>
                                <th>Penerbit</th>
                                <th>Harga</th>
                                <th>Harga Diskon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $bukuAll = $buku->getAll();
                        foreach($bukuAll['data'] as $buku){
                            ?>
                            <tr>
                                <td style="text-align:center"><img class="cover" src="images/buku/<?php echo $buku['cover']; ?>"></td>
                                <td><?php echo $buku['kode_buku']; ?></td>
                                <td><?php echo $buku['nama_buku']; ?></td>
                                <td><?php echo $buku['nama_kategori']; ?></td>
                                <td><?php echo $buku['penerbit']; ?></td>
                                <td style="text-align:right">Rp. <?php echo number_format($buku['harga'], 0, ",", "."); ?></td>
                                <td style="text-align:right">Rp. <?php echo number_format(($buku['harga'] - ($buku['harga'] * 10 / 100)), 0, ",", "."); ?></td>
                                <td class="text-center" style="white-space: nowrap;">
                                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalDetailBuku" data-kode_buku="<?php echo $buku['kode_buku']; ?>" data-nama_buku="<?php echo $buku['nama_buku']; ?>" data-nama_kategori="<?php echo $buku['nama_kategori']; ?>" data-penerbit="<?php echo $buku['penerbit']; ?>" data-harga="Rp. <?php echo number_format($buku['harga'], 0, ",", "."); ?>" data-diskon="Rp. <?php echo number_format(($buku['harga'] - ($buku['harga'] * 10 / 100)), 0, ",", "."); ?>" data-cover="<?php echo $buku['cover']; ?>">Detail</button>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUpdateBuku" data-kode_buku="<?php echo $buku['kode_buku']; ?>" data-nama_buku="<?php echo $buku['nama_buku']; ?>" data-id_kategori="<?php echo $buku['id_kategori']; ?>" data-penerbit="<?php echo $buku['penerbit']; ?>" data-harga="<?php echo $buku['harga']; ?>">Edit</button>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalDeleteBuku" data-kode_buku="<?php echo $buku['kode_buku']; ?>" data-nama_buku="<?php echo $buku['nama_buku']; ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <script>
                    $(document).ready(function(){
                        $('#tableBarang').dataTable();
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-md-1">
    </div> -->
</div>
<script>
$(document).ready(function(){
    $('#modalDetailBuku').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var kode_buku = button.data('kode_buku')
        var nama_buku = button.data('nama_buku')
        var nama_kategori = button.data('nama_kategori')
        var penerbit = button.data('penerbit')
        var harga = button.data('harga')
        var diskon = button.data('diskon')
        var cover = button.data('cover')
        $('#kode_buku-detail').text(kode_buku)
        $('#nama_buku-detail').text(nama_buku)
        $('#nama_kategori-detail').text(nama_kategori)
        $('#penerbit-detail').text(penerbit)
        $('#harga-detail').text(harga)
        $('#diskon-detail').text(diskon)
        $('#cover-detail').attr('src','images/buku/'+cover)
        $('#btn-Cetak').attr('href','print.php?kode_buku='+kode_buku)
    });

    $('#modalUpdateBuku').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var kode_buku = button.data('kode_buku')
        var nama_buku = button.data('nama_buku')
        var id_kategori = button.data('id_kategori')
        var penerbit = button.data('penerbit')
        var harga = button.data('harga')
        $('#kode_buku-update').val(kode_buku)
        $('#kode_buku_before-update').val(kode_buku)
        $('#nama_buku-update').val(nama_buku)
        $('#id_kategori-update').val(id_kategori)
        $('#penerbit-update').val(penerbit)
        $('#harga-update').val(harga)
    });

    $('#modalDeleteBuku').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var kode_buku = button.data('kode_buku')
        var nama_buku = button.data('nama_buku')
        $('#kode_buku-delete').val(kode_buku)
        $('#nama_buku-delete').text(nama_buku)
    });
});
</script>