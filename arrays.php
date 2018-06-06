<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/01
 * Time: 9:21
 */
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title></title>
<meta charset="utf-8">
<!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<?php


// インターフェイス 'iTemplate' を宣言する
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

$fruits = array(
    'apple' => array(
        'price' => 100,
        'count' => 2,
    ),
    'banana' => array(
        'price' => 80,
        'count' => 5,
    ),
    'orange' => array(
        'price' => 90,
        'count' => 3,
    )
);

foreach ($fruits as $name => $value) {
    echo "$name は1つ {$value['price']} 円で、{$value['count']} 個です", PHP_EOL;
}

array_key_exists('apple', $fruits); // true

?>
</body>
</html>