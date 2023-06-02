<?php
 header('Access-Control-Allow-Origin: *');  
header('Content-Type : application/json');
echo json_encode($_REQUEST);
die(); 
include ('config.php');
$response = array();


if($con){
    $sql = "select * from admin";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['type'] = $row['type'];
            $response [$x]['slot'] = $row['slot'];
            $response [$x]['day_slot'] = $row['day_slot'];
            $response [$x]['class_slot'] = $row['class_slot'];
            $x++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>