<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from cart where `status` = 'PO-Pending'  ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealer_id'];
            $response [$x]['varient'] = $row['varient'];
            $response [$x]['quantity_with_batt'] = $row['quantity_with_batt'];
            $response [$x]['quantity_without_batt'] = $row['quantity_without_batt'];
            $response [$x]['amount_with_batt'] = $row['quantity_without_batt'];
             $response [$x]['amountWithOutBatt'] = $row['amountWithOutBatt'];
            $response [$x]['model'] = $row['model'];
            $response [$x]['add_time'] = $row['add_time'];
            $response [$x]['add_date'] = $row['add_date'];
            $response [$x]['total'] = $row['total'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>