<?php

	$nome = "victor shirasuna";

	//Tudo maiúsculo
	$nome = strtoupper($nome);
	echo $nome;

	//Tudo minúsculoa
	$nome = strtolower($nome);
	echo "<br>";
	echo $nome;

	//Apenas a primeira letra maiúscula
	$nome = ucfirst($nome);
	echo "<br>";
	echo $nome;

	//Apenas o começo de cada palavra maiúscula
	$nome = ucwords($nome);
	echo "<br>";
	echo $nome;