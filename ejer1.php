

<link rel="StyleSheet" href="./css/ejer3.css" /><div id="_bg__form3"  ></div>
<img src="skins/enmascarar_grupo_1.png" id="enmascarar_grupo_1" />

<div id="grupo_41285"  >
	<div id="rect_ngulo_53"  ></div>
	<img src="skins/enmascarar_grupo_2.png" id="enmascarar_grupo_2" />
	<div id="rect_ngulo_51"  ></div>
	<div id="titleTable" >
		Resultado
    </div>
    
    <div id="divlabel" >
				<label id="labelshow">

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
				</label>
			</div>

		<div id="buttonRegresarT"  >
			<div id="buttonposition"  ></div>
				<input name="regresar" type="button" value="Regresar" onclick="history.go(-1)" id="regresarT"  />
		</div>

	

</div>


