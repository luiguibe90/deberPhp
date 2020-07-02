<?php
    $figura= $_POST["figura"];
    $perimetro= 0;
    $area= 0;

    $lado= $_POST["lado"];
    $lado2= $_POST["lado2"];
    $lado3= $_POST["lado3"];
    $base= $_POST["base"];
    $altura= $_POST["altura"];
    $radio= $_POST["radio"];
    
    switch ($figura) {
        case 'triangulo':
            $area=($base*$altura)/2;
            $perimetro= $lado+$lado2+$lado3;
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
            $area= ($base*$altura);
            $perimetro= 2*$base+2*$altura;
            print "<h4>El Perímetro del Rectángulo es: $perimetro:</h4>";
            print "<h4>El Area del Rectángulo es: $area:</h4>";
            break;

        case 'circulo':
            $area= M_PI*($radio ** 2);
            $perimetro= 2*M_PI*$radio;
            print "<h4>El Perímetro del Circulo es: $perimetro:</h4>";
            print "<h4>El Area del Circulo es: $area:</h4>";
            break;
        
        default:
            # code...
            break;
    }
     header("Location: index.php");

?>