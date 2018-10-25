<?php
include 'desechos.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <style>
            
        </style>
    </head>
    <body>
        <section>
            <article>
            <h1>ACCESO:</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post"> 
            <span>Usuario:</span><input id="input1" type=" text" name="name" value="<?php if(isset($_COOKIE["nombre"])) echo $_COOKIE["nombre"]; ?>"><br>
            <span>Password:</span><input id="input2" type="password" name="contra" value="<?php if(isset($_COOKIE["contra"])) echo $_COOKIE["contra"]; ?>"><br>
            <input type='checkbox' id='recordar' name='check' value='1'>Recordar contraseña
            <input id="input3" type="submit" value="Entrar">
            <?php
            
            //He utilizado checbox porque no he conseguido borrar usando <inputs buttons> o <a> 
            
            /*if(isset($_COOKIE["contra"]) && isset($_COOKIE["contra"]))
             echo "<a href='login.php' id='borradorineitor' name='borrar' value='1'>Borrar</a>";   */
            if(isset($_COOKIE["contra"]) && isset($_COOKIE["contra"])){ 
             echo "<input type='checkbox' id='borrar' name='borrar' value='1'>BOrrar";
            echo '<input id="input3" type="submit" value="Borrar">';
            }
            /*if(isset($_COOKIE["contra"]) && isset($_COOKIE["contra"]))
             *  echo "<input id='input4' type='button' name='borrar' value='Borrar_datos'> ";*/
                ?>
            <p>Usuario:sergio <br> Contraseña: abcd </p>
            </article>
        </form>
          </section>  
    </body>
</html>
<?php
