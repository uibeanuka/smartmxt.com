{include file="logo.tpl"}


<div class="breadcrumb-area">
    <script>
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

            var userName = "{$userinfo.username}";
            greeting += ", " + userName + " !";

            document.getElementById("greeting").innerHTML = greeting;
        });
    </script>
    <h6 id="greeting"></h6>
  
  
  
  <!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
</head>
<body>
    <div id="customStatusContainer">
        <!-- Display icon and text based on user's KYC status 
                    <i class="custom-icon custom-unverified fas fa-times-circle"></i>
            <span class="custom-unverified"><b>UNVERIFIED ACCOUNT</b></span>
            </div>
</body>
</html>
  -->
</div>
<div class="dashboard--content-item">
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

    <!-- Button to open the modal -->
    <button class="open-modal-btn" onclick="openModal()"> <i class="fas fa-certificate"></i> View Company Certificate</button>

    <!-- The Modal -->
    <div id="imageModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img src="assets/images/mrNNLg141703619921.png" alt="Company Certificate">
        </div>
    </div>

    <script>
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
    </script>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

  <div class="dashboard--wrapper">
        <div class="dashboard--width">
          <div class="dashboard-card h-100">
              
              <div class="dashboard-card__header">
                  <div class="dashboard-card__header__icon">
                      <img src="assets/images/gross.png" alt="wallet">
                  </div>
                  <div class="dashboard-card__header__cont">
                      <h6 class="name">Main Balance</h6>
                      <div class="balance">{fiat}{$ab_formated.total}<span style="font-size: small;">USD</span> </div>
                  </div>
              </div>
          </div>
       </div>

        <div class="dashboard--width">
            <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/money.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Profit Balance</h6>
                        <div class="balance">{fiat}{$ab_formated.earning}<span style="font-size: small;">USD</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard--width">
            <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/deposit.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Deposit</h6>
                        <div class="balance">{$ab_formated.deposit|fiat}<span style="font-size: small;">USD</span></div>
                    </div>
                </div>
               <a href="/?a=deposit" class="custom-button">Deposit History</a>
            </div>
        </div>

        <div class="dashboard--width">
            <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/investing.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Investment</h6>
                        <div class="balance">{fiat}{$ab_formated.active_deposit}<span style="font-size: small;">USD</span></div>
                    </div>
                </div>
                <a href="?a=earnings" class="custom-button">View Investment</a>
            </div>
        </div>















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


<div class="dashboard--width">
    <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/cash-withdrawal.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Withdrawal</h6>
                        <div class="balance">{fiat}{$ab_formated.withdrawal}<span style="font-size: small;">USD</span></div>
                        
                        
                    </div>
                </div>
           
        <a href="/?a=withdraw" class="custom-button">Withdrawal History</a>
    </div>
</div>












        

        <div class="dashboard--width">
            <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/teamwork.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Refferal Commision</h6>
                        <div class="balance">{$ref_stat.total_commissions|fiat}<span style="font-size: small;">USD</span></div>
                    </div>
                </div>
                <a href="/?a=referals" class="custom-button">Referral Earning</a>
            </div>
        </div>

        <div class="dashboard--width">
            <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/transaction.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Transaction</h6>
                        <div class="balance">$0.00<span style="font-size: small;">USD</span></div>
                    </div>
                </div>
                <a href="?a=earning" class="custom-button">View All Transaction</a>
            </div>
        </div>

        <div class="dashboard--width">
            <div class="dashboard-card h-100">
                
                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="assets/images/tickets.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Customer Support Ticket</h6>
                        <div class="balance">0<span style="font-size: small;"> Messages</span></div>
                    </div>
                </div>
                <a href="user/support-tickets" class="custom-button">Check Message</a>
            </div>
        </div>
  </div>
 
</div>

  
    <div class="row mb-3">
      <div class="col-md-12">
          <div class="card default--card">
              <div class="card-body">
                    <div class="form-group w-100 d-flex flex-wrap align-items-center justify-content-evenly justify-content-sm-between"><div class="dashboard-card__header__icon">
                      <img src="https://th.bing.com/th/id/R.d3feb67aa751239e56272f1bd12e4d02?rik=r2TmMfataIRo%2fQ&amp;pid=ImgRaw&amp;r=0" alt="KYC">
                  </div>
                      <h6 class="my-1 text-center text-sm-start">Important: Kindly submit your KYC Documents to complete the verification process.</h6>
                      <div class="my-1">
                        <a href="user/kyc-form" class="btn btn-warning">VERIFY ACCOUNT</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
       

    
    

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

<center>
  <h4>QUICK ACTION</h4>
</center>

<div class="button-container">
  <a href="?a=deposit_list" class="invest">BUY INVESTMENT PLAN</a>
  <a href="?a=deposit" class="deposit">DEPOSIT MONEY</a>
  <a href="?a=withdraw" class="withdraw">WITHDRAW MONEY</a>
</div>




<div class="dashboard--content-item">
  <div class="row gy-4">
      <div class="col-md-12">
          <div class="dashboard--content-item">
              <h5 class="dashboard-title">Referral URL</h5>
              <h6>Discover your referral link and start sharing to earn exciting commissions in this session!</h6>
              <div class="dashboard-refer">
                  <div class="input-group input--group">
                      <input type="text" class="form-control form--control" readonly
                          value="{$settings.site_url}/?ref={$userinfo.username}" id="cronjobURL">
                      <button class="input-group-text px-3 btn--primary border-0" type="button" id="copyBoard" onclick="myFunction()">
                          <i class="far fa-copy">  Copy Referral Link</i>
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


	      <h5 class="dashboard-title">Last 20 Transactions</h5>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        
    </style><div class="chart-container">
        <canvas id="transactionBarChart"></canvas>
    </div>

    <div class="dashboard-content">
        <div class="table-responsive">
           <div class="dashboard--content-item">
	  <div class="table-responsive table--mobile-lg">
		  <table class="table bg--body">
			  <thead>
				  <tr>
					<th>SERIAL NO</th>
					<th>TRANSACTION TYPE</th>
					<th>TRANSACTION ID</th>
					<th>TRANSACTION AMOUNT</th>
					<th>TRANSACTION DATE</th>
				  </tr>
			  </thead>
			  <tbody>
									<tr>
						<td colspan="12">
							<h4 class="text-center m-0 py-2">No Data Found</h4>
						</td>
					</tr>
							  </tbody>
		  </table>
	  </div>
</div>
        </div>
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const transactionRows = document.querySelectorAll('.table-responsive tbody tr');
            const transactionData = {};

            transactionRows.forEach(row => {
                const transactionType = row.querySelector('td:nth-child(2) div').textContent.trim();
                const transactionAmount = parseFloat(row.querySelector('td:nth-child(4) div p').textContent.replace('$', '').replace(',', ''));

                if (transactionData[transactionType]) {
                    transactionData[transactionType] += transactionAmount;
                } else {
                    transactionData[transactionType] = transactionAmount;
                }
            });

            const ctx = document.getElementById('transactionBarChart').getContext('2d');

            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: Object.keys(transactionData),
                    datasets: [{
                        label: 'Transaction Amount',
                        data: Object.values(transactionData),
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    },
                    layout: {
                        padding: {
                            top: 20
                        }
                    },
                    indexAxis: 'y', // To rotate labels for better mobile view readability
                    elements: {
                        bar: {
                            borderWidth: 2,
                        }
                    }
                }
            });
        });
    </script>

{include file="footer2.tpl"}