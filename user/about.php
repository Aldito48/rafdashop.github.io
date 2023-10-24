<?php
    require_once "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Rafda Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styleabout.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CDNJS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Poppins:wght@300&family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script:wght@700&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Poppins:wght@300&family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script:wght@700&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Nosifer&family=Poppins:wght@300&family=Young+Serif&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1500">
        <a href="home.php" class="logo">
            Rafda Shop
         </a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <nav class="navbar">

            <a href="home.php" style="--i:0" class="active" class="nav_item"><i class='bx bxs-home-smile' ></i>Home</a>
            <a href="about.php" style="--i:1" class="nav_item"><i class='bx bxs-info-circle' ></i>About</a>
            <a href="home.php" class="nav-center">
               Rafda Shop
            </a>
            <a href="product.php" style="--i:2" class="nav_item"><i class='bx bxs-shopping-bag'></i>Product</a>
            <a href="contact.php" style="--i:4" class="nav_item"><i class='bx bxs-phone' ></i>Contact</a>
        </nav>
    </header>
    
    <!-- Service -->
        <section id="service">
            <div class="row">
            <h2 class="section-heading" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" >Our Services</h2>
            </div>
            <div class="row">
            <div class="column" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
                <div class="card">
                <div class="icon-wrapper">
                    <i class='bx bx-network-chart'></i>
                </div>
                <h3>Affiliate Services</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
                </div>
            </div>
            <div class="column" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="2500">
                <div class="card">
                <div class="icon-wrapper">
                    <i class='bx bxs-chalkboard'></i>
                </div>
                <h3>Promotional Services</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
                </div>
            </div>
            <div class="column" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="3000">
                <div class="card">
                <div class="icon-wrapper">
                    <i class='bx bxs-paper-plane'></i>
                </div>
                <h3>User Service</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                    consequatur necessitatibus eaque.
                </p>
                </div>
            </div>
            </div>
        </section>
    <!-- End Service -->

    <!-- About -->
        <section id="about">
            <div class="team-heading" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                <h3>Our Team</h3>
            </div>

            <div class="swiper mySwiper" data-aos="zoom-out" data-aos-delay="1000" data-aos-duration="2000">
                <div class="swiper-wrapper">
                    
                    <!-- Slider 1 -->
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="t-b-img">
                                    <img src="img/fotoRaja.png" alt="">
                                </div>
                                <div class="t-b-text">
                                    <strong>Raja Yusuf Siregar</strong>
                                    <span>Team Leader</span>
                                    <div class="team-sosial">
                                        <a href="https://instagram.com/rajayusuf18_" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                                        <a href="https://wa.me/62895601743741" target="_blank"><i class='bx bxl-whatsapp-square'></i></a>
                                        <a href="mailto:rajayusuffa@gmail.com"><i class='bx bxl-gmail' ></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Slide -->

                    <!-- Slider 2 -->
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="t-b-img">
                                    <img src="img/fotoDito.png" alt="">
                                </div>
                                <div class="t-b-text">
                                    <strong>Aldito Fayyadh Yustihar</strong>
                                    <span>Back-end Developer</span>
                                    <div class="team-sosial">
                                        <a href="https://instagram.com/aldito.fydh" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                                        <a href="https://wa.me/6287878992615" target="_blank"><i class='bx bxl-whatsapp-square'></i></a>
                                        <a href="mailto:alditofayyadh0@gmail.com"><i class='bx bxl-gmail' ></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Slide -->

                    <!-- Slider 3 -->
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="t-b-img">
                                    <img src="img/fotoFaris.png" alt="">
                                </div>
                                <div class="t-b-text">
                                    <strong>Muhammad Faris Adira</strong>
                                    <span>Front-end Developer</span>
                                    <div class="team-sosial">
                                        <a href="https://instagram.com/mhmmdfariisss_" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                                        <a href="https://wa.me/6289653223729" target="_blank"><i class='bx bxl-whatsapp-square'></i></a>
                                        <a href="mailto:faris230674@gmail.com"><i class='bx bxl-gmail' ></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Slide -->

                    <!-- Slider 4 -->
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="t-b-img">
                                    <img src="img/fotoIca.png" alt="">
                                </div>
                                <div class="t-b-text">
                                    <strong>Aisyah Ramadhini Gultom</strong>
                                    <span>Marketing Manager</span>
                                    <div class="team-sosial">
                                        <a href="https://instagram.com/aisyahr.g" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                                        <a href="https://wa.me/6282165625433" target="_blank"><i class='bx bxl-whatsapp-square'></i></a>
                                        <a href="mailto:aisyahgultom596@gmail.com"><i class='bx bxl-gmail' ></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Slide -->

                    <!-- Slider 5 -->
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="t-b-img">
                                    <img src="img/fotoAkbar.png" alt="">
                                </div>
                                <div class="t-b-text">
                                    <strong>Akbar</strong>
                                    <span>Product Manager</span>
                                    <div class="team-sosial">
                                        <a href="https://instagram.com/akbar_377_" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                                        <a href="https://wa.me/6281262880424" target="_blank"><i class='bx bxl-whatsapp-square'></i></a>
                                        <a href="mailto:akbar909897@gmail.com"><i class='bx bxl-gmail' ></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Slide -->
                </div>
            </div>
        </section>
    <!-- End About -->

    <footer data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="footer-content">
            <h3>RAFDA SHOP</h3>
            <p>Enjoy Shopping !!</p>
            <ul class="socials">
                <li><a href="mailto:akbar909897@gmail.com" target="_blank"><i class="bx bx-envelope"></i></a></li>
                <li><a href="https://wa.me/6281262880424" target="_blank"><i class="bx bxl-whatsapp"></i></a></li>
                <li><a href="https://instagram.com/rafda_official" target="_blank"><i class="bx bxl-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 RafdaShop. designed by <span>DIFA</span></p>
        </div>
    </footer>

    <!-- Script -->
    <script src="assets/js/script.js"></script>

    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Boxicons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        // AOS
      AOS.init({
        once: true,
      });

      //  Swiiper
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>
</html>