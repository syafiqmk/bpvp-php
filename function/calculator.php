<?php 
    $a = $_GET['a'];
    $b = $_GET['b'];

    function calculator($a, $b) {
        if(!empty($a) && !empty($b)) {
            echo "<h4>Hasil</h4>";
            echo "<p>$a + $b = ". ($a + $b) ."</p>";
            echo "<p>$a - $b = ". ($a - $b) ."</p>";
            echo "<p>$a / $b = ". ($a / $b) ."</p>";
            echo "<p>$a * $b = ". ($a * $b) ."</p>";
            echo "<p>$a % $b = ". ($a % $b) ."</p>";
        }
    }
?>

<div class="cal-form">
    <h3>Calculator</h3>
    <form action="index.php" method="get">

        <input type="hidden" name="page" value="calculator">

        <div class="input">
            <label for="nilai1">Nilai 1</label>
            <input type="number" name="a" id="nilai1">
        </div>

        <div class="input">
            <label for="nilai2">Nilai 2</label>
            <input type="number" name="b" id="nilai2">
        </div>

        <button type="submit">Hitung</button>
    </form>

    <?php 
        calculator($a, $b);
    ?>
</div>