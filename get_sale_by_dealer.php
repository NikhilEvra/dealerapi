<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include ('config.php');

if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    $sql = "select * from customer_sale_master where `dealer_id` = '$d_id' ORDER BY id DESC";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealer_id'] = $row['dealer_id'];
            $response [$x]['invoice'] = $row['invoice_id'];
            $response [$x]['c_name'] = $row['c_name'];
        
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>