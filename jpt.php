<?php
$servername = "localhost"; //
$username = "root"; //grouname
$password = ""; //group password
$database_name="HW4";

// Create connection
$conn = new mysqli($servername, $username, $password,$database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$user=$_POST['u_name'];
$email=$_POST['u_email'];
$pass=$_POST['psw'];
$phone=$_POST['phone_num'];
$add=$_POST['address'];

if($phone=='')
{
  $phone="NULL";
}
if($add=='')
{
  $add=NULL;
}
//$sql="insert into Sd_User (U_name, email, u_password, u_address, phoneno) values ($user,$email,$pass,$phone,$add)";
//$sql="insert into Sd_User (U_name, email, u_password, u_address, phoneno) values ('Ak','aa@gmailc','abcd','Bremen',1234562)";
$sql="insert into Sd_User (U_name, email, u_password, u_address, phoneno) values ('$user','$email','$pass','$add',$phone);";

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


