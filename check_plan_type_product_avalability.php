<?php
 header('Access-Control-Allow-Origin: *');  
 include ('config.php');

$model = $_POST['model'];
$plan_type = $_POST['plan_type'];


if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM model_battery where  `model` = '$model' AND `plan_type` = '$plan_type' ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
        echo json_encode($b,JSON_PRETTY_PRINT);
    }
   
}else{
    echo "error connecting database";
}




?>