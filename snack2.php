<?php 
// ## Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$output = '';
$error = '';
$accessOK = true;


if(empty($name) || empty($mail) || empty($age)){
  $accessOK = false;
  $error = 'Devi Inserire: nome, cognome e età';
}
elseif(strlen($name) < 3){
  $accessOK = false;
  $error = 'Devi Inserire un nome di almeno 3 caratteri ';
}
elseif(!strpos($mail, '.') || !strpos($mail, '@')){
  $accessOK = false;
  $error = 'Il formato della mail è: example@eee.com';
}
elseif(!is_numeric($age)){
  $accessOK = false;
  $error = 'Devi inserire un numero';
};




if($accessOK){
  $output = 'Accesso riuscito';
}
else{
  $output = 'Accesso negato';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php snack 2</title>
</head>
<body>
  <h3><?php echo $output ?> </h3>
  <h4><?php echo $error ?></h4>
  
</body>
</html>