<?php
	$sqlHost='localhost';
	$sqlUser='root';
	$sqlPass='';
	$dB='english_lexis';
        
	mysql_connect($sqlHost,$sqlUser,$sqlPass)or die(mysql_error());
	mysql_select_db($dB)or die(mysql_error());
?>
