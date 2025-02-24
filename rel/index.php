<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Vendas por Forma de Pagamento</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Relatório de Vendas por Forma de Pagamento Sintético</h2>

<?php
// Dados mockados de vendas
$empresas = [
    'Capital Rolamento 1' => [
        'Dinheiro' => 1150.00,
        'Cartão' => 2200.00,
        'Pix' => 4100.00,
        'Boleto' => 0.00,
        'Carteira' => 990.00,
        'Faturamento' => 0.00,
        'Carteira Normal' => 0.00,
    ],
    'Capital Rolamento 2' => [
        'Dinheiro' => 0.00,
        'Cartão' => 180.00,
        'Pix' => 500.00,
        'Boleto' => 3300.00,
        'Carteira' => 4250.00,
        'Faturamento' => 400.00,
        'Carteira Normal' => 0.00,
    ],
    'Capital Rolamento 3' => [
        'Dinheiro' => 5100.00,
        'Cartão' => 25200.00,
        'Pix' => 0.00,
        'Boleto' => 0.00,
        'Carteira' => 4000.00,
        'Faturamento' => 0.00,
        'Carteira Normal' => 0.00,
    ],
    'Capital Rolamento 4' => [
        'Dinheiro' => 0.00,
        'Cartão' => 0.00,
        'Pix' => 2150.00,
        'Boleto' => 4100.00,
        'Carteira' => 0.00,
        'Faturamento' => 0.00,
        'Carteira Normal' => 0.00,
    ],
    'Capital Rolamento 5' => [
        'Dinheiro' => 0.00,
        'Cartão' => 1000.00,
        'Pix' => 5150.00,
        'Boleto' => 4100.00,
        'Carteira' => 0.00,
        'Faturamento' => 0.00,
        'Carteira Normal' => 1000.00,
    ],
];
?>

<table>
    <tr>
        <th>Empresa</th>
        <th>Dinheiro</th>
        <th>Cartão</th>
        <th>Pix</th>
        <th>Boleto</th>
        <th>Carteira</th>
        <th>Faturamento</th>
        <th>Carteira Normal</th>
    </tr>
    <?php foreach ($empresas as $empresa => $formas): ?>
        <tr>
            <td><?php echo $empresa; ?></td>
            <td><?php echo number_format($formas['Dinheiro'], 2, ',', '.'); ?></td>
            <td><?php echo number_format($formas['Cartão'], 2, ',', '.'); ?></td>
            <td><?php echo number_format($formas['Pix'], 2, ',', '.'); ?></td>
            <td><?php echo number_format($formas['Boleto'], 2, ',', '.'); ?></td>
            <td><?php echo number_format($formas['Carteira'], 2, ',', '.'); ?></td>
            <td><?php echo number_format($formas['Faturamento'], 2, ',', '.'); ?></td>
            <td><?php echo number_format($formas['Carteira Normal'], 2, ',', '.'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
