<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--title-->
        <title>Register | Auto Insurance Quote System</title>
    <!--icons-->
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/icons/fontawesome-free-5.7.2-web/css/all.css" rel="stylesheet" />
    <!--bootstrap core css-->
        <link rel="stylesheet" href="assets/styles/bootstrapcss/bootstrap.css" />
    <!-- Material Design Bootstrap -->
        <link href="assets/plugins/mdb-free_4.7.5/css/mdb.css" rel="stylesheet">
    <!--logo-->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/mcvt-1.png">
    <!--custom styles-->
        <link rel="stylesheet" href="assets/styles/custom.css" />
        <style>
       h1 {
           letter-spacing: 0.8px;
       }
       h5 {
           letter-spacing: 3px;
       }
       .hr-light {
           border-top: 3px solid #fff;
           width: 80px !important;
       }
        </style>
</head>
<body style="background:url(assets/images/into_bg.jpg)">
  <header>
    <div class="py-5 my-5" >
    <div class="mask rgba-black-light align-items-center text-center">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 mb-4 white-text text-center">
                    <h1 class="h1 responsive white-text  animated text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>mcvt insurance services.</strong></h1>
                    <hr class="hr-light my-4 wow animated fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text  animated wow fadeInDown" data-wow-delay="0.4s"><strong>marikina city</strong></h5>
                    
                  <div class="row text-center d-flex justify-content-center">
                  	<div class="col-md-6">
                  		  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                  <!--Body-->
                  <div class="modal-body mb-0 mt-0">
                    <div class="md-form form-sm" style="margin-bottom: 0 !important; margin-top: 0 !important">
                     <label for="a_email" class="text-white">Email</label>
                      <input type="text" id="a_email" name="a_email" class=" form-control form-control-sm validate">
                       <div class="feedback">
                         Email must be a valid address, e.g.(me@mydomain.com)
                    </div>
                    </div>
                    <div class="md-form form-sm">
                     <label for="a_username" class="text-white">Username</label>
                      <input type="text" id="a_username" name="a_username" class="form-control form-control-sm validate">
                      <div class="feedback">
                         Username must be 5 - 12 alphanumeric characters only.
                    </div>
                    </div>
      
                    <div class="md-form form-sm ">
                     <label for="a_password" class="text-white">Password</label>
                      <input type="password" id="a_password" maxlength="20" name="a_password" class="form-control name25 form-control-sm validate">
                      
                      <div class="feedback">
                         Password must be 8 - 20 characters only.
                    </div>
                    </div>
                    <div class="text-center mt-2">
                      <input type="submit" value="Sign In" name="sign_in" class="btn btn-outline-white">
                    </div>
                  </div>
					</form>
                  	</div>
                  </div>  
                    
                  
                  
                    
       
                </div>
            </div>
        </div>       
    </div>
    </div>
  </header>
</body>

<!-- PHP -->
	<?php
		include "connect.php";
	
		if(isset($_POST["sign_in"])){
			$password = md5($_POST["a_password"]);
			$email = $_POST["a_email"];
			$username = $_POST["a_username"];
			
			$check = "SELECT * FROM users WHERE email='".$email."'";
			$result = mysqli_query($conn, $check);
			if($result){
				$row = $result->fetch_assoc();
				if($row["username"] == $username){
					if($row["password"] == $password){
						echo "<script>setTimeout(\"location.href = 'dashboard.php';\",1500);</script>";
					}
					else{
						echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
					}
				}
			}
		}
	?>
<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="assets/scripts/jqueryjs/jquery.js"></script>
    <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/scripts/popperjs/popper.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js" ></script>
    <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/scripts/boostrapjs/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/waves.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/modules/forms-free.js"></script>
        <script type="text/javascript" src="assets/plugins/mdb-free_4.7.5/js/bootstrap.js"></script>
    <!--Custom Javascript-->
       <script type="text/javascript" src="assets/scripts/validation.js"></script>
        <script type="text/javascript" src="assets/scripts/script.js"></script>
        <script>
                new WOW().init();
        </script>
</html>
