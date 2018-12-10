<?php require_once("includes/session.php"); ?>
<?php include_once("includes/connection.php")?>
<?php include_once("includes/functions.php")?>
<?php
     if (logged_in()) {
		redirect_to("admin.php");
	}
	include_once("includes/form_functions.php");
	if (isset($_POST['user'])&&isset($_POST['pass'])) { // Form has been submitted.
		$errors = array();
		$required_fields = array('user', 'pass');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('user' => 30, 'pass' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
        
		$user = trim(mysql_prep($_POST['user']));
		$pass = trim(mysql_prep($_POST['pass']));
		$hashed_password = sha1($pass);
		
		if ( empty($errors) ) {
			$query = "SELECT id, username ";
			$query .= "FROM users ";
			$query .= "WHERE username = '{$user}' ";
			$query .= "AND hashed_password = '{$hashed_password}' ";
			$query .= "LIMIT 1";
			$result_set = mysqli_query($connection,$query);
			//confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				$found_user = mysqli_fetch_array($result_set);
				redirect_to("indexad.php");
			} else {
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
    <title>HOME</title>
    <link rel="stylesheet" href="Styles/bootstrapsimplex.min.css" />
	<link rel="stylesheet" href="Styles/style.css" />
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
    <script type="text/javascript" src="engine0/jquery.js"></script>
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
                    <li class="active"><a href="index.php" role="button">Home</a></li>
                    <li><a href="about.php" role="button">About</a></li>
                    <li><a href="contact.php" role="button">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#login" class="dropdown-toggle" data-toggle="dropdown">Login<strong class="caret"></strong></a>
                        <div class="dropdown-menu" style="padding:15px; padding-bottom:15px;">
                            <form action="index.php" method="post" accept-charset="UTF-8">
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
    
   <div class="jumbotron" style="background-color:firebrick">
           <h1 style="font-family:'Brush Script Std';color:lightgoldenrodyellow; padding-left:400px;">RHAPSODY 2K15</h1>
		   <h3 style="font-family:'Brush Script Std';color:lightgoldenrodyellow; padding-left:550px; padding-top:10px;">Largest school fest in Odisha!</h3>
   </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3 style="color:firebrick; padding-bottom:25px;">Events</h3>
                <?php 
				  $result=mysqli_query($connection,"Select * from events");
	               if(!$result){
	                 die("Database query failed: " .mysql_error());}
	 
	                 while($row=mysqli_fetch_array($result)){
		              echo "<h5>".$row["Event name"]."</h5>";
	                  }
				?>
            </div>
			<div id="wowslider-container0" class="col-md-4" style="padding-top:25px;">
<div class="ws_images"><ul>
		<li><img src="data0/images/1490629_728562333895918_4652948309945936162_o.jpg" alt="" title="" id="wows0_0"/></li>
		<li><img src="data0/images/1655684_728561760562642_3511404645073580344_o.jpg" alt="" title="" id="wows0_1"/></li>
		<li><img src="data0/images/10431265_728569683895183_5794385913430135176_o.jpg" alt="" title="" id="wows0_2"/></li>
		<li><img src="data0/images/10517619_728562190562599_1694140330314119810_o.jpg" alt="" title="" id="wows0_3"/></li>
		<li><img src="data0/images/10620500_728562480562570_2014143078273597526_o.jpg" alt="" title="" id="wows0_4"/></li>
		<li><img src="data0/images/10687324_728562160562602_6761975120900676669_o.jpg" alt="" title="" id="wows0_5"/></li>
		<li><img src="data0/images/10806304_720427954709356_5185407956869772530_n.jpg" alt="Our Team" title="Our Team" id="wows0_6"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data0/images/10827918_728569690561849_5109502710725082784_o.jpg" alt="css slider" title="" id="wows0_7"/></a></li>
		<li><img src="data0/images/10828156_728561707229314_1466583482783454614_o.jpg" alt="" title="" id="wows0_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data0/tooltips/1490629_728562333895918_4652948309945936162_o.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/1655684_728561760562642_3511404645073580344_o.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/10431265_728569683895183_5794385913430135176_o.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/10517619_728562190562599_1694140330314119810_o.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/10620500_728562480562570_2014143078273597526_o.jpg" alt=""/>5</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/10687324_728562160562602_6761975120900676669_o.jpg" alt=""/>6</span></a>
		<a href="#" title="Our Team"><span><img src="data0/tooltips/10806304_720427954709356_5185407956869772530_n.jpg" alt="Our Team"/>7</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/10827918_728569690561849_5109502710725082784_o.jpg" alt=""/>8</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/10828156_728561707229314_1466583482783454614_o.jpg" alt=""/>9</span></a>
	      </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">http://wowslider.net/</a> by WOWSlider.com v8.6</div>
          <div class="ws_shadow"></div>
          </div>  
            <div class="col-md-5">
                <h3 style="color:firebrick; padding-bottom:15px; padding-left:15px">Partcipating Schools</h3>
                 <?php 
				  $result=mysqli_query($connection,"Select * from schools");
	               if(!$result){
	                 die("Database query failed: " .mysql_error());}
	                 $count=mysqli_num_rows($result);
					 $i=0;
					 echo "<div class='row'>";
	                 while($row=mysqli_fetch_array($result)){
					  if($i<11)
					  {echo "<div class='col-md-6' style='padding:0;'><h6 style='padding-left:30px;'>".$row["School"]."</h6></div>";}
				      if($i>=11){
						echo "<div class='col-md-6' style='padding:0;'><h6 style='padding-left:30px;'>".$row["School"]."</h6></div>";  
					  }
					  $i++;
	                  }
					  echo "</div>";
				?>
            </div>
        </div>
		</div>
		<h4 style="padding-left:1000px; color:firebrick; padding-top:20px;"><strong>Chief Guest: Prof. Korra Sathya Babu</strong></h4>
        <div class="row" style="padding-top:50px; padding-left:50px;">
		    
            <h5>Powered by:</h5>
			<div id="sponser" style="overflow-y:hidden;">
			<div style="width:1000px;">
			<figure><img src="Images/estinno.jpg" style="padding-left:450px; padding-bottom:25px; display:inline;"/>
			<img src="Images/moksha.png" style="padding-left:100px; padding-bottom:25px;display:inline;"/>
			</figure>
			</div>
            </div>        
        </div>
    </div>
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<div class="push"></div>
 <div class="footer" style="background-color:firebrick;">
	 <h6 style="color:white;">Created by
	 <strong style="color:white;">Sonali Patro</strong>
	 ,Roshni Biswas and Asmita Poddar</h6>
	</div>
</body>
</html>
<?php
	  mysqli_close($connection);
	  unset($connection);
?>