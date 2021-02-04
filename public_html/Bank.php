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
 
 
 
$name=$_POST['u_name'];
$account=$_POST['acc_num'];
$balance=$_POST['balance'];
 
$sql="INSERT INTO bankaccount (acc_name, acc_num, balance) VALUES ('$name',$account,$balance);";
 
$query=$conn->query($sql);
 
 
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
