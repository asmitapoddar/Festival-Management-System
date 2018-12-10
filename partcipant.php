<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Participants : Home</title>
<link rel="stylesheet" href="Styles/bootstrapsimplex.min.css" />
<link rel="stylesheet" href="Styles/style.css" />
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Rhapsody</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="indexad.php" role="button" >Home</a></li>
                    <li><a href="aboutad.html" role="button">About</a></li>
                    <li><a href="contactad.php" role="button">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#logout" class="dropdown-toggle" data-toggle="dropdown">Admin<strong class="caret"></strong></a>
                        <div class="dropdown-menu" style="padding:15px; padding-bottom:15px;">
						    <form action="admin.php" method="post" accept-charset="UTF-8">
							  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px; padding-bottom:15px;" type="submit" name="commit" value ="Dashboard"/>
							</form>
							&nbsp;
                            <form action="index.php" method="post" accept-charset="UTF-8">
                                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px; padding-bottom:15px;" type="submit" name="commit" value="Sign Out" />
                            </form>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
	<ul class="nav nav-tabs">
	<li class="active"><a href="participant.php" role="button">Participant Home</a></li>
	<li><a href="newparticipant.php" role="button">Register Participant</a></li>
	<li><a href="cancelparticipant.php" role="button">Cancel a Registration</a></li>
	<li><a href="agegroup.php" role="button">Participant's age group</a></li>
	<li><a href="dispparticipant.php" role="button">See all Participants</a></li>
	</ul>
	<script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	<div class="container" style="padding-bottom:5px; padding-left:5px;padding-top:15px;padding-right:5px;">
	<h1 style="padding-bottom:5px; color:firebrick;">Welcome to the Participants page!</h1>
	<hr>
	<h2 style="color:firebrick;">Registration fee</h2>
	<h5># Registration Fee: Rs. 40/- Per student</h5>
    <h5># Registration Fee for Science Exhibition: Rs. 100/- per Group.</h5>
    <h5># Registration Fee for Group Dance crews: Rs. 120/- per Group.</h5>
	<form action="Event Brochure- Rhapsody 2k15.pdf">
	<h5 style="padding-top:20px;">Click here to check out the rules and regulations => 
	<input class="btn btn-primary" value="Download Brochure" type="submit" style="clear: left; width:20%; height: 32px; font-size: 13px;padding-bottom:15px;" action="Event Brochure- Rhapsody 2k15.docx"></button>
    </h5>
	</form>
	<h2 style="color:firebrick;">For more details contact:</h2>
	<h5><strong>Sonali</strong> 7381809123</h5>
    <h5><strong>Roshni</strong> 9668094692</h5>
    <h5><strong>Asmita</strong> 7077621100</h5>
	</div>
	</body>
</html>
<?php
 mysqli_close($connection);
 unset($connection);
 ?>