<?php
 header('Access-Control-Allow-Origin: *');  
 include ('config.php');

$response = array();
if($con){
    $sql = "select * from notifications where `status` = 'Active' AND `panel` = 'Operations' AND `seen` = '' ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['message'] = $row['message'];
            $response [$x]['panel'] = $row['panel'];
            $response [$x]['sender_panel'] = $row['sender_panel'];
            $response [$x]['status'] = $row['status'];
            $response [$x]['date'] = $row['date'];
            $response [$x]['time'] = $row['time'];
            $response [$x]['po_id'] = $row['po_id'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>
