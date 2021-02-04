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

    $sql = "SELECT pname AS Pname FROM Product;";

    $data=$conn->query($sql);

    $result=array();

    if(mysqli_num_rows($data)>0)
    {
        while($row = mysqli_fetch_array($data)) 
        {
            $result[]=$row['Pname'];
            //array_push($result,$row['Pname']);
        }
    }

    echo json_encode($result);
    $conn->close();

?>
