<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Agents | MCVT Insurance Services</title>
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
<body class="grey lighten-3">
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
                        <li class="nav-item pr-3">
                            <a class="nav-link waves-effect  waves-light" href="dashboard.php"><i class="fas fa-th-large"> Dashboard</i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="active nav-item dropdown pr-3 no-arrow">
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
<main class="grey lighten-3 mb-5">
    <!--breadcrumb-->
   <div class="row"><!--first row-->
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><!--first col of 1st row-->
            <h4 class="page-title">Update Agent</h4>
        </div><!--first col of 1st row-->
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb inline-to-title">
                    <li class="breadcrumb-item"><a href="view_agent.php">Agents</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Agent</a></li>
                    <li class="breadcrumb-item active">Form</li>
                </ol>
            </nav>
        </div><!--2nd column-->
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
    <div class="card mx-5 mb-5"><!--card-->
        <div class="card-body">
        <!--=============Form for Add Agent====================-->
        <form class="needs-validation" method="post" action="update.php?id=<?=$row['id']?>">
        <div class="form-row"><!--main row for form-->
            <div class="col-md-6"><!--1st main column for form-->
                <div class="row">
                    <div class="col-sm-5">
                        <span class="card-title font-weight-bold">Personal Information</span>
                    </div>
                </div><!--end of row 1-->

             <!--first name-->
            <div class="form-row">
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_fname">First Name</label>
                    <input type="text" class="form-control" id="agent_fname" length="25" name="agent_fname" placeholder="<?=$row['agent_fname']?>" value="<?=$row['agent_fname']?>" autocomplete="off" required>
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column--> 
                
                
            <!--middle name-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_mname">Middle Name</label>
                    <input type="text" class="form-control" id="agent_mname" name="agent_mname" placeholder="<?=$row['agent_mname']?>" autocomplete="off" value="<?=$row['agent_mname']?>" >
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->     

            <!--last name-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_lname">Last Name</label>
                    <input type="text" class="form-control" id="agent_lname" name="agent_lname" placeholder="<?=$row['agent_lname']?>" value="<?=$row['agent_lname']?>" autocomplete="off" required>
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->

            <!--date of birth-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_date_of_birth">Date of Birth</label>
                    <input type="text" class="form-control" id="agent_date_of_birth" name="agent_date_of_birth" placeholder="<?=$row['agent_date_of_birth']?>" value="<?=$row['agent_date_of_birth']?>" autocomplete="off" required>
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->

            <!--sex-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_sex">Sex</label>
                    <input type="text" class="form-control" id="agent_sex" name="agent_sex" placeholder="<?=$row['agent_sex']?>" autocomplete="off" value="<?=$row['agent_sex']?>" >
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->
            </div><!--form for for 1st main column-->
            </div><!--1st main column for form-->
            <div class="col-md-6"><!--2nd main column for form-->
                <div class="row">
                    <div class="col-sm-5">
                        <span class="card-title font-weight-bold">Contact Information</span>
                    </div>
                </div><!--end of row 1-->

                <div class="form-row"><!--form for 2nd main column-->
         
            <!--address-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_address">Address</label>
                    <input type="text" class="form-control" id="agent_address" name="agent_address" placeholder="<?=$row['agent_address']?>" value="<?=$row['agent_address']?>" autocomplete="off" required>
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->

            <!--contact number-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_contact_no">Contact Number</label>
                    <input type="text" class="form-control" id="agent_mobile_no" name="agent_mobile_no" placeholder="<?=$row['agent_mobile_no']?>" value="<?=$row['agent_mobile_no']?>" autocomplete="off" required>
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->

            <!--email address-->
                <div class="md-form md-outline col-md-10 mb-0">
                    <label for="agent_email">Email Address</label>
                    <input type="text" class="form-control" id="agent_email" name="agent_email" placeholder="<?=$row['agent_email']?>" value="<?=$row['agent_email']?>" autocomplete="off" required>
                    <div class="valid-feedback">
                        <!--code for validation-->
                    </div>
                </div><!--form column-->
                </div><!--form for 2nd main column-->
            </div><!--2nd main column for form-->
        </div><!--main row for form-->
        <div class="form-row">
                <div class="md-form md-outline col-md-12 mb-0">
                    <div class="d-flex justify-content-md-center">
                        <input class="btn btn-teal p-2 pl-3 pr-3 mx-2 btn-bordred" type="submit" name="update_agent" id="update_agent" />
                        <button type="reset" class="btn-grey waves-effect p-2 pl-3 pr-3 btn btn-secondary btn-bodred waves-effect waves-light mr-5 m-l-5">
                                Cancel
                        </button>
                    </div>
                </div><!--form column-->
            </div><!--form row-->
       </form>
        <!--=============Form for Add Agent====================-->
        </div><!--card body-->
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
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/forms-free.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
