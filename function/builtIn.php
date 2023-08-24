<?php 
    function tgl_indo($tgl) {
        // $tgl = explode(' ', $tgl);
        $hari = date('l', strtotime($tgl));
        $tanggal = date('d', strtotime($tgl));
        $bulan = date('F', strtotime($tgl));
        $tahun = date('Y', strtotime($tgl));
        
        switch ($hari) {
            case 'Monday':
                $hari = 'Senin';
                break;
            case 'Tuesday':
                $hari = 'Selasa';
                break;
            case 'Wednesday':
                $hari = 'Rabu';
                break;
            case 'Thursday':
                $hari = 'Kamis';
                break;
            case 'Friday':
                $hari = 'Jumat';
                break;
            case 'Saturday':
                $hari = 'Sabtu';
                break;
            case 'Sunday':
                $hari = 'Minggu';
                break;
        }

        switch ($bulan) {
            case 'January':
                $bulan = "Januari";
                break;
            case 'February':
                $bulan = "Februari";
                break;
            case 'March':
                $bulan = "Maret";
                break;
            case 'April':
                $bulan = "April";
                break;
            case 'May':
                $bulan = "Mei";
                break;
            case 'June':
                $bulan = "Juni";
                break;
            case 'July':
                $bulan = "Juli";
                break;
            case 'August':
                $bulan = "Agustus";
                break;
            case 'September':
                $bulan = "September";
                break;
            case 'October':
                $bulan = "Oktober";
                break;
            case 'November':
                $bulan = "November";
                break;
            case 'December':
                $bulan = "Desember";
                break;
        }

        return "$hari, $tanggal $bulan $tahun";
    }

    $tgl = '15-05-2003';
    echo tgl_indo($tgl);

    echo "<br>";
    setlocale(LC_ALL, 'id-ID', 'id_ID');
    echo strftime('%A, %d %B %Y', strtotime($tgl));

    echo "<hr>";

    // $p = 20;
    // for($i = 1; $i <= $p; $i++) {
    //     for($s = 1; $s <= ($p - $i); $s++) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     for($j = 1; $j <= (2 * $i - 1); $j++) {
    //         echo "*";
    //     }
        
    //     echo "<br>";
    // }
?>