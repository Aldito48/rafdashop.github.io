<?php
    require_once "../config/config.php";
    if(isset($_SESSION['Username'])) {
        echo "<script>window.location='../admin/clothes.php';</script>";
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RAFDA | ADMIN</title>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="../assets/img/anri.ico" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="Card">
            <div id="Card-content">
                <div id="Card-title">
                    <h2>LOGIN</h2>
                    <div class="underline-title"></div>
                </div>
                <?php
                    if(isset($_POST['Login'])) {
                        $username = trim(mysqli_real_escape_string($con, $_POST['Username']));
                        $pass = trim(mysqli_real_escape_string($con, $_POST['Password']));
                        $sql_login = mysqli_query($con, "SELECT * FROM admin WHERE Username = '$username' AND Password = '$pass'") or die (mysqli_error($con));
                        if(mysqli_num_rows($sql_login) > 0){
                            $_SESSION['Username'] = $username;
                            echo "<script>window.location='../admin/clothes.php';</script>";
                        } else{ ?>
                            <div class="login-rejected" id="login-rejected">
                                <button onclick="closeDiv()">X</button>
                                <p class="failed-1"><strong>Login Gagal</strong></p>
                                <p class="failed-2">Username / Password salah</p>
                            </div>
                        <?php
                        }
                    }
                ?>
                <form method="post" id="login-form" class="form" action="">
                    <label for="Username" style="padding-top: 13px;">&nbsp;<i class="fa-solid fa-user"></i>
                        <input id="Username" class="form-content" type="text" name="Username" placeholder="Masukkan Username" required autofocus/>
                        <div class="form-border"></div>
                    </label>

                    <label for="Password" style="padding-top: 22px;">&nbsp;<i class="fa-solid fa-key"></i>
                        <input id="Password" class="form-content" type="password" placeholder="Masukkan Password" name="Password" required/>
                        <span class="show-hide">
                            <i class="fa-solid fa-eye" id="unhide"></i>
                        </span>
                        <div class="form-border"></div>
                    </label>

                    <input id="submit-btn" type="submit" name="Login" value="LOGIN">
                </form>
            </div>
        </div>

        <script>
            const password = document.getElementById('Password');
            const unhideButton = document.getElementById('unhide');
            unhideButton.addEventListener('click', function(){
                if(password.type === 'password'){
                    password.type = 'text';
                } else{
                    password.type = 'password';
                }
            });

            function closeDiv() {
                document.getElementById("login-rejected").style.display = "none";
            }
        </script>
    </body>
</html>
<?php
    }
?>
