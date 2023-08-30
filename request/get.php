<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="formGroup">
            <h2>Formulir Pendaftaran</h2>
        
            <form action="" method="get">
                <div class="inputGroup">
                    <label for="name">Nama<span class="red">*</span></label>
                    <input type="text" name="name" id="name" maxlength="200" autocomplete="off" required>
                    <?php 
                        if(!empty($_GET) AND (strlen($_GET['name']) > 200)) { ?>
                            <div class="warning">Nama harus di bawah 200 karakter!</div>
                        <?php }
                    ?>
                </div>
        
                <div class="inputGroup">
                    <label for="score">Nilai<span class="red">*</span></label>
                    <input type="number" name="score" id="score" min="0" max="100" autocomplete="off" required>
                    <?php 
                        if(!empty($_GET['score']) AND (($_GET['score'] < 0) OR ($_GET['score'] >100))) {?>
                            <div class="warning">Nilai harus antara 0 dan 100!</div>
                        <?php }
                    ?>
                </div>
        
                <div class="inputGroup">
                    <label for="age">Umur<span class="red">*</span></label>
                    <input type="number" name="age" id="age" min="0" autocomplete="off" required>
                    <?php 
                        if(!empty($_GET['age']) AND ($_GET['age'] < 0)) { ?>
                            <div class="warning">Umur harus di atas 0!</div>
                        <?php }
                    ?>
                </div>
    
                <div class="formButton">
                    <button type="submit">Daftar</button>
                    <a href="get.php">Clear</a>
                </div>
            </form>

            <?php 
                if(!empty($_GET)) { 
                        if(!(strlen($_GET['name']) > 200) AND !(($_GET['score'] < 0) OR ($_GET['score'] >100)) AND !($_GET['age'] < 0)) { ?>
                            <table border="1">
                                <tr>
                                    <td>Nama</td>
                                    <td><?= ucwords($_GET['name']) ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai</td>
                                    <td><?= $_GET['score'] ?> <b><?= (($_GET['score'] >= 80) AND ($_GET['score'] <= 100)) ? "(LULUS!)" : "(TIDAK LULUS!)" ?></b></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td><?= $_GET['age'] ?></td>
                                </tr>
                            </table>
                    <?php }
                }
            ?>
        </div>
    </div>
</body>
</html>