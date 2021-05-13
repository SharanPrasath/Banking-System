<!DOCTYPE html>
<html>
<head>
	<title>Bank Details</title>
	  <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<style type="text/css">

		.database {
			position: relative;
			width: 80%;
			color: #000000;
			font-family: "Montserrat";
			font-weight: bold;
			text-align: center;
			padding-left: 400px;
			letter-spacing: 1.2px;
			line-height: 5rem;
			background-color: #FBEEE6;
			margin-left: 150px;
			opacity: 0.5;
			border-radius: 25px;
			margin-top: 180px;
		}
		.tablehead {
			font-weight: bolder;
		}
		tr {
			padding: 50px;
		}
		.navbar-brand {
			font-family: "Montserrat";
			font-weight: bold;
			padding-left: 90px;
		}
		#navbarTogglerDemo02 {
			font-family: "Montserrat";
			font-weight: bold;
			padding-right:90px;
			}
		.mycol {
			background-color: #000000 ;
	        background-image: url(https://images.unsplash.com/photo-1532540859745-7b3954001b75?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80);
	        background-repeat: no-repeat;
	        background-size: 2100px;
		}
		.Copyright {
font-family:"Montserrat";
font-weight:bold;
}
		.heading{
			width: 100%;
			text-align: center;
			font-family: "Montserrat";
			font-weight: bold;
			color: #FBEEE6;
					}
		.transfer-button {
			font-family: "Montserrat";
			text-align: center;
			margin-left: 600px;
			margin-top: 40px;
			padding-top: 5px;
			margin-bottom: 40px;
			width: 20%;
		}
		#footer {
	  text-align: center;
	  padding-top: 3%;
	  padding-bottom: 1%;

	  padding-right: 15rem;
	  padding-left: 15rem;
	}
	.iconf {
  color: #FBEEE6;
  width: 10%;
  padding: 1%;
  font-size: 30px;
}
.searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
    .card {
    	position: absolute;
    	width: 50%;
    	border-radius: 90px;
    	margin-left: 160px;
    	margin-top: 50px;
    	background-color: #FBEEE6;
    	opacity: 0.8;
    }
     .search-button {
     	text-align: center;
     	margin-left: 120px;
     }







	</style>
</head>
<body>
	<div class="mycol">
	    <nav class="navbar navbar-expand-lg navbar-dark">

      <a class="navbar-brand" href=""><i class="far fa-credit-card"></i> Banking System</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bank.php">Database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfer.html">Transfer</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="showtran.php">History</a>
          </li>
        </ul>

      </div>
    </nav>
<div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form action="search.php" method="post" >
                                 <!-- End -->
                    <!-- Paypal info -->
                    
                    <!-- bank transfer info -->
                    <div id="net-banking" >
                        <div class="form-group ">  <select class="form-control" id="ccmonth" name="sender">
                                <option value="" selected disabled>--Select Acc.No to view details--</option>
                                <option>123456</option>
                                <option>234567</option>
                                <option>345678</option>
                                <option>456789</option>
                                <option>567890</option>
                                <option>678901</option>
                                <option>789012</option>
                                <option>890123</option>
                                <option>901234</option>
                                <option>12345</option>
                            </select> </div>
                             
                             
                        <div class="form-group">
                            <p> <a href="database.php"><button type="submit" name="save" class="btn btn-outline-danger search-button ">Search</button></a> </p>
                        </div>
                        
                        
                     <!-- End -->
                    <!-- End -->
                </div>
            
            </div>
        </div>
            </div>
        </div>
    </div>
    </form>




<table class="database">
	<tr class="tablehead">
		<th>Name</th>
		<th>Email</th>
		<th>Current Balance</th>
		<th>Acc.No</th>
	
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root","","bankdata");
	if ($conn-> connect_error) {
		die("Connection failed:". $conn-> connect_error);
	}
	$sql = "SELECT Name, Email, Current_Balance, account_no from bank";
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0) {
		while($row = $result-> fetch_assoc()) {
			echo "<tr><td><button type='button' class='btn btn-outline-dark btn-lg ' href = 'user.php'>". $row["Name"]. "</button></td><td>". $row["Email"] ."</td><td>". $row["Current_Balance"] ."</td><td>". $row["account_no"]."</td></tr>";
		}

		echo "</table>";
	}
	else {
		echo "0 result";
	}
	$conn-> close();
	?>
</table>
      <a href="transfer.html"><button type="button" class="btn btn-outline-dark btn-lg transfer-button" href = "transfer.html"><i class="far fa-credit-card"></i>  Transfer</button></a>
      <footer id="footer">
 <a class="iconf" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
 <a class="iconf" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
 <a class="iconf" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
 <a class="iconf" href="https://mail.google.com/"><i class="fab fa-github-square"></i></a>

 <p class="Copyright">© Copyright 2021 Sharan </p>

</footer>

</div>
</body>
</html>