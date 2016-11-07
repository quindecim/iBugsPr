

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Purchase Request</title>
		<style type="text/css">

		body { 
			background-color: #420000;
		}

		#txtbox {
			position:absolute;
			font:Arial, Helvetica, sans-serif;
		}

		input[type="text"]{height:20px; vertical-align:top;}
		.field_wrapper div{ margin-bottom:10px;}
		.add_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
		.remove_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
		</style>
	</head>

	<script src="../js/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	    var maxField = 10; //Input fields increment limitation
	    var addButton = $('.add_button'); //Add button selector
	    var wrapper = $('.field_wrapper'); //Input field wrapper
	    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="../js/remove-icon.png"/></a></div>'; //New input field html 
	    var x = 1; //Initial field counter is 1
	    $(addButton).click(function(){ //Once add button is clicked
	        if(x < maxField){ //Check maximum number of input fields
	            x++; //Increment field counter
	            $(wrapper).append(fieldHTML); // Add field html
	        }
	    });
	    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
	        e.preventDefault();
	        $(this).parent('div').remove(); //Remove field html
	        x--; //Decrement field counter
	    });
	});
	</script>

	<body>
		<img src="../IMAGES/f1-1.png" width="1024" height="1489" hspace="455" vspace="150" />

		<form action="../php/purchasereq.php" method="POST">
			<!-- name -->
			<div id="txtbox" style="left:628px; top:533px; width:306px; height:40px;">
			<textarea name="name" cols="33" rows="1" style="font-size:15px" required="required" placeholder="Entity Name"></textarea></div>

			<!-- cluster -->
			<div id="txtbox" style="left:1091px; top:531px; width:298px; height:43px;">
			<textarea name="cluster" cols="33" rows="1" style="font-size:15px" required="required" placeholder="Funding Cluster"></textarea></div>

			<!-- office -->
			<div id="txtbox" style="left:549px; top:619px; width:296px; height:46px;">
			<textarea name="office" cols="33" rows="1" style="font-size:15px" required="required" placeholder="Office"></textarea></div>

			<!-- prnumber -->
			<div id="txtbox" style="left:912px; top:568px; width:248px; height:28px;">
			<font style="font-size:20px; font-weight:bold"> 
				<?php  
					$date = date("Y-m-d");
					$datearray = explode("-", $date);
					$_SESSION['date'] = $date;

					$prnum = $datearray[0].$datearray[1];
					$pr1 = intval($prnum);
					$_SESSION['pr1'] = $pr1;

					$result = pg_query($dbconn, "SELECT max(pr_number2) FROM purchase where pr_number1 = $pr1");
					if(!$result) {
						$errormessage = pg_last_error();
						echo "Error with query: ". $errormessage;
						exit();
					}else {
						$chkarr = pg_fetch_array($result);
						$max = intval($chkarr[0]) + 1;
						$_SESSION['pr2'] = $max;
					}
					echo $pr1 . '' . $max;
				?> 
			</font></div>

			<!-- date -->
			<div id="txtbox" style="left:1259px; top:602px; width:176px; height:30px;">
			<font style="font-size:20px; font-weight:bold"> <?php echo $_SESSION['date']; ?> </font></div>
			</div>

			<!-- rscode -->
			<div id="txtbox" style="left:1051px; top:604px; width:144px; height:26px;">
			<textarea name="rscode" cols="14" rows="2" style="font-size:15px" required="required" placeholder="Responsibility Center"></textarea></div>

			<!-- purpose -->
			<div id="txtbox" style="left:600px; top:1182px; width:794px; height:55px;">
			<textarea name="purpose" cols="99" rows="2" style="font-size:15px" required="required" placeholder="Purpose"></textarea></div>

			<!-- nameofofficer -->
			<div id="txtbox" style="left:726px; top:1322px; width:156px; height:122px;">
			<textarea name="nameofofficer" cols="16" rows="5" style="font-size:15px" required="required" placeholder="Officer"></textarea></div>

			<!-- button -->
			<div id="txtbox" style="left:1254px; top:1558px; width:166px; height:46px;">
			<input name="button" type="submit" id="button" tabindex="2" value="ADD" /> </div>

			<!-- stock -->
			<div class="field_wrapper">
				<div>
			    	<input type="text" name="stock[]" value="" placeholder="stock" />
			        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../js/add-icon.png"/></a>
			    </div>
			</div>

			<!-- unit of issue -->
			<div class="field_wrapper">
				<div>
			    	<input type="text" name="unit[]" value="" placeholder="unit of issue" />
			        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../js/add-icon.png"/></a>
			    </div>
			</div>

			<!-- item description -->
			<div class="field_wrapper">
				<div>
			    	<input type="text" name="desc[]" value="" placeholder="description" />
			        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../js/add-icon.png"/></a>
			    </div>
			</div>

			<!-- quantity -->
			<div class="field_wrapper">
				<div>
			    	<input type="number" name="qty[]" value="" placeholder="quantity" />
			        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../js/add-icon.png"/></a>
			    </div>
			</div>

			<!-- eucost -->
			<div class="field_wrapper">
				<div>
			    	<input type="number" name="eucost[]" value="" placeholder="estimated unit cost" />
			        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../js/add-icon.png"/></a>
			    </div>
			</div>

			<!-- etcost -->
			<div class="field_wrapper">
				<div>
			    	<input type="number" name="etcost[]" value="" placeholder="estimated total cost" />
			        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../js/add-icon.png"/></a>
			    </div>
			</div>
		    
		</form>

	</body>
</html>