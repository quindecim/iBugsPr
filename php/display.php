<?php 
	$dbconn = pg_connect("dbname=prdatabase user=postgres password=astig54321")
		or die('Could not connect: '.pg_last_error);

	
	$result = pg_query($dbconn,"SELECT  * FROM purchase where pr_name LIKE '%$search%' ");
	$rs = pg_num_rows($result);
	
	echo '--------('.$rs.' item(s) found)--------';
	for($ri = 0; $ri < $rs; $ri++) {
		$row = pg_fetch_array($result, $ri);
		echo '<div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/100X125.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">#' .$row[0]. '-' .$row[8]. ' (' .$row[2]. ') </h4>
            Purpose: '.$row[4].' <hr>Date: ' .$row[3]. '		Status: ' .$row[6]. '</div></div>' ;
	}
?>