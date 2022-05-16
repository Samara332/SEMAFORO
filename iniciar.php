<?php
    $pagina_redireccion="dashboard.php";

    if(isset($_GET['user']) && isset($_GET['pswd'])){

        if($_GET['user']!="" && $_GET['pswd']!=""){

            $myfile = fopen("data/usuarios.txt", "r");

            $texto=fread($myfile,filesize("data/usuarios.txt"));
            $puntoycoma=strpos($texto, ";");
            $texto_len=strlen($texto);
            
            $usuario_txt=substr($texto,0,$puntoycoma);
            $pswd_txt=substr($texto,$puntoycoma+1,$texto_len);

            if($_GET['user']==$usuario_txt && $_GET['pswd']==$pswd_txt){
            
            }

            else{
                $pagina_redireccion="error2.html";
            }
            
        
            fclose($myfile);

        }
        else{
            $pagina_redireccion="error2.html";
        }

    }
    else{
        $pagina_redireccion="error2.html";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content=
            <?php 
                echo "0;url=".$pagina_redireccion;
                ?>
         />
    </head>

    <body>
        <p>Hola mundo2</p>
    </body>
