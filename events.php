<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>
<?php
if(isset($_GET['eve'])){
	$sel_jud="";
	$sel_eve=$_GET['eve'];  
} elseif(isset($_GET['jud'])){
	$sel_eve="";
	$sel_jud=$_GET['jud'];
} else{
	$sel_jud="";
	$sel_eve="";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Events</title>
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
	<li><a href="coordinator.php" role="button">Coordinator Portal</a></li>
	<li class="active"><a href="events.php" role="button">See all Events</a></li>
	</ul>
	<table style="padding:100px">
	<thead style="padding-top:50px; padding-bottom:55px;">
        <tr>
          <th style="padding-left:100px; padding-top:25px;"><center>Name</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Timing</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Place</center></th>
		   <th style="padding-left:100px; padding-top:25px;"><center>Judge</center></th>
        </tr>
      </thead>
	<tbody>
	
	<?php
	 $events=mysqli_query($connection,"Select * from events");
	 if(!$events){
	 die("Database query failed: " .mysql_error());}
	    
	 while($row=mysqli_fetch_array($events)){
		 
		echo '<tr class="ldr_alt">';
		echo "<td style='padding-left:100px; padding-top:25px;'><center><a href=\"events.php?eve=".urlencode($row['id']).
		 "\">{$row['Event name']}</a>"."</center></td>";
		 echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Timing'] . '</center></td>';
         echo '<td style="padding-left:100px; padding-top:25px;"><center>'. $row['Place'] . '</center></td>';
         echo "<td style='padding-left:100px; padding-top:25px;'><center><a href=\"events.php?jud=".urlencode($row['id']).
		 "\">{$row['Judge']}</a>"."</center></td>";
         echo '</tr>';
         if($row["id"]==$sel_eve)
		 { $eventpart=getparticpants_event($row["Event name"]);
          while($page=mysqli_fetch_array($eventpart)){
			  echo '<tr class="ldr_alt">';
		echo "<td style='padding-left:100px; padding-top:25px;'>".$page['Name']."</center></td>";
		 echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $page['Ageg'] . '</center></td>';
         echo '<td style="padding-left:100px; padding-top:25px;"><center>'. $page['Contact'] . '</center></td>';
		  echo '<td style="padding-left:100px; padding-top:25px;"><center>'. $page['School'] . '</center></td>';
		  echo '</tr>';
		 }
		  }
		  if($row["id"]==$sel_jud){
			{$eventjudg=getjudge_event($row["Event name"]);
          while($jud=mysqli_fetch_array($eventjudg)){
			 echo '<tr class="ldr_alt">';
		echo "<td style='padding-left:100px; padding-top:25px;'>".$jud['Judge']."</center></td>";
		 echo '<td style="padding-left:100px; padding-top:25px;"><center>Contact no: ' . $jud['Contact'] . '</center></td>';
		  echo '</tr>';} 
	 }}
		 
         		 
	 }
	 ?>
	
	<script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	
</body>
</html>
<?php
 mysqli_close($connection);
 unset($connection);
 ?>