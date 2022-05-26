<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Reports | MCVT Insurance Services</title>
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
                        <li class="nav-item dropdown pr-3 no-arrow">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="agents-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-tie"></i> Agents
                            </a>
                            <div class="dropdown-menu fadeIn dropdown-secondary" aria-labelledby="agents-dropdown">
                                <a class="dropdown-item waves-effect waves-light" href="add_agent.html"><i class="fas fa-plus"></i> Add</a>
                                <a class="dropdown-item waves-effect waves-light" href="view_agent.html"><i class="fas fa-search"></i> View</a>
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
                        <li class="nav-item active">
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
            <h4 class="page-title">Reports</h4>
        </div><!--first col of 1st row-->
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb inline-to-title">
                <li class="breadcrumb-item"><a href="reports_claims.php">Reports</a></li>
                <li class="breadcrumb-item"><a href="reports_payments.php">Payment Reports</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!--2nd column-->
    </div><!--first row-->
    <!--breadcrumb-->
    <div class="card mx-5"><!--card-->
        <div class="card-body">
            <div class="classic-tabs border">
                <ul class="tabs-teal nav nav-tabs md-tabs teal" id="myTabEx" role="tablist">
                        <li class="nav-item">
                          <a class="white-text nav-link" id="claims-tab-content" href="reports_claims.php" aria-controls="home-ex"
                            aria-selected="true">Claims</a>
                        </li>
                        <li class="nav-item">
                          <a class="white-text nav-link active show" id="profile-tab-ex" href="#" aria-controls="profile-ex"
                            aria-selected="false">Payments</a>
                        </li>
                        <li class="nav-item">
                          <a class="white-text nav-link" id="vehicle-tab-content" href="reports_vehicles.php" aria-controls="contact-ex"
                            aria-selected="false">Vehicles</a>
                        </li>
                      </ul>
                      <div class="tab-content pt-3" >
                        <div class="tab-pane fade " id="claims-content" role="tabpanel" aria-labelledby="home-tab-ex">    
                        </div>
                        <!--first tab -claims report-->
                        <div class="tab-pane fade active show" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
                            <!--select year and month-->
                          <div class="row">
                                <div class="col-md-12">
                                     <div class="row">
                                             <div class="col-md-6">
                                                     <select id="month_select" onblur="select_report()" class="form-control w-100 mb-3">
                                                             <option value="" selected disabled class="white-text">Select Month</option>
                                                             <option value="January">January</option>
                                                             <option value="February">February</option>
                                                             <option value="March">March</option>
                                                             <option value="April">April</option>
                                                             <option value="May">May</option>
                                                             <option value="June">June</option>
                                                             <option value="July">July</option>
                                                             <option value="August">August</option>
                                                             <option value="September">September</option>
                                                             <option value="October">October</option>
                                                             <option value="November">November</option>
                                                             <option value="December">December</option>
                                                         </select>
                                             </div><!--col-->
                                             <div class="col-md-6">
                                                     <select id="year_select" onblur="select_report() " class="form-control w-100 mb-3">	
                                                             <option value="" selected disabled class="white-text">Select Year</option>
                                                             <option value="2018">2018</option>
                                                             <option value="2019">2019</option>
                                                             <option value="2020" >2020 </option>
                                                             <option value="2021" >2021 </option>
                                                             <option value="2022" >2022 </option>
                                                             <option value="2023" >2023 </option>
                                                             <option value="2024" >2024 </option>
                                                             <option value="2025" >2025 </option>
                                                             <option value="2026" >2026 </option>
                                                             <option value="2027" >2027 </option>
                                                             <option value="2028" >2028 </option>
                                                             <option value="2029" >2029 </option>
                                                             <option value="2030" >2030 </option>
                                                             <option value="2031" >2031 </option>
                                                             <option value="2032" >2032 </option>
                                                             <option value="2033" >2033 </option>
                                                             <option value="2034" >2034 </option>
                                                             <option value="2035" >2035</option>
                                                             <option value="2036" >2036 </option>
                                                             <option value="2037" >2037 </option>
                                                             <option value="2038" >2038 </option>
                                                             <option value="2039" >2039 </option>
                                                             <option value="2040" >2040 </option>
                                                             <option value="2041" >2041 </option>
                                                             <option value="2042" >2042 </option>
                                                             <option value="2043" >2043 </option>
                                                             <option value="2044" >2044 </option>
                                                             <option value="2045" >2045 </option>
                                                             <option value="2046" >2046 </option>
                                                             <option value="2047" >2047 </option>
                                                             <option value="2048" >2048 </option>
                                                             <option value="2049" >2049 </option>
                                                             <option value="2050" >2050 </option>
                                                          </select>
                                             </div>
                                         </div><!--row-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                </div>
                            </div>
                          <!--select year and month-->
                         	<?php
								include "connect.php";
								if(isset($_GET["start"]) && isset($_GET["finish"])){
									$start = $_GET["start"];
									$finish = $_GET["finish"];
									
									$payments = "SELECT * FROM clients WHERE (client_date_issued BETWEEN '".$start."' AND '".$finish."')";
									$result = mysqli_query($conn, $payments);
									
							?>
                            <div class="row">
                                <div class="col-md-6 pb-3 pt-1">
                                    <div class="header-title ">
                                       	<?php
											$total = 0;
											while($add=$result->fetch_assoc()){
												if($add["client_status"] == "Paid"){
													$total = $total + $add["client_total_price"];
												}
											}
										?>
                                        <span style="line-height: 1.3" >Total Payment from <?=$start?> to <?=$finish?>:<div class="badge teal" style="font-size: 18px;"> Php <?=$total?></div></span>
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="header-title">Unpaid Clients</div>
                                    </div>
                                   
                                    <div class="card-body">
                                            <div class="responsive-t overflow-auto">
                                                    <table id="view_unpaid_clients_table" class="view_claims table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="th-sm">Client Name</th>
                                                                    <th class="th-sm">Email</th>
                                                                    <th class="th-sm">Date Issued</th>
                                                                </tr>
                                                            </thead>
                                                                    <tbody>
                                                                    <?php
																		$unpaid_result = mysqli_query($conn, $payments);
																		while($unpaid=$unpaid_result->fetch_assoc()){
																			if($unpaid["client_status"] == "Unpaid"){
																	?>
                                                                            <tr>
                                                                                    <td class="wo-button"><a class="view-agent font-weight-bold material-tooltip-main" data-toggle="tooltip" data-placement="right" title="View Client" href="view_individual_client.php?id<?=$unpaid['id']?>"><?=$unpaid["client_fname"] . " " . $unpaid["client_mname"] . " " . $unpaid["client_lname"]?></a></td><!--place a tooltip-->
                                                                                    <td class="wo-button"><?=$unpaid["client_email"]?></td>
                                                                                    <td class="wo-button"><a tabindex="0" class="font-weight-bold" data-placement="right" data-toggle="popover" data-trigger="focus" title="<b>Duration</b>"
                                                                                        data-html="true"><u><?=$unpaid["client_date_issued"]?></u></a></td>
                                                                            </tr>
                                                                    <?php 
																			}
																		}
																	?>
                                                                    </tbody>
                                                    </table><!--table-->
                                                </div>
                                    </div><!--card body-->
                                </div>
                              </div>
                              <!--col-->
                              <div class="col-md-6">
                                    <div class="card">
                                            <div class="card-header">
                                                <div class="header-title">Paid Clients</div>
                                            </div>
                                            <div class="card-body">
                                                    <div class="responsive-t overflow-auto">
                                                            <table id="view_paid_clients_table" class="view_claims table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="th-sm">Client Name</th>
                                                                            <th class="th-sm">Email</th>
                                                                            <th class="th-sm">Duration</th>
                                                                        </tr>
                                                                    </thead>
                                                                            <tbody>
                                                                            <?php
																				$paid_result = mysqli_query($conn, $payments);
																				while($paid=$paid_result->fetch_assoc()){
																					if($paid["client_status"] == "Paid"){
																				
																			?>
                                                                                    <tr>
                                                                                            <td class="wo-button"><a class="view-agent font-weight-bold material-tooltip-main" data-toggle="tooltip" data-placement="right" title="View Client" href="view_individual_client.php?id=<?=$paid['id']?>"><?=$paid["client_fname"] . " " . $paid["client_mname"] . " " . $paid["client_fname"]?></a></td><!--place a tooltip-->
                                                                                            <td class="wo-button"><?=$paid["client_email"]?></td>
                                                                                            <td class="wo-button"><a tabindex="0" class="font-weight-bold" data-placement="right" data-toggle="popover" data-trigger="focus" title="<b>Duration</b>"
                                                                                                data-html="true" data-content='<b>Start Date:</b> 03/24/2019<br><b>End Date:</b> 03/24/2020 '><u>
																															
																								<?php
																										$start_date = date_create($paid["client_start_period"]);
																										$end_date = date_create($paid["client_end_period"]);
																										$duration = date_diff($start_date, $end_date);
																										echo $duration->format("%R%a days"); 
																								?>
                                                                                   				</u></a></td>
                                                                                    </tr>
                                                                             <?php 
																					}
																				}
																			?>
                                                                            </tbody>
                                                            </table><!--table-->
                                                        </div>
                                            </div><!--card body-->
                                        </div>
                              </div>
                          </div>
                          	<?php 
								}
								else{
							?>
                       		<div class="row" id="label-content">
                                <div class="col-md-12 text-center">
                                        <div class="header-title">
                                                <div id="label_report">
                                                    You haven't selected a specific year and month
                                                </div>
                                            </div>
                                            <div id="label_support">
                                                Please select a year and month
                                            </div>
                                </div>
                           </div>
                           <?php 
								}
							?>
                        </div>
                        <div class="tab-pane fade" id="vehicle-content" role="tabpanel" aria-labelledby="vehicle-tab-content">
                          <canvas id="vehicle_bar_chart" style="max-width: 500px;"></canvas>
                        </div>
                      </div>
            </div><!--classic tabs-->          
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
    <!--Plugins-->
        <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script> 
        <script src="assets/plugins/data-tables/datatables.js"></script>
        <script src="assets/plugins/data-tables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script src="assets/plugins/data-tables/KeyTable-2.5.0/js/dataTables.keyTable.js"></script>   
        <script src="assets/plugins/data-tables/tablepress-datatables-sorting-plugins/jquery.datatables.sorting-plugins.js"></script>
        <script type="text/javascript" src="assets/plugins/data-tables/Responsive-2.2.2/js/dataTables.responsive.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/addons/datatables.js"></script>
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--Internal Scripts-->
    <script>
