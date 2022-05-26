<!doctype html>
<html>
<head>
  <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Receipt | MCVT Insurance Services</title>
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
<div class="text-center pt-5 justify-content-center d-flex ">
<div class="row">
  <div class="col-md-12">
        <?php 
	  		include "connect.php";
			if(isset($_GET["id"])){
				$id = $_GET["id"];
			}
	  		$receipt = "SELECT * FROM clients WHERE id='".$id."'";
	  		$receipt_result = mysqli_query($conn, $receipt);
	  		$receipt_row = $receipt_result->fetch_assoc();
	  
	  		$agent = "SELECT * FROM agents WHERE id='".$receipt_row['agent_id']."'";
	  		$agent_result = mysqli_query($conn, $agent);
	  		$agent_row = $agent_result->fetch_assoc();
		?>
        

    <div class="card">
      <!--Header-->
      <div class="card-header ">
        <img src="assets/images/mcvt-1.png" width="100px;"/>
      </div>

      <!--Body-->
      <div class="card-body">
       <div class="row">
       		<div class="col-md-7">
       			<span class="badge black white-text text-uppercase float-left">official receipt</span> <?=$receipt_row["client_official_receipt_no"]?>
       		</div>
       		<div class="col-md-12 float-left">
       			<span class="float-left">Date: <?=date("m/d/Y")?></span>
       		</div>
       </div>
       <hr>
       <div class="  row mt-0 pt-0" style="padding-top: -12px;margin-top: -15px !important">
       		<div class="col-md-5 mt-2">
       			<span class="font-weight-bold text-uppercase">Received from:</span>
       		</div>
       		<div class="col-md-7 mt-2 mb-0">
       			<span class=" text-capitalize"><?=$agent_row["agent_fname"] . " " . $agent_row["agent_mname"] . " " . $agent_row["agent_lname"]?></span>
       		</div>
       </div>
       <hr>
       <div class="row mt-0 pt-0 mx-4" style="padding-top: -12px;margin-top: -15px !important">
       		<div class="col-md-12 mt-2">
       			<span class=" font-weight-bold text-uppercase">Payment Details</span>
       			<div class="row mt-2">
       				<div class="col-md-3">
       					<span class="font-weight-normal float-left">Posted:</span>
       				</div>
       				<div class="col-md-9">
       					<span class="font-weight-light float-right"><?=$receipt_row["client_date_issued"]?></span>
       				</div>
       			</div><!--row-->
       			<div class="row">
       				<div class="col-md-3">
       					<span class="font-weight-normal float-left">Body:</span>
       				</div>
       				<div class="col-md-9">
       					<span class="font-weight-light float-right"><?=$receipt_row["client_body"]?></span>
       				</div>
       			</div><!--row-->
       			<div class="row">
       				<div class="col-md-6">
       					<span class="font-weight-normal float-left">Plate Number:</span>
       				</div>
       				<div class="col-md-6">
       					<span class="font-weight-light float-right"><?=$receipt_row["client_plate_no"]?></span>
       				</div>
       			</div><!--row-->
       			
       			<div class="row">
       				<div class="col-md-6">
       					<span class="font-weight-normal float-left">Gross Weight:</span>
       				</div>
       				<div class="col-md-6">
       					<span class="font-weight-light float-right"><?=$receipt_row["client_unladen_weight"]?></span>
       				</div>
       			</div><!--row-->
       		</div>
       </div>
       <hr>
       <div class="row">
       	<div class="col-md-12">
       		<span class="font-weight-bold float-left">Total Amount Paid:</span><span class=""><?=$receipt_row["client_total_price"]?></span>
       	</div>
       </div>
       <hr>
       <div class="row">
       		<div class="col-md-12">
       			<div class="float-left">Cashier Signature: </div>
       		</div>
       </div>
       
        
		
    

      </div><!--mcardbody-->

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <button type="button" onClick="printd()" class="btn btn-teal" ><i class="fas fa-file-alt"></i> Print</button>
      </div>
	
    </div>
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
       <script>
			function printd() {
				window.print();
			}
		</script>
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
