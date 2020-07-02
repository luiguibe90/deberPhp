</form>
   <form name="forma" method="POST" action="ejer3.php">
        <label for="birthdate" >Ingrese su Fecha de Nacimiento:</label>
        <input type="date" name="datebirth" />
        <input type="submit" value="Calcular" />
</form>

<?php
$bday = new Datetime($_POST["datebirth"]); 
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Tu Edad es  : %d años, %d meses, %d dias', $diff->y, $diff->m, $diff->d);
printf("\n");
?>