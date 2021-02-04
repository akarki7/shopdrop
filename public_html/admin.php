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
 
 
 
$email=$_POST['u_email'];
$pass=$_POST['psw'];
 
$sql="SELECT * FROM Administrator;";
 
$query=$conn->query($sql);

$row = mysqli_fetch_array($query);
$admin_email=$row['email'];
$admin_pass=$row['u_password'];

if($admin_email==$email AND $admin_pass==$pass)
{
    session_start();
    $_SESSION["email"]=1;
    $_SESSION["duration"]=time();
    header("Location:maintenance.php");
}
else
{
    header("Location:error_page.php");
}
 
 
$conn->close();
exit();
?>
