<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Client | MCVT Insurance Services</title>
    <!--icons-->
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/solid.css" rel="stylesheet" />
    <!--bootstrap core css-->
        <link rel="stylesheet" href="assets/styles/bootstrapcss/bootstrap.css" />
    <!-- Material Design Bootstrap -->
        <link href="assets/plugins/mdb-free_4.7.5/css/mdb.css" rel="stylesheet">
    <!--logo-->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/mcvt-1.png">
    <!--custom styles-->
            <link rel="stylesheet" href="assets/styles/custom.css" />
</head>
<body>
	<!--================HEADER====================-->
     <div class="wrapper p-2 bg-dark"><!--continer header-->
		<div class="mx-auto">
			<center>
				<img class="animation fadeIn control-logo" src="assets/images/mcvt-1.png" />
			</center>
		</div>
	</div><!--continer header-->
    <!--=================NAVBAR======================-->
    <!--Main Navigation-->
        <nav class=" navbar navbar-expand-lg navbar-light bg-white sticky sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item pr-3">
                            <a class="nav-link waves-effect  waves-light" href="dashboard.php"><i class="fas fa-th-large"> Dashboard</i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-tie"></i> Agents
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="add_agent.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="view_agent.html"><i class="fas fa-search"></i> View</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown pr-3 no-arrow">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="clients-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Clients
                                </a>
                                <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="clients-dropdown">
                                    <a class="dropdown-item waves-effect waves-light" href="add_client.html"><i class="fas fa-plus"></i> Add</a>
                                    <a class="dropdown-item waves-effect waves-light" href="view_client.php"><i class="fas fa-search"></i> View</a>
                                </div>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link waves-effect waves-light" href="reports_claims.php"><i class="fas fa-file-alt"></i> Reports</a>
                        </li>
                    </ul>
                     <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item pt-2">
                                Admin
                        </li>
                        <li class="nav-item avatar">
                            <a class="nav-link waves-effect waves-light" id="navbarDropdownMenuLink-5">
                                <img src="assets/images/profile-holder.jpg" class="img-fluid rounded-circle z-depth-0" style="width:30px" alt="Material Design for Bootstrap - example photo">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
<!--Main Navigation-->

