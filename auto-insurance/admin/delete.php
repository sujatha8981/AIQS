<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	

<?php

	include "connect.php";

	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}

	if(isset($_POST["delete_agent"])){
		$delete_agent = "DELETE FROM agents WHERE id='".$id."'";
		
		if(mysqli_query($conn, $delete_agent)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Agent deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_agent.php';\",1500);</script>";
		}
	}

	elseif(isset($_POST["delete_client"])){
		$delete_client = "DELETE FROM clients WHERE id='".$id."'";
		
		if(mysqli_query($conn, $delete_client)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Client deleted successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_agent.php';\",1500);</script>";		
		}
	}

?>