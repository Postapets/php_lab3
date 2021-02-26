<html>
<head>
    <title>Lab3 Page3</title>
    <style>
        h3,h2 {color: #000000;}
    </style>
</head>
<body>
<table cellpadding="5" border="3"
       style="border: 1px solid rgba(0,0,0,0.86); text-align: center; background-color: #7e7a7a; font-size: 30px; ">
<tr><td><h3>Выбранные продукты:</h3></td></tr>
<tr><td><?php
error_reporting(0);
    $goods = $_POST['goods'];
    $s = 1;
if (isset($goods)) {
    foreach ($goods as $i => $val) {
        echo "$s".") ".$val."<br />";
        $s++;
    }

}
else echo "<h2>Вы ничего не выбрали.</h2>"
?></tr></td>
</table>
</body>
</html>
