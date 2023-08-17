<?php

header('Access-Control-Allow-Origin: *');  

include ('config.php');

$response = array();
if($con){
    $sql = "select * from marketing_plan ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['plan_name'] = $row['plan_name'];
            $response [$x]['amt'] = $row['amt'];           
                    
            $x++;
           
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>