<?php

	require 'unzip.php';

	$dom = new DOMDocument();
	$dom->loadXML($xmlString) or die('xml load error');
	$ns = 'http://schemas.openxmlformats.org/wordprocessingml/2006/main';
	$tr = $dom->getElementsByTagNameNS($ns, 'tr')->item(4);

?>