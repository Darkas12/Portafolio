<?php
if($_POST){
$rad= $_POST['radio'];


$cir= ($rad*$rad) * 3.14;

echo("El area del circulo es " . $cir);

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