<?php include_once("includes/connection.php")?>
<?php include_once("includes/functions.php")?>
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
                                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px; padding-bottom:15px;" type="submit" name="commit" value="Dashboard" />
                            </form>
							&nbsp;
							<form action="index.php" method="post" accept-charset="UTF-8">
							  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px; padding-bottom:15px;" type="submit" name="commit" value ="Sign Out"/>
							</form>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
	<div class="jumbotron" style="background-color:firebrick;">
	<h1 style="color:white;">Sponsors</h1>
	</div>
	
	<table style="padding:100px">
	<thead style="padding-top:50px; padding-bottom:55px;">
        <tr>
          <th style="padding-left:100px; padding-top:25px;"><center>Sponsors</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Event</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Amount</center></th>
		   <th style="padding-left:100px; padding-top:25px;"><center>Contact</center></th>
        </tr>
      </thead>
	<tbody>
	<?php 
	 $query="Select * from sponsors";
	 $res=mysqli_query($connection,$query);
	
	 while($row=mysqli_fetch_array($res)){
		  echo '<tr class="ldr_alt">';
     echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Sponsor'] . '</center></td>';
     echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Event'] . '</center></td>';
     echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Amount'] . '</center></td>';
      echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Contact'] . '</center></td>';
     echo '</tr>';
	 }
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