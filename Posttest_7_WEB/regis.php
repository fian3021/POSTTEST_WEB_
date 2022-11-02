<?php
    require 'config.php';

    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        //cek username sudah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE Username = '$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo 
                "<script>
                    alert('Username telah digunakan!');
                </script>";
        }else{
            //cek konfirmasi password
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun(Email, Username, Pass)
                        VALUES ('$email','$username','$password')";
                $result = $db->query($query);
                if($result){
                    echo 
                        "<script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'login.php';
                        </script>";
                }else{
                    echo 
                        "<script>
                            alert('Registrasi Gagal');
                        </script>";
                }
            }else{
                echo 
                    "<script>
                        alert('Konfirmasi Password Salah!');
                    </script>";
            }
        }
    }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <!-- NAVIGATION BAR -->
    <div class="fContainer">
        <nav>
            <ul class="logo">
                <a href="/"><img src="logo-02.png" alt="logo"></a>
            </ul>
        </nav>
    </div>
    <!-- NAVIGATION BAR END -->

    <!-- FORM REGIS -->
    <div class="content">
        <h1>REGISTER</h1>
        <form id="regis-form" action="" method="post">
            <div class="txt_field">
                <label>Email</label>
                <input type="text" name = "email">
            </div>
            <div class="txt_field">
                <label>Username</label>
                <input type="text" name = "username">
            </div>
            <div class="txt_field">
                <label>Password</label>
                <input type="password" name = "password">
            </div>
            <div class="txt_field">
                <label>Konfirmasi Password</label>
                <input type="password" name = "konfirmasi">
            </div>
            <input type="submit" name = "regis" value="Register">
        </form>
        <p>Sudah memiliki akun?
            <a href="login.php">Login</a>
        </p>
    </div>

</body>
</html>