<?php 
// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
// aggiungete poi i seguenti snack da realizzare

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga velit ipsum nisi doloribus delectus totam voluptates eos ad, ullam assumenda qui hic magni autem reiciendis inventore fugit eaque necessitatibus cupiditate vero perferendis? Ducimus ipsam necessitatibus dolor minus earum hic illum optio animi nisi asperiores tempore molestias beatae, odit atque doloremque quis suscipit neque maxime nesciunt. Perspiciatis consequatur consequuntur quo? Mollitia, molestiae. Error sint, sit ad tenetur itaque ducimus repellat dolor, autem perspiciatis eligendi atque eaque eos obcaecati. Quod totam illum laudantium unde assumenda, tempora minus possimus officiis sint? Inventore obcaecati maxime voluptates ea recusandae est, magni dolore iste, pariatur dicta explicabo impedit nulla fugiat error rem id molestiae? Veniam odit earum dolor quibusdam incidunt praesentium ullam. Officiis sapiente vero iusto. Est minima qui porro autem reiciendis ducimus facilis voluptate temporibus voluptatibus.';

$paragrafo_diviso = explode( '.', $paragrafo);
// $paragrafo_diviso = explode( '.', $paragrafo, -1);

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
  <ul>
    <?php for($i = 0; $i < count($paragrafo_diviso); $i++):

      if(!empty($paragrafo_diviso[$i])) : ?>
        <li><?php echo $paragrafo_diviso[$i]; ?></li>
      <?php endif; ?>

    <?php endfor; ?>
  </ul>
</body>
</html>