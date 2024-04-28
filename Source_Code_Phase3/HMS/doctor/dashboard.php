<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | Dashboard</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
								<h1 class="mainTitle">Welcome To Dashboard	<b style="color:#2e62c8 !important;">DR.  <?php $query=mysqli_query($con,"select doctorName from doctors where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['doctorName'];
}
									?> !! </b> </h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
							     <div class="col-sm-4">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC8UlEQVR4nO2aTUhUURTHj1mRtYiCpBZlRatxzh1LAqHA2tYiqIYWGfPOGRnSbRAFgQVJiwhaFdTGPoRwF0K0KSvxneM0UYugoFW0CMSIJIo+bOIlWFpmb+aOc1++H5z9+/G/H+fedwFiYmJiYn6nOVdYmmLdjSwnDEmPIb2JLP3IcgVJjyazYuB/IJErrDOkl5D1g2Et/rVI+lrSfh1EFePJAUM6NqvoVOn7hqTDtA3VQ5RA0v2GZDyU7NT6aEiOARRrwHWac4U1yPKuDNnJQpKT4DpIes6G7ISwfmkiTYCrpNN9tcg6Ykt4Yl7reXCVRtKUVdmJhewhuIrJyl7bwsGWFowccBH0/HbrCbMWm3OF5eAihuTIvBJGls5KCDvbgRmWfRWYwyPgKqmsv82+sOTBVRJZf6Vh+WZVmOQiuIwhfWE5YQ9cxpD02hQOjpjgKq1dAwt/HPGsCcsn9Pwt4Cro6Z4KLFr94CqGhw/bFjasj8BVkuS32k9Yr4HLl3WGZdSmcIqkDVwmyf5BJPlsaf7edvak9Csp1p0WhvINiAotab8u2FLKTLcTogSy9JcsTDK+mYcaIEokPdlVRsK3IIogy51S0m3y8lshiiDlNxqSV6GEPT0OUQZJzoYRjsTfBrvCEQfnXcKsF0LN4bYnyyDKIMnVMMKJzPBqiCoNmYElhuRlqA4rO5yBKJJO99Ua0uvh92F9YzifhCiRyPqbkHSg5E6LdCxJQtBVXAAug56PhvVyuQeHyeHN8tiwHkqkny4GV2jOFRYFTxyQ5K4NyT+XvEaWU41efm3VRJvowSrDejr4mMqJTk9cvwZPnlJZ2TFnoqZtqD5oJpDl/VyJzlD3gju0ispidjiDLG+rLDptgZNe7BhcYVm1WBO8tai63Mz1LJWR9dZ0DUm3A1KzJf3cStKGZLvtP4IVlO4pWxhZB6su8u/C42W96zLtuiEy6f6U7i5dmJWrLhBeWEoWRtYzVRcIXTJasnBMTExMDFSP73qRO1dyP8zuAAAAAElFTkSuQmCC"> 
                                    <h2 class="StepTitle">My Profile</h2>
                                        <p class="links cl-effect-1">
                                            <a href="edit-profile.php">Update Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAACaklEQVR4nO1bvW4TQRA+UUHDK9AkFIGdixRAtOEdqIiEZ2P5CVDaNFf5CXI1dXiFSCHyfkbUoU3qCLpUkTi09+PEvjnHTu5s7jQjfYVvvDP7eWdnZ+fkIFhSqD9+aRhnhnFDFglZ95cY56HF7rK2FvbZwwey+JX6ski8b2PxfbvnNoOmxTDOMqIzYPx+8fnkad3+3n8cPSPGH9GndadB02LylTUWXw1jQBZRMYFXjLBuf97mHZKR9+l9FysdNC2UO/eO/WfTx87kWR87dfuT7Oc/dPrscdYPkydb+6MNb7gK8wiH7PbmjX0IvM15hOeN3dofbXhOItd3n/DcMMbyXilDItw0JML3jrGA51YOHcbBUs5bQpgyfBEIu6OuEjbsjkqEySLuKmGyiB9PWDiWVoCpY2mlhKldiJUw6Qpj3WGoIU117uEwK+HiLiJktyeWlypdFtIsjXVnVs3SpJUWtLQkraWhl4eHHkuR2Dyz7luqZ5zf15Sravr5sV7vbVU0EqPVNwA463hU2mH8lPSLtHX92MqJrq3jwUo4FV3hGdGQbtEevkgnNgPD7irTu2tJX2TgIpNX2LjObVzJelysnDC1C3ENhN2p2GEoztBspUt6wzi+EyXH8neyKMltCV2M1LceS6TnMLTwmIhWWlZLy0R6eziLSQZldynrp246kfgddpfFSSDp9e2h1cIjaaK0HJSM6G2pLHpbatFtaSBOVls806Ih3ZaQpnYhVsKkK4x1h6GGNOkehiYtWjhLsxv+B3utGbAblghv9368vf0vUndgGDev7fiNVMAEXpGvdNwJsBtWklUJuin/ABUWFl5ai50nAAAAAElFTkSuQmCC"> 
                                    <h2 class="StepTitle">My Appointments</h2>
                                        <p class="cl-effect-1">
                                            <a href="appointment-history.php">View Appointment History</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php } ?>
