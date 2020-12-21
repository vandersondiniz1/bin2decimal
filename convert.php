<!--
 * @ Author: vanderson.r.diniz
 * @ Create Time: 2020-12-21 07:48:15
 * @ Modified by: vanderson.r.diniz
 * @ Modified time: 2020-12-21 08:14:41
 * @ Description: This code is part of a training to develop skills in the php language
 -->
<?php

$campoinput=$_POST['binario'];
$var=null;
$cont=null;

	for($i = 0; $i <strlen($campoinput); $i++) {
		$var=$campoinput[$i-1]*(2 ** $i);
		$cont=$cont+$var;
	}
	echo "O Valor $campoinput em Decimal é = $cont";
	
	#header('Location: ../html/index.html');
	
?>