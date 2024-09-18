<?php
/*1. Se declara una variable con un valor numérico. UƟlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.
    a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
    con ningún día.*/
    
    $var = 5;

    switch ($var) {
        case 1: 
            echo "El valor establecido corresponde al día Lunes.";
            break;
        case 2: 
            echo "El valor establecido corresponde al día Martes.";
            break;
        case 3: 
            echo "El valor establecido corresponde al día Miércoles.";
            break;
        case 4: 
            echo "El valor establecido corresponde al día Jueves.";
            break;
        case 5: 
            echo "El valor establecido corresponde al día Viernes.";
            break;
        case 6: 
            echo "El valor establecido corresponde al día Sábado.";
            break;
        case 7: 
            echo "El valor establecido corresponde al día Domingo.";
            break;
        default:
            echo "El valor está fuera de los días de la semana.";
            break;
    }

 