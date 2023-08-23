<?php 
    $nilai = 80;

    // Kondisi IF
    if ($nilai >= 80) {
        echo "Selamat anda LULUS!";
    } else {
        echo "GK LULUS WKWKWK";
    }

    echo "<br><hr>";
    
    $password = '12345';
    if ($password == '12345') {
        echo "Anda berhasil login!";
    } else {
        echo "Anda tidak memiliki akses!";
    }
    
    echo "<br><hr>";
    if(($nilai % 2) == 0) {
        echo "Genap";
    } else {
        echo "Ganjil";
    }
    
    echo "<hr>";
    
    $na = 60;
    $nb = 70;
    
    if($na > $nb) {
        echo "$na > $nb";
    } else {
        echo "$na < $nb";
    }
    echo "<br>";
    if($na == $nb) {
        echo "$na = $nb";
    }
    
    echo "<hr>";
    $a = 80;
    $b = 75;
    $c = 85;
    $rata = ($a + $b + $c) / 3;
    if ($rata > 80) {
        echo "Anda Lulus!";
    } else {
        echo "GK LULUS WKWKWK";
    }

    echo "<hr>";
    
    // Nested IF
    $nilai = 90;
    if($nilai >= 80) {
        echo "Nilai A";
    } elseif ($nilai >= 70) {
        echo "Nilai B";
    } elseif ($nilai >= 60) {
        echo "Nilai C";
    } elseif ($nilai >= 50) {
        echo "Nilai D";
    } else {
        echo "Nilai E";
    }

    echo "<hr>";
    $umur = -1;
    if ($umur >=0 AND $umur < 5) {
        echo "Balita";
    } elseif ($umur >= 5 AND $umur <= 12) {
        echo "Anak-anak";
    } elseif ($umur >= 13 AND $umur <= 18) {
        echo "Remaja";
    } elseif ($umur >=19 AND $umur <= 60) {
        echo "Dewasa";
    } elseif($umur < 0) {
        echo "Umur dibawah 0";
    } else {
        echo "Lansia";
    }

    echo "<hr>";

    // Ternary
    $nilai_mtk = 80;
    $status = ($nilai_mtk >= 80) ? "Lulus" : "Tidak Lulus";
    echo $status;
    echo "<br>";
    echo ($nilai_mtk >= 80) ? "Lulus" : "Tidak Lulus";
    echo "<hr>";

    // Switch
    $hari = 4;
    switch ($hari) {
        case 1:
            echo "Senin";
            break;
        case 2:
            echo "Selasa";
            break;
        case 3:
            echo "Rabu";
            break;
        case 4:
            echo "Kamis";
            break;
        case 5:
            echo "Jumat";
            break;
        case 6:
            echo "Sabtu";
            break;
        case 7:
            echo "Minggu";
            break;
        
        default:
            echo "Data tidak valid";
            break;
    }

    echo "<br>";

    $umur = 0;
    switch (true) {
        case ($umur >= 0 AND $umur < 5):
            echo "Balita";
            break;
        case ($umur >= 5 AND $umur <= 12):
            echo "Anak-anak";
            break;
        case ($umur >= 13 AND $umur <= 18):
            echo "Remaja";
            break;
        case ($umur >= 19 AND $umur <= 60):
            echo "Dewasa";
            break;
        case ($umur > 60):
            echo "Lansia";
            break;
        
        default:
            echo "Data Tidak Valid!";
            break;
    }
?>