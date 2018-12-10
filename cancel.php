<?php include_once("includes/connection.php");?>
<?php include_once("includes/functions.php");?>
<?php
    
   if(isset($_POST['getid'])){
	   $name=$_POST['Name'];
	   $query=getparticipants_name($name);
	   echo "<select name='pid' id='pid'>"; 
	   while($row=mysqli_fetch_array($query)){
		   echo "<option value=".$row['Participant_id'].">".$row['Participant_id']."</option>";
	   }
	   echo "</select>";
   }
   if(isset($_POST['commit']))
   {if (intval($_POST['id']) == 0) {
		redirect_to('cancelparticipant.php');
	}

	if ($page = $_POST['id']) {
		// LIMIT 1 isn't necessary but is a good fail safe
		$query = "DELETE FROM participants WHERE Participant_id = {$page['id']}";
		$result = mysqli_query ($connection,$query);
		if (mysqli_affected_rows($connection) == 1) {
			// Successfully deleted
			echo '<script language="javascript">';
            echo 'alert("Successfully deleted"); location.href="partcipant.php"';
            echo '</script>';
		} else {
			// Deletion failed
			echo "<p>Page deletion failed.</p>";
			echo "<p>" . mysql_error() . "</p>";
			echo "<a href=\"partcipant.php\">Return to Psrticipant page</a>";
		}
	} else {
		// page didn't exist, deletion was not attempted
		redirect_to('partcipant.php');
   }}
?>