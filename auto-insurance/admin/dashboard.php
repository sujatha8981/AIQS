<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Dashboard | MCVT Insurance Services</title>
    <!--icons-->
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/solid.css" rel="stylesheet" />
    <!--bootstrap core css-->
        <link rel="stylesheet" href="assets/styles/bootstrapcss/bootstrap.css" />
    <!-- Material Design Bootstrap -->
        <link href="assets/plugins/mdb-free_4.7.5/css/mdb.css" rel="stylesheet">
        <!--plug-in-->
        <link href="assets/plugins/data-tables/DataTables-1.10.18/css/dataTables.bootstrap.css" rel="stylesheet"/>
        <link href="assets/plugins/data-tables/datatables.css" rel="stylesheet" />
        <link href="assets/plugins/data-tables/Responsive-2.2.2/css/responsive.bootstrap.css" rel="stylesheet" />
        <link href="assets/plugins/mdb-free_4.7.5/css/addons/datatables.css" rel="stylesheet" />
        <!--charts-->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css" />
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
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><!--first col of 1st row-->
            <h4 class="page-title">Dashboard</h4>
        </div><!--first col of 1st row-->
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb inline-to-title">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!--2nd column-->
    </div><!--first row-->
    
    <?php
		include "connect.php";
		$clients = "SELECT * FROM clients";
		$result_clients = mysqli_query($conn, $clients);
		$clients_count = mysqli_num_rows($result_clients);
	
		$claims = "SELECT * FROM claims";
		$result_claims = mysqli_query($conn, $claims);
		$claims_count = mysqli_num_rows($result_claims);
		
		
	?>
    
    <!--breadcrumb-->
    <div class="row mx-4">
    	<div class="col-md-3">
                <div class="card-box">
                       <!-- <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>-->

                        <h4 class="header-title mt-0">Total Number of Clients</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1" >
                                        <input class="dial" value="<?=$clients_count?>" type="text"/>
                                </div>

                            <div class="widget-detail-1">
                                <h2 class="p-t-10 mb-0"> 
                                	<?php
										if($clients_count > 0){
											echo $clients_count;
										}
										else{
											echo 0;
										}
									?> </h2>
                                <p class="text-muted m-b-10">Clients</p>
                            </div>
                        </div>
                    </div>
    	</div><!--col-md-5-->
    	<div class="col-md-3">
                <div class="card-box">
                        <h4 class="header-title mt-0">Claim Paid Ratio</h4>
                        <?php
							$paid = 0;
							$unpaid = 0;
							$total = 0;
							while($clients_row = $result_clients->fetch_assoc()){
								$total = $total + $clients_row["client_total_price"];
								if($clients_row["client_status"] == "Paid"){
									$paid = $paid + $clients_row["client_total_price"];
								}
								else{
									$unpaid = $unpaid + $clients_row["client_total_price"];
								}
							}
						?>

                        <div class="widget-box-2">
                            <div class="widget-detail-2">
                                <span class="badge badge-success badge-pill float-left m-t-20">
                                	<?php
										$percent = ($paid / $total) * 100;
										echo round($percent) . "%";
									?>
                                <i class="mdi mdi-trending-up"></i> </span>
                                <h2 class="mb-0"> ₱ <?=$paid?> </h2>
                                <p class="text-muted m-b-25">Revenue</p>
                            </div>
                            <div class="progress progress-bar-success-alt progress-sm mb-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percent."%"?>;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
    	</div>
    	<div class="col-md-3">
                <div class="card-box">
                        <h4 class="header-title mt-0">Total Number of Claims</h4>
                        <div class="widget-chart-1">
                                <div class="widget-chart-box-1">
                                    <input class="dial2"  value="<?=$claims_count?>" type="text">          
                                </div>
                                <div class="widget-detail-1">
                                    <h2 class="p-t-10 mb-0">
									<?php
										if($claims_count > 0){
											echo $claims_count;
										}
										else{
											echo 0;
										}
									?> </h2>
                                    <p class="text-muted m-b-10">Clients</p>
                                </div>
                            </div>
                </div>       
    	</div>
    	<div class="col-md-3">
                <div class="card-box">
                        <h4 class="header-title mt-0">Wins Loss Ratio</h4>
                        <?php
							$wins = 0;
							$loss = 0;
							$total_people = 0;
							$result_wins = mysqli_query($conn, $clients);
							while($wins_row = $result_wins->fetch_assoc()){
								$total_people = $total_people + 1;
								if($wins_row["client_status"] == "Paid"){
									$wins = $wins + 1;
								}
								else{
									$loss = $loss + 1;
								}
							}
						?>

                        <div class="widget-box-2">
                            <div class="widget-detail-2">
                                <span class="badge badge-success badge-pill float-left m-t-20"><?php $wins_percent = ($wins / $total_people) * 100; echo round($wins_percent) . "%"; ?> <i class="mdi mdi-trending-up"></i> </span>
                                <h2 class="mb-0"> Wins: <?=$wins?></h2>
                                <p class="text-muted m-b-25">Total: <?=$total_people?></p>
                            </div>
                            <div class="progress progress-bar-success-alt progress-sm mb-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: <?=$wins_percent?>%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
    	</div>
            
    	</div>
    </div><!--row-->
    <div class="row mx-4 mt-0">
        <div class="col-md-4">
            <div class="card-box">
                 <h4 class="header-title mt-0">Profit Vs. Loss</h4>
                <div id="pvl_morris" style="height: 280px;"></div>
            </div>
        </div><!--colmd4---->
        <div class="col-md-4">
            <div class="card-box">
                <h4 class="header-title mt-0">Claim Status</h4>
                <div class="widget-chart">
                        <div id="claim_total_morris" style="height: 250px;"></div>
                        <ul class="list-inline chart-detail-list mb-0">
                            <li class="list-inline-item">
                                <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i> Denied</h5>
                            </li>
                            <li class="list-inline-item">
                                <h5 style="color: #00c851;"><i class="fa fa-circle m-r-5"></i> Accepted</h5>
                            </li>
                            
                            <li class="list-inline-item">
                                    <h5 style="color: #f39c12;"><i class="fa fa-circle m-r-5"></i> In Progress</h5>
                                </li>
                        </ul>
                    </div>
                </div><!--card box-->
            </div><!--colmd4-->
            <div class="col-md-4">
                            <div class="card-box">
                                    <h4 class="header-title mt-0">Upcoming Events</h4>
                                    <div class="responsive-t overflow-auto">
                                        <table id="view_schedule"  class="table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="th-sm">Client Name</th>
                                                        <th class="th-sm">Date Issued</th>
                                                        <th class="th-sm">Email Address</th>
                                                        <th class="th-sm">Payment Amount</th>
                                                    </tr>
                                                </thead>
                                                        <tbody>
                                                        <?php
															$clients_unpaid = "SELECT * FROM clients WHERE client_status='Unpaid'";
															$clients_unpaid_result = mysqli_query($conn, $clients_unpaid);
															while($row = $clients_unpaid_result->fetch_assoc()){
														?>
                                                                <tr>
                                                                        <td class="wo-button"><a class="view-agent font-weight-bold material-tooltip-main" data-toggle="tooltip" data-placement="right" title="View Agent" href="view_individual_agent.php?id=<?=$row['id']?>"><?php echo $row["client_fname"] . " " . $row["client_mname"] . " " . $row["client_lname"];  ?></a></td><!--place a tooltip-->
                                                                        <td class="wo-button"><?=$row["client_date_issued"]?></td>
                                                                        <td class="wo-button"><?=$row["client_email"]?></td>
                                                                        <td class="with-button">
                                                                        <button type="button" class="btn btn-sm btn-info"><a class="text-white"><span class="fas fa-edit"></span> Mark as Paid</a></button> 
                                                                          
                                                                        </td>
                                                                </tr>
                                                        <?php 
															}
														?>
                                                        </tbody>
                                            </table><!--table-->
                                    </div><!--responsive t-->
                            </div>
            </div><!--col3-->
        </div><!--row2-->
        
    </div>
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
        <!--plug-in-->
         <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script> 
        <script src="assets/plugins/data-tables/datatables.js"></script>
        <script src="assets/plugins/data-tables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script src="assets/plugins/data-tables/KeyTable-2.5.0/js/dataTables.keyTable.js"></script>   
        <script src="assets/plugins/data-tables/tablepress-datatables-sorting-plugins/jquery.datatables.sorting-plugins.js"></script>
        <script type="text/javascript" src="assets/plugins/data-tables/Responsive-2.2.2/js/dataTables.responsive.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/addons/datatables.js"></script>
        
        <!--charts-->
        <script type="text/javascript" src="assets/plugins/raphael/raphael-min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-knob/jquery.knob.js" ></script>
        <script type="text/javascript" src="assets/plugins/morris/morris.min.js" ></script>
        <script type="text/javascript" src="assets/plugins/morris/jquery.morris.init.js"></script>
    <!--Custom Javascript-->
       
       	<?php 

			for($month = 1; $month <= 12; $month++){
				switch($month){
					case 1:
						$jan_profit = 0;
						$jan_loss = 0;
						$jan_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-01-01')."' AND '".date('Y-01-31')."') AND (client_status = 'Paid')";
						
						$jan_result_paid = mysqli_query($conn, $jan_paid);
						while($jan_row=$jan_result_paid->fetch_assoc()){
							$jan_profit = $jan_profit + $jan_row["client_total_price"];
						}
						
						$jan_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-01-01')."' AND '".date('Y-01-31')."') AND (client_status = 'Unpaid')";
						
						$jan_result_unpaid = mysqli_query($conn, $jan_unpaid);
						while($jan_row=$jan_result_unpaid->fetch_assoc()){
							$jan_loss = $jan_loss + $jan_row["client_total_price"];
						}
					break;
					case 2:
						$feb_profit = 0;
						$feb_loss = 0;
						$feb_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-02-01')."' AND '".date('Y-01-28')."') AND (client_status = 'Paid')";
						
						$feb_result_paid = mysqli_query($conn, $feb_paid);
						while($feb_row=$feb_result_paid->fetch_assoc()){
							$feb_profit = $feb_profit + $feb_row["client_total_price"];
						}
						
						$feb_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-02-01')."' AND '".date('Y-02-28')."') AND (client_status = 'Unpaid')";
						
						$feb_result_unpaid = mysqli_query($conn, $feb_unpaid);
						while($feb_row=$feb_result_unpaid->fetch_assoc()){
							$feb_loss = $feb_loss + $feb_row["client_total_price"];
						}
					break;
					case 3:
						$mar_profit = 0;
						$mar_loss = 0;
						$mar_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-03-01')."' AND '".date('Y-03-31')."') AND (client_status = 'Paid')";
						
						$mar_result_paid = mysqli_query($conn, $mar_paid);
						while($mar_row=$mar_result_paid->fetch_assoc()){
							$mar_profit = $mar_profit + $mar_row["client_total_price"];
						}
						
						$mar_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-03-01')."' AND '".date('Y-03-31')."') AND (client_status = 'Unpaid')";
						
						$mar_result_unpaid = mysqli_query($conn, $mar_unpaid);
						while($mar_row=$mar_result_unpaid->fetch_assoc()){
							$mar_loss = $mar_loss + $mar_row["client_total_price"];
						}
					break;
					case 4:
						$apr_profit = 0;
						$apr_loss = 0;
						$apr_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-04-01')."' AND '".date('Y-04-30')."') AND (client_status = 'Paid')";
						
						$apr_result_paid = mysqli_query($conn, $apr_paid);
						while($apr_row=$apr_result_paid->fetch_assoc()){
							$apr_profit = $apr_profit + $apr_row["client_total_price"];
						}
						
						$apr_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-04-01')."' AND '".date('Y-04-30')."') AND (client_status = 'Unpaid')";
						
						$apr_result_unpaid = mysqli_query($conn, $apr_unpaid);
						while($apr_row=$apr_result_unpaid->fetch_assoc()){
							$apr_loss = $apr_loss + $apr_row["client_total_price"];
						}
					break;
					case 5:
						$may_profit = 0;
						$may_loss = 0;
						$may_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-05-01')."' AND '".date('Y-05-31')."') AND (client_status = 'Paid')";
						
						$may_result_paid = mysqli_query($conn, $may_paid);
						while($may_row=$may_result_paid->fetch_assoc()){
							$may_profit = $may_profit + $may_row["client_total_price"];
						}
						
						$may_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-05-01')."' AND '".date('Y-05-31')."') AND (client_status = 'Unpaid')";
						
						$may_result_unpaid = mysqli_query($conn, $may_unpaid);
						while($may_row=$may_result_unpaid->fetch_assoc()){
							$may_loss = $may_loss + $may_row["client_total_price"];
						}
					break;
					case 6:
						$jun_profit = 0;
						$jun_loss = 0;
						$jun_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-06-01')."' AND '".date('Y-06-30')."') AND (client_status = 'Paid')";
						
						$jun_result_paid = mysqli_query($conn, $jun_paid);
						while($jun_row=$jun_result_paid->fetch_assoc()){
							$jun_profit = $jun_profit + $jun_row["client_total_price"];
						}
						
						$jun_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-06-01')."' AND '".date('Y-06-30')."') AND (client_status = 'Unpaid')";
						
						$jun_result_unpaid = mysqli_query($conn, $jun_unpaid);
						while($jun_row=$jun_result_unpaid->fetch_assoc()){
							$jun_loss = $jun_loss + $jun_row["client_total_price"];
						}
					break;
					case 7:
						$jul_profit = 0;
						$jul_loss = 0;
						$jul_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-07-01')."' AND '".date('Y-07-31')."') AND (client_status = 'Paid')";
						
						$jul_result_paid = mysqli_query($conn, $jul_paid);
						while($jul_row=$jul_result_paid->fetch_assoc()){
							$jul_profit = $jul_profit + $jul_row["client_total_price"];
						}
						
						$jul_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-07-01')."' AND '".date('Y-07-31')."') AND (client_status = 'Unpaid')";
						
						$jul_result_unpaid = mysqli_query($conn, $jul_unpaid);
						while($jul_row=$jul_result_unpaid->fetch_assoc()){
							$jul_loss = $jul_loss + $jul_row["client_total_price"];
						}
					break;
					case 8:
						$aug_profit = 0;
						$aug_loss = 0;
						$aug_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-08-01')."' AND '".date('Y-08-31')."') AND (client_status = 'Paid')";
						
						$aug_result_paid = mysqli_query($conn, $aug_paid);
						while($aug_row=$aug_result_paid->fetch_assoc()){
							$aug_profit = $aug_profit + $aug_row["client_total_price"];
						}
						
						$aug_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-08-01')."' AND '".date('Y-08-31')."') AND (client_status = 'Unpaid')";
						
						$aug_result_unpaid = mysqli_query($conn, $aug_unpaid);
						while($aug_row=$aug_result_unpaid->fetch_assoc()){
							$aug_loss = $aug_loss + $aug_row["client_total_price"];
						}
					break;
					case 9:
						$sep_profit = 0;
						$sep_loss = 0;
						$sep_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-09-01')."' AND '".date('Y-09-30')."') AND (client_status = 'Paid')";
						
						$sep_result_paid = mysqli_query($conn, $sep_paid);
						while($sep_row=$sep_result_paid->fetch_assoc()){
							$sep_profit = $sep_profit + $sep_row["client_total_price"];
						}
						
						$sep_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-09-01')."' AND '".date('Y-09-30')."') AND (client_status = 'Unpaid')";
						
						$sep_result_unpaid = mysqli_query($conn, $sep_unpaid);
						while($sep_row=$sep_result_unpaid->fetch_assoc()){
							$sep_loss = $sep_loss + $sep_row["client_total_price"];
						}
					break;
					case 10:
						$oct_profit = 0;
						$oct_loss = 0;
						$oct_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-10-01')."' AND '".date('Y-10-31')."') AND (client_status = 'Paid')";
						
						$oct_result_paid = mysqli_query($conn, $oct_paid);
						while($oct_row=$oct_result_paid->fetch_assoc()){
							$oct_profit = $oct_profit + $oct_row["client_total_price"];
						}
						
						$oct_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-10-01')."' AND '".date('Y-10-31')."') AND (client_status = 'Unpaid')";
						
						$oct_result_unpaid = mysqli_query($conn, $oct_unpaid);
						while($oct_row=$oct_result_unpaid->fetch_assoc()){
							$oct_loss = $oct_loss + $oct_row["client_total_price"];
						}
					break;
					case 11:
						$nov_profit = 0;
						$nov_loss = 0;
						$nov_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-11-01')."' AND '".date('Y-11-30')."') AND (client_status = 'Paid')";
						
						$nov_result_paid = mysqli_query($conn, $nov_paid);
						while($nov_row=$nov_result_paid->fetch_assoc()){
							$nov_profit = $nov_profit + $nov_row["client_total_price"];
						}
						
						$nov_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-11-01')."' AND '".date('Y-11-30')."') AND (client_status = 'Unpaid')";
						
						$nov_result_unpaid = mysqli_query($conn, $nov_unpaid);
						while($nov_row=$nov_result_unpaid->fetch_assoc()){
							$nov_loss = $nov_loss + $nov_row["client_total_price"];
						}
					break;
					case 12:
						$dec_profit = 0;
						$dec_loss = 0;
						$dec_paid = "SELECT * FROM clients WHERE (client_start_period BETWEEN '".date('Y-12-01')."' AND '".date('Y-12-31')."') AND (client_status = 'Paid')";
						
						$dec_result_paid = mysqli_query($conn, $dec_paid);
						while($dec_row=$dec_result_paid->fetch_assoc()){
							$dec_profit = $dec_profit + $dec_row["client_total_price"];
						}
						
						$dec_unpaid = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".date('Y-12-01')."' AND '".date('Y-12-31')."') AND (client_status = 'Unpaid')";
						
						$dec_result_unpaid = mysqli_query($conn, $dec_unpaid);
						while($dec_row=$dec_result_unpaid->fetch_assoc()){
							$dec_loss = $dec_loss + $dec_row["client_total_price"];
						}
					break;
					default:
						echo "error";
				}
			}
			
			
		?>
       
       	<?php
			$accepted = 0;
			$denied = 0;
			$in_progress = 0;

			while($claims_row=$result_claims->fetch_assoc()){
				
				if($claims_row["claim_status"] == "Accepted"){
					$accepted = $accepted + 1;
				}
				elseif($claims_row["claim_status"] == "Denied"){
					$denied = $denied + 1;
				}
				elseif($claims_row["claim_status"] == "In Progress"){
					$in_progress = $in_progress + 1;
				}
			}
		?>
        <script>


                new Morris.Line({
                element: 'pvl_morris',
                data: [
                    { month: 'Jan', profit: <?=$jan_profit?>, loss: <?=$jan_loss?> },
                    { month: 'Feb', profit: <?=$feb_profit?>, loss: <?=$feb_loss?> },
                    { month: 'Mar', profit: <?=$mar_profit?>, loss: <?=$mar_loss?>  },
                    { month: 'Apr', profit: <?=$apr_profit?>, loss: <?=$apr_loss?> },
                    { month: 'May', profit: <?=$may_profit?>, loss: <?=$may_loss?> },
					{ month: 'Jun', profit: <?=$jun_profit?>, loss: <?=$jun_loss?> },
                    { month: 'Jul', profit: <?=$jul_profit?>, loss: <?=$jul_loss?>  },
                    { month: 'Aug', profit: <?=$aug_profit?>, loss: <?=$aug_loss?>  },
                    { month: 'Sep', profit: <?=$sep_profit?>, loss: <?=$sep_loss?>  },
                    { month: 'Oct', profit: <?=$oct_profit?>, loss: <?=$oct_loss?>  },
					{ month: 'Nov', profit: <?=$nov_profit?>, loss: <?=$nov_loss?>  },
                    { month: 'Dec', profit: <?=$dec_profit?>, loss: <?=$dec_loss?>  }
                ],
                xkey: 'month',
                parseTime: false,
                ykeys: ['profit','loss'],
                labels: ['Profit','Loss'],
                pointSize: '0',
                hideHover: true,
                lineColors: ['#10c469','#f05050']
                });
				
				
                setTimeout(function () {
                Morris.Donut({
                element: 'claim_total_morris',
                colors: ["#00c851","#ff8acc", "#f39c12"],
                data: [
                    {label: "Accepted", value: <?=$accepted?>},
                    {label: "Denied", value: <?=$denied?>},
                    {label: "In Progress", value: <?=$in_progress?>}
                ]
                });
                });
            $('.dial').knob({
                'min': 0,
                'max': 100,
                'angleOffset': 180,
                'width': 80,
                'height': 80,
                'fgColor': "#f05050",
                'bgColor': "#f9b9b9",
                'readOnly': true,
                'thickness': .15,
                'skin': "tron"
            });
            $('.dial2').knob({
                'min': 0,
                'max': 100,
                'angleOffset': 180,
                'width': 80,
                'height': 80,
                'fgColor': "#ffbd4a",
                'bgColor': "#FFE6BA",
                'readOnly': true,
                'thickness': .15,
                'skin': "tron"
            });
                    $('#view_schedule').DataTable({
                keys: true,
                "pagingType": "simple_numbers"
            });
            $('.dataTables_length').addClass('bs-select');
        </script>
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
