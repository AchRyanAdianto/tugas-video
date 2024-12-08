<?php 

    // $nama = array('tejo', 'budi', 'ryan', 100);

    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }

    $nama = array(
        "budi" => "surabaya",
        "tejo" => "jakarta",
        "ryan" => "sidoarjo" 
    );

    var_dump($nama);
    echo '<br>';
    foreach ($nama as $key => $value) {
        echo $key.'-'.$value;
        echo '<br>';
    }
?>