<?php 
// ## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


// function getUniqueRandNums($min, $max, $items){
//   $randomNums = [];

//   while(count($randomNums) < $items){
//     $ranNumb = rand($min, $max);

//     if(!in_array($ranNumb, $randomNums)){
//       $randomNums[] = $ranNumb;
//     }
//   }

//   return $randomNums;
// }

// $uniqueRandNUmbers =  getUniqueRandNums(1, 30, 15);
// // var_dump($uniqueRandNUmbers);



$randomNums = [];

while(count($randomNums) < 15){
    $ranNumb = rand(1, 100);
    if(!in_array($ranNumb, $randomNums)){
      $randomNums[] = $ranNumb;
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php snack-4</title>
</head>
<body>
  <ul>
    <?php for($num = 0; $num < count($randomNums); $num++) : ?>
    <li><?php echo $randomNums[$num] ?></li>
    <?php endfor; ?>
  </ul>
  
</body>
</html>