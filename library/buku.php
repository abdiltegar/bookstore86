<?php 
class Buku{
    public function getAll(){
        include 'config.php';
        $respon['total'] = 0;
        $respon['data'] = [];

        $query = mysqli_query($koneksi, "SELECT b.*, k.nama_kategori FROM buku as b LEFT JOIN kategori_buku as k ON b.id_kategori = k.id_kategori ORDER BY b.kode_buku ASC");
        if(mysqli_num_rows($query) > 0){
            $respon['total'] = mysqli_num_rows($query);
            $i = 0;
            while ($item = mysqli_fetch_assoc($query)){
                $respon['data'][$i] = $item;
                $i++;
            }
        }
        return $respon;
    }

    public function getKategori(){
        include 'config.php';
        $respon = [];
        $query = mysqli_query($koneksi, "SELECT * FROM kategori_buku ORDER BY nama_kategori ASC");
        if(mysqli_num_rows($query) > 0){
            $i = 0;
            while ($item = mysqli_fetch_assoc($query)){
                $respon[$i] = $item;
                $i++;
            }
        }
        return $respon;
    }

    public function find($kode_buku){
        include 'config.php';
        $respon = [];
        $query = mysqli_query($koneksi, "SELECT b.*, k.nama_kategori FROM buku as b LEFT JOIN kategori_buku as k ON b.id_kategori = k.id_kategori WHERE kode_buku = '".$kode_buku."'");
        if(mysqli_num_rows($query) > 0){
            while ($item = mysqli_fetch_assoc($query)){
                $respon = $item;
            }
        }
        return $respon;
    }

    public function create($kode_buku, $cover, $nama_buku, $id_kategori, $penerbit, $harga){
        include 'config.php';
        $respon['status'] = 0;
        $respon['message'] = "";

        $query = mysqli_query($koneksi, "INSERT INTO buku(kode_buku, cover, nama_buku, id_kategori, penerbit, harga) VALUES('".$kode_buku."', '".$cover."', '".$nama_buku."', ".$id_kategori.", '".$penerbit."', ".$harga.")");
        if($query){
            $respon['status'] = 1;
            $respon['message'] = "Berhasil menambahkan data";
        }else{
            $respon['status'] = 0;
            $respon['message'] = "Gagal menambahkan data !";
        }
        return $respon;
    }

    public function update($kode_before, $kode_buku, $cover, $nama_buku, $id_kategori, $penerbit, $harga){
        include 'config.php';
        $respon['status'] = 0;
        $respon['message'] = "";

        if($cover == null || $cover == ""){
            $thisBuku = self::find($kode_buku);
            $cover = $thisBuku['cover'];
        }

        $query = mysqli_query($koneksi, "UPDATE buku SET kode_buku='".$kode_buku."', cover='".$cover."', nama_buku='".$nama_buku."', id_kategori=".$id_kategori.", penerbit='".$penerbit."', harga=".$harga." WHERE kode_buku='".$kode_before."'");
        if($query){
            $respon['status'] = 1;
            $respon['message'] = "Berhasil mengubah data";
        }else{
            $respon['status'] = 0;
            $respon['message'] = "Gagal mengubah data !";
        }
        return $respon;
    }

    public function delete($kode_buku){
        include 'config.php';
        $respon['status'] = 0;
        $respon['message'] = "";

        $thisBuku = self::find($kode_buku);
        $cover = $thisBuku['cover'];
        if($cover != null || $cover != ""){
            if (file_exists($target_dir . $cover)) {
                unlink($target_dir . $cover);
            }
        }

        $query = mysqli_query($koneksi, "DELETE FROM buku WHERE kode_buku='".$kode_buku."'");
        if($query){
            $respon['status'] = 1;
            $respon['message'] = "Berhasil menghapus data";
        }else{
            $respon['status'] = 0;
            $respon['message'] = "Gagal menghapus data !";
        }
        return $respon;
    }
}
?>