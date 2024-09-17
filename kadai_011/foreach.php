<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php
    $onion_data = ['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];
    
    // $onion_dataのキーと値を一つずつ順番に出力する
    foreach ($onion_data as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  
</body>
</html>