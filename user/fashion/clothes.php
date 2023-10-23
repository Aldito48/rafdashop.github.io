<?php
    require_once "../../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes | Rafda Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styleproduct.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CDNJS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Poppins:wght@300&family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script:wght@700&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Poppins:wght@300&family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script:wght@700&family=Fjalla+One&family=Frank+Ruhl+Libre:wght@300&family=Nosifer&family=Poppins:wght@300&family=Young+Serif&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1500">
        <a href="../home.php" class="logo">
            Rafda Shop
         </a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <nav class="navbar">

            <a href="../home.php" style="--i:0" class="active" class="nav_item"><i class='bx bxs-home-smile' ></i>Home</a>
            <a href="../about.php" style="--i:1" class="nav_item"><i class='bx bxs-info-circle' ></i>About</a>
            <a href="../home.php" class="nav-center">
               Rafda Shop
            </a>
            <a href="../product.php" style="--i:2" class="nav_item"><i class='bx bxs-shopping-bag'></i>Product</a>
            <a href="../contact.php" style="--i:4" class="nav_item"><i class='bx bxs-phone' ></i>Contact</a>
        </nav>
    </header>
    
    <div class="sort" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="2000">
        <ul class="indicator">
            <li><a href="../product.php">All</a></li>
            <li class="active"><a href="clothes.php">Clothes</a></li>
            <li><a href="pants.php">Pants</a></li>
            <li><a href="shoes.php">Shoes</a></li>
            <li><a href="bags.php">Bags</a></li>
            <li><a href="accessories.php">Accessories</a></li>
        </ul>
        <div class="filter-condition">
            <a href="../contact.php">Contact Us <i class="fa-solid fa-headset"></i></a>
        </div>
    </div>

    <!-- Product -->
        <div class = "products">
            <div class = "container">
                <form class="input-group" method="POST" action="" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="2000">
                    <input type="text" name="pencarian" placeholder="Search Data..." autofocus autocomplete="off">
                    <button type="submit"><i class="bx bx-search"></i></button>
                </form>
                <h1 class = "lg-title" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="2000">Product Rafda Shop</h1>
                <p class = "text-light" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium. Temporibus, quis cum.</p>

                <div class = "product-items">
                    <?php
                        function formatRupiah($jumlah) {
                            $number_string = strval($jumlah);
                            $sisa = strlen($number_string) % 3;
                            $rupiah = substr($number_string, 0, $sisa);
                            $ribuan = preg_split('/(?<=\d)(?=(?:\d\d\d)+$)/', substr($number_string, $sisa));
                        
                            if ($ribuan) {
                                $separator = $sisa ? '.' : '';
                                $rupiah .= $separator . implode('.', $ribuan);
                            }
                        
                            return $rupiah;
                        }
                        
                        $batas = 8;
                        $hal = @$_GET['hal'];
                        if(empty($hal)){
                            $posisi = 0;
                            $hal = 1;
                        } else{
                            $posisi = ($hal - 1) * $batas;
                        }
                        $no = 1;
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                            if ($pencarian != '') {
                                $sql = "SELECT * FROM product WHERE jenis = 'Clothes' AND nama LIKE '%$pencarian%'";
                                $query = $sql;
                                $queryJml = $sql;
                            } else{
                                $query = "SELECT * FROM product WHERE jenis = 'Clothes' LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM product WHERE jenis = 'Clothes'";
                                $no = $posisi + 1;
                            }
                        } else {
                            $query = "SELECT * FROM product WHERE jenis = 'Clothes' LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM product WHERE jenis = 'Clothes'";
                            $no = $posisi + 1;
                        }
                        $clts = mysqli_query($con, $query) or die (mysqli_error($con));
                        if(mysqli_num_rows($clts) > 0){
                            while($data = mysqli_fetch_array($clts)){
                    ?>
                                <!-- single product -->
                                <div class = "product" data-category="" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
                                    <div class = "product-content">
                                        <div class = "product-img">
                                            <img src="data:image/jpeg;base64,<?= base64_encode($data['foto']) ?>"/>
                                        </div>
                                        <div class = "product-btns">
                                            <a href="<?=$data['link']?>" target="_blank"><button type = "button" class = "btn-buy"> buy now
                                                <span><i class = "fas fa-shopping-cart"></i></span>
                                            </button></a>
                                        </div>
                                    </div>

                                    <div class = "product-info">
                                        <div class = "product-info-top">
                                            <h2 class = "sm-title"><?=$data['jenis']?></h2>
                                        </div>
                                        <a href="<?=$data['link']?>" target="_blank" class = "product-name"><?=$data['nama']?></a>
                                        <p class = "product-price">IDR <?=formatRupiah($data['harga'])?></p>
                                    </div>
                                </div>
                                <!-- end of single product -->
                    <?php
                            }
                        } else{
                            echo "Data Tidak Ditemukan";
                        }
                    ?>
                </div>
                <div class="pagination" data-category="" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
                    <?php
                        if(@$_POST['pencarian'] == ''){
                    ?>
                            <div style="float:left;">
                                <?php
                                    $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                                ?>
                            </div>
                            <div style="float:right;">
                                <ul style="margin:0" class="ul-search">
                                    <?php
                                        $jml_hal = ceil($jml / $batas);
                                        for($i = 1; $i <= $jml_hal; $i++){
                                            if($i != $hal){
                                                echo "<li><a href=\"?hal=$i\">$i</a></li>";
                                            } else{
                                                echo "<li class=\"active\"><a>$i</a></li>";
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                    <?php
                        } else{
                            echo "<div style=\"float:left;\">";
                            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                            echo "Data Hasil Pencarian : <b>$jml</b>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class = "product-collection">
            <div class = "container">
                <div class = "product-collection-wrapper">
                    <!-- product col left -->
                    <div class = "product-col-left flex" data-category="" data-aos="zoom-down" data-aos-delay="1000" data-aos-duration="2000">
                        <div class = "product-col-content">
                            <h2 class = "sm-title">men's shoes </h2>
                            <h2 class = "md-title">men's collection </h2>
                            <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                            <button type = "button" class = "btn-dark">Shop now</button>
                        </div>
                    </div>

                    <!-- product col right -->
                    <div class = "product-col-right" data-category="" data-aos="zoom-down" data-aos-delay="1000" data-aos-duration="2000">
                        <div class = "product-col-r-top flex">
                            <div class = "product-col-content">
                                <h2 class = "sm-title">women's dresses </h2>
                                <h2 class = "md-title">women's collection </h2>
                                <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                <button type = "button" class = "btn-dark">Shop now</button>
                            </div>
                        </div>

                        <div class = "product-col-r-bottom">
                            <!-- left -->
                            <div class = "flex" data-category="" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title">summer sale </h2>
                                    <h2 class = "md-title">Extra 50% Off </h2>
                                    <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                    <button type = "button" class = "btn-dark">Shop now</button>
                                </div>
                            </div>
                            <!-- right -->
                            <div class = "flex" data-category="" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="2500">
                                <div class = "product-col-content">
                                    <h2 class = "sm-title">shoes </h2>
                                    <h2 class = "md-title">best sellers </h2>
                                    <p class = "text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae consequatur facilis eligendi quibusdam voluptatibus exercitationem autem voluptatum, beatae architecto odit, quisquam repellat. Deleniti, architecto ab.</p>
                                    <button type = "button" class = "btn-dark">Shop now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Product -->

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
    <script src="../assets/js/script.js"></script>

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