<?php
session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"Library");
    $id= $_POST['id'];
    if($_SESSION['id'] == $_POST['id']){
	$query = "update users set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]' where id='$_POST[id]'";
	$query_run = mysqli_query($connection,$query);
	?>
	<script type="text/javascript">
	alert("UPDATED SUCCESSFULLY...");
	window.location.href = "user_dashboard.php";
    </script>
	<?php
   }
   else{
	?>
	<script type="text/javascript">
	alert("WRONG ID!! NOT UPDATED...");
	window.location.href = "user_dashboard.php";
    </script>
	<?php
	}
	
?>
