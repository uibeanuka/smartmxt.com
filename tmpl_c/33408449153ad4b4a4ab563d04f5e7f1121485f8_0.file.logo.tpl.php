<?php /* Smarty version 3.1.27, created on 2024-01-13 06:45:29
         compiled from "/home/u632593968/domains/primeautotrade.com/public_html/tmpl/logo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187998983165a231893e7163_55282746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33408449153ad4b4a4ab563d04f5e7f1121485f8' => 
    array (
      0 => '/home/u632593968/domains/primeautotrade.com/public_html/tmpl/logo.tpl',
      1 => 1705112249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187998983165a231893e7163_55282746',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a23189406c47_02016989',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a23189406c47_02016989')) {
function content_65a23189406c47_02016989 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u632593968/domains/primeautotrade.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '187998983165a231893e7163_55282746';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
	
    <link rel="stylesheet" href="assets/front/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/front/css/animate.css" />
    <link rel="stylesheet" href="assets/front/css/all.min.css" />
    <link rel="stylesheet" href="assets/front/css/lightbox.min.css" />
    <link rel="stylesheet" href="assets/front/css/odometer.css" />
    <link rel="stylesheet" href="assets/front/css/owl.min.css" />
    <link rel="stylesheet" href="assets/front/css/main.css" />
	<link rel="stylesheet" href="assets/front/css/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezrBETtka2TfXob4z8SzMUr8K8B7dBoSojGjJArJeAOrzTj2H1eha3OO5fo8w6cG" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/CcmhR8KD1700449577.png">
    <!--othercss-->
     <style>
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 9999; /* Set a high z-index for the popup to appear in front */
        }

        #popup img {
            max-width: 100%;
            height: auto;
            max-width: 500px; /* Desktop size */
            max-height: 500px;
            position: relative;
        }

        #popup h5 {
            font-size: 1.0em;
            margin: 0px 0;
            background-color: #007bff; /* Background color for the header */
            color: #fff; /* Text color for the header */
            padding: 0px; /* Padding for the header */
        }

        #closeButton {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            z-index: 1;
        }

        @media (max-width: 600px) {
            #popup img {
                max-width: 300px; /* Mobile size */
                max-height: 300px;
            }
            
        }
    </style>
    <!-- Modify this script section in your existing code -->

<?php echo '<script'; ?>
>
        document.addEventListener("DOMContentLoaded", function () {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var greeting;

            if (hours < 12) {
                greeting = "Good morning";
            } else if (hours < 18) {
                greeting = "Good afternoon";
            } else {
                greeting = "Good evening";
            }

            var userName = "lisa";
            greeting += ", " + userName + "!";

            document.getElementById("greeting").innerHTML = greeting;
        });
    <?php echo '</script'; ?>
