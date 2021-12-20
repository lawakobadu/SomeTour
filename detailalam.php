<?php
$host       = 'localhost';
$user       = 'root';
$password   = '';
$db         = 'pariwisata';

$con = new mysqli($host, $user, $password, $db);

//ambil rata-rata jumlah rating
$q      = $con->query("SELECT AVG(rate) AS jml FROM rating")->fetch_assoc();
$hasil  = ceil($q['jml']);

//cek ip user
$cek    = $con->query("SELECT * FROM `rating` WHERE ipuser = '" . md5($_SERVER['REMOTE_ADDR']) . "'");

if ($cek->num_rows > 0) {
    $cek = $cek->fetch_assoc();
    $c   = $cek['rate'];
}

?>
<?php
include_once("koneksi.php");
$kode_wisata = $_GET['kode_wisata'];
$result = mysqli_query($conn, "SELECT judul, alamat, jam_operasional, deskripsi, gambar FROM objek_wisata WHERE kode_wisata='$kode_wisata'") or die (mysqli_error($conn));

if (isset($_POST['cari'])){
    $keyword = $_POST['cari'];
    $result = mysqli_query($conn, "SELECT judul, alamat, jam_operasional, deskripsi, gambar FROM objek_wisata WHERE kode_wisata='$kode_wisata' AND judul LIKE '%".$keyword."%'") or die (mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="/SomeTour/assets/css/style.css">

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
        <a href="/SomeTour/index.php"><img src="/SomeTour/img/LOGO SOMETOUR.PNG"></a>
        <div class="nav-links">
            <i class='bx bx-x bx-sm' id="bx" onclick="hideMenu()"></i>
            <ul>
                <form action="" method="post">
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
    </nav>
    <div class="content-detail">
    <?php  
    while($data = mysqli_fetch_array($result)) { 
        $gambar = $data['gambar'];
        $judul = $data['judul'];
        $alamat = $data['alamat'];
        $jam = $data['jam_operasional'];
        $deskripsi = $data['deskripsi'];

        echo "<div>";
        echo "<h1 style='font-size: 42px; margin-left: 2%;'>".$judul."</h1>";
        echo "<div class='rectangle-content'>";
        echo "<p>Lokasi : ".$alamat."</p><br>";
        echo "<p>Jam_Operasional : ".$jam."</p><br>";
        echo "<p>Deskripsi : <br>".$deskripsi."</p><br>";
        echo "</div>";
        echo "</div>";
        echo "<img src='img/".$gambar."' class='img-category'>";
        echo "</div>";
        }
    ?>
    <div id="star">
                <?php
                for ($i = 0; $i < $hasil; $i++) {
                    echo '<span class="on"><i class="fa fa-star"></i></span>';
                }

                for ($i = 5; $i > $hasil; $i--) {
                    echo '<span class="off"><i class="fa fa-star"></i></span>';
                }
                ?>
        </div>
    <form id='rating' class="rating">

        <input type="radio" class="rate" id="star5" name="rating" value="5" <?php if (isset($c) && $c == '5') {
                                                                                echo 'checked';
                                                                            } ?> />
        <label for="star5" title="Sempurna - 5 Bintang"></label>

        <input type="radio" class="rate" id="star4" name="rating" value="4" <?php if (isset($c) && $c == '4') {
                                                                                echo 'checked';
                                                                            } ?> />
        <label for="star4" title="Sangat Bagus - 4 Bintang"></label>

        <input type="radio" class="rate" id="star3" name="rating" value="3" <?php if (isset($c) && $c == '3') {
                                                                                echo 'checked';
                                                                            } ?> />
        <label for="star3" title="Bagus - 3 Bintang"></label>

        <input type="radio" class="rate" id="star2" name="rating" value="2" <?php if (isset($c) && $c == '2') {
                                                                                echo 'checked';
                                                                            } ?> />
        <label for="star2" title="Tidak Buruk - 2 Bintang"></label>

        <input type="radio" class="rate" id="star1" name="rating" value="1" <?php if (isset($c) && $c == '1') {
                                                                                echo 'checked';
                                                                            } ?> />
        <label for="star1" title="Buruk - 1 Bintang"></label>

    </form>
        </div>
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
    <script type="text/javascript" src="./assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#rating .rate").click(function() {

                $.ajax({
                    url: "./proses.php",
                    method: "POST",
                    data: {
                        rate: $(this).val()
                    },
                    success: function(obj) {
                        var obj = obj.split('|');

                        $('#star' + obj[0]).attr('checked');
                        $('#hasil').html('Rating ' + obj[1] + '.0');
                        $('#star').html(obj[2]);
                        alert("terima kasih atas penilaian anda");
                    }
                });
            });
        });
    </script>
    <script src="assets/js/script.js"></script>
</body>
</html>