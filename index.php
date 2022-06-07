<?php
    $fp = fopen('data.csv', 'r');
    $data = [];
    while ($row = fgets($fp)) {
        $data[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     table, tr, th, td {
            border: 1px solid #aaa;
            border-collapse: collapse;
        }
        td, th {
            padding: .5em;
        }
        tr:nth-child(even) {
            background: #f7b5e0;
        }
        table {
            margin-bottom: 1em;
        }

        .titulo, .conteudo, .tabela, .adicionar{
            text-align: center;
            align-items: center;
        }

       table {
           margin: auto;
       }
    </style>
</head>
<body>
    <div class="titulo">
    <h1>Sistema de camisetas</h1>
    <h1>Lista de camisetas</h1>
    <div class="tabela">
    <table>
            <tr>
                <th>Marca</th>
                <th>Tecido</th>
                <th>Cor</th>
                <th>Tamanho</th>
                <th>Ações</th>
            </tr>
        <?php foreach($data as $linha => $row): ?>
            <?php $partes = explode(',', $row) ?>
            <tr>
                <!-- <td><?= $linha ?></td> -->
                <td><?= $partes[0] ?></td>
                <td><?= $partes[1] ?></td>
                <td><?= $partes[2] ?></td>
                <td><?= $partes[3] ?></td>
                <td>
                    <a href="delete.php?linha=<?= $linha ?>">Remover</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table><br>
    </div>
    </div>
   <div class="adicionar">
    <form action="add-camiseta.php" method="POST">
    <fieldset>
<legend>Adicionar Camisetas</legend>
        <input type="text" name="marca" placeholder="marca">
        <input type="text" name="tecido" placeholder="tecido">
        <input type="text" name="cor" placeholder="cor">
        <select name="tamanho">
            <option value="PP">tamanho pp</option>
            <option value="P">pequeno</option>
            <option value="M">médio</option>
            <option value="G">grande</option>
            <option value="GG">tamanho ivo</option>
        </select>
        <input type="submit" value="adicionar">
        </fieldset>
    </form>
    </div>
</body>
</html>