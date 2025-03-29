<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎連想配列を作ってキーと値を出力しよう</title>
</head>

<body>
   <p>
       <?php
       // 連想配列に値を代入する
       $Array = ['name' => 'onion','price' => 200,'weight' => '160'];
       print_r($Array);
       ?>
   </p>
</body>

</html>