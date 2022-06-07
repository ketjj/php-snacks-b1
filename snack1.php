<?php
// ## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite = [
  [
    'squadraCasa' => 'Virtus Bologna',
    'squadraOspite' => 'Derthona',
    'punti_casa' => 77,
    'punti_ospite' => 73
  ],
  [
    'squadraCasa' => 'Dinamo Sassari',
    'squadraOspite' => 'Brescia',
    'punti_casa' => 98,
    'punti_ospite' => 95
  ],
  [
    'squadraCasa' => 'Olimpia Milano',
    'squadraOspite' => 'Reggiana',
    'punti_casa' => 91,
    'punti_ospite' => 65
  ],
  [
    'squadraCasa' => 'VL Pesaro',
    'squadraOspite' => 'Virtus Bologna',
    'punti_casa' => 55,
    'punti_ospite' => 75
  ],
  [
    'squadraCasa' => 'Venezia',
    'squadraOspite' => 'Derthona',
    'punti_casa' => 60,
    'punti_ospite' => 72
  ],
  [
    'squadraCasa' => 'Brindisi',
    'squadraOspite' => 'Derthona',
    'punti_casa' => 82,
    'punti_ospite' => 99
  ],
  [
    'squadraCasa' => 'Trieste',
    'squadraOspite' => 'Universo Treviso',
    'punti_casa' => 84,
    'punti_ospite' => 85
  ],

];

// var_dump($partite);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Snack1</title>
</head>
<body>

    <?php for($i = 0; $i < count($partite); $i++) : ?>
      <span><?php echo $partite[$i]['squadraCasa']?> - <?php echo $partite[$i]['squadraOspite']?> | <?php echo $partite[$i]['punti_casa']?>-<?php echo $partite[$i]['punti_ospite']?><br></span> 
    <?php endfor; ?>


</body>
</html>