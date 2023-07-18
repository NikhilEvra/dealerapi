<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from po where `status` = 'Open' AND `company_status` = 'Accounts' AND `dept_status` = 'Check_payment' ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealer_id'];
            $response [$x]['po_id'] = $row['po_id'];
  
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
