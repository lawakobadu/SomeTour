<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/splide.min.css">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <script src="/assets/js/splide.min.js"></script>

    <title>SomeTour</title>
</head>
<body>

<header>
    <nav>
        <a href="#"><img src="./img/LOGO SOMETOUR.PNG"></a>
        <div class="nav-links">
            <i class='bx bx-x bx-sm' id="bx" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php?p=home">Home</a></li>
                <li><a href="#">Category<i class='bx bxs-chevron-down'></i></a>
                    <div class="sub-category">
                        <ul>
                            <li><a href="index.php?p=alam">Alam</a></li>
                            <li><a href="/sejarah.html">Sejarah</a></li>
                            <li><a href="/maritim.html">Maritim</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Most Popular</a></li>
                <li><a href="#">Share Your Story</a></li>
                <li><a href="#layer4">Profile</a></li>
                <li><a href="index.php?p=login">Login</a></li>
                <li>
                    <div class="search">
                        <input type="text" name="" id="" class="search-txt hide" placeholder="Cari">
                        <i class='bx bx-search search-btn'></i>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

  <?php   
    // jika index pada nav diatas mendpatkan (get) p=... maka jalankan script dibawah
  if(@$_GET['p']==""){
    include_once 'page/home.php';
}
elseif(@$_GET['p']=="home"){
    include_once 'page/home.php';
}
elseif(@$_GET['p']=="alam"){
    include_once 'page/alam.php';
}
elseif(@$_GET['p']=="team"){
    include_once 'page/team.php';
}
elseif(@$_GET['p']=="popular"){
    include_once 'page/popular.php';
}
elseif(@$_GET['p']=="story"){
    include_once 'page/story.php';
}
elseif(@$_GET['p']=="login"){
    include_once 'page/login.php';
}
elseif(@$_GET['p']=="register"){
    include_once 'page/register.php';
}
elseif(@$_GET['p']=="logout"){
    include_once 'page/logout.php';
}
?>

<footer>
    <div class="row-1">
        <div class="col-1">
            <img src="/img/LOGO SOMETOUR.PNG" alt="">
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
<script>
    var splide = new Splide( '.splide', {
        padding: '5rem',
        type: 'loop'
    } );

    splide.mount();
</script>
<script src="/assets/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>