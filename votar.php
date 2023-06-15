<?php
if ($_POST) {
    $edad= $_POST['edad'];
    $se= $_POST['sexo'];

}

if($edad>=18)
{
    echo(" eres $se si puedes votar");
}
else
{
    echo("eres $se no puedes votar");
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