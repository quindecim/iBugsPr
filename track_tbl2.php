<?php
	require 'php/startsess.php';
	require 'php/connectdb.php';
	require 'php/tracker.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Tracker</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<style type="text/css">
		#btnDisp{
		    display: inline-block;
		    vertical-align: top;
		}
	</style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
	<div class="container">
		<hr>
	</div>
	<hr>
	<div><hr></div>
	<h2 class="text-center">Purchase Request Tracker</h2>
	<h3 class="text-center">PR No. <?php echo $_SESSION['pr1'] . $_SESSION['pr2']; ?> </h3>
	<hr>

	<!-- container -->
	<div class="container">

		<div class="table-responsive">
			<table class="table">
				<thead>
				<tr>
				<th style="text-align: center; font-size: 17px;">Office Head</th>
				<th style="text-align: center; font-size: 17px;">Budget Office</th>
				<th style="text-align: center; font-size: 17px;">Accounting Office</th>
				<th style="text-align: center; font-size: 17px;">Asso. Dean for Admin</th>
				<th style="text-align: center; font-size: 17px;">Dean</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td class=<?php pr_color(1); ?> height="50" style="text-align: center; font-size: 20px;"> <?php pr_status(10, 1); ?> </td>
				<td class=<?php pr_color(2); ?> height="50" style="text-align: center; font-size: 20px;"> <?php pr_status(20, 2); ?> </td>
				<td class=<?php pr_color(3); ?> height="50" style="text-align: center; font-size: 20px;"> <?php pr_status(21, 3); ?> </td>
				<td class=<?php pr_color(4); ?> height="50" style="text-align: center; font-size: 20px;"> <?php pr_status(22, 4); ?> </td>
				<td class=<?php pr_color(5); ?> height="50" style="text-align: center; font-size: 20px;"> <?php pr_status(23, 5); ?> </td>
				</tr>
			</tbody>
			</table>
		</div>
		<hr>
	</div>	<!-- /container -->
	<hr>

	<div class="container">
		<div class="row">
			<div class="center-block" align="center">
			<form method="POST" action="php/edit_track.php" style="display: inline-block;">
				<?php 
					if($_SESSION['curr_ofc'] == 1) {
						echo '<a class="btn btn-success disabled btn-lg" role="button">COMPLETED</a>';
					}else if(($_SESSION['user_ofc'] == $_SESSION['curr_ofc'] || $_SESSION['curr_ord'] == 1) && $_SESSION['curr_stat'] != 'Declined') {

						if($_SESSION['curr_stat'] == 'Pending') {
							echo '<input type="submit" value="Receive PR" name="receive" class="btn btn-info btn-md"/>';								
						}else {
							if($_SESSION['flag']) {
								if($_SESSION['ch'] == 'd') {
									echo '<input type="submit" value="Return to Owner" name="return" class="btn btn-info btn-md"/>';
								}else if($_SESSION['ch'] == 'a') {
									echo '<input type="submit" value="Send to Next Office" name="send" class="btn btn-info btn-md"/>';
								}else if($_SESSION['ch'] == 'ret') {
									echo '<a class="btn btn-danger disabled btn-lg" role="button">Declined and Returned</a>';
								}
							}else {
								echo '<input type="submit" value="Approve" name="approve" class="btn btn-success btn-md"/>
								<input type="submit" value="On Hold" name="onhold" class="btn btn-warning btn-md"/>
								<input type="submit" value="Decline" name="decline" class="btn btn-danger btn-md"/>';
							}
						}

					}else {

						// if($_SESSION['ch'] == 'snd') {
						// 	echo '<a class="btn btn-success disabled btn-lg" role="button">Approved and Sent</a>';
						// }

						if($_SESSION['user_ofc'] == $_SESSION['curr_ofc'] && $_SESSION['curr_stat'] == 'Declined') {
							echo '<a class="btn btn-danger disabled btn-lg" role="button">Declined and Returned</a>';
						}else if($_SESSION['user_ofc'] < $_SESSION['curr_ofc']) {
							echo '<a class="btn btn-success disabled btn-lg" role="button">Approved and Sent</a>';
						}else {
							echo '<a class="btn btn-danger disabled btn-lg" role="button">DECLINED</a>';
						}

					}
				?>
			</form>
			</div>
		</div>
	</div>

	<?php require 'footer.php'; ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>