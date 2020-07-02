<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tablas de multiplicar</h1>
   <h3>Escribe un número del 1 al 20.</h3>
   <form name="tablas" method="post" action="ejer1.php">
      <p>Escribe aquí el número: <input type="number" name="numero" maxlength="2" size="2" /></p>
      <p><input type="submit" value="Ver tabla de multiplicar." /></p>
   </form>

   
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
?>
</body>
</html>


