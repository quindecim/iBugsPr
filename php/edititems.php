<!-- tr[4]
	tc[0]
		p[0-10]

	.
	.
	.

	tc[5]
		p[0-10] -->


<?php
	require './startsess.php';
	
	$zip = new ZipArchive;
	$zip->open('./F1.docx') or die('unzipping error<br>');
	$xmlString = $zip->getFromName('word/document.xml');

	$dom = new DOMDocument();
	$dom->loadXML($xmlString) or die('xml load error');
	// $xpath = new DomXPath($dom);
	$ns = 'http://schemas.openxmlformats.org/wordprocessingml/2006/main';

	// $tr = $xpath->query("/w:document/w:body/w:tbl/w:tr[5]/w:tc");
	$i = 1;
	$tr = $dom->getElementsByTagNameNS($ns, 'tr')->item(4);

	$arr = array ($_SESSION['stock'], $_SESSION['unit'], $_SESSION['desc'], $_SESSION['qty'], $_SESSION['eucost'], $_SESSION['etcost']);

	for($i = 0; $i < 6; $i++) {
		$tc = $tr->getElementsByTagNameNS($ns, 'tc')->item($i);
		$p = $tc->getElementsByTagNameNS($ns, 'p')->item($_SESSION['pritems']);
		$t = $p->getElementsByTagNameNS($ns, 't')->item(0);
		$t->nodeValue = $arr[$i];
		echo $t->nodeValue . "<br>";
	}

	// foreach($tr as $tc) {
	// 	// $p = $xpath->query("/w:tc[i]/w:p");
	// 	// $r = $xpath->query("/w:p");

	// 	$i = $i + 1;

	// }

	// $newVal->setAttributeNS($ns, 'pPr', '00080C51');
	// $newVal->setAttributeNS($ns, 'rsidRDefault', '00080C51');

	$xmlString = $dom->saveXML($dom->documentElement);
	$zip->addFromString('word/document.xml', $xmlString);
	$zip->close();
	header("Location: ../html/pr_input_1.php");

?>
