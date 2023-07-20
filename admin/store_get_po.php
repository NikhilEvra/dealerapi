<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from po where `status` = 'Open' AND `company_status` = 'Store' AND `dept_status` = 'Inventory check' ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealer_id'];
            $response [$x]['po_id'] = $row['po_id'];
            // $response [$x]['add_time'] = $row['add_time'];
            // $response [$x]['add_date'] = $row['add_date'];
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
