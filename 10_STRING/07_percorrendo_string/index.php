<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td:first-child {
            color: #d32f2f;
            font-weight: bold;
        }
        td:last-child {
            color: #388e3c;
            font-weight: bold;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>❌ Errado</th>
            <th>✅ Correto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>strlen($str)</code></td>
            <td><code>mb_strlen($str, 'UTF-8')</code></td>
        </tr>
        <tr>
            <td><code>$str[$i]</code></td>
            <td><code>mb_substr($str, $i, 1, 'UTF-8')</code></td>
        </tr>
        <tr>
            <td>Conta bytes (quebra acentos)</td>
            <td>Conta caracteres (preserva acentos)</td>
        </tr>
    </tbody>
</table>

</body>
</html>



<?php

$str="Esta é uma string muito grande, ela tem vários caracteres.";

// CORRETO: usar mb_strlen() para contar caracteres
for ($i=0; $i < mb_strlen($str, 'UTF-8') ; $i++) { 

     // CORRETO: usar mb_substr() para pegar o caractere na posição
    echo mb_substr($str, $i, 1, 'UTF-8') . "<br>";
}

?>

