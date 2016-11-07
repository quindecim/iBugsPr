<?php

	$zip = new ZipArchive;
	$zip->open('./F1.docx') or die('unzipping error<br>');
	$xmlString = $zip->getFromName('word/document.xml');

?>