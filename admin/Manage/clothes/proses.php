<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        if(isset($_POST['add'])){
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
            $desc = trim(mysqli_real_escape_string($con, $_POST['deskripsi']));
            $harga = $_POST['harga'];
            $jenis = $_POST['jenis'];
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            mysqli_query($con, "INSERT INTO product (ID, foto, nama, deskripsi, harga, jenis, link) VALUES ('', '$foto', '$nama', '$desc', '$harga', '$jenis', '$link')") or die (mysqli_error($con));
            echo "<script>window.location='../../clothes.php';</script>";
        } else if(isset($_POST['edit'])){
            $id = $_POST['id'];
            $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
            $desc = trim(mysqli_real_escape_string($con, $_POST['deskripsi']));
            $harga = $_POST['harga'];
            $jenis = $_POST['jenis'];
            $link = trim(mysqli_real_escape_string($con, $_POST['link']));
            if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
                $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
                mysqli_query($con, "UPDATE product SET foto = '$foto', nama = '$nama', deskripsi = '$desc', harga = '$harga', jenis = '$jenis', link = '$link' WHERE ID = '$id' AND jenis = 'Clothes'") or die (mysqli_error($con));
            } else {
                mysqli_query($con, "UPDATE product SET nama = '$nama', deskripsi = '$desc', harga = '$harga', jenis = '$jenis', link = '$link' WHERE ID = '$id' AND jenis = 'Clothes'") or die (mysqli_error($con));
            }
            echo "<script>window.location='../../clothes.php';</script>";
        }        
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>