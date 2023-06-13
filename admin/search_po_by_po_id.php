<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['po_id'])){
    $po_id = $_GET['po_id'];
}
    
$response = array();
if($con){
    $sql = "select * from po where `po_id` = '$po_id'  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealer_id'];
            $response [$x]['po_id'] = $row['po_id'];
            $response [$x]['approved_time'] = $row['approved_time'];
            $response [$x]['approved_date'] = $row['approved_date'];
            $response [$x]['amount'] = $row['amount'];
            $response [$x]['status'] = $row['status'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>
