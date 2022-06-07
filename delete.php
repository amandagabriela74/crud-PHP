<?php
    $linha = $_GET['linha'];

    $fp = fopen('data.csv', 'r');
    $data = [];
    while ($row = fgets($fp)) {
        $data[] = $row;
    }

    $fp = fopen('data.csv', 'w');
    for ($i = 0; $i < sizeof($data); $i++) {
        if ($i != $linha) {
            fwrite($fp, $data[$i]);
        }
    }

    header('location: index.php');
?>