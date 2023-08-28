<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Perulangan</title>
    <style>
        .kertas {
            border: 2px solid black;
            padding: 10px 20px;
        }

        .cont {
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
        }
    </style>
</head>
<body>
    <?php 
        $i = 1;
        while($i <= 6) { ?>
            <h<?= $i ?>>Baris <?= $i ?></h<?= $i ?>>
            <?php $i++;
        }
    ?>

    <hr>
    <label for="tahun">Tahun</label>
    <select name="tahun" id="tahun">
        <?php 
            for($i = date('Y'); $i >= 1970 ; $i--) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php }
        ?>
    </select>

    <hr>
    <label for="">Tanggal Lahir</label>
    <select name="tgl" id="tgl">
        <option value="">Pilih Tanggal</option>
        <?php 
            for($i = 1; $i <= 31; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php }
        ?>
    </select>
    <select name="bulan" id="bulan">
        <option value="">Pilih Bulan</option>
        <?php 
            for($i = 1; $i <= 12; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php }
        ?>
    </select>
    <select name="tahun" id="tahun">
        <option value="">Pilih Tahun</option>
        <?php 
            for($i = date('Y'); $i >= 1970; $i--) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php }
        ?>
    </select>
    <hr>
    
    
    <div class="cont">
        <div class="kertas">
            <h1>Penjumlahan</h1>
            <?php 
                for($i = 1; $i <= 10; $i++) { ?>
                    <p><?= $i ?> + <?= (11 - $i) ?> = <?= $i + (11 - $i) ?></p>
                <?php }
            ?>
        </div>

        <div class="kertas">
            <h1>Perkalian</h1>
            <?php 
                for($i = 1; $i <= 10; $i++) { ?>
                    <p><?= $i ?> x <?= (11 - $i) ?> = <?= $i * (11 - $i) ?></p>
                <?php }
            ?>
        </div>
    
        <div class="kertas">
            <h1>Pengurangan</h1>
            <?php 
                for($i = 1; $i <= 10; $i++) { ?>
                    <p><?= $i ?> - <?= (11 - $i) ?> = <?= $i - (11 - $i) ?></p>
                <?php }
            ?>
        </div>
    
        <div class="kertas">
            <h1>Pembagian</h1>
            <?php 
                for($i = 1; $i <= 10; $i++) { ?>
                    <p><?= $i ?> / <?= (11 - $i) ?> = <?= number_format(($i / (11 - $i)), 2, '.', '.') ?></p>
                <?php }
            ?>
        </div>
    </div>
</body>
</html>