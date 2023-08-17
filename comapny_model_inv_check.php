<?php
 header('Access-Control-Allow-Origin: *');  
 include ('config.php');

$model = $_POST['model'];

if($con){
    $sql = "select * from company_model_inv where model = '$model' and inventory > 0 ";
    $result = mysqli_query($con,$sql);
 
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if($row['inventory'] >0){  
                echo json_encode(['status'=>200,'message'=> 'Found!!!' ],JSON_PRETTY_PRINT);
                $x = 1;
            }
        }
        if($x == 0){
            echo json_encode(['status'=>400,'message'=> $model.' is coming soon!!!' ],JSON_PRETTY_PRINT);
        }
    }
}else{
    echo "error connecting database";
}




?>