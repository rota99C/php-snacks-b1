<?php
//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
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

    <?php
    foreach ($db as $ruolo => $info) {?>

        <?php if ($ruolo == 'teachers'){?>
        <div style="background-color:green">

        <h4><?php echo strtoupper($ruolo); ?></h4>
            
        <?php 
            for ($i=0; $i < count($info); $i++) { ?>
                <p><?= $info[$i]['name'] ?>
                <?= $info[$i]['lastname'] ?></p>
            <?php }; ?>
        </div>
        <?php } else { ?>

            <div style="background-color:gray">

            <h4><?php echo strtoupper($ruolo); ?></h4>
            
        <?php 
            for ($i=0; $i < count($info); $i++) { ?>
                <p><?= $info[$i]['name'] ?>
                <?= $info[$i]['lastname'] ?></p>
            <?php }; ?>
        </div>

            <?php } ?>


            
            
        </div>
   <?php } ?>
    
</body>
</html>