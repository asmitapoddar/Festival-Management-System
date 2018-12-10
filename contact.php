<?php include_once("includes/connection.php")?>
<?php include_once("includes/functions.php")?>
<?php
	include_once("includes/form_functions.php");
	
	// START FORM PROCESSING
	if (isset($_POST['commit'])) { // Form has been submitted.
		$errors = array();

		// perform validations on the form data
		$required_fields = array('user', 'pass');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('user' => 30, 'pass' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));

		$user = trim(mysql_prep($_POST['user']));
		$pass = trim(mysql_prep($_POST['pass']));
		$hashed_password = sha1($pass);
		
		if ( empty($errors) ) {
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT id, username ";
			$query .= "FROM users ";
			$query .= "WHERE username = '{$user}' ";
			$query .= "AND hashed_password = '{$hashed_password}' ";
			$query .= "LIMIT 1";
			$result_set = mysqli_query($connection,$query);
			//confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result_set);
				redirect_to("contactad.php");
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		
	} else { // Form has not been submitted.
		$user = "";
		$pass = "";
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Contact us</title>
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
                    <li><a href="index.php" role="button">Home</a></li>
                    <li><a href="about.php" role="button">About</a></li>
                    <li class="active"><a href="contact.php" role="button">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#login" class="dropdown-toggle" data-toggle="dropdown">Login<strong class="caret"></strong></a>
                        <div class="dropdown-menu" style="padding:15px; padding-bottom:15px;">
                            <form action="contact.php" method="post" accept-charset="UTF-8">
                                <input id="user_username" style="margin-bottom: 15px;" type="text" name="user" size="30" placeholder="Username" />
                                <input id="user_password" style="margin-bottom: 15px;" type="password" name="pass" size="30" placeholder="Password" />
                                <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
                                <label class="string optional" for="user_remember_me"> Remember me</label>

                                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px; padding-bottom:15px;" type="submit" name="commit" value="Sign In" />
                            </form>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron" style="background-color:firebrick;">
        <h1 style="color:white">Contact Us</h1>
    </div>
	<div class="container">
	<h2 style="color:firebrick;">List of Co-ordinaters</h2>
	<table style="padding:100px">
	<thead style="padding-top:50px; padding-bottom:55px;">
        <tr>
          <th style="padding-left:100px; padding-top:25px;"><center>Name</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Event</center></th>
          <th style="padding-left:100px; padding-top:25px;"><center>Contact</center></th>
        </tr>
      </thead>
	<tbody>
	<?php 
	 $query="Select * from coordinators";
	 $res=mysqli_query($connection,$query);
	
	 while($row=mysqli_fetch_array($res)){
		  echo '<tr class="ldr_alt">';
     echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Coordinator'] . '</center></td>';
     echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Event'] . '</center></td>';
     echo '<td style="padding-left:100px; padding-top:25px;"><center>' . $row['Contact'] . '</center></td>';
    
     echo '</tr>';
	 }
	 ?>
	 </tbody>
	 </table>
	</div>
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	&nbsp;
	&nbsp;
	<div class="footer" style="background-color:firebrick;">
	 <h6 style="color:white;">Created by
	 <strong style="color:white;">Sonali Patro</strong>
	 ,Roshni Biswas and Asmita Poddar</h6>
	</div>
</body>
</html>
<?php
 mysqli_close($connection);
 ?>