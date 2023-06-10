<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

// $d_id = '11';
// if (isset($_GET['invoice_id'])){
//     $invoice_id = $_GET['invoice_id'];
// }

$response = array();
$per_page=10;
$start=0;
if($con){
    $sql = "select * from customer_sale_master ORDER BY id DESC limit $start,$per_page  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['invoice_id'] = $row['invoice_id'];
            $response [$x]['dealer_id'] = $row['dealer_id'];
            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['c_mobile'] = $row['c_mobile']; 
            $x++;    
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>