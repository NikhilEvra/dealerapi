<?php
 header('Access-Control-Allow-Origin: *');  
 header('Content-Type: application/json');
include ('config.php');



$model = $_POST['model'];
$d_id = $_POST['id'];

$response = array();
if($con){
    $sql = "select * from color_inv  where  `model` = '$model' AND `dealer_id` = '$d_id'  AND inventory > 0  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            
            $response [$x]['id'] = $row['id'];
            $response [$x]['color'] = $row['color'];
            $x++;

        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>