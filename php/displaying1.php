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

<script type= "text/javascript" src="../jspdf/dist/jspdf.debug.js" > </script>
<script type= "text/javascript" src="../HTML2-Canvas/dist/html2canvas.js"></script>
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
 width="729" style='width:547.0pt;border-collapse:collapse;border:none;  background: white;
 mso-border-alt:solid windowtext .5pt;mso-table-overlap:never;mso-yfti-tbllook:
 1184;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;
 margin-right:6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:
 margin;mso-table-left:center;mso-table-top:13.55pt;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
	    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:125.5pt'>
	      <td width="729" colspan="12" valign="top" style='width:547.0pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:125.5pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  16.0pt'>PURCHASE REQUEST
	        <o:p></o:p>
	        </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt; 
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='mso-fareast-language:
  EN-US;mso-no-proof:yes'>
	          <!--[if gte vml 1]><v:shapetype id="_x0000_t75"
   coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
   filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="Picture_x0020_6" o:spid="_x0000_i1025" type="#_x0000_t75"
   alt="uplogo" style='width:45.75pt;height:45.75pt;visibility:visible;
   mso-wrap-style:square'>
   <v:imagedata src="f11_files/f117.jpeg" o:title="uplogo"/>
  </v:shape><![endif]-->
	          <![if !vml]><img src="../img/Unibersidad_ng_Pilipinas.png" alt="" width="65" height="65"/><![endif]>
	          </span>
	          <o:p></o:p>
            </p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><i><span
  style='font-size:14.0pt'>University of the Philippines Cebu
	          <o:p></o:p>
            </span></i></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span class="SpellE1"><span
  style='font-size:12.0pt'>Lahug</span></span><span style='font-size:12.0pt'>,
	          Cebu City
	          <o:p></o:p>
	          </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:1;height:4.0pt'>
	      <td width="365" colspan="6" style='width:273.5pt;border:none;border-left:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:4.0pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Entity Name:  <?php echo $_SESSION['name']; ?> 
	        <o:p></o:p>
	        </span></p></td>
	      <td width="365" colspan="6" style='width:273.5pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:4.0pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Fund Cluster:  <?php echo $_SESSION['cluster']; ?>         <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:2;height:28.15pt'>
	      <td width="254" colspan="4" rowspan="2" style='width:190.15pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.15pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Office/Section: <?php echo $_SESSION['office']; ?>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="290" colspan="5" style='width:217.55pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.15pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>PR No.: <span
  class="SpellE1"> <?php echo $_SESSION['pr1'] .'-'. $_SESSION['pr2'];?></span></u>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="186" colspan="3" rowspan="2" style='width:139.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.15pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Date: <?php echo $_SESSION['date']; ?> 
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:3;height:28.95pt'>
	      <td width="290" colspan="5" valign="top" style='width:217.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.95pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Responsibility
	        Center Code: <span class="SpellE1"><?php echo $_SESSION['rscode']?></span>
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:4;height:28.2pt'>
	      <td width="92" style='width:69.05pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:28.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Stock/
	        <o:p></o:p>
	        </span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Property
	          No.
	          <o:p></o:p>
	          </span></p></td>
	      <td width="75" colspan="2" style='width:56.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Unit
	        of Issue
	        <o:p></o:p>
	        </span></p></td>
	      <td width="305" colspan="5" style='width:228.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Item
	        Description
	        <o:p></o:p>
	        </span></p></td>
	      <td width="72" style='width:53.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Quantity
	        <o:p></o:p>
	        </span></p></td>
	      <td width="92" colspan="2" style='width:69.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Estimated
	        Unit Cost
	        <o:p></o:p>
	        </span></p></td>
	      <td width="93" style='width:70.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:28.2pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Estimated
	        Total Cost
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:5;height:275.35pt'>
	      <td width="92" valign="top" style='width:69.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:275.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'> <?php echo $_SESSION['stock'];?>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="75" colspan="2" valign="top" style='width:56.15pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:275.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'> <?php echo $_SESSION['unit'];?>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="305" colspan="5" valign="top" style='width:228.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:275.35pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'><span
  class="SpellE1"> <?php echo $_SESSION['desc'];?> </span>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="72" valign="top" style='width:53.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:275.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'><span
  class="SpellE1"> <?php echo $_SESSION['qty'];?> </span>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="92" colspan="2" valign="top" style='width:69.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:275.35pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'><span
  class="SpellE1"> <?php echo $_SESSION['ucost'];?> </span>
	        <o:p></o:p>
	        </span></p></td>
	      <td width="93" valign="top" style='width:70.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:275.35pt'><p class="MsoNormal1" align="right" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'><span
  class="SpellE1"> <?php echo $_SESSION['tcost'];?> </span>
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:6;height:22.55pt'>
	      <td width="636" colspan="11" style='width:476.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:22.55pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>TOTAL</span>
	        <o:p></o:p>
	        </p></td>
	      <td width="93" style='width:70.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:22.55pt'><p class="MsoNormal1" align="right" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'><?php echo $_SESSION['total'];?>
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:7;height:25.6pt'>
	      <td width="729" colspan="12" style='width:547.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.6pt'><p class="MsoNormal1" style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-pagination:none;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-left:center;mso-element-top:
  13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Purpose: <?php echo $_SESSION['purpose'];?> </span>
	        <o:p></o:p>
	        </p></td>
        </tr>
	    <tr style='mso-yfti-irow:8;height:41.8pt'>
	      <td width="146" colspan="2" valign="top" style='width:109.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:41.8pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'>
	        <o:p>&nbsp;</o:p>
	        </p></td>
	      <td width="146" colspan="3" style='width:109.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:41.8pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Requested
	        by:
	        <o:p></o:p>
	        </span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>(Approving
	          Officer)
	          <o:p></o:p>
	          </span></p></td>
	      <td width="146" colspan="2" style='width:109.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:41.8pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Certified
	        Funds Available/
	        <o:p></o:p>
	        </span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Request
	          in PPMP/APP
	          <o:p></o:p>
	          </span></p></td>
	      <td width="146" colspan="3" style='width:109.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:41.8pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Recommended
	        by:
	        <o:p></o:p>
	        </span></p></td>
	      <td width="146" colspan="2" style='width:109.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:41.8pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Approved
	        by:
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:9;height:19.3pt'>
	      <td width="146" colspan="2" style='width:109.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Signature:
	        <o:p></o:p>
	        </span></p></td>
	      <td width="146" colspan="3" rowspan="4" valign="top" style='width:109.4pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>
	        <o:p>&nbsp;</o:p>
	        </span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	          <o:p>&nbsp;</o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'><span class="SpellE1"> <?php echo $_SESSION['print_name'];?> </span>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'><span
  class="SpellE1"> <?php echo $_SESSION['dsig'];?> </span>
	          <o:p></o:p>
	          </span></p></td>
	      <td width="146" colspan="2" rowspan="4" valign="top" style='width:109.35pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.3pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	        <o:p>&nbsp;</o:p>
	        </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	          <o:p>&nbsp;</o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>Dr. Marie Jane <span class="SpellE1">Matero</span>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Budget
	          Officer
	          <o:p></o:p>
	          </span></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>
	          <o:p>&nbsp;</o:p>
	          </span></p></td>
	      <td width="146" colspan="3" rowspan="4" valign="top" style='width:109.4pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	        <o:p>&nbsp;</o:p>
	        </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	          <o:p>&nbsp;</o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>Dr. <span class="SpellE1">Leahlizbeth</span> A. <span class="SpellE1">Sia</span>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span class="SpellE1"><span
  style='font-size:8.5pt'>Asso</span></span><span style='font-size:8.5pt'>.
	          Dean for Admin
	          <o:p></o:p>
	          </span></p></td>
	      <td width="146" colspan="2" rowspan="4" valign="top" style='width:109.5pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.3pt'><p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	        <o:p>&nbsp;</o:p>
	        </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>
	          <o:p>&nbsp;</o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><b><span style='font-size:
  10.5pt'>Atty. Liza D. <span class="SpellE1">Corro</span>
	          <o:p></o:p>
	          </span></b></p>
	        <p class="MsoNormal1" align="center" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Dean
	          <o:p></o:p>
	          </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:10;height:19.55pt'>
	      <td width="146" colspan="2" style='width:109.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.55pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Printed
	        Name:
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:11;height:18.75pt'>
	      <td width="146" colspan="2" style='width:109.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.75pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Designation:
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:20.8pt'>
	      <td width="146" colspan="2" style='width:109.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.8pt'><p class="MsoNormal1" align="left" style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:left;line-height:normal;mso-pagination:none;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-left:center;
  mso-element-top:13.55pt;mso-height-rule:exactly'><span style='font-size:8.5pt'>Date:
	        <o:p></o:p>
	        </span></p></td>
        </tr>
	    <![if !supportMisalignedColumns]>
	    <tr height="0">
	      <td width="92" style='border:none'></td>
	      <td width="54" style='border:none'></td>
	      <td width="21" style='border:none'></td>
	      <td width="87" style='border:none'></td>
	      <td width="38" style='border:none'></td>
	      <td width="73" style='border:none'></td>
	      <td width="73" style='border:none'></td>
	      <td width="34" style='border:none'></td>
	      <td width="72" style='border:none'></td>
	      <td width="40" style='border:none'></td>
	      <td width="53" style='border:none'></td>
	      <td width="93" style='border:none'></td>
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

