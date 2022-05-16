<?php 

$dato="";

    if(isset($_GET['sensor']) ){ 

        if($_GET['sensor']!="" ){

                $myfile = fopen("data/sensor2.txt", "w");
    
                $dato=$_GET['sensor'];
            
                fwrite($myfile, $dato);
                fclose($myfile);
        }


    }
?>

<!DOCTYPE html>
<html>
    <head>
        <p>
            <?php 
                echo $dato;
                ?>
         </p>
    </head>

    <body>
    </body>

</html>