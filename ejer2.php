<?php
    $figura= $_POST["figura"];
    $perimetro= 0;
    $area= 0;

    $lado= $_POST["lado"];
    $lado1= $_POST["lado1"];
    $lado2= $_POST["lado2"];
    $lado3= $_POST["lado3"];
    $baset= $_POST["baset"];
    $baser= $_POST["baser"];
    $alturat= $_POST["alturat"];
    $alturar= $_POST["alturar"];
    $radio= $_POST["radio"];
    
    switch ($figura) {
        case 'triangulo':
            $area=($baset*$alturat)/2;
            $perimetro= $lado1+$lado2+$lado3;
            print "<h4>El Perímetro del Triangulo es: $perimetro:</h4>";
            print "<h4>El Area del Triangulo es: $area:</h4>";
            break;
        case 'cuadrado':
            $area= ($lado ** 2);
            $perimetro= 4*$lado;
            print "<h4>El Perímetro del Cuadrado es: $perimetro:</h4>";
            print "<h4>El Area del Cuadrado es: $area:</h4>";
            break;

        case 'rectangulo':
            $area= ($baser*$alturar);
            $perimetro= 2*$baser+2*$alturar;
            print "<h4>El Perímetro del Rectángulo es: $perimetro:</h4>";
            print "<h4>El Area del Rectángulo es: $area:</h4>";
            break;

        case 'circulo':
            $area= ($radio ** 2) *M_PI;
            $perimetro= 2 *($radio) *M_PI;
            print "<h4>El Perímetro del Circulo es: $perimetro:</h4>";
            print "<h4>El Area del Circulo es: $area:</h4>";
            break;
        
        default:
            # code...
            break;
    }
    echo "<input type='button' value='Volver' onclick='history.go(-1)'>";
?>