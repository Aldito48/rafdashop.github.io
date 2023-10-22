<?php
    require_once "../../../config/config.php";
    if(isset($_SESSION['Username'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Celana</title>
        <link rel="icon" href="../../IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleInsertBerita2.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="element">
            <h1>Celana</h1>
                <div class="edit">
                    <p>Tambah Celana</p>
                    <div class="fungsi">
                        <a href="../../pants.php">Kembali</a>
                    </div>
                </div>
                <div class="content">
                    <script>
                        function tampilkanFoto(event) {
                            var input = event.target;
                            var reader = new FileReader();
                            reader.onload = function() {
                                var output = document.getElementById('previewFoto');
                                output.style.display = 'block';
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    </script>
                    <form action="proses.php" method="POST" enctype="multipart/form-data">
                        <img id="previewFoto" style="display: none; width :80px; height: 100px;">
                        <div>
                            <label for="foto">Foto Produk</label>
                            <input type="file" name="foto" accept=".jpg, .jpeg, .png" onchange="tampilkanFoto(event)" class="image" required>
                        </div>    
                        <div>
                            <label for="nama">Nama Produk</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama..." required>
                        </div>
                        <div>
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" required></textarea>
                        </div>
                        <div>
                            <label for="harga">Harga Produk</label>
                            <input type="number" min="0" name="harga" id="harga" placeholder="Masukkan Harga..." required>
                        </div>
                        <div>
                            <label for="jenis">Jenis</label>
                            <input type="hidden" name="jenis" value="Pants">
                            <?php
                                echo "<select id=\"jenis\" name=\"jenis\" disabled>
                                    <option value=\"\" disabled selected style=\"display:none;\">Pilih Jenis</option>";
                                    $jenis = mysqli_query($con, "SHOW COLUMNS FROM `product` WHERE `field` = 'jenis'");
                                    while($result = mysqli_fetch_row($jenis)){
                                        foreach(explode("','",substr($result[1],6,-2)) as $option){
                                            $selected = ($option == 'Pants') ? 'selected' : '';
                                            echo "<option $selected>".$option."</option>";
                                        }
                                    }
                                echo "</select>";
                            ?>
                        </div>
                        <div>
                            <label for="link">Link</label>
                            <textarea id="link" name="link" required></textarea>
                        </div>
                        <div class="tmbl1">
                            <input type="submit" name="add" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>