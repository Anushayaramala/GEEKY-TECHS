<?php
// Include necessary configurations and headers
include('include/config.php');
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health and Lifestyle</title>
    <!-- Include CSS links -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        #articles {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
          font-size:2rem;
            margin-top: 0;
            padding: 20px 0;
           color:#2e62c8 ;
          font-weight:600;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
            text-align: center;
        }
        li:last-child {
            border-bottom: none;
        }
      .btn-success{
      background-color:#2e62c8 !important;
        
      }
        a {
         
 		 color: #2e62c8;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="articles">
        <h2>Explore Health and Lifestyle</h2>
        <ul>
            <li><a href="https://www.webmd.com/">WebMD</a> - Trusted health information and news.</li>
            <li><a href="https://www.mayoclinic.org/">Mayo Clinic</a> - Medical research and clinical trials.</li>
            <li><a href="https://www.healthline.com/">Healthline</a> - Health and wellness advice.</li>
        </ul>
        <h2>Forums and Support Groups</h2>
        <ul>
            <li><a href="https://www.inspire.com/">Inspire</a> - Online health community with forums.</li>
            <li><a href="https://www.dailystrength.org/">DailyStrength</a> - Support groups for various health conditions.</li>
            <li><a href="https://www.psychforums.com/">Psych Forums</a> - Forums for mental health discussions.</li>
        </ul>
        <!-- Back button -->
        <a href="dashboard.php" class="back-button btn btn-success btn-block">Back to Dashboard</a>
      <br><br>
    </div>
    <!-- Include JavaScript links -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <!-- Include custom JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-elements.js"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
        });
    </script>
</body>
</html>
