<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    $sql = "select * from replace_sparepart where `dealerid` = '$d_id' AND `status` = 'Open'  ORDER BY id DESC";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['part_name'] = $row['part_name'];
            $response [$x]['part_no'] = $row['part_no'];
            $response [$x]['warranty_info'] = $row['warranty_info'];
            $response [$x]['remark'] = $row['remark'];
            $response [$x]['file'] = $row['file'];
            $response [$x]['chassis'] = $row['chassis'];
            $response [$x]['model'] = $row['model'];
            $response [$x]['color'] = $row['color'];
            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['sale_date'] = $row['sale_date'];
            $response [$x]['warranty'] = $row['warranty'];
            $response [$x]['docked'] = $row['docked'];
            $response [$x]['courier'] = $row['courier'];
            $response [$x]['courier_partner'] = $row['courier_partner'];
            
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>