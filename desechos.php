<?php
//Con esto comprobamos que esten definidos 
//Usamos la variable SuperGlobal $ _POST porque en el formulario utilizamos el metodo post
//$_POST['name'] saca el contenido del input name de index.php
//$_POST['contra'] saca el contenido del input contra de index.php
if(isset($_POST['name']) && isset($_POST['contra'])){
//Aqui establezco las varaibles para la autentificacion    
$name=$_POST['name'];
$pass=$_POST['contra'];
$n="sergio";
$c="abcd";
if($name==$n && $pass==$c){ 
 //Si la condicion se cumple guardaremos los valores de los inputs en estas variables   
$cookie_name=$_POST['name'];
$cookie_pass=$_POST['contra'];
$cookie_check=$_POST['check'];
if(isset($_POST['check']) && $_POST['check']=='1'){
    //con setcookie establecemos las cookies ("nombre de la cokie", "valor de la cookie", fecha de expiracion donde se guardara
    setcookie("checkb",$cookie_check,time()+60*60*24*365,"/");
    setcookie("nombre",$cookie_name,time()+60*60*24*365,"/");
    setcookie("contra",$cookie_pass,time()+60*60*24*365,"/");
}
//redirigir a login.html
header("Location: login.php");

}
else{
    //Con esto hacemos que salte un pop alert avisando de los datos erroneos
   echo "<script type='text/javascript'>alert('ERROR DE AUTENTIFICACION')</script>";
}
}
//Lo he hecho con un checkbox porque no enctroba manera de hacerlo con button
   if(isset($_POST['borrar']) && $_POST['borrar'] == '1'){
       setcookie ("nombre","",time()-60*60*24*365,"/");
        setcookie("contra","",time()-60*60*24*365,"/");
    /*unset($_COOKIE['nombre']);
    unset($_COOKIE['contra']);*/
    
   }
    
