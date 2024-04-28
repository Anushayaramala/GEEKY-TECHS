<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle" >Welcome To Dashboard	<b style="color:#2e62c8 !important;font-weight:600;padding-top:8rem;"><?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	$_SESSION['fullname'] = $row['fullName'];
	echo $_SESSION['fullname'];
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
                            <div class="col-sm-4">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE+0lEQVR4nO2bX4gbZRDAt1VQwT8oIv4BC3JaSO+b3BnRvkhREB98Uw4EzyYzCQe1VrCK4tM92BfBWiqtXLCCKBTxoQiK7duBl2Qm9RAUqf+RVigUtUi1am2vkdn9kttcdnPZu+xlk8vAQC53+83+vplvvpnd7xwnokCheo9BKRmUi0BSA+LLgHIiTfJQ1LE6tpmTh4HkG9cWSU1tG5K5sRzf7cQtBqXkgS5RlN83ZWev7ra9rROVawDlbKBN4s+cuMVYzxqS9w3KFJDsqd/AFpR0t+3pmD7IPWpTbdc97cQtYI2rYf3ZFCTT+K4gmW7bCxrfTrT73epGn65tTOUrIzpwmLYDTiNPtrt2JapjtgNud20qXxlRpkDW+5+S6w1KNXittGoQcNwaBLzsNSSibK2hg/JSJON9AgyevhgAzDODCmyQZ1qAgaQ4qMBAUlw9cMC2tAbatC2tKTD0lxaHwDD0sPQ6DIchDd1cw2mvhCsOoqaRJwPLy6EMssAwS0uvM+swS8Ow0pJhaQnDWlp63zwY4kPrKWl9lZmav8Egn18fwMjPqT2D/N46AOYLman5m9XeKFa2DTywIflg0WJtgyH5fqCBR/P8SJPNnLwywMB8amLiwyv8NlPZ6q2LbyEHARjlT4N82iB/V09WS8WQvAXEPxmSM4bk774BNiT704XqlnEqbzI75m7UNeqsQLZNz16p1xs8flc6Wx0zxMcSCQx2YL1hpwuSemb2WkN8JLEehoan+Zjn4VXA6htM5K8THdLgV5QfNLxXAgu56qPhb/yTCkxewoI8Px4F1n2NEk/WLsYP7ELzAhA/0ZFnUV6NAbS2tsB6KqDD0z2A/EIn4xmSS3qCx6DsNSjPW9XPJW+CewhskM+P7Pr0qhUcXglaIv8C8T4tVsLGcAsZkv1as/cIWI46HYtbW58JWRono5wQAiqPa2UHjajgQ2sCrGEa8oajbHLyYOs98OEg2MzU/G1ORBmn0u0NaJSzLZERB7DfK24FhnLUB7IAKAf9B06AhJaGcdSzX27BUpCt+tnkKvc2whv53ViBNTy98rK2wT0pgHIuZJ2frm9fqan5O5t/z29Ecut0bSMQf2Qhn3ahUd60dv5Lb6/cEaOH+fAYSkrDt9O/h8nyLYD8rZ2wS+0SVJB4Casx3j79TpfDYvbm3fEBI3/uZdYIUYH8q3eI1AWeiwI7mpdnF6OLj/gPpIGddEP8cYweXvWSeL1T2DTJYxoRdqJZD6Q2eR5lrx3z58QCN4WfV4kdBJTtLbDZ6phbxnrX/ajLIqyoMcR/9QWwyVezvrB/p+5BTUKA/Iv9+98MHd/ctopDOdcXIa2dV31t2xv/Urccg/KF/e6foH19aUjrGMkFRik1bs5xnM1Uuk6fegZEwmUgftJpI4BcsdHxSWKBdSsJqrCAKrv8tbIhfnnZigvttoS8I7nA9jlZiMce0JIz8NBoywTxARsxF2MuPLqh6snyeBBIKl+5abnnZ6NUvU8rLBvOzZOTTGAX+pSGpRNR/BncIP8R0Dzwa72HC4fWrNwprHq2sV0hL2hhEtKAtzTOCVK+oI1Au1bRtoQH6mEMyAsGZWf4zOQZrKeLCdK3m55iehm3rJ2UPt7RAkU/u1uP7xGPhnE6yLP9ILr+tJ/tJALd/1pDnonaaTlJFLfVI96tXY82Au4pAq2jUU5oUaH7bNPWEyD/A77AfHBfN4egAAAAAElFTkSuQmCC"> 
                                    <h2 class="StepTitle"> Book My Appointment</h2>
                                        <p class="links cl-effect-1">
                                            <a href="book-appointment.php">Book Appointment</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAADQklEQVR4nO3aX4hMURwH8GMlEflbylJsq2V3fmfYQRJPu3kTpXlAdu/vd8fUKnmSx/VGPOANRcKDVtmi1OZB2XV/vzsGT8oLnnjzd7OLZHQm1rZr1lhzz7k75lu/mqZb53w6d86ce85VqpZaaplskh1BPVDYBhi0F4vCtnU0sFRVYxIkOwH5iyYpjC7zHXiyQ1VbgPjWWOwvtNxU1RaNcrUkmOSKqqY0+8FCQL5QeoT5grlGTdWksvnFQOxp5F5AeVkK+ptb+yUQ3wA/7Fy9L1yk4h7AXINGOa+JP5eLLFkonwD5rM7IShW/FKYBShaQP/4zdHwNA/ER1V2oU7FId6FOI1+KADp2YrsYC7RGPhE1dtRtftwpNkHheiD5agts2gIvaHUGBpIr1kZ3ZJT5kjOwRnljHyyvnWBT2fw869gfZdq2Dk528gpX4BYvt9w6uMXnNa7AzX7QaB0MXtDqCpzMhC3WwS3e/c2uwJCRlHUwYNDuDIxBu3VwgoK97sCy2zoYSA47AxMfsg7WxKfcgeWYC/B1h+BrDsDy0BXYtG0Vm073TDcP5g5/w+/NpsN/scrSP9GYa7AGBj9MOwf7YdoaWKOcdg5GPmkNDCiPnIOJH1vBJjsfz7e5rVO6+JuVgzjwwz3usSOj7EUO1sg98QFHvABpPnB3jkYZdA0dKZTBJhqYGxlYk5Bz5Pjben90YOQHMRnZT2bHFJBfmZ9YJNgkybYJOjE80gHiZ0D8RKPkAWVAk9wpHoYj9wDyZU1yDkjOmFMEQD5qHvXMuZRG6SguaPxge3FzAXmL2dkw2zlmVWVmZOjqX5DK5mcoG0n4vMQ0XHxPo6t/waZ0MMtKw7VElLVeboM50Da35JQq5F7T97/CgidbgWTI+eQ06ZlbhoxBlZNUNj8bSF647nQF0C/Kmmfi+F8b6dITkPuqBozc9wduYRoQv60i8LsJX5OAjCxz3clKV7IjqC8JTvisXXew8pVLlB5hyjUVH/8qW0/L7py5tsLtA+WaVFzPoJycGVU6jQdvzyznfx2Qn5trVTUEMrJpwo0DlA9JP9ioqingBfDjcXEMmO9NOLFM9az1eJUm3mXKfHbdn1pqqaUWFed8Bx1DsoZJuBxvAAAAAElFTkSuQmCC">
                                        <h2 class="StepTitle">Notifications</h2>
                                        <p class="links cl-effect-1">
                                            <a href="notification.php">Reminder</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAER0lEQVR4nO1aa6hUVRQ+RUVGD5AQISoTShlnr7k1ZRGCCQXlD+nPFbFwZq0zjCD4I/WPEN0fPaWIfEDYJf+VkQRh/RAtrkL3rDXDiJKJ9tCLRNHtoURlt5c39sx9HGfmnLNn7pk7e+QsWH/m7L3O/s56r9mOk1BCVx6l87xSoewF5PdtY4X8dmadd1usgAH5NJCMW8wvxApYkYxYACqQFclrCeCZkEo0LF0348Sk4ySVmLRYadJ35oauB5LdzTiTK/X5lZhxvaXw9PC8ntbwIvrspoA1hxxn/Cq9Jp0bXgzEx2u/81+A8tzks0jAivhkxuVHVEGynWItP6rwiQK8JD/8sH6ecr25CuW7hjXIL5pqON4KJ4AA5ZW2ASOfm9QgoLwRsP9fheWF0RpG/gmQNyuUYqcYSLYAyi/tAlYke6ZwIH8fKAP5JRMNW8HhgPnZSXMOlYN85IoArC1QP+vL892hMpDPRgNG/kS/pJP+u/QpuRlIDs8UMBRK90TIGDHQML/uzAIB8k4rACvkv6uDgYBkHwcrkvf0e6wADJZwApgSDTuJSVPiwyNJ0ILmqelLQHkrNL0gvwMoY5fvk5JRWkLZa1VaWpIv395yx4NyPtX/xXWmhYdC2WENYOWW1jY00HWU2jB0I6Ac9BcsgPygcWmJfMQawGABJ4CpkyZN/FHGlfURjfwzgPJD3d5BowEA8mYg/tkaDWeLlVtNfFEPy3zCfzTZE9OIJ24f5m1pKt0fNohLo7dcIZ/w7bmkiDcYDfFIVsxoiJcELelSlEb+T+fjSCb506oorUheNjFpIPl8+hAypqi8yMR/s8XKtYr4QO8FLZKBaeF84aF+b47Jvur7kd+0BrBC/jgqLQHxJkUyWrf3lNEdDq1dbf62AAYLuDcAI3+r/+SK4omuyibAvMakefAHHkX8q24KjH2YZI81gFPFyh2tVkuK5KJpW+kMjF8NxB/21gCA+N3qf7GXv+AiEJ+J4ibBrtsmLV3nWS48+HcgOQoolWCur4X5UjVVofdoJBOvApJv2gZMMlDFUJCsMWBA+TpwYd67z8QV9Z1In/BRI/8175a263XZYuWGRg1XS9TnFfGxcEvhM77DBqcG/eXai7S8K4PeauWW+kNZd1URfqwHfb4PGzrwC5bBJ/yA94cs/KN1k47Zh1GGpqzBX7O3JmP/tEnlZWsnDzxjRvlNX1ma0PCr7cnhTdOAafjeroOK1BA/UQNcXlifAg0+2FhDPaGIP7UaMPGBybPqZqZF7W5rCDp9+fIDLX+52Qe9yufLW0wCmEL5YPnA0DXNI23eK1gO+ELaZZjSdK7UB8T7mgGvXVDzNkb1ATonrquVhbaCltG0y4/5z5wtVm4B13u8muJqo99lgVptRlCQu2p/csk/3QbYlGsDg8FMjhc4cVIqV5o/cVtuEJC9WgkY3RDMFiuSr/TZ0iRPai3HCj4hpzfpf8YsVKy6wrLwAAAAAElFTkSuQmCC">
                                        <h2 class="StepTitle">Health & Lifestyle</h2>
                                        <p class="links cl-effect-1">
                                            <a href="health-lifestyle.php">Explore Articles</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>
        <?php include('include/setting.php');?>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="vendor/autosize/autosize.min.js"></script>
    <script src="vendor/selectFx/classie.js"></script>
    <script src="vendor/selectFx/selectFx.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
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
