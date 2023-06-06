<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

// $d_id = '11';
if (isset($_GET['invoice_id'])){
    $invoice_id = $_GET['invoice_id'];
}
$response = array();
if($con){
    $sql = "select * from customer_sale_master where invoice_id = '$invoice_id' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['invoice_id'] = $row['invoice_id'];
            $response [$x]['dealer_id'] = $row['dealer_id'];
            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['c_mobile'] = $row['c_mobile'];

            $response [$x]['a_mobile'] = $row['a_mobile'];
            $response [$x]['email'] = $row['email'];
            $response [$x]['model_name'] = $row['model_name'];
            $response [$x]['color'] = $row['color'];
           
            $response [$x]['chassis_no'] = $row['chassis_no'];
            $response [$x]['battery_no'] = $row['battery_no'];
            $response [$x]['motor_no'] = $row['motor_no'];
            $response [$x]['charger_no'] = $row['charger_no'];
            $response [$x]['controller_no'] = $row['controller_no'];
            $response [$x]['amount'] = $row['amount'];
            $response [$x]['discount'] = $row['discount'];
            $response [$x]['sale_date'] = $row['sale_date'];

            $response [$x]['sale_time'] = $row['sale_time'];
            $response [$x]['city'] = $row['city'];
            $response [$x]['state'] = $row['state'];
            $response [$x]['c_pan'] = $row['c_pan'];
            $response [$x]['district'] = $row['district'];
            $response [$x]['pincode'] = $row['pincode'];
           
            $x++;
          
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>