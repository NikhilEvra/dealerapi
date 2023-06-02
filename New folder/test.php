<?php  
 header('Access-Control-Allow-Origin: *');  
 header('Content-Type: application/json');
include ('config.php');
// $model = $_POST['model'];
$response = array();
if($con){
    $sql = "select * from inventory where  `dealer_id` = '11'   ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['v'] = $row['EX1'];
             $response [$x]['v2'] = $row['EX2'];
            // $response [$x]['banner'] = $row['banner_image'];
            // $response [$x]['price_wb'] = $row['price_wb'];
            
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>