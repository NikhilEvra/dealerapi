<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from complaints where `status` = 'Open'  ORDER BY id DESC ";
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
            $response [$x]['c_time'] = $row['c_time'];
            $response [$x]['c_date'] = $row['c_date'];
            $response [$x]['remark'] = $row['remark'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>