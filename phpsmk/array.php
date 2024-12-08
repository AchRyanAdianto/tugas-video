<?php

    // array dimensi

    // $nama = array("ryan","joni","tejo","budi",100, 2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[2];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) { 
    //     // echo $i;
    //     echo $nama[$i].'<br>';
    // }

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }

    // array asosiatif

    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "malang",
    //     "tejo" => "jakarta",
    //     "ryan" => "sidoarjo"

    // );

    $nama["joni"]="surabaya";
    $nama["budi"]="malang";
    $nama["tejo"]="jakarta";
    $nama["ryan"]="sidoarjo";
    $nama["edi"]="semarang";

    var_dump($nama);

    echo "<br>";

    // echo $nama['budi'];

    foreach ($nama as $key => $value) {
        echo $key." => ".$value;

        echo "<br>";
    }

?>