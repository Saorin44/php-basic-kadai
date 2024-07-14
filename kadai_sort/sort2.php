<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
      $num=[4,10,15,18,23];
     sort($num);
     echo '昇順にソートします<br>';
     foreach($num as $num_n){
      echo $num_n.'<br>';
     }
     rsort($num);
     echo '降順にソートします<br>';
     foreach($num as $num_n){
      echo $num_n.'<br>';}
        ?>
    </p>
</body>

</html>