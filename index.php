<?php
    // set header
    header('Content-Type: application/json');

    //
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    echo json_encode($arr);

    // debug-trace
    var_dump($arr);
?>
