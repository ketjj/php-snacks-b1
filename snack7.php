<?php
## Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$alunni = [
  [
    'nome' => 'Draco',
    'cognome' => 'Malfoy',
    'voti' => [
      'letteratura' => 8,
      'fisica' => 5,
      'matematica' => 6,
      'inglese' => 8,
    ]
  ],
  [
    'nome' => 'Hermione',
    'cognome' => 'Granger',
    'voti' => [
      'letteratura' => 10,
      'fisica' => 9,
      'matematica' => 8,
      'inglese' => 10
    ]
  ]
]

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php snack-7</title>
</head>
<body>
  <h1>Classe Hogwarts</h1>
  <?php 
  for($i = 0; $i < count($alunni); $i++){
    $alunno = $alunni[$i]; 
    $totVoti = array_sum($alunno['voti']);
    //devo arrotondarli
    $media = round($totVoti/ 4);
    ?>
  
  <h4><?php echo $alunno['nome'] ?> <?php echo $alunno['cognome'] ?></h4>
  <p>Il voto medio è : <?php echo $media; ?></p>
  <?php } ?>


  <h1>Classe Hogwarts</h1>
  <?php 
  foreach($alunni as $key => $alunno) { ?>
    <h4><?php echo $alunno['nome']?> <?php echo $alunno['cognome']?></h4>
    <?php foreach($alunno['voti'] as $key => $voti) : ?>
     <p><?php echo $key; ?>=<?php echo $voti; ?></p>
    <?php endforeach; ?>
    <p> La media è: <?php echo round(array_sum($alunno['voti']) / count($alunno['voti'])) ?></p>
   
  <?php } ?>


</body>
</html>