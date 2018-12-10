<?php include_once("includes/connection.php"); ?>
<?php
 $name= $_POST["coordinator"];
 $cost= $_POST["cost"];

 $query="update coordinators set amount=$cost where coordinator='$name'";
 
 $result=mysqli_query($connection,$query);
 
 if($result){
      echo '<script language="javascript">';
                echo 'alert("Cost updated!"); location.href="coordinator.php"';
			echo '</script>';}
 else {
   echo '<script language="javascript">';
    echo 'alert("Oops there has been a problem"); location.href="newparticipant.php"';
    echo '</script>';}
	?>