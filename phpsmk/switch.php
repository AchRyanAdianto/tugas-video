<?php

    // $hari = 1;

    // switch ($hari) {
    //     case 1:
    //         echo 'sabtu';
    //         break;
    //     case 2:
    //         echo 'minggu';
    //         break;
    //     case 3:
    //         echo 'senin';
    //         break;
    //     case 4:
    //         echo 'selasa';
    //         break;
    //     case 5:
    //         echo 'rabu';
    //         break;
    //     case 6:
    //         echo 'kamis';
    //         break;
    //     case 7:
    //         echo 'jumat';
    //         break;
        
    //     default:
    //         echo 'hari tidak ada';
    //         break;
    // }

    $pilihan = 'tambah';

    switch ($pilihan) {
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih ubah';
            break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
        
        default:
            echo 'pilihan belum ada';
            break;
    }
?>