<?php
    require_once "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Rafda'Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/stylecontact.css">

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
    
    <section id="contact">
        <dic class="contact-info">
            <div class="card" data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000">
                <a href="mailto:akbar909897@gmail.com" class="info-seek">
                    <i class="card-icon bx bx-envelope"></i>
                    <p>akbar909897@gmail.com</p>
                </a>
            </div>
            <div class="card" data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000">
                <a href="https://wa.me/6281262880424" class="info-seek" target="_blank">
                    <i class="card-icon bx bxl-whatsapp"></i>
                    <p>081262880424</p>
                </a>
            </div>
            <div class="card" data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000">
                <a href="https://instagram.com/rafda_official" class="info-seek" target="_blank">
                    <i class="card-icon bx bxl-instagram"></i>
                    <p>rafda_official</p>
                </a>
            </div>
        </dic>
    </section>

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
    </script>
</body>
</html>