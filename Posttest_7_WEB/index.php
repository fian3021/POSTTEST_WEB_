<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "
        <script>
            alert('Akses ditolak, silahkan login dulu');
            document.location.href = 'login.php';
        </script>";
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
<body onload="popUp()">
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
        <div class="content-1">
            <div>
                <ul class="opening">
                    <li class="text1">Istorii Novela</li>
                    <li class="text2" align="right">Rekomendasi novel terbaik dan menarik</li>
                </ul>
                <ul>
                    <img id="book" src="https://www.freeiconspng.com/thumbs/book-png/book-png-26.png">
                </ul>
            </div>
            <div class="klikJoin">
                <a href="formJoin.php" class="klikjoin">Join Member</a>
            </div>
        </div>
        <!-- CONTENT 3 -->
        <div class="content-3">
            <ul class="type-novel">
                <li class="novel">
                    <a href="/"><img src="https://i.pinimg.com/474x/f8/ae/59/f8ae595b95a1021fe7ae98a5d3a16e1c.jpg"></a>
                    <a href="/" align="center">Rekomendasi Novel Romantis<br>Best Seller September 2022</a>
                </li>
                <li class="novel">
                    <a href="/"><img src="https://www.bukukita.com/babacms/displaybuku/116549_f.jpg"></a>
                    <a href="/" align="center">Rekomendasi Novel Horor 2022</a>
                </li>
                <li class="novel">
                    <a href="/"><img src="https://cdn.idntimes.com/content-images/community/2022/03/15876872-1136119859819069-7953010754687336448-n-7a18aeb9ed1bf5b2b7ad028711b31701-dec4e3b4361ce2d2e0dc4bc968a2514c.jpg"></a>
                    <a href="/" align="center">Rekomendasi Novel Komedi yang<br>Bikin Susah Berhenti Ketawa</a>
                </li>
                <li class="novel">                
                    <a href="/"><img src="https://media.karousell.com/media/photos/products/2019/07/12/novel_inspiratif_fajar_yang_menanti_senja_1562904108_cce24be3_progressive.jpg"></a>
                    <a href="/" align="center">Novel Inspiratif Tentang Kehidupan</a>
                </li>
            </ul>
            <ul class="type-novel">
                <li class="novel">
                    <a href="/"><img src="https://www.99.co/blog/indonesia/wp-content/uploads/2021/07/Tetralogi-Buru.jpeg"></a>
                    <a href="/" align="center">Novel Sejarah Indonesia Terbaik</a>
                </li>
                <li class="novel">
                    <a href="/"><img src="https://pict.sindonews.net/dyn/600/pena/sindo-article/original/2021/09/09/FOTO%201%20-%20sumber%20Noura%20Books.jpg"></a>
                    <a href="/" align="center">Rekomendasi Novel Misteri <br> Bikin Asah Otak</a>
                </li>
                <li class="novel">
                    <a href="/"><img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1500357585/08d3481eb488a0ea287885e9435a9bad--wild-book-into-the-wild_qonzv0.jpg"></a> 
                    <a href="/" align="center">Rekomendasi Novel Petualangan</a>
                </li>
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