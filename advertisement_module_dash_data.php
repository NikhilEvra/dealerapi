<?php

header('Access-Control-Allow-Origin: *');  

include ('config.php');
$d_id = $_POST['d_id'];
$response = array();
if($con){
    $sql = "select * from dealer_adv where  `dealer_id` = '$d_id'  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['left_amt'] = $row['left_amt'];
       
           
            $x++;
           
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>