<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "database123";

$conn = mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$send_acc = $_POST["sender"];
	$amount = $_POST["amount"];
	$recipient = $_POST["recipient"];

	$sql_query = "INSERT INTO transaction (sender_accno,amount,recipient_accno) VALUES ('$send_acc','$amount','$recipient')";

	if(mysqli_query($conn, $sql_query))
	{
		
 	
 	echo '<script>alert("Your Transaction is Successful");</script>';
 	

	}
	else
	{
		echo"Error: " . $sql . "" . mysqli_error($conn);
	}
	
	$conn1 = mysqli_connect("localhost","root","","bankdata");
if(!$conn1)
{
	die("Connection Failed:" . mysqli_connect_error());
}

 $sql = "SELECT * FROM bank where account_no=$send_acc";
 $query = mysqli_query($conn1,$sql);
 $sql1 = mysqli_fetch_array($query);

 $sql = "SELECT * FROM bank where account_no=$recipient";
 $query = mysqli_query($conn1,$sql);
 $sql2 = mysqli_fetch_array($query);

 if(($amount)<0)
 {
 	echo '<script type="type/javascript">';
 	echo 'alert("No Negative values Allowed")';
 	echo '</script>';
 }

 else if($amount > $sql1['Current_Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry!! Balance Insufficient")';  // showing an alert box.
        echo '</script>';
    }
      else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
 else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['Current_Balance'] - $amount;
                $sql = "UPDATE bank set Current_Balance=$newbalance where account_no=$send_acc";
                mysqli_query($conn1,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['Current_Balance'] + $amount;
                $sql = "UPDATE bank set Current_Balance=$newbalance where account_no=$recipient";
                mysqli_query($conn1,$sql);
        }

 mysqli_close($conn);
}


