<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //ソートを配置する宣言
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                sort($array);
                echo '昇順にソートします。<br>';
            }else if ($order === FALSE) {
                rsort($array);
                echo '降順にソートします。<br>';
            } else {
                echo '無効です。<br>';
                return;
            }
            foreach ($array as $value) {
                echo "{$value}<br>";
            }
        }
        $nums = [15, 4, 18, 23, 10];
        sort_2way($nums, TRUE);
        echo "<br>";

        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
