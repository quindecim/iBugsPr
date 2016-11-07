<?php
	$_SESSION['pritems'] = 2;

	function disp($ndx) {
		$zip = new ZipArchive;
		$zip->open('F1.docx') or die('unzipping error<br>');
		$xmlString = $zip->getFromName('word/document.xml');

		$dom = new DOMDocument();
		$dom->loadXML($xmlString) or die('xml load error');
		$ns = 'http://schemas.openxmlformats.org/wordprocessingml/2006/main';
		$tr = $dom->getElementsByTagNameNS($ns, 'tr')->item(4);
		$tc = $tr->getElementsByTagNameNS($ns, 'tc')->item($ndx);

		$str = '';
		for($i = 0; $i < $_SESSION['pritems']; $i++) {
			$p = $tc->getElementsByTagNameNS($ns, 'p')->item(i);
			$t = $p->getElementsByTagNameNS($ns, 't')->item(0);
			$t->nodeValue = $arr[$i];
			$str = $str . $t . "<br>";
		}

		$zip->close();
		return $str;
	}

?>