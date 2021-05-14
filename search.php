<!DOCTYPE html>
<html>
<head>
	  <title>Banking</title>
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
	  <style type="text/css">
	  	.mycol {
			background-color: #000000 ;
	        background-image: url(https://images.unsplash.com/photo-1532540859745-7b3954001b75?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80);
	        background-repeat: no-repeat;
	        background-size: 2100px;
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
		table {
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
			margin-top: 20px;
		}
		.myimg {
			width: 20%;
			margin-left: 600px;
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
			.Copyright {
			font-family:"Montserrat";
			font-weight:bold;
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
    <img class="myimg"  src="https://cdn4.iconfinder.com/data/icons/instagram-ui-twotone/48/Paul-18-512.png">
    <?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "bankdata";

$conn = mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$sender_accno = $_POST["sender"];

}
$sql = "SELECT * FROM bank where account_no=$sender_accno";
 $result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
 $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
 <table class="">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Current Balance</th>
                    <th class="text-center">Acc.No</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['Email'] ?></td>
                    <td class="py-2"><?php echo $rows['Current_Balance'] ?></td>
                    <td class="py-2"><?php echo $rows['account_no'] ?></td>
                </tr>
            </table>

<footer id="footer">
 <a class="iconf" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
 <a class="iconf" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
 <a class="iconf" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
 <a class="iconf" href="https://github.com/"><i class="fab fa-github-square"></i></a>

 <p class="Copyright">© Copyright 2021 Sharan </p>

</footer>
</div>

</body>
</html>
