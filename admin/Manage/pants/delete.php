<?php
    require_once "../../../config/config.php";

    if(isset($_SESSION['Username'])) {
        mysqli_query($con, "DELETE FROM product WHERE ID = '$_GET[id]' AND jenis = 'Pants'") or die (mysqli_error($con));
        echo "<script>window.location='../../pants.php';</script>";
    } else{
        echo "<script>window.location='../../../auth/login.php';</script>";
    }
?>