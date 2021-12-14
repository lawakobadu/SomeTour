<?php         include "koneksi.php";
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

    <title>Pencarian</title>
</head>
<body>
<div class="body">
    <nav>
        <a href="index.php"><img src="img/LOGO SOMETOUR.PNG"></a>
        <div class="nav-links">
            <i class='bx bx-x bx-sm' id="bx" onclick="hideMenu()"></i>
            <ul>
            <form action="cari.php" method="post">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Category<i class='bx bx-chevron-down'></i></a>
                        <div class="sub-category">
                            <ul>
                                <li><a href="alam.php">Alam</a></li>
                                <li><a href="sejarah.php">Sejarah</a></li>
                                <li><a href="maritim.php">Maritim</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="popular.php">Most Popular</a></li>
                    <li><a href="share.php">Share Your Story</a></li>
                    <li><a href="index.php#layer4">Profile</a></li>
                    <?php
                        $cari="";
                        if (isset($_POST['cari'])) {
                            $cari=$_POST['cari'];
                        }
                    ?>
                    <input type="text" name="cari" id="" class="search-txt hide" placeholder="Cari">
                    <i class='bx bx-search search-btn'></i>
                    </form>
            </ul>
        </div>
        <i class='bx bx-menu bx-sm' id="bx" onclick="showMenu()"></i>
    </nav><br>
    <div class="">
        <table border="4">
            <tr>
                <td>No</td>
                <td>Judul</td>
                <td>Jenis Wisata</td>
                <td>Gambar</td>
                    </tr>   
                    
        <?php
        if (isset($_POST['cari']) && $_POST['cari'] != "") {
            $keyword = $_POST['cari'];
            $query = "SELECT*FROM objek_wisata
            WHERE judul LIKE '%$keyword%'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        } else {
            $query = "SELECT * FROM objek_wisata";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        }

        $no=1;
        while ($data = mysqli_fetch_array($result)) {
               
            ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data["judul"];?></td>
                <td><?php echo $data["jenis_pariwisata"]?></td>
                <td><img src="img/<?php echo $data['gambar']; ?>" width="100" height="100">
                </td>
                
            </tr>
            <?php
        }
        ?>
            </table>
	</div>
<br><br><br>
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