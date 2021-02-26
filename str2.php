<html>
<head>
    <title>Lab3 Page2</title>
</head>
<body>

<form action="str3.php" method="post" id="form">
    <table cellpadding="5" border="3"
           style="border: 1px solid rgba(0,0,0,0.86); text-align: center; background-color: #7e7a7a; font-size: 30px; ">
        <tr> <td colspan="2"> КАТАЛОГ ПРОГРАММНЫХ ПРОДУКТОВ </br> Страница 2/2 </td> </tr>
        <tr> <td>Купить</td> <td>Продукт</td> </tr>
        <tr> <td><input type=checkbox  name="goods[]"  value="3D Studio Max"> </td> <td>3D Studio Max</td></tr>
        <tr> <td><input type=checkbox  name="goods[]"  value="AutoCAD"> </td> <td>AutoCAD</td></tr>

        <?php
        error_reporting(0);
        $good = $_POST['goods'];
        if (isset($good)) {
                foreach ($good as $i => $val) {
                    echo <<<here
                         <input type=hidden name="goods[]"  value="$val"> 
here;
                }
        }
        ?>
        <tr> <td colspan="2"><button type="submit">OK</button>  </td> </tr>
    </table>
</form>

</body>
</html>
