<?php
	
	require '../php/startsess.php';
	require '../php/connectdb.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<meta name="ProgId" content="Word.Document" />
<meta name="Generator" content="Microsoft Word 15" />
<meta name="Originator" content="Microsoft Word 15" />
<link rel="File-List" href="f11_files/filelist.xml" />
<link rel="Edit-Time-Data" href="f11_files/editdata.mso" />

<link rel="themeData" href="f11_files/themedata.thmx" />
<link rel="colorSchemeMapping" href="f11_files/colorschememapping.xml" />

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:ZH-CN;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page wordsection1
	{size:609.55pt 790.95pt;
	margin:.5in .5in .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

<title>Purchase Request</title>

<script type= "text/javascript" src="jspdf/dist/jspdf.debug.js" > </script>
<script type= "text/javascript" src="html2canvas.js"></script>
     <script src="https://rawgithub.com/niklasvh/html2canvas/master/dist/html2canvas.min.js"></script>
     
<script type="text/javascript">


function genPDF(){
	html2canvas(document.getElementById("shet"),{
    onrendered: function(canvas){
var img = canvas.toDataURL("image/png");
var doc = new jsPDF('p', 'px');
doc.addImage(img,'PNG', 5,5);
doc.save('sample.pdf');

    }
  });

			
}

</script>
<style type="text/css">

#inputfield {
font-size:12px;
font-family:'Consolas';
position: static; 
size: 22px;
border: none !important;
border-bottom: 1px solid #000 !important;
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

</style>
<!-- start: CSS -->
    <link rel="stylesheet" href="../css/generate.css" />
    <link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link id="base-style" href="../css/style.css" rel="stylesheet" />
    <link id="base-style-responsive" href="../css/style-responsive.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css' />
    <!-- end: CSS -->
	
	<style type="text/css"> a {text-decoration:none;} </style>

    <!-- start: JavaScript-->

        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="../js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="../js/jquery.ui.touch-punch.js"></script>
    
        <script src="../js/modernizr.js"></script>
    
        <script src="../js/bootstrap.min.js"></script>
    
        <script src="../js/jquery.cookie.js"></script>
    
        <script src='../js/fullcalendar.min.js'></script>
    
        <script src='../js/jquery.dataTables.min.js'></script>

        <script src="../js/excanvas.js"></script>
        <script src="../js/jquery.flot.js"></script>
        <script src="../js/jquery.flot.pie.js"></script>
        <script src="../js/jquery.flot.stack.js"></script>
        <script src="../js/jquery.flot.resize.min.js"></script>
    
        <script src="../js/jquery.chosen.min.js"></script>
    
        <script src="../js/jquery.uniform.min.js"></script>
        
        <script src="../js/jquery.cleditor.min.js"></script>
    
        <script src="../js/jquery.noty.js"></script>
    
        <script src="../js/jquery.elfinder.min.js"></script>
    
        <script src="../js/jquery.raty.min.js"></script>
    
        <script src="../js/jquery.iphone.toggle.js"></script>
    
        <script src="../js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="../js/jquery.gritter.min.js"></script>
    
        <script src="../js/jquery.imagesloaded.js"></script>
    
        <script src="../js/jquery.masonry.min.js"></script>
    
        <script src="../js/jquery.knob.modified.js"></script>
    
        <script src="../js/jquery.sparkline.min.js"></script>
    
        <script src="../js/counter.js"></script>
    
        <script src="../js/retina.js"></script>

        <script src="../js/custom.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" />
        <style type="text/css">
        body,td,th {
	font-size: 10px;
}
        div.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:ZH-CN;}
li.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:ZH-CN;}
p.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:ZH-CN;}
span.SpellE1 {mso-style-name:"";
	mso-spl-e:yes;}
        </style>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
        $('#carousel').cycle({ 
            fx:     'scrollHorz', 
            timeout: 0, 
            easing: 'easeInOutBack',
            next:   '#next', 
            prev:   '#prev'
        });
        </script>
		
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

    <!-- end: JavaScript-->
</head>

<body>
<a href = "javascript: genPDF()">Download</a>