<!--Main Layout-->
<main class="grey lighten-3" style="min-height:80vh">
    <!--breadcrumb-->
    <div class="row"><!--first row-->
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><!--first col of 1st row-->
          	<div class="row">
           		<div class="col-md-4">
           			<h4 class="page-title">View Client</h4>
           		</div>
           		<div class="col-md-4 mt-2" style="margin-left: -15px !important; margin-top: 20px;">
           			<button type="button" onclick="print_data()" class="btn-teal waves-effect p-2 pl-3 pr-3 btn btn-bodred waves-effect waves-light mr-5 m-l-5">
                  <i class="fas fa-file-alt"></i> Print
             </button>
           		</div>
           </div>  
        </div><!--first col of 1st row-->
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb inline-to-title">
                  <li class="breadcrumb-item"><a href="#">Client</a></li>
                  <li class="breadcrumb-item"><a href="view_agent.html">View Client</a></li>
                  <li class="breadcrumb-item active">Client Information</li>
                </ol>
              </nav>
        </div>
    </div><!--first row-->
    
    <?php 
		include "connect.php";
	
		if(isset($_GET["id"])){
			$id = $_GET["id"];
		}
		$view_client = "SELECT * FROM clients WHERE id = '".$id."'";
		$client_result = mysqli_query($conn, $view_client);
		$client = $client_result->fetch_assoc();
	
		$view_agent = "SELECT * FROM agents WHERE id = '".$client["agent_id"]."'";
		$agent_result = mysqli_query($conn, $view_agent);
		$agent = $agent_result->fetch_assoc();
	
	?>
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-4">
            <div class="card ml-5"><!--card-->
                <div class="card-header header-title">
                    Personal Information
                </div>
                <div class="card-body">
                    <!--client first name-->
    <div class="form-row my-0 py-0">
        <div class="col-md-6 mb-0 py-0">
            <span class="label-view-data">First Name:</span>
         </div><!--form column-->
        <div class="col-md-6 my-0 py-0">
            <span class="view-data"><?=$client["client_fname"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

    <!--client middle name-->
        <div class="form-row my-0 py-0">
            <div class="col-md-6 mb-0 ">
                <span class="label-view-data">Middle Name:</span>
            </div><!--form column-->
            <div class="col-md-6 my-0 py-0">
                <span class="view-data"><?=$client["client_mname"]?></span>
            </div><!--form column-->  
        </div><!--form row-->
    <!--client last name-->
        <div class="form-row">
            <div class="col-md-6 mb-0">
                <span class="label-view-data">Last Name:</span>
            </div><!--form column-->
            <div class="col-md-6 mb-0">
                <span class="view-data"><?=$client["client_lname"]?></span>
            </div><!--form column-->  
        </div><!--form row-->

    <!--client address-->
        <div class="form-row">
            <div class="col-md-6 mb-0">
                <span class="label-view-data">Address:</span>
            </div><!--form column-->
            <div class="col-md-6 mb-0">
                <span class="view-data"><?=$client["client_address"]?></span>
            </div><!--form column-->  
        </div><!--form row-->


    
    <!--date of birth-->
        <div class="form-row">
            <div class="col-md-6 mb-0">
                <span class="label-view-data">Date of Birth:</span>
            </div><!--form column-->
            <div class="col-md-6 mb-0">
                <span class="view-data"><?=$client["client_date_of_birth"]?></span>
            </div><!--form column-->  
        </div><!--form row-->


    <!--client sex-->
        <div class="form-row">
            <div class="col-md-6 mb-0">
                <span class="label-view-data">Sex:</span>
            </div><!--form column-->
            <div class="col-md-6 mb-0">
                <span class="view-data"><?=$client["client_sex"]?></span>
            </div><!--form column-->  
        </div><!--form row-->

                <!--profession-->
            <div class="form-row">
                    <div class="col-md-6 mb-0">
                        <span class="label-view-data">Profession:</span>
                    </div><!--form column-->
                    <div class="col-md-6 mb-0">
                        <span class="view-data"><?=$client["client_profession"]?></span>
                    </div><!--form column-->  
                </div><!--form row-->


                </div><!--card body-->
            </div><!--card-->
        </div><!--col-md-4-->
        <div class="col-md-8">
            <div class="card mr-5"><!--card-->
                <div class="card-header header-title">
                    Other Details
                </div>
                
            
            <div class="card-body">
                   <!--client agent-->
					 <div class="form-row">
							<div class=" col-md-5 mb-0">
								<span class="label-view-data">Agent:</span>
							 </div><!--form column-->
							<div class=" col-md-6 mb-0">
								<span class="view-data"><?php echo $agent["agent_fname"] . " " . $agent["agent_mname"] . " " . $agent["agent_lname"];?></span>
							</div><!--form column-->  
						</div><!--form row-->
               
                <!--client policy number-->
					 <div class="form-row">
							<div class=" col-md-5 mb-0">
								<span class="label-view-data">Policy Number:</span>
							 </div><!--form column-->
							<div class=" col-md-6 mb-0">
								<span class="view-data"><?=$client["client_policy_no"]?></span>
							</div><!--form column-->  
						</div><!--form row-->

 <!--client date issued-->
 <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Date Issued:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_date_issued"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

 <!--client official receipt number-->
 <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Official Receipt Number:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_official_receipt_no"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

<!--client chassis number-->
    <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Chassis Number:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_chassis_no"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

<!--body-->
    <div class="form-row">
            <div class=" col-md-5 mb-0">
                <span class="label-view-data">Body:</span>
            </div><!--form column-->
            <div class=" col-md-6 mb-0">
                <span class="view-data"><?=$client["client_body"]?></span>
            </div><!--form column-->  
        </div><!--form row-->


<!--client engine number-->
<div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Engine Number:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_engine_no"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

<!--color-->
 <div class="form-row">
       <div class=" col-md-5 mb-0">
            <span class="label-view-data">Color:</span>
             </div><!--form column-->
         <div class=" col-md-6 mb-0">
               <span class="view-data"><?=$client["client_color"]?></span>
            </div><!--form column-->  
        </div><!--form row-->
 <!--client start period-->
 <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Start Period:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_start_period"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

 <!--client end period-->
 <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">End Period:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_end_period"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

 <!--client plate number-->
 <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Plate Number:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_plate_no"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

<!--client brand name-->
    <div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Brand Name:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_brand"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

<!--MV File Number-->
    <div class="form-row">
            <div class=" col-md-5 mb-0">
                <span class="label-view-data">MV File Number:</span>
            </div><!--form column-->
            <div class=" col-md-6 mb-0">
                <span class="view-data"><?=$client["client_mv_file_no"]?></span>
            </div><!--form column-->  
        </div><!--form row-->


<!--client authorized capacity-->
<div class="form-row">
        <div class=" col-md-5 mb-0">
            <span class="label-view-data">Authorized Capacity:</span>
         </div><!--form column-->
        <div class=" col-md-6 mb-0">
            <span class="view-data"><?=$client["client_authorized_capacity"]?></span>
        </div><!--form column-->  
    </div><!--form row-->

                <!--unladen weight-->
                <div class="form-row">
                        <div class=" col-md-5 mb-0">
                            <span class="label-view-data">Unladen Weight:</span>
                        </div><!--form column-->
                        <div class=" col-md-6 mb-0">
                            <span class="view-data"><?=$client["client_unladen_weight"]?></span>
                        </div><!--form column-->  
                    </div><!--form row-->
            </div><!--card body-->
            </div><!--card-->
        </div><!--col-md-8-->
        </div><!--row-->
    
</main>
<!--Main Layout-->
<!-- Footer -->
<footer class="page-footer font-small bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="#"> ExplodingKitty</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->


 

 
</body>
<!-- SCRIPTS -->
    <!-- JQuery -->
        <script type="text/javascript" src="assets/scripts/jqueryjs/jquery.js"></script>
    <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/scripts/popperjs/popper.js"></script>
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
        <script>
		function print_data() {
			window.print();
		}
		</script>
</html>
