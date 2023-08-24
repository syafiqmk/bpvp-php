<?php 
    $hari = $_GET['hari'];

    function rainbow($hari) {
        switch($hari) {
            case 'senin':
                echo "<h2 class='hari senin'>senin</h2>";
                break;
            case 'selasa':
                echo "<h2 class='hari selasa'>selasa</h2>";
                break;
            case 'rabu':
                echo "<h2 class='hari rabu'>rabu</h2>";
                break;
            case 'kamis':
                echo "<h2 class='hari kamis'>kamis</h2>";
                break;
            case 'jumat':
                echo "<h2 class='hari jumat'>jumat</h2>";
                break;
            case 'sabtu':
                echo "<h2 class='hari sabtu'>sabtu</h2>";
                break;
            case 'minggu':
                echo "<h2 class='hari minggu'>minggu</h2>";
                break;
        }
    }
?>

<div class="cal-form">
    <form action="index.php" method="get">
        <input type="hidden" name="page" value="rainbow">

        <div class="input">
            <label for="hari">Hari</label>
            <select name="hari" id="hari">
                <option value="senin" <?= ($hari == 'senin') ? 'selected' : '' ?>>Senin</option>
                <option value="selasa" <?= ($hari == 'selasa') ? 'selected' : '' ?>>selasa</option>
                <option value="rabu" <?= ($hari == 'rabu') ? 'selected' : '' ?>>rabu</option>
                <option value="kamis" <?= ($hari == 'kamis') ? 'selected' : '' ?>>kamis</option>
                <option value="jumat" <?= ($hari == 'jumat') ? 'selected' : '' ?>>jumat</option>
                <option value="sabtu" <?= ($hari == 'sabtu') ? 'selected' : '' ?>>sabtu</option>
                <option value="minggu" <?= ($hari == 'minggu') ? 'selected' : '' ?>>minggu</option>
            </select>
        </div>

        <button type="submit">Pilih</button>
    </form>

    <?php rainbow($hari) ?>
</div>