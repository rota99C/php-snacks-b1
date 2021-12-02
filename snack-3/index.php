<?php
// creo array di array
$posts2021 = [
  '15/01/2021' => [
    [
      'title' => 'Post 1',
      'author' => 'Lisa Simpson',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Barney Gumble',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
  ],
  '08/02/2021' => [
    [
      'title' => 'Post 3',
      'author' => 'Ned Flanders',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ],
  '22/03/2021' => [
    [
      'title' => 'Post 4',
      'author' => 'Milhouse Van Hauten',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Bart Simpson',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Waylon Smithers',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ]
];

//var_dump($posts2021);

// ciclo ogni array
foreach ($posts2021 as $data => $informazioni) { ?>
    <p> <?= $data ?> </p>
    <?php
    // e stampo ogni data con le relative informazioni
    for ($i=0; $i < count($informazioni) ; $i++) { ?>
      <p><?= $informazioni[$i]["title"] ?></p>
      <p><?= $informazioni[$i]["author"] ?></p>
      <p><?= $informazioni[$i]["text"] ?></p>
      <br>
    <?php  } ?>
<?php  } ?>