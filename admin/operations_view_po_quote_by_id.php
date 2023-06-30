<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


if (isset($_GET['po_id'])){
    $po_id = $_GET['po_id'];
}

$response = array();
if($con){
    $sql = "select * from po where `po_id` = '$po_id' ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealer_id'];
            $response [$x]['po_id'] = $row['po_id'];
            // $response [$x]['add_time'] = $row['add_time'];
            $response [$x]['quote'] = $row['quote'];
            $response [$x]['amount'] = $row['amount'];
            $response [$x]['company_status'] = $row['company_status'];
            $response [$x]['dept_status'] = $row['dept_status'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>
