<?php 
    $dato1="";
    $dato2="";
    $dato3="";

    $myfile = fopen("data/sensor1.txt", "r");
    $dato1=fread($myfile,filesize("data/sensor1.txt"));
    fclose($myfile);

    $myfile = fopen("data/sensor2.txt", "r");
    $dato2=fread($myfile,filesize("data/sensor2.txt"));
    fclose($myfile);

    $myfile = fopen("data/sensor3.txt", "r");
    $dato3=fread($myfile,filesize("data/sensor3.txt"));
    fclose($myfile);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5;url=dashboard.php" />
        <meta name="viewport" content="width=device-width"/>
        <link rel="shortcut icon" href="img/ibero_icon.png">
        <title>Monitoreo CO2 | Ibero</title>
        <link rel="stylesheet" href="styles/inicio.css">
        <script src="scripts/funciones.js"></script>

        <table width="375px" height="72px" align=center>
            <tr>
                <td width="50%" align="center" bgcolor="white"><img align="center" width="50%"src="img/logo_ibero.png"></td>
                <td width="50%" align="center" bgcolor="white"><img align="center" width="100%"  src="img/logo_ingenierias.png"></td>
            </tr>
        </table>

        <table width="375px" height="33px" align=center>
            <tr>
                <td bgcolor="#FF314D">
                    <p align="center" style="color: white; size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Monitoreo CO2 - IBERO</p>
                </td>
            </tr>
        </table>

    </head>

    <body>
        <table width=375px align=center>
            <tr >
                <td align=center>
                    
                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img id="semaforo1" src="img/verde.png">
                                <p class="texto_min">Sano: 0 a 100</p>
                                <p class="texto_min">Viciado: 100-200</p>
                                <p class="texto_min">Peligro: >200</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 1</p>
                                <b class="texto_grande"> J105</b>
                                <p id="sensor1" class="texto_grande">
                                    <?php 
                                        echo $dato1;
                                    ?>
                                </p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">23/06/21 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img id="semaforo2" src="img/verde.png">
                                <p class="texto_min">Sano: 0 a 100</p>
                                <p class="texto_min">Viciado: 100-200</p>
                                <p class="texto_min">Peligro: >200</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 2</p>
                                <b class="texto_grande"> J104</b>
                                <p id="sensor2" class="texto_grande">
                                    <?php 
                                        echo $dato2;
                                    ?>
                                </p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">23/06/21 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img id="semaforo3" src="img/verde.png">
                                <p class="texto_min">Sano: 0 a 100</p>
                                <p class="texto_min">Viciado: 100-200</p>
                                <p class="texto_min">Peligro: >200</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 3</p>
                                <b class="texto_grande"> J102</b>
                                <p id="sensor3" class="texto_grande">
                                    <?php 
                                        echo $dato3;
                                    ?>
                                </p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">23/06/21 11:00am</p>
                            </td>
                        </tr>
                    </table>
            
                </td>
            </tr>
        </table>

        <script>semaforo()</script>

    </body>
</html>