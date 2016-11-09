<?php
  require 'php/stopsess.php';
  require 'php/startsess.php';
  require 'php/connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<style type="text/css">

  	#inputfield {font-size:12px;
  	font-family:'Consolas';
  	position: static; 
  	size: 22px;
  	border-style: none !important;
  	background-color:transparent !important;}

    #input[type="text"]{
    height:20px; 
    vertical-align:top;}

    .add_button{
    margin-top:10px;
    margin-left:10px;
    vertical-align: text-bottom;}

    .remove_button{ 
    margin-top:10px; 
    margin-left:10px;
    vertical-align: text-bottom;}

    ::-webkit-input-placeholder{
    color: black !important;}

    .inline-fields label {
        display: inline-block;
  </style>

  <script src="js/addtxtfield.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 7; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('#base'); //Input field wrapper
        var fieldHTML =
          '<td valign="top"><p align="center"><input id="inputfield" type="text" name="stock[]" style="width:63px; margin-left:10px;" /></p></td>' +
          '<p align="center">&nbsp;</p></td><td width="75" colspan="2" valign="top"><p align="center"><input id="inputfield" type="text" name="unit[]" style="width:63px; margin-left:10px;" /></p></td>' +
          '<td width="305" colspan="5" valign="top"><p><input id="inputfield" type="text" name="desc[]" style="width:318px; margin-left:10px;" /></p></td>' +
          '<td valign="top"><p align="center"><input id="inputfield" type="text" name="qty[]" style="width:60px; margin-left:10px;" /></p></td>' +
          '<td width="92" colspan="2" valign="top"><p align="center"><input id="inputfield" type="text" name="ucost[]" style="width:82.8px; margin-left:10px;" /></p></td>' +
          '<td valign="top"><p align="right"><input id="inputfield" type="text" name="tcost[]" style="width:83px; margin-left:10px;" /></p></td>'+
          '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="js/remove-icon.png"/></a></div>';

        var x = 1; //Initial field counter is size of items
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
    
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="home.php"><img src="assets/images/logos.png" alt="Progressus HTML5 template"></a>
			</div>
			<?php require 'menu.php'; ?>
      <!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
<!-- container -->
	<div class="container">
		
<ol class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li class="active">> Create PR</li>
        <li>  Print PR</li>
        <li>  Send PR</li>
        <li>  Finish and Track PR</li>
</ol>

<div class="row">
			
<!-- Sidebar -->
<aside id="activerSide" class="col-md-4 sidebar sidebar-left">
    <div class="row widget">
    <div  id="activerRow" class="col-xs-12">
    <h4 class="btn" id="activer">Step 1</h4>
   		<p>Lets create your PR Form. Please Input important fields. </p>
    </div></div>
    
    <div class="row widget">
    <div class="col-xs-12">
    <h4 class="btn" id="activer"><a href="pr2.html">Step 2</a></h4>
    	<p>Char Char</p>
    </div> </div>
            
    <div class="row widget">
        <div class="col-xs-12">
            <h4 class="btn" id="activer"><a href="pr3.html"> Step 3 </a></h4>
            <p>Char Char</p>
    </div> </div>
    </aside>
    <!-- /Sidebar -->
    <header class="page-header">
    <div style="margin-top: -300px !important;">
    <table border="1" id="tbl">
    <tr>
      <td colspan="12"><p align="center"><strong>PURCHASE REQUEST</strong><br>
          <img src="..\img\f117.jpg" width="62" height="62" alt=""/><br>
        <strong><em>University of the Philippines Cebu</em></strong><br>
        Lahug, Cebu City</p></td>
    </tr>
    <tr>
    
    <!-- FORM START HERE -->
    <form action="php/purchasereq.php" method="POST">
    
      <td colspan="6"><p>Entity Name:
      <input id="inputfield" name="name" type="text" style="width:246px;" required="required" placeholder="* " />
      
      </u></p></td>
      <td width="365" colspan="6"><p>Fund Cluster:
      <?php
			$_SESSION['result'] = pg_query($dbconn,"SELECT office_name FROM office");
			$rs = pg_num_rows($_SESSION['result']);
			
			echo "<select name ='cluster' required>";
			echo "<option value=''>Nothing</option>";
			for($ri = 0; $ri < $rs; $ri++) {
				$row = pg_fetch_array($_SESSION['result'] , $ri);
				echo "<option value='$row[0]'>$row[0]</option>";
			} echo "</select>";
	  ?> 
      </p></td>
    
    <tr>
      <td colspan="4" rowspan="2"><p>Office/Section:
    <?php 	
		$rs = pg_num_rows($_SESSION['result']);
		
		echo "<select name='office'>";
		echo "<option value=''>Nothing</option>";
		for($ri = 0; $ri < $rs; $ri++) {
			$row = pg_fetch_array($_SESSION['result'] , $ri);
			echo "<option value='$row[0]'>$row[0]</option>";
		} echo "</select>";
	?>
        
      </p></td>
      <td width="290" colspan="5"><p>PR No.: <u>
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
			echo $datearray[0].' - '.$datearray[1].' - '.$max;
		?>   
      </u></p></td>
      <td colspan="3" rowspan="2"><p>Date: <u>
      	<?php echo $_SESSION['date'];?>
      </u></p></td>
    </tr>
    <tr>
      <td width="290" colspan="5" valign="top"><p>Responsibility    Center Code: 
      <?php 	
	  	$code = pg_query($dbconn,"SELECT re_title FROM rescenter");
		$rs = pg_num_rows($code);
		
		echo "<select name='rscode'>";
		echo "<option value=''>Nothing</option>";
		for($ri = 0; $ri < $rs; $ri++) {
			$row = pg_fetch_array($code , $ri);
			echo "<option value='$row[0]'>$row[0]</option>";
		} echo "</select>";
	?>
      </p></td>
    </tr>
    <tr>
      <td><p align="center">Stock/<br>
        Property No.</p></td>
      <td width="75" colspan="2"><p align="center">Unit of Issue</p></td>
      <td width="305" colspan="5"><p align="center">Item Description</p></td>
      <td><p align="center">Quantity</p></td>
      <td colspan="2"><p align="center">Estimated Unit Cost</p></td>
      <td><p align="center">Estimated Total Cost</p></td>
    </tr>
    
    
     <!-- BUTTON -->
    <tr>
      <div id="base">
        <td valign="top"><p align="center">
        <input id="inputfield" type="text" name="stock[]" style="width:63px; margin-left:10px;" />
        </p></td>
        
        <p align="center">&nbsp;</p></td>      
        <td width="75" colspan="2" valign="top"><p align="center">
        <input id="inputfield" type="text" name="unit[]" style="width:63px; margin-left:10px;" />
        </p></td>
        
        <td width="305" colspan="5" valign="top"><p>
        <input id="inputfield" type="text" name="desc[]" style="width:318px; margin-left:10px;" />
        </p></td>
        
        <td valign="top"><p align="center">
        <input id="inputfield" type="text" name="qty[]" style="width:60px; margin-left:10px;" />
        </p></td>
        
        <td width="92" colspan="2" valign="top"><p align="center">
        <input id="inputfield" type="text" name="ucost[]" style="width:82.8px; margin-left:10px;" />
        </p></td>
        
        <td valign="top"><p align="right">
        <input id="inputfield" type="text" name="tcost[]" style="width:83px; margin-left:10px;" />
        </p></td>
      </div>
    </tr>
    <!-- END ITEMS -->    
   <tr>
      <p align="right">&nbsp;</p></td>      
      <td width="75" colspan="12" valign="top"><p align="right">
      <a href="javascript:void(0);" class="add_button" title="Add field"><img src="js/add-icon.png" alt="add more" style="width: 18px; height: 18px;"/></a>
      </p></td>
          
    </tr>
      
     <!-- END OF ITEMS -->
    <tr>
    <td colspan="11"><p align="center">TOTAL</p></td>
    <td><p align="right">#total</p></td>
    </tr> <tr>
    <td colspan="12"><p>Purpose: 
    <input id="inputfield" name="purpose" type="text" style="width:700px;" required="required" placeholder="* " />
    </p></td>
    </tr>
    
    <!-- Submit button -->
    <div style="position:fixed; left: 95%; top: 150px;">
    <input name="newpr" type="submit" id="button" value="CREATE" /></input></div>
        
   	<!-- END OF FORM -->
    </form>
    
    <tr>
      <td colspan="2" valign="top"><p align="center">&nbsp;</p></td>
      <td width="146" colspan="3"><p align="center">Requested by:<br>
        (Approving Officer)</p></td>
      <td width="146" colspan="2"><p align="center">Certified Funds Available/<br>
        Request in PPMP/APP</p></td>
      <td width="146" colspan="3"><p align="center">Recommended by:</p></td>
      <td width="146" colspan="2"><p align="center">Approved by:</p></td>
    </tr>
    <tr>
      <td colspan="2"><p align="left">Signature:</p></td>
      <td width="146" colspan="3" rowspan="4" valign="top"><p align="center"><strong>#print_name</strong><br>
          #desig</p></td>
      <td width="146" colspan="2" rowspan="4" valign="top"><p align="center"><strong>Dr. Marie Jane Matero</strong><br>
          Budget Officer</p></td>
      <td width="146" colspan="3" rowspan="4" valign="top"><p align="center"><strong>Dr. Leahlizbeth A. Sia</strong><br>
          Asso. Dean for Admin</p></td>
      <td width="146" colspan="2" rowspan="4" valign="top"><p align="center"><strong>Atty. Liza D. Corro</strong><br>
          Dean</p></td>
    </tr>
    <tr>
      <td colspan="2"><p align="left">Printed Name:</p></td>
    </tr>
    <tr>
      <td colspan="2"><p align="left">Designation:</p></td>
    </tr>
    <tr>
      <td colspan="2"><p align="left">Date:</p></td>
    </tr>
  </table>
  </tr>
  </div>
</header>
        


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>