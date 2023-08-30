<?php
$siswa = [
    ['name' => 'Ade Putra Sondakh', 'score' => 85, 'age' => 25],
    ['name' => 'Agata Tadhea Artiko', 'score' => 85, 'age' => 19],
    ['name' => 'Andhika Pratama', 'score' => 85, 'age' => 23],
    ['name' => 'Anugerah Puang Tenri Sumpala', 'score' => 85, 'age' => 20],
    ['name' => 'Deswynta Putri Abelia', 'score' => 85, 'age' => 20],
    ['name' => 'Dewi Ramadani', 'score' => 85, 'age' => 20],
    ['name' => 'Gregorius Agung', 'score' => 85, 'age' => 20],
    ['name' => 'Muhammad Dwi Reza', 'score' => 85, 'age' => 19],
    ['name' => 'Muhammad Yusuf Asrori', 'score' => 85, 'age' => 21],
    ['name' => 'Puput Rahmawati', 'score' => 85, 'age' => 27],
    ['name' => 'Rahmat Nur Rahman', 'score' => 85, 'age' => 18],
    ['name' => 'Rino Pangestu', 'score' => 85, 'age' => 27],
    ['name' => 'Risky Gusti Ageng', 'score' => 60, 'age' => 20],
    ['name' => 'Risma Sihombing', 'score' => 85, 'age' => 18],
    ['name' => 'Syafiq Muhammad Kahfi', 'score' => 85, 'age' => 20],
    ['name' => 'Widya Ayu Wahyuni', 'score' => 85, 'age' => 22],
];

function nilaiHuruf($nilai) {
    switch (true) {
        case ($nilai >= 80 AND $nilai <= 100):
            return "A";
            break;

        case ($nilai >= 70):
            return "B";
            break;

        case ($nilai >= 60):
            return "C";
            break;
        
        case ($nilai >= 50):
            return "D";
            break;

        default:
            return "Default";
            break;
    }
}

function backTr($huruf) {
    switch ($huruf) {
        case 'A':
            return "green";
            break;

        case 'B':
            return "lightgreen";
            break;

        case 'C':
            return "orange";
            break;

        case 'D':
            return "red";
            break;
        
        default:
            return "";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        #siswa {
            margin: auto;
        }

        .green {
            background-color: green;
            color: white;
        }

        .lightgreen {
            background-color: lightgreen;
        }

        .orange {
            background-color: orange;
        }

        .red {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    <h1 align="center">Data Siswa</h1>

    <table border="1" cellSpacing="0" cellPadding="5" width="60%" id="siswa">
        <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Umur</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($siswa as $data) { ?>
                <tr class="<?= backTr(nilaiHuruf($data['score'])) ?>">
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $data['name'] ?></td>
                    <td align="center"><?= $data['score'] ?> (<?= nilaiHuruf($data['score']) ?>)</td>
                    <td align="center"><?= $data['age'] ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>

</html>