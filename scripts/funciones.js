
var dato1, dato2, dato3;
var img_verde="img/verde.png";
var img_rojo="img/rojo.png";
var img_amarillo="img/amarillo.png";

function semaforo(){

    dato1=document.getElementById("sensor1").innerHTML;
    dato2=document.getElementById("sensor2").innerHTML;
    dato3=document.getElementById("sensor3").innerHTML;

    dato1=parseInt(dato1);
    dato2=parseInt(dato2);
    dato3=parseInt(dato3);

    if(dato1<100){
        document.getElementById("semaforo1").setAttribute("src",img_verde);
    }
    else if (dato1<200){
        document.getElementById("semaforo1").setAttribute("src",img_amarillo);
    }
    else{
        document.getElementById("semaforo1").setAttribute("src",img_rojo);
    }

    if(dato2<100){
        document.getElementById("semaforo2").setAttribute("src",img_verde);
    }
    else if (dato2<200){
        document.getElementById("semaforo2").setAttribute("src",img_amarillo);
    }
    else{
        document.getElementById("semaforo2").setAttribute("src",img_rojo);
    }

    if(dato3<100){
        document.getElementById("semaforo3").setAttribute("src",img_verde);
    }
    else if (dato3<200){
        document.getElementById("semaforo3").setAttribute("src",img_amarillo);
    }
    else{
        document.getElementById("semaforo3").setAttribute("src",img_rojo);
    }

}