function select_report() {
    var x = document.getElementById("month_select").value;
    var y = document.getElementById("year_select").value;
	var z = document.getElementById("content");
	var w = document.getElementById("label-content");
    //labels
    var main_label = document.getElementById("label_report");
    var support_label = document.getElementById("label_support");
    if ( x == "" && y == "") {
        main_label.innerHTML = "You haven't selected a specific year and month";
        support_label.innerHTML = " Please select a year and month";
    }
    else if ( y == "" && x != "" ) {
        main_label.innerHTML = "You haven't selected a specific year";
        support_label.innerHTML = " Please select a year";
    }
    else if ( x == "" && y != "" ) {
        main_label.innerHTML = "You haven't selected a specific month";
        support_label.innerHTML = " Please select a month";
    }
    else if ( x != "" && y != "" ) {
        select_mny();
    }
}
		
		function select_mny() {
    var x = document.getElementById("month_select").value;
    var y = document.getElementById("year_select").value;

    switch (x) {
        case "January":
            var startday = "-01-01";
			var finishday = "-01-31";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;
        break;
        case "February":
            var startday = "-02-01";
			var finishday = "-02-28";
			window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "March":
            var startday = "-03-01";
			var finishday = "-03-31";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "April":
            var startday = "-04-01";
            var finishday = "-04-30";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "May":
            var startday = "-05-01";
            var finishday = "-05-31";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "June":
            var startday = "-06-01";
			var finishday = "-06-30";
			window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "July":
            var startday = "-07-01";
			var finishday = "-07-31";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "August":
            var startday = "-08-01";
            var finishday = "-08-31";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;
        break;
        case "September":
            var startday = "-09-01";
            var finishday = "-09-30";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "October":
            var startday = "-10-01";
            var finishday = "-10-31";
            window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "Novermber":
            var startday = "-11-01";
			var finishday = "-11-30";
			window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
        case "December":
            var startday = "-12-01";
			var finishday = "-12-31";
			window.location.href ="reports_payments.php?start=" + y + startday + "&finish=" + y + finishday;	
        break;
    }
			
		
}
        
            // popovers Initialization
            $('.popover-dismiss').popover({
                trigger: 'focus',
                html:true
                })
                $(function () {
                $('[data-toggle="popover"]').popover()
                });
                
            $('#view_paid_clients_table').DataTable({
            keys: true,
            "pagingType": "simple_numbers"
            });
            $('#view_unpaid_clients_table').DataTable({
            keys: true,
            "pagingType": "simple_numbers"
            });
            $('.dataTables_length').addClass('bs-select');

          
    </script>
        <script src="assets/plugins/mdb-free_4.7.5/js/mdb.js" type="text/javascript"></script>
 
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
