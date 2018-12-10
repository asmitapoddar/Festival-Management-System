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
	<li><a href="partcipant.php" role="button">Participant Home</a></li>
	<li><a href="newparticipant.php" role="button">Register Participant</a></li>
	<li class="active"><a href="cancelparticipant.php" role="button">Cancel a Registration</a></li>
	<li><a href="agegroup.php" role="button">Participant's age group</a></li>
	<li><a href="dispparticipant.php" role="button">See all Participants</a></li>
	</ul>
	<form action="cancel.php" method="post" style="padding:50px;">
	<table style="padding:50px;">
	<tr class="ldr_alt" style="padding:20px;"> 
	<td style="padding:20px;"><center><p style="color:firebrick; padding-right:10px; font-size:15px;">Enter the name of the participant: </p></center></td>
	<td style="padding:20px;"><center><input type="text" name="Name" id="Name"/></center></td>
	</tr>
	<tr class="ldr_alt"  style="padding:20px;">
	<td style="padding:10px;"><center><p style="color:firebrick; padding-right:10px; font-size:15px;">Partcipant id: </p></center></td>
	<td style="padding:10px;"><center><input type="number" id="id" name="id"/></center></td>
	</tr>
	<tr class="ldr_alt"  style="padding:20px;">
	<td style="padding:10px;"><center><input class="btn btn-primary" type="submit" name="commit" value="Delete" /></center></td>
	</tr>
	</table>
	</form>
	<script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	</body>
	</html>
	<?php mysqli_close($connection); ?>