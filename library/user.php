<?php 
class User{
    public function login($email, $password){
        include 'config.php';
        $respon['status'] = 0;
        $respon['message'] = "";

        $encrypt_pass_md5 = md5($password);
        $query_user = mysqli_query($koneksi, "SELECT * FROM user WHERE email='".$email."' AND password='".$encrypt_pass_md5."'");
        if(mysqli_num_rows($query_user) > 0){
            while ($data_user = mysqli_fetch_assoc($query_user)){
                $_SESSION['user_id'] = $data_user['id_user'];
                $_SESSION['user_email'] = $data_user['email'];
                $_SESSION['user_nama'] = $data_user['nama'];
            }
            $respon['status'] = 1;
            $respon['message'] = "Login berhasil";
        }else{
            $respon['status'] = 0;
            $respon['message'] = "Login Gagal. Pastikan username dan password anda sudah benar !";
        }
        return $respon;
    }

    public function find($id_user){
        include 'config.php';
        $query_user = mysqli_query($koneksi, "SELECT * FROM user as u LEFT JOIN role as r ON u.role = r.id_role WHERE u.id_user='".$id_user."'");
        $respon = new stdClass();
        while ($data_user = mysqli_fetch_assoc($query_user)){
            $respon->id_user = $data_user->id_user;
            $respon->email = $data_user->email;
            $respon->nama = $data_user->nama;
            $respon->id_role = $data_user->role;
            $respon->nama_role = $data_user->nama_role;
        }
        return $respon;
    }
}
?>