<!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid"">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>iBugs</span></a>
                                
                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                               
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                                
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar" /></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                        </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar" /></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                        </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> Katrina Anne S. Panerio
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->
                
            </div>
        </div>
    </div>
    <!-- start: Header -->

<div class="container-fluid-full">

        <div class="row-fluid">
                
            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="HomePage.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>   
                        <li><a href="generatePR.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Generate</span></a></li>
                        <li><a href="HomePage.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Track</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->
        </div><!--end:row-fluid-->
		
<!-- ---- E D I T A B L E  P A R T ------- -->		

<!--START:CONTENT-->
<div id="content" class="span10">
	<div id = "shet" style="width: 900px; height: 1200px; position: static;">
	  <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" align="left"
 width="712" style='border-collapse:collapse;mso-table-layout-alt:fixed; background: white;
 border:none;mso-border-alt:solid windowtext .5pt;mso-table-overlap:never;
 mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:
 9.0pt;margin-right:6.75pt;mso-table-bspace:8.0pt;margin-bottom:5.75pt;
 mso-table-anchor-vertical:page;mso-table-anchor-horizontal:page;mso-table-left:
 center;mso-table-top:37.2pt;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
	    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.45pt'>
	      <td width="463" colspan="14" rowspan="3" style='width:347.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b><span style='font-size:12.0pt'>UNIVERISTY
	        OF THE PHILIPPINES CEBU
	        <o:p></o:p>
	        </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span class="SpellE1"><b><span style='font-size:
  11.0pt'>Lahug</span></b></span><b><span style='font-size:11.0pt'>, Cebu City
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b><span style='font-size:14.0pt'>DISBURSEMENT
	          VOUCHER</span></b></p></td>
	      <td width="64" colspan="2" style='width:48.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Cluster</p></td>
	      <td width="185" colspan="5" style='width:138.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.45pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['cluster'];?> </p></td>
        </tr>
	    <tr style='mso-yfti-irow:1;height:14.7pt'>
	      <td width="64" colspan="2" style='width:48.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Date</p></td>
	      <td width="185" colspan="5" style='width:138.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.7pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['date'];?></p></td>
        </tr>
	    <tr style='mso-yfti-irow:2;height:15.2pt'>
	      <td width="64" colspan="2" style='width:48.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.2pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>DV
	        No.</p></td>
	      <td width="185" colspan="5" style='width:138.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:15.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><span
  class="SpellE1"> <?php echo $_SESSION['dvno'];?> </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:3;height:17.7pt'>
	      <td width="115" colspan="5" style='width:86.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.7pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><b>Mode
	        of Payment
	        <o:p></o:p>
	        </b></p></td>
	      <td width="597" colspan="16" style='width:448.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.7pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>
	        <!--[if gte vml 1]><v:shapetype
   id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path gradientshapeok="t" o:connecttype="rect"/>
  </v:shapetype><v:shape id="Text_x0020_Box_x0020_4" o:spid="_x0000_s1029"
   type="#_x0000_t202" style='position:absolute;margin-left:207.95pt;
   margin-top:1.6pt;width:18.75pt;height:17.25pt;z-index:251660288;
   visibility:visible;mso-wrap-style:square;mso-width-percent:0;
   mso-height-percent:0;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
   mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
   mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
   mso-position-vertical:absolute;mso-position-vertical-relative:text;
   mso-width-percent:0;mso-height-percent:0;mso-width-relative:page;
   mso-height-relative:page;v-text-anchor:top' o:gfxdata="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
