<?php

	// $document = new Gears\Pdf('F1.docx');
	// $document->converter = function()
	// {
	//     return new Gears\Pdf\Docx\Converter\Unoconv();
	// };
	// $document->save('F1.pdf');
	
	$pdf = Gears\Pdf::convert('/path/to/document.docx');
	// $pdf = Gears\Pdf::convert('F1.docx', 'F1.pdf');

	echo 'hello';

?>