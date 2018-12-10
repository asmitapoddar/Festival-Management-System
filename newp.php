<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>
<?php
 if(! get_magic_quotes_gpc() )
            {
               $Name = addslashes ($_POST['Name']);
               $Ageg = addslashes ($_POST['Ageg']);
			   $Events8 = addslashes ($_POST['Events8']);
			   $Events10 = addslashes ($_POST['Events10']);
			   $Events12 = addslashes ($_POST['Events12']);
			   $School = addslashes ($_POST['School']);
			   $Contact = addslashes ($_POST['Contact']);
            }
            else
            {
              $Name = $_POST['Name'];
               $Ageg = $_POST['Ageg'];
			   $Events8 = $_POST['Events8'];
			   $Events10 = $_POST['Events10'];
			   $Events12 = $_POST['Events12'];
			   $School = $_POST['School'];
			   $Contact =$_POST['Contact'];
            }
			if (empty($Name)) {
                echo '<script language="javascript">';
                echo 'alert("You forgot to enter your name!"); location.href="newparticipant.php"';
			echo '</script>';}

            if (empty($Contact)) {
                echo '<script language="javascript">';
                echo 'alert("You forgot to enter your contact!"); location.href="newparticipant.php"';
                echo '</script>';
                   }

  global $connection;
if(!empty($Name)&&!empty($Contact)){
  $query="Insert into participants ". "(Name,Ageg,Contact,Event1,Event2,Event3,School) ". "VALUES('$Name','$Ageg','$Contact','$Events8','$Events10','$Events12','$School')";
  $result=mysqli_query($connection,$query);
    if($result){
	  //Success
	    echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="partcipant.php"';
    echo '</script>';
  } 
  else{
	 // echo '<script language="javascript">';
    //echo 'alert("Oops there has been a problem"); location.href="newparticipant.php"';
    //echo '</script>';
	die("Database query failed: " .mysql_error());
}}
 // $sql = "INSERT INTO employee ". "(emp_name,emp_address, emp_salary, join_date) ". "VALUES('$emp_name','$emp_address',$emp_salary, NOW())"
 ?>
<?php
 mysqli_close($connection);?>