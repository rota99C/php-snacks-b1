<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php
  $primaStagione_Basket = [ 
      [
      "Squadra_casa" => "lakers",
      "Squadra_punti_casa" => 23,
      "Squadre_ospite" => "Los Angeles",
      "Squadra_punti_ospite" => 56,
    ],
    [
      "Squadra_casa" => "Miami",
      "Squadra_punti_casa" => 23,
      "Squadre_ospite" => "Cleveland",
      "Squadra_punti_ospite" => 58,
    ],
    [
      "Squadra_casa" => "Raptors",
      "Squadra_punti_casa" => 68,
      "Squadre_ospite" => "Bergamo",
      "Squadra_punti_ospite" => 79,
    ]
  ];

  for ($i=0; $i < count($primaStagione_Basket); $i++) {
?>
    <p style="font-size:18px;">
      <?= $primaStagione_Basket[$i]['Squadra_casa'] ?> -
      <?= $primaStagione_Basket[$i]['Squadre_ospite'] ?> |
      <?= $primaStagione_Basket[$i]['Squadra_punti_casa'] ?> -
      <?= $primaStagione_Basket[$i]['Squadra_punti_ospite'] ?>
    </p>
<?php } ?>
