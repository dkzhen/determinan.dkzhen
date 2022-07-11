<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];

$jml1 = $a*$e*$i;
$jml2 = $b*$f*$g;
$jml3 = $c*$d*$h;
$jml4 = $g*$e*$c;
$jml5 = $h*$f*$a;
$jml6 = $i*$d*$b;

$total=$jml1+$jml2+$jml3-$jml4-$jml5-$jml6;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <table border=1 width="500" height="400">
<tr>
    <td><input type="text" name="a"></td>
    <td><input type="text" name="b"></td>
    <td><input type="text" name="c"></td>
</tr>
<tr>
    <td><input type="text" name="d"></td>
    <td><input type="text" name="e"></td>
    <td><input type="text" name="f"></td>
</tr>
<tr>
    <td><input type="text" name="g"></td>
    <td><input type="text" name="h"></td>
    <td><input type="text" name="i"></td>
</tr>
<td colspan="3" align="center"><button type="submit">Kirim</button></td>
    </table>
    </form>

<h2>Determinan A</h2>
<?php 
echo "(".$a."x".$e."x".$i.")"."+"."(".$b."x".$f."x".$g.")"."+"."(".$c."x".$d."x".$h.")"."-"."(".$g."x".$e."x".$c.")"."-"."(".$h."x".$f."x".$a.")"."-"."(".$i."x".$d."x".$b.")<br>"."=".$jml1."+".$jml2."+".$jml3."-".$jml4."-".$jml5."-".$jml6."=".$total;



?>
</body>
</html>
