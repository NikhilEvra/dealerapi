<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}
$response = array();
if($con){
    $sql = "select * from complaints where `status` = 'Closed' AND `name` = '$d_id'  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['name'] = $row['name'];
            $response [$x]['location'] = $row['location'];
            $response [$x]['designation'] = $row['designation'];
            $response [$x]['filename'] = $row['filename'];
            $response [$x]['topic'] = $row['topic'];
            $response [$x]['status'] = $row['status'];
            $response [$x]['complaint_id'] = $row['complaint_id'];
            $response [$x]['close_time'] = $row['close_time'];
            $response [$x]['close_date'] = $row['close_date'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>