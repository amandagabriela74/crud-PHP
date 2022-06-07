<?php
    // $_POST['marca'] = '...';
    $marca = $_POST['marca'];
    $tecido = $_POST['tecido'];
    $cor = $_POST['cor'];
    $tamanho = $_POST['tamanho'];

    $fp = fopen('data.csv', 'a');
    fwrite($fp, $marca . ',' . $tecido . ',' . $cor . ',' . $tamanho . PHP_EOL); // \n no linux, \r\n no windows

    header('location: index.php');
?>