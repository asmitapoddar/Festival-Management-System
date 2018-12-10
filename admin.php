<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin page</title>
    <link rel="stylesheet" href="Styles/bootstrapsimplex.min.css" />
	<link rel="stylesheet" href="Styles/style.css" />
</head>
<body style="background-image: url('Images/background.jpg');">
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
    <div class="container" >
    <div class="row" style="padding-top:200px;">
        <h5 class="col-md-2"></h5>
        <form action="partcipant.php">
            <input class="btn btn-primary col-md-3" type="submit" value="Participants" style="padding-left:100px;padding-right:100px;" onfocus="this.focus();" />
        </form>
		<form action="events.php">
        <h6 class="col-md-2"></h6>
        <input class="btn btn-primary col-md-3" type="submit" value="Events" style="padding-left:100px;padding-right:100px;"  onfocus="this.focus();" />
        </form>
	</div>
    <div class="row" style="padding-top:100px">
        <h5 class="col-md-2"></h5>
		<form action="winners.php">
        <input class="btn btn-primary col-md-3" type="submit" value="Winners" style="padding-left:100px;padding-right:100px;"  onfocus="this.focus();" />
        </form>
		<form action="sponsers.php">
		<h6 class="col-md-2"></h6>
        <input class="btn btn-primary col-md-3" type="submit"  value="Sponsors" style="padding-left:100px;padding-right:100px;"  onfocus="this.focus();"/>
		</form>
    </div>
	</div>
   <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script> 
</body>
</html>
