<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from replace_sparepart where `status` = 'Open'  ORDER BY id DESC ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealerid'];
            $response [$x]['part_name'] = $row['part_name'];
            $response [$x]['part_no'] = $row['part_no'];
            $response [$x]['warranty_info'] = $row['warranty_info'];
            $response [$x]['chassis'] = $row['chassis'];
            // $response [$x]['status'] = $row['status'];
            $response [$x]['model'] = $row['model'];
            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['color'] = $row['color'];
            $response [$x]['remark'] = $row['remark'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>