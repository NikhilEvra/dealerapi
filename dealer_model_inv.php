<?php
 header('Access-Control-Allow-Origin: *');  
 include ('config.php');

$d_id = $_POST['d_id'];

if($con){
    $sql = "select * from model_inv where dealer_id = '$d_id' and inventory>0 ";
    $result = mysqli_query($con,$sql);
 
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['model'] = $row['model'];
       
            
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
        
    }
} else{
    echo "error connecting database";
}




?>