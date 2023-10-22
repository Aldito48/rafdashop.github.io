<?php
    require_once "../config/config.php";
    if(isset($_SESSION['Username'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bags</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <main class="table">
            <div class="out">
                <a href="../auth/logout.php">KELUAR</a>
            </div>
            <section class="table__header">
                <h1><span><i class="fa-solid fa-shirt"></i></span> Bags</h1>
                <form class="input-group" method="POST" action="">
                    <input type="text" name="pencarian" placeholder="Search Data..." autofocus autocomplete="off">
                    <button type="submit"><img src="IMG/search.png" alt=""></button>
                </form>
                <div class="export__file">
                    <a href="Manage/bags/insert.php"><i class="fa-solid fa-circle-plus"></i></a>
                </div>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Jenis</th>
                            <th>Link</th>
                            <th><i class="fa-solid fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
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
                                
                                $hal = @$_GET['hal'];
                                if (empty($hal)) {
                                    $hal = 1;
                                }
                                $no = 1;
                                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                                    if ($pencarian != '') {
                                        $sql = "SELECT * FROM product WHERE jenis = 'Bags' AND nama LIKE '%$pencarian%'";
                                        $query = $sql;
                                        $queryJml = $sql;
                                    } else{
                                        $query = "SELECT * FROM product WHERE jenis = 'Bags'";
                                        $queryJml = "SELECT * FROM product WHERE jenis = 'Bags'";
                                        $no = 1;
                                    }
                                } else {
                                    $query = "SELECT * FROM product WHERE jenis = 'Bags'";
                                    $queryJml = "SELECT * FROM product WHERE jenis = 'Bags'";
                                    $no = 1;
                                }
                                $data_tas = mysqli_query($con, $query) or die (mysqli_error($con));
                                if(mysqli_num_rows($data_tas) > 0){
                                    while($data = mysqli_fetch_array($data_tas)){
                            ?>
                                        <tr>
                                            <td align="center"><?=$no++?>.</td>
                                            <td align="center">
                                                <?='<img src="data:image/jpeg;base64,'.base64_encode($data['foto']).'"height="500" width="450"/>';
                                                ?>
                                            </td>
                                            <td align="center"><?=$data['nama']?></td>
                                            <td align="center"><?=$data['deskripsi']?></td>
                                            <td align="center">IDR <?=formatRupiah($data['harga'])?></td>
                                            <td align="center"><?=$data['jenis']?></td>
                                            <td align="center"><?=$data['link']?></td>
                                            <td align="center">
                                                <a href="Manage/bags/update.php?id=<?=$data['ID']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="Manage/bags/delete.php?id=<?=$data['ID']?>" onclick="return confirm('Data Ini Akan Dihapus')"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                            <?php
                                    }
                                } else{
                                    echo "There's No Bags";
                                }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </body>
</html>
<?php
    } else{
        echo "<script>window.location='../auth/login.php';</script>";
    }
?>
