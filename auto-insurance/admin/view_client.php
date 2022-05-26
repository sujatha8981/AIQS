<!DOCTYPE html>
<html lang="en">
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
                                <a class="dropdown-item waves-effect waves-light" href="view_agent.php"><i class="fas fa-search"></i> View</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active pr-3 no-arrow">
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
            <h4 class="page-title">View Clients</h4>
         
        </div><!--first col of 1st row-->
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb inline-to-title">
                  <li class="breadcrumb-item"><a href="#">Clients</a></li>
                  <li class="breadcrumb-item active">View Client</li>
                </ol>
              </nav>
        </div>
    </div><!--first row-->
    <!--breadcrumb-->
    <div class="card mx-5"><!--card-->
        <div class="card-body">
            <div class="responsive-t">
            <table id="view_agent_table" class="table table-hover table-bordered table-striped table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email Address</th>
                        <th class="th-sm">Duration</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Action</th>
                    </tr>
                </thead>
                        <tbody>
                               	<?php
									include "connect.php";
                                    $view_clients = "SELECT * FROM clients";
                                    $result = mysqli_query($conn, $view_clients);
                                    while($row=$result->fetch_assoc()){
								?>
                                <tr>
                                        <td class="wo-button"><a class="view-agent font-weight-bold material-tooltip-main" data-toggle="tooltip" data-placement="right" title="View Agent" href="view_individual_client.php?id=<?=$row['id']?>"><?php echo $row["client_fname"] . " " . $row["client_mname"] . " " . $row["client_lname"];?></a></td><!--place a tooltip-->
                                        <td class="wo-button"><?=$row["client_email"]?></td>
                                        <td class="wo-button"> <a tabindex="0" class="font-weight-bold" data-toggle="popover" data-trigger="focus" title="<b>Duration</b>"
                                           data-html="true" data-content='<b>Start Date:</b> <?=$row["client_start_period"]?><br><b>End Date:</b> <?=$row["client_end_period"]?> '><u>
                                           <?php
												if($row["client_status"] == "Paid"){
													$start_date = date_create($row["client_start_period"]);
													$end_date = date_create($row["client_end_period"]);
													$duration = date_diff($start_date, $end_date);
													echo $duration->format("%R%a days"); 
												}
												else{
													echo "N/A";
												}
											?>
                                        </u></a></td>
                                        <td class="wo-button">
                                        	<?php 
												if($row["client_status"] == "Paid"){
													echo '<span class="green-text font-weight-bold"> Paid</span>';
												}
												else{
													echo '<span class="red-text font-weight-bold"> Unpaid</span>';
												}
											?>
                                        </td>
                                        <td class="with-button">
											<?php 
												if($row["client_status"] == "Paid"){ ?>
													<a  class="btn btn-sm btn-info ml-2 text-white" href="receipt_print.php?id=<?=$row['id']?>"><i class="fas fa-file-alt"></i> Print</a>
													<button onClick="change(<?=$row['id']?>)" type="button" data-toggle="modal" data-target="#modal-delete-client" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span> Delete</button>												<?php
												}
												else{ ?>
													<a  class="btn btn-sm btn-info ml-2 text-white" href="mark_as_paid.php?id=<?=$row['id']?>"><i class="fas fa-edit"></i>Mark as Paid</a>
                                            		<button onClick="change(<?=$row['id']?>)" type="button" data-toggle="modal" data-target="#modal-delete-client" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span> Delete</button>
                                            	<?php
												}
											?>
                                        </td>
                                </tr>
                                <?php
									}
								?>
                        </tbody>
            </table><!--table-->
            
            

            <!--modal for mark as paid-->
            <!--modal for delete-->
            <div class="modal fade" id="modal-delete-client" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
                <div class="modal-dialog modal-notify modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title w-100" id="modal-label"><span class="heading-lead text-white">Remove Client</span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div><!--modal header-->
                            <div class="modal-body">
                                <div class="text-center">
                                <span>Are you sure you want to continue?</span>
                                <br />
                                <br />
                                <br />
                                <i class="fas fa-trash fa-4x animated rubberBand"></i>
                                <br />
                                <br />
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <script>
										function change(id){
											history.pushState({}, "", "view_client.php?id=" + id);
											
											document.getElementById("delete_button").innerHTML = '<form action="delete.php?id='+id+'" method="post"><button type="button" class="btn btn-info" data-dismiss="modal">Nope</button><input type="submit" class="btn btn-danger" value="Yes, Remove!" name="delete_client">';
										}
									</script>
                               		<div id="delete_button"></div>
                                </div>
                            </div><!--modal body-->
                    </div>
                </div>
            </div>
            <!--modal for delete-->
            </div><!--table div-->
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
    <!--Plugins-->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/forms-free.js"></script>
        <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script> 
        <script src="assets/plugins/data-tables/datatables.js"></script>
        <script src="assets/plugins/data-tables/DataTables-1.10.18/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script src="assets/plugins/data-tables/KeyTable-2.5.0/js/dataTables.keyTable.js"></script>   
        <script src="assets/plugins/data-tables/tablepress-datatables-sorting-plugins/jquery.datatables.sorting-plugins.js"></script>
        <script type="text/javascript" src="assets/plugins/data-tables/Responsive-2.2.2/js/dataTables.responsive.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/addons/datatables.js"></script>
    <!--Bootstrap core JavaScript-->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>


        <script>
            // popovers Initialization
            $('.popover-dismiss').popover({
            trigger: 'focus',
            html:true
            })
            $(function () {
            $('[data-toggle="popover"]').popover()
            });
                    $('#view_agent_table').DataTable({
                keys: true,
                "pagingType": "simple_numbers"
            });
            $('.dataTables_length').addClass('bs-select');
        </script>
    <!--Custom Javascript-->
        <script type="text/javascript" src="assets/scripts/script.js"></script>
</html>
