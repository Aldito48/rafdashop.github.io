<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        mysqli_query($con, "DELETE FROM product WHERE ID = '$_GET[id]' AND jenis = 'Bags'") or die (mysqli_error($con));
        echo "<script>window.location='../../bags.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>