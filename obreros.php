<?php
if ($_POST) {
    $hr=$_POST['horas'];
    $Money=$_POST['dinero'];
}

if ($hr = 35) {
   $total= $hr*$Money;
}
if ($hr> 35) {
    $total=(0.015*$Money) + ($hr*$Money);
}

if ($total<20000) {
    echo("el salrio es libre de impuestos el total es " . $total);
}
else{
$impuestos=($total) - (0.2*$total);

echo("el precio con impuestos  es " . $impuestos);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html" class="links"> volver
    </a>
</body>
</html>