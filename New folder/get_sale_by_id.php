<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include ('config.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
}
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    $sql = "select * from customer_sale_master where `id` = '$id' And  `dealer_id` = '$d_id'";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealer_id'] = $row['dealer_id'];
            $response [$x]['invoice'] = $row['invoice_id'];
            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['location'] = $row['location'];
            $response [$x]['model_name'] = $row['model_name'];
            $response [$x]['color'] = $row['color'];
            $response [$x]['dealer_id'] = $row['dealer_id'];
            $response [$x]['battery'] = $row['battery_no'];
            $response [$x]['charger'] = $row['charger_no'];
            $response [$x]['dealer_id'] = $row['dealer_id'];
            $response [$x]['motor'] = $row['motor_no'];
            $response [$x]['controller'] = $row['controller_no'];
            
        
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>