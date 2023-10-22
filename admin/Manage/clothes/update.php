<?php
    require_once "../../../config/config.php";
    if(isset($_SESSION['Username'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Baju</title>
        <link rel="icon" href="../../IMG/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="CSS/styleUpdateBerita2.css">
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
        <!-- CONTENT -->
        <script>
            function tampilkanFoto(event) {
                var input = event.target;
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('previewFoto');
                    output.style.display = 'block';
                    output.src = reader.result;

                    // Sembunyikan Foto Lama
                    var oldFoto = document.getElementById('oldFoto');
                    oldFoto.style.display = 'none';
                };
                reader.readAsDataURL(input.files[0]);
            }
        </script>
        <div class="container">
            <div class="element">
            <h1>Baju</h1>
                <div class="edit">
                    <p>Edit Baju</p>
                    <div class="fungsi">
                        <a href="../../clothes.php">Kembali</a>
                    </div>
                </div>
                <div class="content">
                    <?php
                        $hal = @$_GET['hal'];
                        if (empty($hal)) {
                            $hal = 1;
                        }

                        $id = @$_GET['id'];
                        $sql_baju = mysqli_query($con, "SELECT * FROM product WHERE ID = '$id' AND jenis = 'Clothes'") or die (mysqli_error($con));
                        $data = mysqli_fetch_array($sql_baju);
                        if($data){
                    ?>
                            <form action="proses.php" method="POST" enctype="multipart/form-data">
                                <img id="previewFoto" style="display: none; width :80px; height: 100px;">
                                <?='<img id="oldFoto" src="data:image/jpeg;base64,'.base64_encode($data['foto']).'"height="100" width="80"/>';?>
                                <div>
                                    <label for="foto">Foto Produk</label>
                                    <input type="hidden" name="id" value="<?=$data['ID']?>">
                                    <input type="file" id="foto" name="foto" accept=".jpg, .jpeg, .png" onchange="tampilkanFoto(event)" class="image">
                                </div>
                                <div>
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" id="nama" name="nama" value="<?=$data['nama']?>" placeholder="Masukkan Nama...">
                                </div>
                                <div>
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi"><?=$data['deskripsi']?></textarea>
                                </div>
                                <div>
                                    <label for="harga">Harga Produk</label>
                                    <input type="number" min="0" name="harga" id="harga" value="<?=$data['harga']?>" placeholder="Masukkan Harga..." required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <input type="hidden" name="jenis" value="Clothes">
                                    <?php
                                        echo "<select id=\"jenis\" name=\"jenis\" disabled>
                                            <option value=\"\" disabled selected style=\"display:none;\">Pilih Jenis</option>";
                                            $jenis = mysqli_query($con, "SHOW COLUMNS FROM `product` WHERE `field` = 'jenis'");
                                            while($result = mysqli_fetch_row($jenis)){
                                                foreach(explode("','",substr($result[1],6,-2)) as $option){
                                                    $selected = ($option == 'Clothes') ? 'selected' : '';
                                                    echo "<option $selected>".$option."</option>";
                                                }
                                            }
                                        echo "</select>";
                                    ?>
                                </div>
                                <div>
                                    <label for="link">Link</label>
                                    <textarea id="link" name="link"><?=$data['link']?></textarea>
                                </div>
                                <div class="tmbl1">
                                    <input type="submit" name="edit" value="Simpan">
                                </div>
                            </form>
                    <?php
                        } else{
                            echo "<script>alert('Data Anda Tidak Terdaftar Dalam Sistem');</script>";
                        }
                    ?>
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