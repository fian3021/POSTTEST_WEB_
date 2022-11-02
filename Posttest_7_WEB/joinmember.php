<?php
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM member_istorii");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="joinmember.css">
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
        <!-- CONTENT 1 -->
        <div class="table-member">
            <h1>Member of Istorii Novela</h1>
            <?php 
            if(isset($_GET['cari'])){
                $search = $_GET['search'];
            }
            ?>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Gender</th>
                    <th>Genre Favorit</th>
                    <th>Tanggal Join</th>
                    <th>Foto Profil</th>
                    <th colspan='2'>ACTION</th>
                </tr>
                <?php
                    if(isset($_GET['cari'])){
                        $search = $_GET['search'];
                        $result = mysqli_query($db, "SELECT * FROM member_istorii WHERE Nama LIKE '%".$search."%'");
                    }else{
                        $result = mysqli_query($db, "SELECT * FROM member_istorii");
                    }
                    $member = [];
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)){
                        $member[] = $row;
                ?>
                <tr>
                    <td align="center" class="no"><?=$i;?></td>
                    <td><?=$row['Email']?></td>
                    <td><?=$row['Nama']?></td>
                    <td align="center" class="no"><?=$row['Usia']?></td>
                    <td><?=$row['Gender']?></td>
                    <td><?=$row['Genre_Favorit']?></td>
                    <td align="center"><?=$row['Tanggal_Join']?></td>
                    <td align="center"><img src="Foto_Profil/<?=$row['Foto_Profil']?>" alt="" width="90px"></td>
                    <td align="center" class="edit"><a href="edit.php?id=<?=$row['id']?>"><b>EDIT</b></a></td>
                    <td align="center" class="hapus"><a href="hapus.php?id=<?=$row['id']?>"><b>HAPUS</b></a></td>
                </tr>
                <?php
                    $i++;
                    }
                ?>
            </table>
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