<!DOCTYPE html>
<html lang="es">
<head>
    <title>tabla billetes</title>
</head>
<body>
    <table border="1">
        <?php
        $euros = readline("Cantidad a devolver: ");

        $billetes500 = intdiv($euros, 500);
        $euros = $euros % 500;

        $billetes200 = intdiv($euros, 200);
        $euros = $euros % 200;

        $billetes100 = intdiv($euros, 100);
        $euros = $euros % 100;

        $billetes50 = intdiv($euros, 50);
        $euros = $euros % 50;

        $billetes20 = intdiv($euros, 20);
        $euros = $euros % 20;

        $billetes10 = intdiv($euros, 10);
        $euros = $euros % 10;

        $billetes5 = intdiv($euros, 5);
        $euros = $euros % 5;

        $monedas2 = intdiv($euros, 2);
        $euros = $euros % 2;

        //porque es una tonteria dividirlo por 1
        $monedas1 = $euros;
        ?>
        <tr>
            <th>tipo</th>
            <th>cantidad</th>
        </tr>
        <tr>
            <td>Billetes de 500</td>
            <td><?= $billetes500 ?></td>
        </tr>

        <tr>
            <td>Billetes de 200</td>
            <td><?= $billetes200 ?></td>
        </tr>

        <tr>
            <td>Billetes de 100</td>
            <td><?= $billetes100 ?></td>
        </tr>

        <tr>
            <td>Billetes de 50</td>
            <td><?= $billetes50 ?></td>
        </tr>

        <tr>
            <td>Billetes de 20</td>
            <td><?= $billetes20 ?></td>
        </tr>

        <tr>
            <td>Billetes de 10</td>
            <td><?= $billetes10 ?></td>
        </tr>

        <tr>
            <td>Billetes de 5</td>
            <td><?= $billetes5 ?></td>
        </tr>

        <tr>
            <td>Monedas de 2</td>
            <td><?= $monedas2 ?></td>
        </tr>

        <tr>
            <td>Monedas de 1</td>
            <td><?= $monedas1 ?></td>
        </tr>
    </table>
</body>
</html>
