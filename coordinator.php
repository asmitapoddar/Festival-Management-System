<?php include_once("includes/connection.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Coordinator page</title>
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
                    <li><a href="contactad.php" role="button" >Contact</a></li>
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
	<li class="active"><a href="coordinator.php" role="button">Coordinator Portal</a></li>
	<li><a href="events.php" role="button">See all Events</a></li>
	</ul>
	<form action="updatecost.php" method="post">
      <p style="padding-left:150px; padding-top:25px;">Coordinator Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="coordinator" id="coordinator">
     <?php
       $query="Select * from coordinators";
       $result=mysqli_query($connection,$query);
       while($row=mysqli_fetch_array($result)){
		   echo "<option value=".$row['Coordinator'].">".$row['Coordinator']."</option>";
	   }
      ?>	   
  </select></p>	
  <p style="padding-left:150px; padding-top:25px;">Cost:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="cost" name="cost"/></p>
  <input class="btn btn-primary" style="clear: left; width:20%; height: 32px; font-size: 13px;padding-bottom:15px;" type="submit" name="commit" value="Update" />
	</form>
	<script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	</body>
</html>
<?php
 mysqli_close($connection);
 unset($connection);
 ?>
	