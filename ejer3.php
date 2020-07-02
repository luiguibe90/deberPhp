<?php
$bday = new Datetime($_POST["datebirth"]); 
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Tu Edad es  : %d años, %d meses, %d dias', $diff->y, $diff->m, $diff->d);
printf("\n");
?>