<?php

	$frase = "A repitação é mãe da retenção.";

	$palavra = "mãe";

	//O tamanho até a palavra mãe
	$q = strpos($frase, $palavra);

	//Mantém o texto desde o começo até a palavra mãe (variável $palavra), porém menos ela
	$texto = substr($frase, 0, $q);

	var_dump($texto);

	//Exibi 'da retenção'
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

	echo "<br>";

	var_dump($texto2);	

?>