>
     <style>
        .custom-icon {
            font-size: 40px;
            margin-right: 0px;
        }

        .custom-verified {
            color: #4CAF50; /* Green color for verified */
        }

        .custom-unverified {
            color: #FF5733; /* Orange color for unverified */
        }
    </style>
    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-content {
            margin: 15% auto;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 0px;
            text-align: center;
        }

        .modal img {
            width: 100%;
            height: auto;
        }

        /* Button style */
        .open-modal-btn {
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <?php echo '<script'; ?>
>
        // Function to open the modal
        function openModal() {
            document.getElementById('imageModal').style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
        }

        // Close modal when clicking outside the image
        window.onclick = function(event) {
            var modal = document.getElementById('imageModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    <?php echo '</script'; ?>
>
    <style>
    .dashboard--width {
        position: relative;
    }

    .custom-button {
        position: absolute;
        bottom: 10px; /* Adjust the distance from the bottom */
        right: 10px; /* Adjust the distance from the left */
        padding: 5px 8px; /* Adjust the padding for a smaller size */
        background-color: black;
        color: white;
        border: solid;
        border-color:green;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold; /* Remove default underline for anchor tags */
        font-size: 12px; /* Adjust font size */
    }
</style>

   <style>
  .button-container {
    display: flex;
    justify-content: center;
    width: 100%;
    margin-bottom: 20px;
  }

  .button-container a {
    display: inline-block;
    padding: 15px 30px;
    margin: 0 10px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }

  .button-container a.invest {
    background-color: #4CAF50; /* Green */
  }

  .button-container a.deposit {
    background-color: #2196F3; /* Blue */
  }

  .button-container a.withdraw {
    background-color: #f44336; /* Red */
  }

  @media (max-width: 767px) {
    .button-container {
      flex-wrap: wrap;
    }

    .button-container a {
      width: 100%;
      margin-bottom: 10px;
    }
  }
</style>
 <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
    <style>
        .chart-container {
            width: 80%;
            height: 400px;
            margin: 40px auto;
        }

        @media  only screen and (max-width: 600px) {
            .chart-container {
                width: 100%;
            }
        }
        
    </style>
    <!--/othercss-->

</head>

<body>
    <!-- Overlayer -->
    <span class="toTopBtn">
        <i class="fas fa-angle-up"></i>
    </span>
    <div class="overlayer"></div>
    <div class="loader"></div>
    <!-- Overlayer -->

        <!-- User Dashboard -->
    <main class="dashboard-section">
		<aside class="dashboard-sidebar">
    <div class="bg--gradient">&nbsp;</div>
    <div class="dashboard-sidebar-inner">
        <div class="user-sidebar-header">
            <a href="#">
                <img style="margin: auto; height: auto; width: 200px;" src="assets/images/TOGtQZ2r1702527633.png" alt="logo">
            </a>
            <div class="sidebar-close">
                <span class="close">&nbsp;</span>
            </div>
        </div>
        <div class="user-sidebar-body">
           <ul class="user-sidbar-link">
    <li>
        <span class="subtitle"><strong>KEY FUNCTIONS</strong></span>
    </li>
    <li>
        <a href="#" class="">
            <span class="icon"><i class="fas fa-home"></i></span>
            <strong>Back To Home</strong>
        </a>
    </li>
    <li>
        <a href="?a=account" class="active">
            <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
            <strong>Dashboard</strong>
        </a>
    </li>
    
    

    <li>
      
        <a href="?a=deposit_list" class="">
            <span class="icon"><i class="fas fa-chart-bar"></i></span>
            <strong>Investment Plans</strong>
        </a>
    </li>
    <li>
        <a href="?a=add_funds" class="">
            <span class="icon"><i class="fas fa-money-check"></i></span>
            <strong>Deposit Funds</strong>
        </a>
    </li>
    <li>
        <a href="?a=withdraw" class="">
            <span class="icon"><i class="fas fa-money-bill-wave"></i></span>
            <strong>Withdraw Funds</strong>
        </a>
    </li>
    <li>
        <span class="subtitle"><strong>ACTIVITIES LOGS</strong></span>
    </li>
    <li>
        <a href="?a=earnings" class="">
            <span class="icon"><i class="fas fa-history"></i></span>
            <strong>Deposit History</strong>
        </a>
    </li>
    <li>
        <a href="?a=earning" class="">
            <span class="icon"><i class="fas fa-chart-line"></i></span>
            <strong>Plan History</strong>
        </a>
    </li>
  
    <li>
        <a href="?a=earnings" class="">
            <span class="icon"><i class="fas fa-money-bill-wave"></i></span>
            <strong>Withdrawal History</strong>
        </a>
    </li>
    <li>
        <a href="?a=earnings" class="">
            <span class="icon"><i class="fas fa-list-alt"></i></span>
            <strong>Transactions History</strong>
        </a>
    </li>
<!--
    <li>
        <span class="subtitle"><strong>PEER-TO-PEER TRANSFER</strong></span>
    </li>
    <li>
        <a href="user/money-transfer" class="">
            <span class="icon"><i class="fas fa-paper-plane"></i></span>
            <strong>Send Money</strong>
        </a>
    </li>
    <li>
        <a href="user/money-request" class="">
            <span class="icon"><i class="fas fa-hand-holding-usd"></i></span>
            <strong>Request Money</strong>
        </a>
    </li>
    <li>
        <a href="user/request-money/receive" class="">
            <span class="icon"><i class="fas fa-money-check"></i></span>
            <strong>Received Request Money</strong>
        </a>
    </li>
-->
    <li>
        <span class="subtitle"><strong>INVITE FRIENDS</strong></span>
    </li>

    <li>
        <a href="?a=referals" class="">
            <span class="icon"><i class="fas fa-percentage"></i></span>
            <strong>Referral Commissions</strong>
        </a>
    </li>

    <li>
        <span class="subtitle"><strong>PROTECTION AND USER CONFIGURATION</strong></span>
    </li>
   
    <li>
        <a href="?a=support" class="">
            <span class="icon"><i class="fas fa-headset"></i></span>
            <strong>Contact Customer Care</strong>
        </a>
    </li>
    <li>
        <a href="?a=security" class="">
            <span class="icon"><i class="fas fa-lock"></i></span>
            <strong>Two-Factor Authenticator</strong>
        </a>
    </li>
    <li>
        <a href="user/login-history" class="">
            <span class="icon"><i class="fas fa-key"></i></span>
            <strong>Login History</strong>
        </a>
    </li>

    <li>
        <a href="?a=edit_account" class="">
            <span class="icon"><i class="fas fa-user-circle"></i></span>
            <strong>Update Account</strong>
        </a>
    </li>

    <li>
        <a href="?a=logout">
            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
            <strong>Logout Account</strong>
        </a>
    </li>
</ul>
        </div>
    </div>
</aside>









        <article class="main--content">
			<div class="dashboard-header bg--gradient" style="position: sticky; top: 0; z-index: 999;">
    <div class="navbar-top">
        <div class="container-fluid">
            <ul class="d-flex align-items-center justify-content-between py-1 py-md-0">
                <li>
                    <div class="nav-toggle me-3">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </li>
                <li class="me-3">

<a href="/cdn-cgi/l/email-protection#9be8eeebebf4e9efdbe8f6fae9eff6e3efb5f8f4f6">
  <i class="fas fa-envelope" style="font-size: 30px; color: white;"></i>
</a> &nbsp;&nbsp;&nbsp;  
<a href="https://t.me/" target="new">
  <i class="fab fa-telegram" style="font-size: 30px; color: #0088cc;"></i>
</a> &nbsp;&nbsp;&nbsp; 
<a href="https://wa.me/0">
  <i class="fab fa-whatsapp" style="font-size: 30px; color: green;"></i>
</a>

                </li>
               
                
                <li class="me-3">
                   <div class="mode--toggle">
                        <i class="fas fa-moon" ></i>
                    </div> 
                </li>

                <li class="position-relative">
                    <a  class="dashboard-header-profile">
                        <img src="assets/images/1705082301294108680_170630982129258_942886522207825314_n.jpg" alt="clients">
                        <div class="name d-none d-sm-block">
                           <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>

                        </div>
                    </a>
                    <div class="user-toggle-menu">
                        <ul>
                            <li>
                                <a href="?a=security">
                                    <i class="fas fa-lock"></i>
                                    2FA Security                                </a>
                            </li>
                        
                            <li>
                                <a href="?a=edit_account">
                                    <i class="fas fa-user-circle"></i>
                                    Update Account                                </a>
                            </li>
                            <li>
                                <a href="?a=logout">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>            <div class="dashborad--content">
				<?php }
}
?>