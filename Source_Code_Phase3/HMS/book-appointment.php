<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User | Book Appointment</title>
    <!-- Meta tags, stylesheets, and other imports -->
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
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Razorpay SDK -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
									<h1 class="mainTitle"> <v style="color:#2e62c8 !important;">User</v> Appointment  <b><?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	$_SESSION['fullname'] = $row['fullName'];
	echo $_SESSION['fullname'];
}
									?> !! </b></h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>
                    <!-- Page content -->
                    <form id="appointmentForm" method="post">
                        <!-- Appointment form fields -->
                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['fullname']; ?>">
						<input type="hidden" name="id" id="userid" value="<?php echo $_SESSION['id']; ?>">

                        <div class="form-group">
                            <label for="DoctorSpecialization">Doctor Specialization</label>
                            <select name="Doctorspecialization" id ="specialization" class="form-control" onChange="getdoctor(this.value);" required="required">
                                <option value="">Select Specialization</option>
                                <?php 
                                $ret=mysqli_query($con,"select * from doctorspecilization");
                                while($row=mysqli_fetch_array($ret)) {
                                    echo '<option value="'. htmlentities($row['specilization']) .'">'. htmlentities($row['specilization']) .'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="doctor">Doctors</label>
                            <select name="doctor" class="form-control" id = "doctor" onChange="getfee(this.value);" required="required">
                                <option value="">Select Doctor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="consultancyfees">Consultancy Fees</label>
                            <select name="fees" class="form-control" id="fees" readonly></select>
                        </div>
                        <div class="form-group">
                            <label for="AppointmentDate">Date</label>
                            <input class="form-control datepicker" name="appdate" id = "appdate" required="required" data-date-format="yyyy-mm-dd">
                        </div>
                        <div class="form-group">
                            <label for="Appointmenttime">Time</label>
                            <input class="form-control" name="apptime" id="timepicker1" required="required" placeholder="eg: 10:00 PM">
                        </div>
                        <button type="submit" name="submit" class="btn btn-o btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <?php include('include/footer.php'); ?>
            <?php include('include/setting.php'); ?>
        </div>
    </div>

    <!-- JavaScript imports -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>

    <!-- JavaScript code -->
    <script>
        function getdoctor(val) {
            $.ajax({
                type: "POST",
                url: "get_doctor.php",
                data:'specilizationid='+val,
                success: function(data){
                    $("#doctor").html(data);
                }
            });
        }

        function getfee(val) {
            $.ajax({
                type: "POST",
                url: "get_doctor.php",
                data:'doctor='+val,
                success: function(data){
                    $("#fees").html(data);
                }
            });
        }
		$(document).ready(function() {
    $('#appointmentForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        pay_now(); // Call pay_now() function
    });
});

        function pay_now() {
    var name = $('#name').val();
    var fees = $('#fees').val();
    var specialization =  $('#specialization').val();
	var userid = $('#userid').val()
    var doctorid = $('#doctor').val();
    var appdate = $('#appdate').val();
    var time = $('#timepicker1').val();

    var dataToSend = {
        name: name,
        fees: fees,
        specialization: specialization,
		userid: userid,
        doctorid: doctorid,
        appdate: appdate,
        time: time
    };

    $.ajax({
        type: 'post',
        url: 'payment_process.php',
        data: $.param(dataToSend), 
        success: function (result) {
            var options = {
                "key": "rzp_test_dWbK5NmPB4MadL",
                "amount": fees * 100,
                "currency": "INR",
                "name": "HMS",
                "description": "Test Transaction",
                "image": "https://t3.ftcdn.net/jpg/05/11/38/18/240_F_511381862_zuI2W1eEqm4ExLcZMGRL7pgqmCKtLGtf.jpg",
                "handler": function (response) {
                    $.ajax({
                        type: 'post',
                        url: 'payment_process.php',
                        data: "payment_id=" + response.razorpay_payment_id,
                        success: function (result) {
                            window.location.href = "thank_you.php";
                        }
                    });
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    });
}



        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '-3d'
            });
            $('#timepicker1').timepicker();
        });
    </script>
</body>
</html>
