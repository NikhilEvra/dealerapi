
<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['po_id'])){
    $po_id = $_GET['po_id'];
}

$response = array();
if($con){
    $sql = "select * from po where `po_id` = '$po_id' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['accounts_remarks'] = $row['accounts_remarks'];
            $response [$x]['operations_remarks'] = $row['operations_remarks'];
            $response [$x]['store_remarks'] = $row['store_remarks'];
            $response [$x]['dealer_remarks'] = $row['dealer_remarks'];
                 
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    
}else{
    echo "error connecting database";
}

?>