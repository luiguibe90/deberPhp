<link rel="StyleSheet" href="./css/ejer3.css" /><div id="_bg__form3"  ></div>
<img src="skins/enmascarar_grupo_1.png" id="enmascarar_grupo_1" />

<div id="grupo_41285"  >
	<div id="rect_ngulo_53"  ></div>
	<img src="skins/enmascarar_grupo_2.png" id="enmascarar_grupo_2" />
	<div id="rect_ngulo_51"  ></div>
	<div id="request_a_demo" >
		Resultado
	</div>


		<div id="su_edad_es_" >
			Su edad es:
		</div>

		<div id="button"  >
			<div id="rect_ngulo_57"  ></div>
				<input name="regresar" type="button" value="Regresar" onclick="history.go(-1)" id="regresar"  />
			<div id="__" >
				<label>

					<?php
					$bday = new Datetime($_POST["datebirth"]); 
					$today = new Datetime(date('m.d.y'));
					$diff = $today->diff($bday);
					if (($diff->y < 1))
					print "<h2>Ingrese una fecha valida, es mayor a la fecha actual </h2>";
					else {
					$diff = $today->diff($bday);
					echo "$diff->y años,con $diff->m meses y $diff->d dias";
					}
					?>
				</label>
			</div>

		</div>

	

</div>


