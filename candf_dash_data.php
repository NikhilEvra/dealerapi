<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); 
include ('config.php');

$state = $_POST['state'];

$response = array();

if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM user_master where  `user_type` != 'C&F' AND `state` = '$state' ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
        echo json_encode($b,JSON_PRETTY_PRINT);
    }
} else{
    echo "error connecting database";
}

?>