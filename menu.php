<?php

	if(!empty(isset($_SESSION['user']))) {
		echo '<ul class="nav navbar-nav">
				<li class="active"><a href="Home.html">Home<span class="sr-only">(current)</span></a> </li>
				<li><a href="PR_Input_1.php">Generate</a> </li>
				<li><a href="track_tbl.php">Track PR</a> </li>
			  </ul>';
	}

	echo '
  		<!--start: user dropdown-->
		<ul class="nav navbar-nav navbar-right hidden-sm">
		<li> </li>
			<li class="dropdown">';

				if(!isset($_SESSION['user']) || empty($_SESSION['user'])) {
					echo '<a href="login.php">Login</a>';
			    }else {
			    	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">' . $_SESSION['username'] . '<span class="caret"></span></a>';
			    }

            if(!empty(isset($_SESSION['user']))) {
              echo '<ul class="dropdown-menu" role="menu">
						<li><a href="login.html">Account Settings</a></li>
						<li><a href="../php/logout.php">Logout</a></li>
					</ul>';
            }

    echo 	'</li>
		</ul>
		<!--end : user dropdown-->';

	if(!empty(isset($_SESSION['user']))) {
		echo '<ul class="nav navbar-nav navbar-right hidden-sm">
			<li> </li>
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Notifications <span class="caret"></span></a>
		        	<ul class="dropdown-menu" role="menu">
						<li><a href="#">Notif</a> </li>
						<li><a href="#">Another Notif</a> </li>
						<li><a href="#">More Notifs</a> </li>
						<li class="divider"></li>
						<li><a href="#">See all Notifs</a> </li>
					</ul>
				</li>
			</ul>';
	}

?>