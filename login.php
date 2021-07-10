<br><br>
<?php
include 'layout/popup-create.php';
// include 'layout/popup-update.php';
// include 'layout/popup-delete.php';
?>
<center>
    <img src="images/books.png" alt="" class="logo">
    <br>
    <h5 class="text-white"> &nbsp; Bookstore 86</h5>
    <br>
</center>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><center>Login</center></div>
            <div class="card-body">
                <form action="." method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email-login" class="form-control" id="email-login" placeholder="Masukkan email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password-login" class="form-control" id="password-login" placeholder="Password">
                    </div>
                    <br>
                    <center>
                    <button type="submit" name="btn-login" class="btn btn-primary">Masuk</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    </div>
</div>