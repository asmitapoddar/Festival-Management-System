<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Participants group wise</title>
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
	<li><a href="partcipant.php" role="button">Partcipant Home</a></li>
	<li><a href="newparticipant.php" role="button">Register Partcipant</a></li>
	<li><a href="cancelparticipant.php" role="button">Cancel a Registration</a></li>
	<li class="active"><a href="agegroup.php" role="button">Participant's age group</a></li>
	<li><a href="dispparticipant.php" role="button">All participants</a></li>
	</ul>
	<table>
	<thead>
	<th style="padding-left:100px; padding-top:25px;">Group A</th>
	<th style="padding-left:100px; padding-top:25px;">Group B</th>
	<th style="padding-left:100px; padding-top:25px;">Group C</th>
	</thead>
	<tbody>
	<?php
	  $q1="Select * from participants where Age='A'";
	  $res=mysqli_query($connection,$q1);
	   echo "<tr class='ldr_alt'>";
	  while($row=mysqli_fetch_array($res){
	 	  echo "<td style='padding-left:100px; padding-top:25px;'><center>".$row['Name']."</center></td>";
	  }
	  $q2="Select * from participants where Age='B'";
	  $res2=mysqli_query($connection,$q2);
	   	  while($row2=mysqli_fetch_array($res2){
	 	  echo "<td style='padding-left:100px; padding-top:25px;'><center>".$row2['Name']."</center></td>";
	  }
	  $q3="Select * from participants where Age='C'";
	  $res3=mysqli_query($connection,$q3);
	   	  while($row3=mysqli_fetch_array($res3){
	 	  echo "<td style='padding-left:100px; padding-top:25px;'><center>".$row3['Name']."</center></td>";
	  }
	   echo "</tr>";
	   ?>
	   </tbody>
	   </table>
	   <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	
</body>
</html>
<?php
 mysqli_close($connection);
 unset($connection);
 ?>
	  