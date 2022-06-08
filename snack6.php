<?php
 
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
  <title>Php snack-6</title>
  <style>
      .box{
          width:300px;
          height: 100px;
          margin-bottom:20px;
          color:white;
      }
      .teachers{
          background-color: gray;
      }
      .pm{
        background-color: green; 
      }
  </style>
</head>
<body>
    <?php foreach($db as $key => $value) : ?>
    <div class="box <?php echo $key ?>">
        <div><?php echo $key ?></div>
        <?php foreach($value as $person) : ?>
            <div><?php echo $person['name']. ' ' . $person['lastname']?></div>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</body>
</html>