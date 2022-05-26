<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Agent | MCVT Insurance Services</title>
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
        <nav class="mb-1 navbar navbar-expand-lg navbar-light bg-white sticky sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active pr-3">
                            <a class="nav-link waves-effect  waves-light" href="dashboard.php"><i class="fas fa-th-large"> Dashboard</i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-tie"></i> Agents
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="add_agent.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="view_agent.php"><i class="fas fa-search"></i> View</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown pr-3 no-arrow">
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
            <h4 class="page-title">View Agent</h4>
        </div><!--first col of 1st row-->
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb inline-to-title">
                  <li class="breadcrumb-item"><a href="#">Agent</a></li>
                  <li class="breadcrumb-item"><a href="view_agent.php">View Agent</a></li>
                  <li class="breadcrumb-item active">Agent Information</li>
                </ol>
              </nav>
        </div>
    </div><!--first row-->
    
	<?php
		include "connect.php";
		if(isset($_GET["id"])){
			$agent_id = $_GET["id"];
		}
		$view_agent = "SELECT * FROM agents WHERE id='".$agent_id."'";
		$result = mysqli_query($conn, $view_agent);
		$row=$result->fetch_assoc();
	?>
    <!--breadcrumb-->
    <div class="card mx-5"><!--card-->
        <div class="card-body">
           <div class="row">
               <div class="col-sm-12">
                   <span class="card-title pl-3 font-weight-bold">Agent Information</span>
               </div>
            </div><!--end of row 1-->
            <div class="row">
                <div class="col-sm-4 pl-5">

                <!--agent name-->
                    <div class="form-row">
                        <div class="md-form md-outline col-md-5 mb-0">
                            <span class="label-view-data">Agent Name:</span>
                         </div><!--form column-->
                        <div class="md-form md-outline col-md-6 mb-0">
                            <span class="view-data"><?php echo $row["agent_fname"] . " " . $row["agent_mname"] . " " . $row["agent_lname"]; ?></span>
                        </div><!--form column-->  
                    </div><!--form row-->

                <!--date of birth-->
                    <div class="form-row">
                        <div class="md-form md-outline col-md-5 mb-0">
                            <span class="label-view-data">Date of Birth:</span>
                        </div><!--form column-->
                        <div class="md-form md-outline col-md-6 mb-0">
                            <span class="view-data"><?=$row["agent_date_of_birth"]?></span>
                        </div><!--form column-->  
                    </div><!--form row-->

                <!--agent sex-->
                    <div class="form-row">
                        <div class="md-form md-outline col-md-5 mb-0">
                            <span class="label-view-data">Sex:</span>
                         </div><!--form column-->
                        <div class="md-form md-outline col-md-6 mb-0">
                            <span class="view-data"><?=$row["agent_sex"]?></span>
                        </div><!--form column-->  
                    </div><!--form row-->

                <!--agent address-->
                    <div class="form-row">
                        <div class="md-form md-outline col-md-5 mb-0">
                            <span class="label-view-data">Address:</span>
                         </div><!--form column-->
                        <div class="md-form md-outline col-md-6 mb-0">
                            <span class="view-data"><?=$row["agent_address"]?></span>
                        </div><!--form column-->  
                    </div><!--form row-->

                <!--agent contact number-->
                <div class="form-row">
                        <div class="md-form md-outline col-md-5 mb-0">
                            <span class="label-view-data">Contact Number:</span>
                         </div><!--form column-->
                        <div class="md-form md-outline col-md-6 mb-0">
                            <span class="view-data"><?=$row["agent_mobile_no"]?></span>
                        </div><!--form column-->  
                    </div><!--form row-->

                <!--agent email address-->
                <div class="form-row">
                        <div class="md-form md-outline col-md-5 mb-0">
                            <span class="label-view-data">Email Address:</span>
                         </div><!--form column-->
                        <div class="md-form md-outline col-md-6 mb-0">
                            <span class="view-data"><a href="emailto:<?=$row['agent_email']?>"><?=$row["agent_email"]?></a></span>
                        </div><!--form column-->  
                    </div><!--form row-->
                
                          
                </div>
            </div><!--end of row 2-->
        </div>
    </div><!--card-->
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
</html>
