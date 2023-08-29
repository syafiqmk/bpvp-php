<?php 
    $nilai = [80, 90, 93, 75, 50];

    for($i = 0; $i < count($nilai); $i++) {
        echo $nilai[$i]."<br>";
    }

    echo "<hr>";
    $nama = [
        "Ade Putra Sondakh",
        "Agata Tadhea Artiko",
        "Andhika Pratama",
        "Anugerah Puang Tenri Sumpala",
        "Deswynta Putri Abelia",
        "Dewi Ramadani",
        "Gregorius Agung",
        "Muhammad Dwi Reza",
        "Muhammad Yusuf Asrori",
        "Puput Rahmawati",
        "Rahmat Nur Rahman",
        "Rino Pangestu",
        "Risky Gusti Ageng",
        "Risma Sihombing",
        "Syafiq Muhammad Kahfi",
        "Widya Ayu Wahyuni"
    ];

    // for($i = 0; $i < count($nama); $i++) {
    //     echo ($i + 1).". $nama[$i]<br>";
    // }
    // echo "<hr>";

    $no = 1;
    foreach($nama as $i) {
        echo "$no. $i<br>";
        $no++;
    }
    echo "<hr>";

    $nomor = [16, 52, 68, 77, 90];
    $gacorAkhir = "";
    foreach($nomor as $gacor) {
        echo "Nomor awal : $gacor<br>";
        echo "Nomor akhir : " . ($gacor * 6) . "<br><br>";
        $gacorAkhir .= ($gacor * 6);
    }

    echo "Angka Gacor : $gacorAkhir";
    echo "<hr>";

    
?>