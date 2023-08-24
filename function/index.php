<?php 
    error_reporting(0);

    $page = $_GET['page'];
    if (empty($page)) {
        $page = 'calculator';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo">Function</h2>

        <nav>
            <a href="index.php?page=calculator">Calculator</a>
            <a href="index.php?page=rainbow">Rainbow</a>
        </nav>
    </header>

    <main>
        <?php 
            switch($page) {
                case 'calculator':
                    include "calculator.php";
                    break;
                case 'rainbow':
                    include "rainbow.php";
                    break;
            }
        ?>
    </main>
</body>
</html>