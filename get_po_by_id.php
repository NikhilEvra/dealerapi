<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['po_id'])){
    $po_id = $_GET['po_id'];
}

// $d_id = '11';

$response = array();
if($con){
    $sql = "select * from cart where  `po_id` = '$po_id' AND `status` = 'Po-Approved'  ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['company_status'] = $row['company_status'];
            $response [$x]['model'] = $row['model'];
            $response [$x]['varient'] = $row['varient'];
            $response [$x]['quantity_with_batt'] = $row['quantity_with_batt'];
            $response [$x]['quantity_without_batt'] = $row['quantity_without_batt'];
            $response [$x]['amountWithOutBatt'] = $row['amountWithOutBatt'];
            $response [$x]['amountWithBatt'] = $row['amountWithBatt'];
            $response [$x]['total'] = $row['total'];
            $response [$x]['withput_gst'] = $row['amountWithOutBatt'] + $row['amountWithBatt'];
            $response [$x]['spare_part_id'] = $row['spare_part_id'];
            $response [$x]['spare_part_qty'] = $row['spare_part_qty'];

           
            $x++;
          
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>