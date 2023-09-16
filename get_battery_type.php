<?php
  header('Access-Control-Allow-Origin: *');  
  header('Content-Type: application/json');
 include ('config.php');

$model = $_POST['model'];
$plan_type = $_POST['plan_type'];



$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM model_battery where  `model` = '$model' AND `plan_type` = '$plan_type'  ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
    }
 
  
 
        $sql = "select * from model_battery where  `model` = '$model' AND `plan_type` = '$plan_type'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response [$x]['id'] = $row['id'];
                $response [$x]['battery'] = $row['battery'];
              
                
                $x++;
                
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        } 
    
    
}else{
    echo "error connecting database";
}

?>