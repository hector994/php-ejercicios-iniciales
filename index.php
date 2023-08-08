<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo '<br><br>ejercicio 1<br><br>';
    //$Salario=450;
    //$Salario=600;
    //$Salario=800;
    $Salario=900;

    if($Salario <= 450.00){
        $Resultado = ($Salario-($Salario*0.08));
        echo "Se le decontara el 8% a su salario de ".$Salario."$. La cantidad a restar es ".($Salario*0.08).
        "$ Su nuevo salario sera de ".$Resultado."$";
    }else
    if ($Salario <= 600.00) {
        $Resultado = $Salario - ($Salario*0.15); 
        echo "Se le decontara el 15% a su salario de ".$Salario."$. La cantidad a restar es ".($Salario*0.15).
        "$ Su nuevo salario sera de ".$Resultado."$";
    }else
    if ($Salario <= 800.00) {
        $Resultado = $Salario - ($Salario*0.18);
        echo "Se le decontara el 18% a su salario de ".$Salario."$. La cantidad a restar es ".($Salario*0.18).
        "$ Su nuevo salario sera de ".$Resultado."$";
    }else
    if ($Salario <= 1000.00 || $Salario > 1000.00) {
        $Resultado = $Salario - ($Salario*0.20);
        echo "Se le decontara el 20% a su salario de ".$Salario."$. La cantidad a restar es ".($Salario*0.20).
        "$ Su nuevo salario sera de ".$Resultado."$";
    }

    echo '<br><br>ejercicio 2<br><br>';

    $Billete=1;
    $ProductoPrecio=0.75;
    
    while ($ProductoPrecio > $Billete) {
        echo 'Ingrese un billete de mayor denominacion';
        echo '... se devolvio el billete';
        break;
    }
    switch ($Billete) {
        case 1:
            $vuelto = $Billete - $ProductoPrecio;
            if ($vuelto<0) {
                break;
            } 
            echo $vuelto.'$ tu cambio';        
            break;
        case '5':
            $vuelto = $Billete - $ProductoPrecio;
            if ($vuelto<0) {
                break;
            }    
            echo $vuelto.'$ tu cambio';
            break;
        case '10':
            $vuelto = $Billete - $ProductoPrecio;  
            if ($vuelto<0) {
                break;
            }  
            echo $vuelto.'$ tu cambio';
            break;
        case '20':
            $vuelto = $Billete - $ProductoPrecio;
            if ($vuelto<0) {
                break;
            }  
            echo $vuelto.'$ tu cambio';  
            break;
        default:
            echo 'no se aceptan billetes de esta denominacion';
            echo '...se devolvio el billete';
        break;
    }

    echo '<br><br>ejercicio 3<br><br>';

    $repetir=2;
    $pokemon = "<img src='https://projectpokemon.org/images/normal-sprite/charmander.gif'/>";
    //$Mew = "<img src='https://projectpokemon.org/images/normal-sprite/mew.gif'/>";
    
    for ($i=0; $i < $repetir; $i++) { 
        echo $pokemon;
        //echo $Mew;
    }

    echo '<br><br>ejercicio 4<br><br>';

    $Bale=5;
    $contador=0;
    while ($Bale > 0) {
        do {
           $victoria = rand(0,9);
           if ($victoria<5) {
                echo 'sigue jugando<br>';
           } else {
                echo 'perdiste...<br>';
                $Bale--;
           }
           $contador++;
        } while ($Bale > 0);
        echo 'Geme Over...<br>';
        echo 'partidas jugadas: '.$contador.'<br>';
        echo 'deposita mas boletos...<br>';
    }

    echo '<br><br>ejercicio 5<br><br>';

    $Puntos=100;

    if ($Puntos>500) {
        echo 'No es posible esa puntuacion...';
    } else {  
        switch ($Puntos) {
            case '100':
                echo 'ganaste 40$';
                break;
            case '200':
                echo 'ganaste 60$';
                break;
            case '400':
                echo 'ganaste 80$';
                break;
            case '500':
                echo 'ganaste 100$';
                break;
            
            default:
                echo 'No ganaste premio';
                break;
        }
    }

    ?>
    
</body>
</html>