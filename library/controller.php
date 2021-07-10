<?php 
if(isset($_POST['btn-login'])){
    $email = $_POST['email-login'];
    $password = $_POST['password-login'];
    $statusLogin = $user->login($email, $password);
    if($statusLogin['status'] == 1){
        header('Location:.');
    }else{
        ?>
        <script>alert("<?php echo $statusLogin['message']; ?>");</script>
        <?php
    }
}

if(isset($_POST['btn-Create'])){
    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $nama_file = "";
    $id_kategori = $_POST['id_kategori'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

    $sukses_upload = true;

    if($_FILES["cover"] != null && $_FILES["cover"]["tmp_name"] != null){
        $original_file = $target_dir . basename($_FILES["cover"]["name"]);
        $imageFileType = strtolower(pathinfo($original_file,PATHINFO_EXTENSION));

        $nama_file = "buku_".time().".".$imageFileType;
        $target_file = $target_dir . $nama_file;
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
            // echo "The file ". $nama_file. " has been uploaded.";
        } else {
            $sukses_upload = false;
            // echo "Sorry, there was an error uploading your file.";
        }
    }

    if($sukses_upload){
        $cover = $nama_file;
        $create_buku = $buku->create($kode_buku, $cover, $nama_buku, $id_kategori, $penerbit, $harga);
        if($create_buku['status'] == 1){
            ?>
            <script>
                alert("<?php echo $create_buku['message']; ?>");
                // window.location.reload();
            </script>
            <?php
            @header('Location:.');
        }else{
            ?>
            <script>
                alert("<?php echo $create_buku['message']; ?>");
            </script>
            <?php
        }
    }else{
        ?>
        <script>
            alert("Gagal mengupload cover. pastikan file yang anda upload adalah file gambar.");
        </script>
        <?php
    }

}

if(isset($_POST['btn-Update'])){
    $kode_buku_before = $_POST['kode_buku_before'];
    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $nama_file = "";
    $id_kategori = $_POST['id_kategori'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

    $sukses_upload = true;

    if($_FILES["cover"] != null && $_FILES["cover"]["tmp_name"] != null){
        $thisBuku = $buku->find($kode_buku_before);
        $cover = $thisBuku['cover'];
        if($cover != null || $cover != ""){
            if (file_exists($target_dir . $cover)) {
                unlink($target_dir . $cover);
            }
        }

        $original_file = $target_dir . basename($_FILES["cover"]["name"]);
        $imageFileType = strtolower(pathinfo($original_file,PATHINFO_EXTENSION));

        $nama_file = "buku_".time().".".$imageFileType;
        $target_file = $target_dir . $nama_file;
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
            // echo "The file ". $nama_file. " has been uploaded.";
        } else {
            $sukses_upload = false;
            // echo "Sorry, there was an error uploading your file.";
        }
    }

    if($sukses_upload){
        $cover = $nama_file;
        $update_buku = $buku->update($kode_buku_before, $kode_buku, $cover, $nama_buku, $id_kategori, $penerbit, $harga);
        if($update_buku['status'] == 1){
            ?>
            <script>
                alert("<?php echo $update_buku['message']; ?>");
                // window.location.reload();
            </script>
            <?php
            @header('Location:.');
        }else{
            ?>
            <script>
                alert("<?php echo $update_buku['message']; ?>");
            </script>
            <?php
        }
    }else{
        ?>
        <script>
            alert("Gagal mengupload cover. pastikan file yang anda upload adalah file gambar.");
        </script>
        <?php
    }

}

if(isset($_POST['btn-Delete'])){
    $kode_buku = $_POST['kode_buku'];
    $delete_buku = $buku->delete($kode_buku);
    if($delete_buku['status'] == 1){
        ?>
        <script>
            alert("<?php echo $delete_buku['message']; ?>");
            // window.location.reload();
        </script>
        <?php
        @header('Location:.');
    }else{
        ?>
        <script>
            alert("<?php echo $delete_buku['message']; ?>");
        </script>
        <?php
    }
}
?>