<?php 
    $username = "admin";
    $password = "12345";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="formGroup">
            <h2>Login</h2>
            
            <?php 
                if(isset($_POST['submit'])) {
                    if(($_POST['user'] == $username) AND ($_POST['pass'] == $password)) { ?>
                        <div class="success" align="center">Login Berhasil!</div>
                    <?php } else { ?>
                        <div class="warning">Login Gagal! Username atau Password salah!</div>
                    <?php }
                }
            ?>

            <form action="" method="post">
                <div class="inputGroup">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" autocomplete="off" required>
                </div>

                <div class="inputGroup">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required>
                </div>

                <div class="formButton">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>