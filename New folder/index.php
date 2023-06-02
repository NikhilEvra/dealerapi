<?php
 header('Access-Control-Allow-Origin: *');  
$con = mysqli_connect("localhost","root", "","ionic");
$response = array();
if($con){
    $sql = "select * from user_master";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['name'] = $row['name'];
            $response [$x]['password'] = $row['password'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}


?>