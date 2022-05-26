<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	

<?php

	include "connect.php";

	if(isset($_POST["update_agent"])){
		if(isset($_GET["id"])){
			$agent_id = $_GET["id"];
		}
		$agent_fname = $_POST["agent_fname"];
		$agent_mname = $_POST["agent_mname"];
		$agent_lname = $_POST["agent_lname"];
		$agent_mobile_no = $_POST["agent_mobile_no"];
		$agent_email = $_POST["agent_email"];
		$agent_sex = $_POST["agent_sex"];
		$agent_address = $_POST["agent_address"];
		$agent_date_of_birth = $_POST["agent_date_of_birth"];
		
		$update_agent = "UPDATE agents SET agent_fname='".$agent_fname."', agent_mname='".$agent_mname."', agent_lname='".$agent_lname."', agent_mobile_no='".$agent_mobile_no."', agent_email='".$agent_email."', agent_sex='".$agent_sex."', agent_address='".$agent_address."', agent_date_of_birth='".$agent_date_of_birth."' WHERE id='".$agent_id."'";
		
		if(mysqli_query($conn, $update_agent)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Agent updated successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_individual_agent.php?id=".$agent_id."';\",1500);</script>";
		}
		else{
			echo $update_agent;
		}
	}

	if(isset($_POST["mark_paid"])){
		if(isset($_GET["id"])){
			$client_id = $_GET["id"];
		}
		$agent_id_client = $_POST["agent_id"];
		$client_policy_no = $_POST["client_policy_no"];
		$client_official_receipt_no = $_POST["client_official_receipt_no"];
		$client_mv_file_no = $_POST["client_mv_file_no"];
		
		$update_client = "UPDATE clients SET agent_id='".$agent_id_client."', client_policy_no='".$client_policy_no."', client_official_receipt_no='".$client_official_receipt_no."', client_start_period='".date('Y-m-d')."', client_end_period='".date('Y-m-d', strtotime('+1 year'))."', client_mv_file_no='".$client_mv_file_no."', client_status='Paid' WHERE id='".$client_id."'";
		
		if(mysqli_query($conn, $update_client)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","Client updated successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_individual_client.php?id=".$client_id."';\",1500);</script>";
		}
		else{
			echo $update_client;
		}
	}

?>