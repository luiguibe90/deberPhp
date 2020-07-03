<?php  
$numero=$_POST['numero'];
if ($numero<1 or $numero>20)
{
    print "<h2>Ingresa un numero entre 1 y 20</h2>";
}
else
{
    print "<h4>Tabla del $numero:</h4>";
    $i=1;
    while ($i<=20)
    {
        print "$numero x $i = ".$numero*$i."<br/>";
        $i++;
    } 
}

echo "<input type='button' value='Volver' onclick='history.go(-1)'>";
?>