AADmBQAAAAA=
" fillcolor="white [3201]" strokeweight=".5pt">
   <v:path arrowok="t"/>
   <v:textbox>
    <![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div>
      <p class=MsoNormal><span class=GramE>c</span></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    <![endif]></v:textbox>
   <w:wrap type="square"/>
  </v:shape><![endif]-->
	        <![if !vml]>
	        <img width="31" height="29"
  src="f33_files/image001.gif" align="left" hspace="12" alt="Text Box: c" v:shapes="Text_x0020_Box_x0020_4" />
	        <![endif]>
	        <!--[if gte vml 1]><v:shape
   id="Text_x0020_Box_x0020_3" o:spid="_x0000_s1028" type="#_x0000_t202"
   style='position:absolute;margin-left:88.7pt;margin-top:1.55pt;width:18.8pt;
   height:17.3pt;z-index:251659264;visibility:visible;mso-wrap-style:square;
   mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
   mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
   mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
   mso-position-horizontal-relative:text;mso-position-vertical:absolute;
   mso-position-vertical-relative:text;mso-width-percent:0;
   mso-height-percent:0;mso-width-relative:page;mso-height-relative:page;
   v-text-anchor:top' o:gfxdata="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
AAAA5wUAAAAA
" fillcolor="white [3201]" strokeweight=".5pt">
   <v:path arrowok="t"/>
   <v:textbox>
    <![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div>
      <p class=MsoNormal><span class=GramE>b</span></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    <![endif]></v:textbox>
   <w:wrap type="square"/>
  </v:shape><![endif]-->
	        <![if !vml]>
	        <img width="31" height="29"
  src="f33_files/image002.gif" align="left" hspace="12" alt="Text Box: b" v:shapes="Text_x0020_Box_x0020_3" />
	        <![endif]>
	        <!--[if gte vml 1]><v:shape
   id="Text_x0020_Box_x0020_2" o:spid="_x0000_s1027" type="#_x0000_t202"
   style='position:absolute;margin-left:.2pt;margin-top:1.6pt;width:18.75pt;
   height:17.25pt;z-index:251658240;visibility:visible;mso-wrap-style:square;
   mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
   mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
   mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
   mso-position-horizontal-relative:text;mso-position-vertical:absolute;
   mso-position-vertical-relative:text;mso-width-percent:0;
   mso-height-percent:0;mso-width-relative:page;mso-height-relative:page;
   v-text-anchor:top' o:gfxdata="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
AOUFAAAAAA==
" fillcolor="white [3201]" strokeweight=".5pt">
   <v:path arrowok="t"/>
   <v:textbox>
    <![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div>
      <p class=MsoNormal><span class=GramE>a</span></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    <![endif]></v:textbox>
   <w:wrap type="square"/>
  </v:shape><![endif]-->
	        <![if !vml]>
	        <img width="31" height="29"
  src="f33_files/image003.gif" align="left" hspace="12" alt="Text Box: a" v:shapes="Text_x0020_Box_x0020_2" />
	        <![endif]>
	        <!--[if gte vml 1]><v:shape
   id="Text_x0020_Box_x0020_1" o:spid="_x0000_s1026" type="#_x0000_t202"
   style='position:absolute;margin-left:269.45pt;margin-top:1.7pt;width:18.75pt;
   height:17.25pt;z-index:251663360;visibility:visible;mso-wrap-style:square;
   mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
   mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
   mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
   mso-position-horizontal-relative:text;mso-position-vertical:absolute;
   mso-position-vertical-relative:text;mso-width-percent:0;
   mso-height-percent:0;mso-width-relative:page;mso-height-relative:page;
   v-text-anchor:top' o:gfxdata="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
APMAAADpBQAAAAA=
" fillcolor="white [3201]" strokeweight=".5pt">
   <v:path arrowok="t"/>
   <v:textbox>
    <![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div>
      <p class=MsoNormal><span class=GramE>d</span></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    <![endif]></v:textbox>
   <w:wrap type="square"/>
  </v:shape><![endif]-->
	        <![if !vml]>
	        <img width="31" height="29"
  src="f33_files/image004.gif" align="left" hspace="12" alt="Text Box: d" v:shapes="Text_x0020_Box_x0020_1" />
	        <![endif]>
	        MDS
	        Check<span style='mso-spacerun:yes'>  </span>Commercial Clerk<span
  style='mso-spacerun:yes'>         </span>ADA<span style='mso-spacerun:yes'>  </span><span style='mso-spacerun:yes'>  </span>Others: <u><span
  style='mso-spacerun:yes'> </span></u></p></td>
        </tr>
	    <tr style='mso-yfti-irow:4;height:16.6pt'>
	      <td width="68" colspan="2" style='width:51.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.6pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b>Payee
	        <o:p></o:p>
	        </b></p></td>
	      <td width="298" colspan="7" style='width:223.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['payee'];?></p></td>
	      <td width="168" colspan="8" style='width:125.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>TIN/Employee
	        No.:#<span class="SpellE1">empno</span></p></td>
	      <td width="178" colspan="4" style='width:133.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>ORS/BURS
	        No.:<span class="SpellE1"> <?php echo $_SESSION['orsno'];?> </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:5;height:17.5pt'>
	      <td width="68" colspan="2" style='width:51.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b>Address
	        <o:p></o:p>
	        </b></p></td>
	      <td width="466" colspan="15" style='width:349.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['address'];?></p></td>
	      <td width="178" colspan="4" style='width:133.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Tel No.: <span class="SpellE1"> <?php echo $_SESSION['telno'];?></span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:6;height:17.5pt'>
	      <td width="327" colspan="7" style='width:245.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Particulars</p></td>
	      <td width="136" colspan="7" style='width:102.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Responsibility
	        Center</p></td>
	      <td width="121" colspan="4" style='width:90.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>MFO/PAP</p></td>
	      <td width="128" colspan="3" style='width:96.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Amount</p></td>
        </tr>
	    <tr style='mso-yfti-irow:7;height:178.05pt'>
	      <td width="327" colspan="7" valign="top" style='width:245.25pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:178.05pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:150%;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['particulars'];?></p>
	        <p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:150%;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
	      <td width="136" colspan="7" rowspan="2" valign="top" style='width:102.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:178.05pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:150%;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span class="SpellE1"> <?php echo $_SESSION['rscode'];?></span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:150%;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
	      <td width="121" colspan="4" rowspan="2" valign="top" style='width:90.5pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:178.05pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:150%;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span class="SpellE1"> <?php echo $_SESSION['mfo'];?></span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:150%;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
	      <td width="128" colspan="3" valign="top" style='width:96.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:178.05pt'><p class="MsoNormal1" align="right" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:150%;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span class="SpellE1"> <?php echo $_SESSION['amt'];?></span></p>
	        <p class="MsoNormal1" align="right" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:150%;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
        </tr>
	    <tr style='mso-yfti-irow:8;height:17.45pt'>
	      <td width="327" colspan="7" valign="bottom" style='width:245.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:17.45pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><b>Amount
	        Due
	        <o:p></o:p>
	        </b></p></td>
	      <td width="128" colspan="3" style='width:96.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.45pt'><p class="MsoNormal1" align="right" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><span
  class="SpellE1"> <?php echo $_SESSION['amtdue'];?></span><b>
	        <o:p></o:p>
	        </b></p></td>
        </tr>
	    <tr style='mso-yfti-irow:9;height:.55in'>
	      <td width="24" style='width:18.05pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.55in'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><b>A</b></p></td>
	      <td width="688" colspan="20" valign="top" style='width:515.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.55in'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Certified: Expenses/Cash Advance necessary,
	        lawful and incurred under my direct supervision.</p>
	        <p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><b><u><span
  style='font-size:11.0pt;line-height:106%'>Dr. <span class="SpellE1">Leahlizbeth</span> A. <span class="SpellE1">Sia</span>, Associate Dean for Admin</span></u></b><b><span
  style='font-size:11.0pt;line-height:106%'>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;line-height:106%'>Printed Name, Designation and Signature
	          of Supervisor</span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:10;height:12.6pt'>
	      <td width="24" valign="top" style='width:18.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.6pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><b>B</b></p></td>
	      <td width="688" colspan="20" valign="top" style='width:515.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.6pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Accounting Entry:</p></td>
        </tr>
	    <tr style='mso-yfti-irow:11;height:5.9pt'>
	      <td width="393" colspan="10" style='width:294.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:5.9pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Account
	        Title</p></td>
	      <td width="99" colspan="5" style='width:74.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:5.9pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>UACS
	        Code</p></td>
	      <td width="107" colspan="4" style='width:80.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:5.9pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Debit</p></td>
	      <td width="113" colspan="2" style='width:85.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:5.9pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Credit</p></td>
        </tr>
	    <tr style='mso-yfti-irow:12;height:23.35pt'>
	      <td width="393" colspan="10" style='width:294.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:23.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span class="SpellE1"> <?php echo $_SESSION['accnt_title'];?></span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
	      <td width="99" colspan="5" style='width:74.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><span
  class="SpellE1"> <?php echo $_SESSION['uacs'];?></span></p></td>
	      <td width="107" colspan="4" style='width:80.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['debit'];?></p></td>
	      <td width="113" colspan="2" style='width:85.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['credit'];?></p></td>
        </tr>
	    <tr style='mso-yfti-irow:13;height:12.35pt'>
	      <td width="24" valign="top" style='width:18.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b>C</b></p></td>
	      <td width="369" colspan="9" valign="top" style='width:276.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Certified:</p></td>
	      <td width="24" colspan="2" rowspan="2" style='width:.25in;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><b>D
	        <o:p></o:p>
	        </b></p></td>
	      <td width="295" colspan="9" rowspan="2" style='width:221.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Approved
	        for Payment</p></td>
        </tr>
	    <tr style='mso-yfti-irow:14;height:16.45pt'>
	      <td width="24" rowspan="3" valign="top" style='width:18.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p></td>
	      <td width="44" style='width:33.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.45pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>a</p></td>
	      <td width="325" colspan="8" rowspan="3" valign="top" style='width:243.7pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:150%;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Cash available</p>
	        <p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:150%;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Subject
	          to Authority to Debit Account (when applicable)</p>
	        <p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:normal;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Supporting
	          documents complete and amount claimed</p></td>
        </tr>
	    <tr style='mso-yfti-irow:15;height:16.75pt'>
	      <td width="44" style='width:33.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.75pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>b</p></td>
	      <td width="319" colspan="11" rowspan="2" valign="top" style='width:239.25pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.75pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Amount in Words: #<span class="SpellE1">amtinwords</span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:16;height:16.45pt'>
	      <td width="44" style='width:33.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.45pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>c</p></td>
        </tr>
	    <tr style='mso-yfti-irow:17;height:37.5pt'>
	      <td width="91" colspan="3" valign="top" style='width:68.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:37.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Signature</p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Printed Name</p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Position</p></td>
	      <td width="265" colspan="5" valign="top" style='width:198.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.5pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:normal;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span class="SpellE1"><b><span style='font-size:
  11.0pt'>Jannette</span></b></span><b><span style='font-size:11.0pt'> K. <span
  class="SpellE1">Lepiten</span>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span style='font-size:9.0pt'>Head,
	          Accounting Unit/Authorized Representative</span></p></td>
	      <td width="91" colspan="5" valign="top" style='width:68.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Signature</p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Printed Name</p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Position</p></td>
	      <td width="265" colspan="8" valign="top" style='width:198.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:37.5pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;line-height:normal;mso-pagination:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:page;mso-element-anchor-horizontal:page;
  mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b><span style='font-size:11.0pt'>Atty. Liza
	          D. <span class="SpellE1">Corro</span>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><span style='font-size:9.0pt'>Dean, UP Cebu
	          <o:p></o:p>
	          </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:18;height:11.85pt'>
	      <td width="91" colspan="3" style='width:68.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.85pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Date</p></td>
	      <td width="265" colspan="5" valign="top" style='width:198.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.85pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p></td>
	      <td width="91" colspan="5" style='width:68.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.85pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Date</p></td>
	      <td width="265" colspan="8" valign="top" style='width:198.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:11.85pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p></td>
        </tr>
	    <tr style='mso-yfti-irow:19;height:12.35pt'>
	      <td width="24" valign="top" style='width:18.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b>E
	        <o:p></o:p>
	        </b></p></td>
	      <td width="583" colspan="19" valign="top" style='width:437.15pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'><b>Receipt of Payment
	        <o:p></o:p>
	        </b></p></td>
	      <td width="105" rowspan="3" style='width:78.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:12.35pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>JEVNo.:<span class="SpellE1"> <?php echo $_SESSION['jevno'];?></span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:20;height:26.2pt'>
	      <td width="105" colspan="4" rowspan="2" style='width:78.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.2pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Check/ADA No. :</p></td>
	      <td width="180" colspan="2" rowspan="2" style='width:135.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'><span
  class="SpellE1"> <?php echo $_SESSION['checkno'];?></span></p></td>
	      <td width="112" colspan="5" rowspan="2" style='width:84.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.2pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Date: <?php echo $_SESSION['date'];?></p></td>
	      <td width="210" colspan="9" valign="top" style='width:157.45pt;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.2pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Bank Name: <?php echo $_SESSION['bank'];?></p></td>
        </tr>
	    <tr style='mso-yfti-irow:21;height:25.45pt'>
	      <td width="210" colspan="9" valign="top" style='width:157.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Account Number: <span class="SpellE1"> <?php echo $_SESSION['accntno'];?></span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:22;height:28.45pt'>
	      <td width="105" colspan="4" rowspan="2" style='width:78.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.45pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>Signature:</p></td>
	      <td width="180" colspan="2" valign="top" style='width:135.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p></td>
	      <td width="112" colspan="5" rowspan="2" style='width:84.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Date:<span style='mso-spacerun:yes'>  </span>#date</p></td>
	      <td width="210" colspan="9" rowspan="2" style='width:157.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Printed Name: <span class="SpellE1"> <?php echo $_SESSION['print_name'];?></span></p>
	        <p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
	      <td width="105" rowspan="3" style='width:78.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.45pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Date: <?php echo $_SESSION['print_name'];?></p>
	        <p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
        </tr>
	    <tr style='mso-yfti-irow:23;height:27.7pt'>
	      <td width="180" colspan="2" valign="top" style='width:135.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:27.7pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'> <?php echo $_SESSION['payee'];?></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:page;mso-element-anchor-horizontal:
  page;mso-element-left:center;mso-element-top:37.2pt;mso-height-rule:exactly'>
	          <o:p>&nbsp;</o:p>
            </p></td>
        </tr>
	    <tr style='mso-yfti-irow:24;mso-yfti-lastrow:yes;height:13.25pt'>
	      <td width="607" colspan="20" valign="top" style='width:455.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.25pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;text-justify:inter-ideograph;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  page;mso-element-anchor-horizontal:page;mso-element-left:center;mso-element-top:
  37.2pt;mso-height-rule:exactly'>Official Receipt No. &amp; Date/Other
	        Documents</p></td>
        </tr>
	    <![if !supportMisalignedColumns]>
	    <tr height="0">
	      <td width="24" style='border:none'></td>
	      <td width="44" style='border:none'></td>
	      <td width="23" style='border:none'></td>
	      <td width="14" style='border:none'></td>
	      <td width="10" style='border:none'></td>
	      <td width="170" style='border:none'></td>
	      <td width="42" style='border:none'></td>
	      <td width="29" style='border:none'></td>
	      <td width="10" style='border:none'></td>
	      <td width="27" style='border:none'></td>
	      <td width="4" style='border:none'></td>
	      <td width="20" style='border:none'></td>
	      <td width="30" style='border:none'></td>
	      <td width="16" style='border:none'></td>
	      <td width="29" style='border:none'></td>
	      <td width="35" style='border:none'></td>
	      <td width="7" style='border:none'></td>
	      <td width="50" style='border:none'></td>
	      <td width="15" style='border:none'></td>
	      <td width="8" style='border:none'></td>
	      <td width="105" style='border:none'></td>
        </tr>
	    <![endif]>
      </table>
	</div>
  </div>
	<form action="../php/purchasereq.php" method="post">
	
	
	
	</form> 

</div><!--end:CONTENT-->


<!-- ---- E N D  E D I T A B L E  P A R T ------- -->	

 <!--MODAL THING-->
        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        
        <div class="clearfix"></div>  
    </div><!--end:fuid-container-->       

  <footer>
        <p>
            <span style="text-align:left;float:left;">&copy; 2016 iBugs Purchase Request Tracker</span>
        </p>

</footer>

</body>
</html>

