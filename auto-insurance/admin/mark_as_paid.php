<!doctype html>
<html>
<head>
  <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>View Clients | MCVT Insurance Services</title>
    <!--icons-->
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/solid.css" rel="stylesheet" />
    <!--bootstrap core css-->
        <link rel="stylesheet" href="assets/styles/bootstrapcss/bootstrap.css" />
    <!--plugins-->
        <link href="assets/plugins/data-tables/DataTables-1.10.18/css/dataTables.bootstrap.css" rel="stylesheet"/>
        <link href="assets/plugins/data-tables/datatables.css" rel="stylesheet" />
        <link href="assets/plugins/data-tables/Responsive-2.2.2/css/responsive.bootstrap.css" rel="stylesheet" />
        <link href="assets/plugins/mdb-free_4.7.5/css/addons/datatables.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
        <link href="assets/plugins/mdb-free_4.7.5/css/mdb.css" rel="stylesheet">

    <!--logo-->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/mcvt-1.png">
    <!--custom styles-->
            <link rel="stylesheet" href="assets/styles/custom.css" />
</head>

<body>
<!-- Modal: modalPoll -->
<div class="text-center justify-content-center d-flex pt-5">
<div class="row">
  <div class="col-md-12">
        <?php 
			if(isset($_GET["id"])){
				$id = $_GET["id"];
			}
		?>
        
      <form method="post" action="update.php?id=<?=$id?>">
    <div class="card">
      <!--Header-->
      <div class="card-header teal text-white">
        <p class="header-title  lead mt-3">Mark as Paid</p>
      </div>

      <!--Body-->
      <div class="card-body">
        <div class="text-center">
          <i class="fas fa-money-bill teal-text fa-4x mb-3 animated rotateIn"></i>
          <p>
            <strong>To complete this process, kindly fill the information below</strong>
          </p>
        </div>
        <hr>
		<div class="form-row">
			<div class="col-md-12 justify-content-center">
		<?php 
			include "connect.php";
			$agents = "SELECT * FROM agents";
			$result = mysqli_query($conn, $agents);
		?>
       			<!--agent name-->
       <div class="md-form md-outline col-md-12 mb-0">
        	<select name="agent_id" id="client_agent" class="form-control">
        		<option value="" selected disabled>Validated By</option>
        		<?php
					while($row=$result->fetch_assoc()){
				?>
        		<option value="<?=$row['id']?>" ><?=$row["agent_fname"] . " " . $row["agent_lname"]?></option>
        		<?php
					}
				?>
        	</select>
            
      	</div><!--form column-->
     
      <!--policy number-->
       <div class="md-form md-outline col-md-12 mb-0">
         <label class="ml-3" for="client_policy_no">Policy Number <span class="red-text" title="This input is required">*</span></label>
            <input type="text" maxlength="11" class="form-control name25" id="client_policy_no" length="25" name="client_policy_no" placeholder="" value="" autocomplete="off" required>
          <div class="feedback">
              Policy Number must contain 7 - 11 digits only.
          </div>
      	</div><!--form column-->
      	
	    <!--official receipt number-->
         <div class="md-form md-outline col-md-12 mb-0">
            <label class="ml-3" for="client_official_receipt_no">Official Receipt Number <span class="red-text" title="This input is required">*</span></label>
              <input type="text" maxlength="7" class="form-control name25" id="client_official_receipt_no" name="client_official_receipt_no" placeholder="" value="" autocomplete="off" required>
            <div class="feedback">
                 Official Receipt Number must contain 7 digits only.
            </div>
         </div><!--form column-->
       
       <!--mvfile number-->
       <div class="md-form md-outline col-md-12 mb-0">
         <label class="ml-3" for="client_mv_file_no">MV File Number <span class="red-text" title="This input is required">*</span></label>
            <input type="text" maxlength="10" class="form-control name25" id="client_mv_file_no" length="25" name="client_mv_file_no" placeholder="" value="" autocomplete="off" required>
          <div class="feedback">
              MV File Number must contain 10 digits only.
          </div>
      	</div><!--form column-->
      	
			</div>
		</div>
    

      </div><!--mcardbody-->

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-info" ><a href="view_client.php" class="white-text">Cancel</a></button>
		<input type="submit" class="btn-teal btn" value="Yes, Continue!" name="mark_paid">
      </div>
	
    </div>
    </form>
  </div>
</div>
</div>
<!-- Modal: modalPoll -->
</body>
<!-- SCRIPTS -->
    <!-- JQuery -->
        <script type="text/javascript" src="assets/scripts/jqueryjs/jquery.js"></script>
    <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/scripts/popperjs/popper.js"></script>
    <!--Plugins-->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/forms-free.js"></script>
        
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
       
    <!--Bootstrap core JavaScript-->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>


    <!--Custom Javascript-->
       <script type="text/javascript" src="assets/scripts/validation.js"></script>
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
