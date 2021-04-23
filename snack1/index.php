<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        'squadraCasa' => 'Los Angeles Lakers',
        'squadraOspite' => 'Miami Heat',
        'puntiCasa' => '60',
        'puntiOspite' => '45'
    ],
    [
        'squadraCasa' => 'Orlando Magic',
        'squadraOspite' => 'Toronto Raptors',
        'puntiCasa' => '89',
        'puntiOspite' => '78'
    ],
    [
        'squadraCasa' => 'Indiana Pacers',
        'squadraOspite' => 'denver Nuggets',
        'puntiCasa' => '92',
        'puntiOspite' => '105'
    ],
];


?>

<?php 
        for ( $i = 0; $i < count($partite); $i++ ) {
            $casa = $partite[$i]['squadraCasa'];
            $ospite = $partite[$i]['squadraOspite'];
            $puntiCasa = $partite[$i]['puntiCasa'];
            $puntiOspite = $partite[$i]['puntiOspite'];
    ?>
    <div> <?php echo $casa . ' - ' . $ospite . ' | ' . $puntiCasa . ' - ' . $puntiOspite ?></div>
    <?php } ?>

</body>
</html>