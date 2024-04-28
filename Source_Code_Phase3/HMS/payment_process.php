<?php
session_start();
include('include/config.php');
if(isset($_POST['fees']) && isset($_POST['name'])){
    $specilization = $_POST['specialization'];
		$doctorid = $_POST['doctorid'];
		$userid = $_POST['userid'];
		$fees = $_POST['fees'];
		$paymentStatus = 'pending';
		$appdate = $_POST['appdate'];
		$time = $_POST['time'];
		$userstatus = 1;
		$docstatus = 1;
	
		$query = mysqli_query($con, "INSERT INTO appointment (doctorSpecialization, doctorId, userId, consultancyFees, appointmentDate, appointmentTime, paymentStatus, userStatus, doctorStatus) VALUES ('$specilization', '$doctorid', '$userid', '$fees', '$appdate', '$time', '$paymentStatus', '$userstatus', '$docstatus')");
        $_SESSION['a_id']=mysqli_insert_id($con);
	}

    if(isset($_POST['payment_id'])){
        $payment_id = $_POST['payment_id'];
        // Update payment status
        mysqli_query($con, "UPDATE appointment SET paymentStatus='complete', paymentID='$payment_id' WHERE id='" . $_SESSION['a_id'] . "'");
        }
?>