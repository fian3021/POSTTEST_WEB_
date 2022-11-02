<?php
    require 'config.php';
    
    // Menangkap id dari url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    };

    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
        "SELECT * FROM member_istorii WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $gender = $_POST['jenis_kelamin'];
        $fav = implode(",", $_POST['genre']);

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $foto_profil = "$nama.$ekstensi";
        
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, "Foto_Profil/".$foto_profil)){
            $result = mysqli_query($db, 
            "UPDATE member_istorii SET
            Email='$email',
            Nama='$nama',
            Usia='$usia',
            Gender='$gender',
            Genre_Favorit='".$fav."',
            Foto_Profil='$foto_profil'
            WHERE id='$id'
            ");

            if($result){
                echo "
                    <script>
                        alert('Data Berhasil Di Update');
                        document.location.href = 'joinmember.php';
                    </script>           
                ";
            }else{
                echo "
                    <script>
                        alert('Data Gagal Di Update');
                    </script>           
                ";
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
    <link rel="stylesheet" href="style.css">
    <title>Istorii Novela</title>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <div class="fContainer">
        <nav>
            <ul class="logo">
                <a href="/"><img src="logo-02.png" alt="logo"></a>
            </ul>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="joinmember.php">All Member</a></li>
                <li><a href="#">Genre</a></li>
                <li><a href="#">Update</a></li>
                <li><a href="aboutme.html" title="About Me">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="cari">
                <form action="joinmember.php" method="get">
                    <input class="search" type="text" name="search" placeholder="Search here...">	
                    <input class="button" type="submit" name="cari" value="Search">		
                </form>
            </ul>
            <ul class="logout">
                <a href="logout.php" title="Logout"><img src="https://cdn-icons-png.flaticon.com/512/4034/4034329.png" alt="logout"></a>
            </ul>
            <ul class="mode">
                <li class="ligth">Light<br>Dark</li>
                <input type="checkbox" onclick="ubahMode()">
            </ul>
        </nav>
    </div>
    <!-- NAVIGATION BAR END --> 
    
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- CONTENT 2 -->
        <div class="formJoin">
            <ul class="join">
                <li>Join Member to Get Your Own, Personalized Recommendations Novels</li>
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- form field di sini -->
                    <table>
                        <div class="form-1">
                            <label>Email</label>
                            <label> :</label>
                            <input type="email" name="email" placeholder="Masukkan Email..." value=<?=$row['Email']?>>
                        </div>
                        <div class="form-1">
                            <label>Nama</label>
                            <label>:</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap..." value=<?=$row['Nama']?>>
                        </div>
                        <div class="form-1">
                            <label>Usia</label>
                            <label>  :</label>
                            <input type="number" name="usia" min="12" placeholder="Masukkan Usia..." value=<?=$row['Usia']?>>
                        </div>
                        <div class="form-2">
                            <label>Jenis Kelamin</label>
                            <label>:</label>
                            <label><input type="radio" name="jenis_kelamin" value="Pria" /> Pria</label>
                            <label><input type="radio" name="jenis_kelamin" value="Wanita" /> Wanita</label>
                        </div>
                        <div  class="form-3">
                            <label>Genre Favorit</label>
                            <label>:</label>
                            <ul align="left">
                                <label class="form3">
                                    <input type="checkbox" name="genre[]" value="Romantis"/>  Romantis
                                    <input type="checkbox" name="genre[]" value="Horor"/>  Horor
                                    <input type="checkbox" name="genre[]" value="Komedi"/>  Komedi
                                    <input type="checkbox" name="genre[]" value="Inspiratif"/>  Inspiratif
                                    <input type="checkbox" name="genre[]" value="Sejarah"/>  Sejarah
                                    <input type="checkbox" name="genre[]" value="Misteri"/>  Misteri
                                    <input type="checkbox" name="genre[]" value="Petualangan"/>  Petualangan
                                </label>
                            </ul>
                        </div>
                        <div class="form-1">
                            <label>Upload Foto Profil: </label>
                            <input type="file" name="gambar" value=<?=$row['Foto_Profil']?>><br><br>
                        </div>
                        <div class="form">
                            <input type="submit" name="submit" class="submit" value="edit" />
                        </div>
                    </table>
                </form>
            </ul>
        </div>
    </div>
    <!-- MAIN CONTENT END -->
    
    <!-- FOOTER BAR -->
    <div class="footer">
        <p>Contact:</p>
        <div class="social-icons" align="center">
            <a href="http://wa.me/6281257069609" title="WhatsApp" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384007.png"></a>
            <a href="https://www.instagram.com/alfiananur3021/" title="Instagram" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2175/2175198.png"></a>
        </div>
        <div class="foot" align="center">© 2022 designed by Al Fiana Nur Priyanti. All Rights Reserved<br>Istorii Novela</div>
    </div>
    <!-- FOOTER BAR END -->

    <!-- JAVASCRIPT -->
    <script src="script.js"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>