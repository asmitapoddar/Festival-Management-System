<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add Paricipants</title>
<link rel="stylesheet" href="Styles/bootstrapsimplex.min.css" />
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
	<li class="active"><a href="newparticipant.php" role="button">Register Partcipant</a></li>
	<li><a href="cancelparticipant.php" role="button">Cancel a Registration</a></li>
	<li><a href="agegroup.php" role="button">Participant's age group</a></li>
	<li><a href="dispparticipant.php" role="button">See all</a></li>
	</ul>
	<h2 style="padding-left:25px"> Register a new participant</h2>
	<div class ="row">
	 <form action="newp.php" method="post" class="has-feedback has-error">
	 <p style="padding-left:150px; padding-top:25px; color:firebrick;">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="required text" name="Name" id="Name" /></p>
	 <table>
	 <tbody>
	 <tr class="ldr_alt">
	 <td style="padding-left:150px; padding-top:25px; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; font-size:13px; color:firebrick;">Events: </td>
	 <td style="padding-left:50px; padding-top:25px; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; font-size:13px; color:firebrick;">8AM-10AM : <select name="Events8" id="Events8">
     <option value="">None</option>
	 <?php
       $query="Select * from events where Timing='08:00:00'";
       $result=mysqli_query($connection,$query);
       while($row=mysqli_fetch_array($result)){
		   echo "<option value=".$row['Event name'].">".$row['Event name']."</option>";
	   }
      ?>
       </select></td>
	    <td style="padding-left:50px; padding-top:25px; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; font-size:13px;color:firebrick;">10AM-12PM : <select name="Events10" id="Events10">
		<option value="">None</option>
     <?php
       $query="Select * from events where Timing='10:00:00'";
       $result=mysqli_query($connection,$query);
       while($row=mysqli_fetch_array($result)){
		   echo "<option value=".$row['Event name'].">".$row['Event name']."</option>";
	   }
      ?>
       </select></td>
	    <td style="padding-left:50px; padding-top:25px; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif; font-size:13px;color:firebrick;">12PM-2PM : <select name="Events12" id="Events12">
        <option value="">None</option>
	 <?php
       $query="Select * from events where Timing='12:00:00'";
       $result=mysqli_query($connection,$query);
       while($row=mysqli_fetch_array($result)){
		   echo "<option value=".$row['Event name'].">".$row['Event name']."</option>";
	   }
      ?>
       </select></td>
       </tr>
	   </tbody>
       </table>	   
	<p style="padding-left:150px; padding-top:25px; color:firebrick;">Contact No: <input type="tel" name="Contact" class="required text" id="Contact"/></p>
	<p style="padding-left:150px; padding-top:25px; color:firebrick;">School:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="School" id="School"/>
	 <?php
       $query="Select * from schools";
       $result=mysqli_query($connection,$query);
       while($row=mysqli_fetch_array($result)){
		   echo "<option value=".$row['School'].">".$row['School']."</option>";
	   }
      ?>	
	</select></p>
	<table>
	<tr class="ldr_alt">
	<td style="padding-left:150px; padding-top:25px; padding-bottom:50px; color:firebrick; font-size:13px;">Age group:<select name="Ageg" id="Ageg">
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	</select></td></tr></table>
	&nbsp;
	<?php	
	echo str_repeat('&nbsp;',75); ?>
	<input class="btn btn-primary" style="clear: left; width:20%; height: 32px; font-size: 13px;padding-bottom:15px;" type="submit" name="commit" value="Register" />
	<br/>
	</form>
	<?php echo str_repeat('&nbsp;',40); ?>
	<a style="padding-left:250px;" href="partcipant.php">Cancel</a>
	</div>
	<script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	
</body>
</html>
<?php
 mysqli_close($connection);
 unset($connection);
 ?>