<?php
$servername = "10.72.1.14"; //clabsql
$username = "group13"; //grouname
$password = "ObCMxC"; //group password
$database_name="group13";
 
// Create connection
$conn = new mysqli($servername, $username, $password,$database_name);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 
 
 
$amount=$_POST['amount'];
$option=$_POST['paymentmethod'];


//$query=$conn->query("INSERT INTO Paypal(payment_ID) VALUES ('');");
//$query=$conn->query("INSERT INTO Payment (amount) VALUES ($amount);");

if($option==1)
{
    $query=$conn->query("INSERT INTO Payment (amount) VALUES ($amount);");
    $sql="SELECT max(payment_ID) AS PID FROM Payment";
    $query2=$conn->query($sql);
    $row=mysqli_fetch_array($query2);
    $data=$row['PID'];
    $query=$conn->query("INSERT INTO Paypal (payment_ID) VALUES ($data);");
}
else
{
    $query=$conn->query("INSERT INTO Payment (amount) VALUES ($amount);");
    $sql="SELECT max(payment_ID) AS PID FROM Payment";
    $query2=$conn->query($sql);
    $row=mysqli_fetch_array($query2);
    $data=$row['PID'];
    $query=$conn->query("INSERT INTO Direct_debit (payment_ID) VALUES ($data);");
}
 
 
if ($query===TRUE) //checking if query is succesfull or not
{ //success
   header("Location:Response.php?status=200"); //change
}
else
{//failure
   header("Location:Response.php?status=302");
}
 
 
$conn->close();
exit();
?>
 
