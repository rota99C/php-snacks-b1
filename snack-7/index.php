<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [
    [
        'name' => 'Marco',
        'cognome' => 'Bianchi',
        'voti' => [10,9,7,5]
    ],
    [
        'name' => 'Alessia',
        'cognome' => 'Verdi',
        'voti' => [8,6,4,8]
    ],
    [
        'name' => 'Andrea',
        'cognome' => 'Rossi',
        'voti' => [4,6,8,5]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php for ($i=0; $i < count($alunni); $i++) { ?>
    <p> Alunno/a:
        <?php echo $alunni[$i]['name']; ?>
        <?php echo $alunni[$i]['cognome']; ?>
    </p>
    <p> Media delle votazioni:
        <?php
        $voti = $alunni[$i]['voti'];
        echo array_sum($voti) / count($voti) ?>
        
    </p>
    <br>
<?php } ?>

</body>
</html>