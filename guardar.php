<?php 

    $pagina_redireccion="index.html";

    if(isset($_GET['user']) && isset($_GET['pswd']) && isset($_GET['pswd2'])){ 

        if($_GET['user']!="" && $_GET['pswd']!=""&& $_GET['pswd2']!=""){

            if($_GET['pswd']==$_GET['pswd2']){

                $myfile = fopen("data/usuarios.txt", "w");
    
                $usuario=$_GET['user'];
                $contra=$_GET['pswd'];
            
                $texto=$usuario.";".$contra;
            
                fwrite($myfile, $texto);
                fclose($myfile);
            }
            else{
                $pagina_redireccion="error.html";
            }
           
        }
        else{
            $pagina_redireccion="error.html";
        }

    }
    else{
        $pagina_redireccion="error.html";
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

</html>


