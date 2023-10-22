<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        mysqli_query($con, "DELETE FROM product WHERE ID = '$_GET[id]' AND jenis = 'Accessories'") or die (mysqli_error($con));
        echo "<script>window.location='../../accessories.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>