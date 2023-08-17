<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');


// echo json_encode($_REQ  

// return json_encode($response);
$model = array(
  'EX1', 'EX2', 'EX2+', 'EX3', 'LUSTER', 'HELTER',
  'MINE'
);
if($con){ 
 
  foreach ($model as $x ) { 
    $sql = "INSERT INTO `model_inv`(`id`, `dealer_id`, `model`, `inventory`)
    VALUES (Null,'11','$x','0')";
    $result = mysqli_query($con, $sql);  
}

               
                

                if($result){
                    echo json_encode(['status'=>true,'message'=>'Success!']);
                }else{
                    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
                }
            }


?>