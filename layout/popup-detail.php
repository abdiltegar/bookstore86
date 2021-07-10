<div class="modal fade" id="modalDetailBuku" tabindex="-1" role="dialog" aria-labelledby="modalDetailBukuTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title" id="modalDetailBukuTitle">Detail Buku</h6>
            <button type="button" class="close btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <img src="images/books.png" alt="" class="logo"><b> &nbsp; BookStore 86</b>
                    </center>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <td rowspan="6" class="text-center"><img id="cover-detail" class="cetak-cover" style="width: 100px;"></td>
                                <td>Kode Buku</td>
                                <td id="kode_buku-detail"></td>
                            </tr>
                            <tr>
                                <td>Nama Buku</td>
                                <td id="nama_buku-detail"></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td id="nama_kategori-detail"></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td id="penerbit-detail"></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td id="harga-detail" style="text-align:right"></td>
                            </tr>
                            <tr>
                                <td>Harga Diskon</td>
                                <td id="diskon-detail" style="text-align:right"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <center><a id="btn-Cetak" target="_blank" class="btn btn-sm btn-success">Cetak</a></center>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>