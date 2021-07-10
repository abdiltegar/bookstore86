<?php
session_start();
$target_dir = "images/buku/";

include 'library/user.php';
include 'library/buku.php';

$buku = new Buku();
$allKategori = $buku->getKategori();
$user = new User();

include 'library/controller.php';

include 'layout/header.php';
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null){
    include 'home.php';
}else{
    include 'login.php';
}
include 'layout/footer.php';
?>