<?php
include_once("koneksi.php");
$result = mysqli_query($conn, "SELECT judul, gambar, jenis_pariwisata FROM objek_wisata WHERE jenis_pariwisata='alam'") or die (mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Alam</title>
</head>
<body>
<div class="body">
    <nav>
        <a href="index.php"><img src="img/LOGO SOMETOUR.PNG"></a>
        <div class="nav-links">
            <i class='bx bx-x bx-sm' id="bx" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Category<i class='bx bxs-chevron-down'></i></a>
                    <div class="sub-category">
                        <ul>
                            <li><a href="#">Alam</a></li>
                            <li><a href="sejarah.php">Sejarah</a></li>
                            <li><a href="maritim.php">Maritim</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Most Popular</a></li>
                <li><a href="#">Share Your Story</a></li>
                <li><a href="#layer4">Profile</a></li>
                <li>
                    <div class="search">
                        <input type="text" name="" id="" class="search-txt hide" placeholder="Cari">
                        <i class='bx bx-search search-btn'></i>
                    </div>
                </li>
            </ul>
        </div>
        <i class='bx bx-menu bx-sm' id="bx" onclick="showMenu()"></i>
    </nav><br><br><br>
    <div class="content">
    <?php  
    while($data = mysqli_fetch_array($result)) { 
        $gambar = $data['gambar'];
        $judul = $data['judul'];
        echo "<div class='img-sub'>";
        echo "<tr>";
        echo "<td>
                <p class='p-sub'>".$judul."</p>
                <img src='img/alam/".$gambar.".png' class='img-category'>
            </td>";
        echo "</tr>";
        echo "</div>";   
    }
    ?>
    </div>
</div>

    <footer>
        <div class="row-1">
            <div class="col-1">
                <img src="img/LOGO SOMETOUR.PNG" alt="">
                <i class='bx bxl-twitter bx-sm'></i>
                <i class='bx bxl-facebook bx-sm'></i>
                <i class='bx bxl-instagram bx-sm' ></i>
                <i class='bx bxl-youtube bx-sm' ></i>
            </div>
            <div class="col-2"></div>
            <div class="col-3">
                <p>Syarat dan Ketentuan</p>
                <p>|</p>
                <p>Contact Us</p>
            </div>
        </div><br><hr>
        <div class="row-2">
            <p>© 2021 Fakultas Teknologi Informasi - Universitas Andalas</p>
        </div>
    </footer>

    <script>
        var navlinks = document.getElementById("navlinks")
        let input = document.querySelector(".search-txt"),
            btn = document.querySelector(".search-btn")
    
        btn.onclick = () =>{
            input.classList.toggle("hide")
        }
    
        function showMenu(){
            navlinks.style.right = "0";
        }
    
        function hideMenu(){
            navlinks.style.right = "-100%";
        }
    </script>
    <script src="assets/js/splide.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>