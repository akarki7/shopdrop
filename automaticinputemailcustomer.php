<!-- mysql://b092d55fddc757:c9372d7a@eu-cdbr-west-01.cleardb.com/heroku_25e0815804b934e?reconnect=true -->
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

    $sql = "SELECT S.email AS Email FROM Sd_User S,customer C WHERE S.email=C.email ;";

    $data=$conn->query($sql);

    $result=array();

    if(mysqli_num_rows($data)>0)
    {
        while($row = mysqli_fetch_array($data)) 
        {
            $result[]=$row['Email'];
            //array_push($result,$row['Pname']);
        }
    }

    echo json_encode($result);
    $conn->close();

?>
