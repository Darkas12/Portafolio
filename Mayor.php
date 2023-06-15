<?php
if ($_POST) {
$n1= $_POST['N1'];
$n2= $_POST['N2'];
$n3= $_POST['N3'];
}


if($n1>$n2 && $n1>$n3){


echo("El mayor es " . $n1);

}

if($n2>$n1 && $n2>$n3){


    echo("El mayor es " . $n2);
    
    }

 if($n3>$n2 && $n3>$n1){
     echo("El mayor es " . $n3);
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
