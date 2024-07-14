<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_kadai_sort</title>
</head>

<body>
    <p>
    <?php
  function sort_2($array, $order) {

  if ($order) {
    echo '昇順で表示します<br>';
    sort($array);  // 昇順ソート
  } else {
    echo '降順で表示します<br>';
    rsort($array); // 降順ソート
  }


  foreach ($array as $value) {
    echo $value . "<br>";
  }
}

$nums = [15, 4, 18, 23, 10];

// 昇順でソート
sort_2($nums, true);

echo "<br>"; 

// 降順でソート
sort_2($nums, false);
?>
</body>

</html>