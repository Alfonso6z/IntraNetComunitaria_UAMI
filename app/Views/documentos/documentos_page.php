<?php
$listar = null;
$directorio = opendir("arch/");
while($elemento = readdir($directorio)){
    if($elemento != '.' && $elemento != '..'){
        if(is_dir("archivos/".$elemento)){
            $listar .= "<li><a class='urls' href='arch/$elemento' target='_blank'>$elemento/</a></li>";
        }else{
            $listar .= "<li><a class='urls' href='arch/$elemento' target='_blank'>$elemento</a></li>";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style_home.css">
    <title>Documentos</title>
</head>

<body>
    <h1 style="color: white" align="center">Documentos</h1>
    <div class="textIntro container rounded border mb-3" style="background: #000000D8;">
        <ul>
            <?php echo $listar ?>
        </ul>
    </div>
</body>

</html>