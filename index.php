<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php
  $frutis = [
    [
      "title" => "King of Lion",
      "author"  => "Sam",
      "Publish" => 12
    ],
    [
      "title" => "Love never end",
      "author"  => "Ken",
      "Publish" => 34
    ]

  ];
?>


  <?php foreach($frutis as $fruit): ?>

    <ul>
      <li>
         <?php echo  $fruit["author"] ?>
      </li>
    </ul>




  <?php endforeach ?>



</body>
</html>