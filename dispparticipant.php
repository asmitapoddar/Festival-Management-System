<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>
<?php
if(isset($_GET['sch'])){
	$sel_sch=$_GET['sch'];  
} else{
	$sel_sch="";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>List of Paricipants</title>
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
	<li><a href="agegroup.php" role="button">Participant's age group</a></li>
	<li class="active"><a href="dispparticipant.php" role="button">See all</a></li>
	</ul>
	<div class="container">
	<table style="padding:100px">
	<thead style="padding-top:50px; padding-bottom:55px;">
        <tr>
          <th style="padding-left:100px; padding-top:25px;"><center>Name</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Events</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>School</center></th>
		   <th style="padding-left:100px; padding-top:25px;"><center>Contact</center></th>
        </tr>
      </thead>
	<tbody>
	<?php
	 $result=mysqli_query($connection,"Select * from participants");
	 if(!$result){
	 die("Database query failed: " .mysql_error());}
	 
	 while($row=mysqli_fetch_array($result)){
		 echo '<tr class="ldr_alt">';
		 echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Name'] . '</center></td>';
         echo '<td style="padding-left:100px; padding-top:25px;"><center>'. $row['Event1']." ".$row['Event2']." ".$row['Event3'].'</center></td>';
         echo "<td style='padding-left:100px; padding-top:25px;'><center><a href=\"dispparticipant.php?sch=".urlencode($row['School']).
		 "\">{$row['School']}</a>"."</center></td>";
         echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Contact'] . '</center></td>';
         echo '</tr>';
	 
	  if($row['School']==$sel_sch)
	     {$schd=getschool_details($row['School']);
          while($page=mysqli_fetch_array($schd)){
			echo '<tr class="ldr_alt">';
     echo '<td style="padding-left:50px; padding-top:12.5px;"><center>' . $page['School'] . '</center></td>';
     echo '<td style="padding-left:50px; padding-top:12.5px;"><center>' . $page['Address'] . '</center></td>';
     echo '<td style="padding-left:50px; padding-top:12.5px;"><center>' . $page['Contact'] . '</center></td>';
      echo '<td style="padding-left:50px; padding-top:12.5px;"><center>' . $page['Representative'] . '</center></td>';
     echo '</tr>';
		  }
		 }
	 }
	 ?>
	 </tbody>
	 <table>
	<script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	
</body>
</html>
<?php
 mysqli_close($connection);
 unset($connection);
 ?>