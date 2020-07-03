<?php
$bday = new Datetime($_POST["datebirth"]); 
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
if (($diff->y < 1))
  print "<h2>Ingrese una fecha valida, es mayor a la fecha actual </h2>";
else {
   $diff = $today->diff($bday);
   printf(' Tu Edad es  : %d años', $diff->y);
   printf("\n");
 }
?>