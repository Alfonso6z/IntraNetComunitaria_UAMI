<?php
$listar = null;
$directorio = opendir("arch/");
while($elemento = readdir($directorio)){
    if(is_dir("archivos/".$elemento)){
        $listar .= "<li><a href='arch/$elemento' target='_blank'>$elemento/</a></li>";
    }else{
        $listar .= "<li><a href='arch/$elemento' target='_blank'>$elemento</a></li>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivos</title>
</head>

<body>
    <h1 style="color: white" align="center">Archivos</h1>
    <ul>
        <?php echo $listar ?>
    </ul>
</body>

</html>