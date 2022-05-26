<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	

<?php

	include "connect.php";

	if(isset($_POST["save_agent"])){
		$agent_fname = $_POST["agent_fname"];
		$agent_mname = $_POST["agent_mname"];
		$agent_lname = $_POST["agent_lname"];
		$agent_mobile_no = $_POST["agent_mobile_no"];
		$agent_email = $_POST["agent_email"];
		$agent_sex = $_POST["agent_sex"];
		$agent_address = $_POST["agent_address"];
		$agent_date_of_birth = $_POST["agent_date_of_birth"];
		
		
		$save_agent = "INSERT INTO agents (agent_fname, agent_mname, agent_lname, agent_mobile_no, agent_email, agent_sex, agent_address, agent_date_of_birth) VALUES ('".$agent_fname."', '".$agent_mname."', '".$agent_lname."', '".$agent_mobile_no."', '".$agent_email."', '".$agent_sex."', '".$agent_address."', '".$agent_date_of_birth."')";
		
		if(mysqli_query($conn, $save_agent)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New agent created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'intro.html';\",1500);</script>";
		}
		else{
			echo $save_agent;
		}
	}

	elseif(isset($_POST["save_user"])){
		$username = $_POST["user_username"];
		$email = $_POST["user_email"];
		$password = md5($_POST["user_password"]);
		
		$save_user = "INSERT INTO users (username, email, password) VALUES ('".$username."', '".$email."', '".$password."')";
		
		if(mysqli_query($conn, $save_user)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New user created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'intro.html';\",1500);</script>";
		}
	}

	elseif(isset($_POST["save_client"])){
		$client_fname = $_POST["client_fname"];
		$client_mname = $_POST["client_mname"];
		$client_lname = $_POST["client_lname"];
		$client_address = $_POST["client_address"];
		$client_date_of_birth = $_POST["client_date_of_birth"];
		$client_sex = $_POST["client_sex"];
		$client_email = $_POST["client_email"];
		$client_profession = $_POST["client_profession"];
		$client_chassis_no = $_POST["client_chassis_no"];
		$client_body = $_POST["client_body"];
		$client_engine_no = $_POST["client_engine_no"];
		$client_color = $_POST["client_color"];
		$client_plate_no = $_POST["client_plate_no"];
		$client_brand = $_POST["client_brand"];
		$client_mv_file_no = $_POST["client_mv_file_no"];
		$client_authorized_capacity = $_POST["client_authorized_capacity"];
		$client_unladen_weight = $_POST["client_unladen_weight"];
		$client_total_price = $_POST["client_total_price"];
		
		$save_client = "INSERT INTO clients (client_fname, client_mname, client_lname, client_address, client_date_of_birth, client_sex, client_email, client_profession, client_date_issued, client_body, client_engine_no, client_color, client_plate_no, client_brand, client_chassis_no, client_authorized_capacity, client_unladen_weight, client_status, client_total_price) VALUES ('".$client_fname."', '".$client_mname."', '".$client_lname."', '".$client_address."', '".$client_date_of_birth."', '".$client_sex."', '".$client_email."', '".$client_profession."', '".date("Y-m-d")."', '".$client_body."', '".$client_engine_no."', '".$client_color."', '".$client_plate_no."', '".$client_brand."', '".$client_chassis_no."', '".$client_authorized_capacity."', '".$client_unladen_weight."', 'Unpaid', '".$client_total_price."')";
		
		if(mysqli_query($conn, $save_client)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New client created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'view_client.php';\",1500);</script>";
		}
	}

	elseif(isset($_POST["save_client_client"])){
		$client_fname = $_POST["client_fname"];
		$client_mname = $_POST["client_mname"];
		$client_lname = $_POST["client_lname"];
		$client_address = $_POST["client_address"];
		$client_date_of_birth = $_POST["client_date_of_birth"];
		$client_sex = $_POST["client_sex"];
		$client_email = $_POST["client_email"];
		$client_profession = $_POST["client_profession"];
		$client_chassis_no = $_POST["client_chassis_no"];
		$client_body = $_POST["client_body"];
		$client_engine_no = $_POST["client_engine_no"];
		$client_color = $_POST["client_color"];
		$client_plate_no = $_POST["client_plate_no"];
		$client_brand = $_POST["client_brand"];
		$client_mv_file_no = $_POST["client_mv_file_no"];
		$client_authorized_capacity = $_POST["client_authorized_capacity"];
		$client_unladen_weight = $_POST["client_unladen_weight"];
		$client_total_price = $_POST["client_total_price"];
		
		$save_client = "INSERT INTO clients (client_fname, client_mname, client_lname, client_address, client_date_of_birth, client_sex, client_email, client_profession, client_date_issued, client_body, client_engine_no, client_color, client_plate_no, client_brand, client_chassis_no, client_authorized_capacity, client_unladen_weight, client_status, client_total_price) VALUES ('".$client_fname."', '".$client_mname."', '".$client_lname."', '".$client_address."', '".$client_date_of_birth."', '".$client_sex."', '".$client_email."', '".$client_profession."', '".date("Y-m-d")."', '".$client_body."', '".$client_engine_no."', '".$client_color."', '".$client_plate_no."', '".$client_brand."', '".$client_chassis_no."', '".$client_authorized_capacity."', '".$client_unladen_weight."', 'Unpaid', '".$client_total_price."')";
		
		if(mysqli_query($conn, $save_client)){
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal("Saved!","New client created successfully!","success");';
			echo '}, 300);</script>';
			echo "<script>setTimeout(\"location.href = 'index.html';\",1500);</script>";
		}
	}



?>