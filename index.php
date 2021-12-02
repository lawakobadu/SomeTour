<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/splide.min.css">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <script src="assets/js/splide.min.js"></script>

    <title>SomeTour</title>
</head>
<body>

<!-- Content Pertama -->
    <section class="layer1" id="layer1">
        <nav>
            <a href="#"><img src="img/LOGO SOMETOUR.PNG"></a>
            <div class="nav-links">
                <i class='bx bx-x bx-sm' id="bx" onclick="hideMenu()"></i>
                <ul>
                    <form action="cari.php" method="post">
                    <li><a href="#">Home</a></li>
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
                    <li><a href="#layer4">Profile</a></li>
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
        <div class="content1">
            <h1 data-aos="fade-up">Tour around the West Sumatera
                with the new destination</h1><br>
            <p data-aos="fade-up">We believe in a travelling experience by providing our tour
                plan that suits your the best!</p><br><br>
            <a href="#layer2" class="explore-btn" data-aos="fade-up">Explore now</a>
        </div>
    </section>
        <br><br><br><br><br><br>

<!-- Content Kedua -->
    <section class="layer2" id="layer2">
        <div class="content2">
            <h1>Explore place around
                the West Sumatera</h1><br><br>
        </div>
            <div class="splide">
                <div class="splide__track">
                      <ul class="splide__list">
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="500"><img src="img/1-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="1000"><img src="img/2-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="1500"><img src="img/3-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="2000"><img src="img/4-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="2500"><img src="img/5-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="3000"><img src="img/6-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="3000"><img src="img/7-slide.jpg" alt=""></li>
                          <li class="splide__slide" data-aos="zoom-in" data-aos-duration="3000"><img src="img/8-slide.jpg" alt=""></li>
                      </ul>
                </div>
              </div>
    </section>

<!-- Content Ketiga -->
    <section class="layer3" id="layer3">
        <div class="content3">
            <div class="rectangle1" data-aos="fade-left" data-aos-duration="500"></div>
                <div class="rectangle2" data-aos="fade-right" data-aos-duration="1500">
                    <div class="main">
                        <div>
                            <h1>What are they said</h1><br><br><br><br><br>
                            <img src="img/1.png" alt="">
                        </div>
                        <div>
                            <p>We believe in a travelling experience by
                                providing tour plan that suits your the best!</p><br><br><br><br><br><br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Expedita pariatur maiores vero quis iste veritatis ratione? 
                                Ad illo maiores, cumque impedit, quia, nihil voluptatem 
                                explicabo rerum saepe eius eligendi. Alias?</p>
                                <div class="arrow">
                                    <i class='bx bx-left-arrow-alt bx-md'></i>
                                    <i class='bx bx-right-arrow-alt bx-md'></i>
                                </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>

<!-- Content Keempat -->
    <section class="layer4" id="layer4">
        <div class="content4">
            <div class="rectangle3" data-aos="fade-right" data-aos-duration="500">
                <div class="main">
                    <h1>About Us</h1>
                    <p>We believe in a travelling experience by
                        providing tour plan that suits your the best!</p>
                </div>
            </div>
                <div class="rectangle4" data-aos="fade-left" data-aos-duration="1500">
                    <div class="img-gallery">
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cowok.png" alt="">
                        </div>
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cowok.png" alt="">
                        </div>
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cowok.png" alt="">
                        </div>
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cewek.png" alt="">
                        </div>
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cewek.png" alt="">
                        </div>
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cewek.png" alt="">
                        </div>
                        <div class="img">
                            <i class='bx bxl-instagram bx-md'></i>
                            <img src="img/cewek.png" alt="">
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
        <br><br><br>

<!-- Content Kelima -->
    <section class="layer5" id="layer5">
        <div class="content5" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <div class="row">
                <div class="img">
                    <img src="img/6.png" alt="">
                </div>
                <div class="img">
                    <img src="img/7.png" alt="">
                </div>
                <div class="img">
                    <img src="img/8.png" alt="">
                </div>
            </div>
        </div>
    </section>
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
<script>
    var splide = new Splide( '.splide', {
        padding: '5rem',
        type: 'loop'
} );

splide.mount();
</script>
<script src="assets/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>