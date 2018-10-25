<?php
include 'desechos.php';

//Comprobamos Si las cookies se han guardado
if(isset($_COOKIE["nombre"]) && isset($_COOKIE["contra"])){
    //en caso afirmativo con .date sacamos dia y hora del ultimo logeo
echo "<div>Ultimo logeo: ".date('d-m-Y')." a las ".date('G:i')."h</div>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
    
    </head>
    <body>
        <h1>E S P E C T A C U L O</h1>
        <a href="index.php">volver</a>

    </body>
</html>
<?php


