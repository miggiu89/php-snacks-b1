<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php 

$nome = $_GET['nome'];
$mail = $_GET['mail'];
$eta = $_GET['eta'];

$accesso = '';
$suggerimento = '';

    if ( empty($nome) && empty($mail) && empty($eta) ) {
        $accesso = 'Accesso negato';
        $suggerimento = 'Inserisci nome, mail e età';
    } elseif ( strlen($nome) < 3 ){
        $accesso = 'Accesso negato';
        $suggerimento = 'Inserisci un nome più lungo di tre caratteri';
    } elseif ( !strpos($mail, '@') || !strpos($mail, '.') ) {
        $accesso = 'Accesso negato';
        $suggerimento = 'Inserisci un\'email corretta. Che contenga un "@" e un punto "."';
    } elseif ( !is_numeric($eta) ) {
        $accesso = 'Accesso negato';
        $suggerimento = 'Inserisci la tua età';
    } else {
        $accesso = 'Accesso consentito';
    }



?>
    <div><?php echo $accesso ?></div>
    <div><?php echo $suggerimento ?></div>
</body>
</html>
