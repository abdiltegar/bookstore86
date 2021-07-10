<?php
include 'library/config.php';
include 'library/buku.php';

$buku = new Buku();
$id = $_GET['kode_buku'];
$data_buku = $buku->find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-cetak.css">
    <script src="js/jquery.js"></script>
    <title>Bookstore86 - Cetak <?php echo $data_buku['kode_buku']; ?></title>
</head>
<body onload="window.print();">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <img src="images/books.png" alt="" class="logo"><b> &nbsp; Bookstore 86</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br><br>
                <h4>INVOICE PEMBAYARAN</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span style="float:right;">Tanggal : <?php echo date("d M Y") ?></span>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <tr>
                            <td rowspan="6" class="text-center"><img src="images/buku/<?php echo $data_buku['cover'] ;?>" class="cetak-cover"></td>
                            <td>Kode Buku</td>
                            <td><?php echo $data_buku['kode_buku']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Buku</td>
                            <td><?php echo $data_buku['nama_buku']; ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?php echo $data_buku['nama_kategori']; ?></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td><?php echo $data_buku['penerbit']; ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td style="text-align:right">Rp. <?php echo number_format($data_buku['harga'], 0, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <td>Probabilitas Diskon</td>
                            <td style="text-align:right">Rp. <?php echo number_format(($data_buku['harga'] * 10 / 100), 0, ",", "."); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>