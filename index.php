<!DOCTYPE html>
<html>
<head>
   <title>Tablas de multiplicar.</title> 
</head>
<body>
   <h1>Tablas de multiplicar</h1>
   <h3>Escribe un número del 1 al 20.</h3>
   <form name="tablas" method="post" action="ejer1.php">
      <p>Escribe aquí el número: <input type="text" name="numero" maxlength="2" size="2" /></p>
      <p><input type="submit" value="Ver tabla de multiplicar." /></p>
   </form>

   <form name="figuras" method="post" action="ejer2.php">
      <input type="radio" name="figura" value="triangulo">Triangulo<br>
         <p>Base: <input type="text" name="base"/></p>
         <p>Altura: <input type="text" name="altura"/></p>
         <p>Lado 1: <input type="text" name="lado"/></p>
         <p>Lado 2: <input type="text" name="lado2"/></p>
         <p>Lado 3: <input type="text" name="lado3"/><input type="submit" value="Calcular"></input></p>      
      <input type="radio" name="figura" value="cuadrado">Cuadrado<br>
         <p>Lado: <input type="text" name="lado"/>  <input type="submit" value="Calcular"></input></p> 
      <input type="radio" name="figura" value="rectangulo">Rectángulo<br>
         <p>Base: <input type="text" name="base"/></p>
         <p>Altura: <input type="text" name="altura"/><input type="submit" value="Calcular"></input></p>      
      <input type="radio" name="figura" value="Circulo">Circulo<br>
         <p>Radio: <input type="text" name="radio"/><input type="submit" value="Calcular"></input></p>   
   </form>
</body>
</html>
