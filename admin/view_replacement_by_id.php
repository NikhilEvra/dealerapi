<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$response = array();
if($con){
    $sql = "select * from replace_sparepart where `id` = '$id' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            // $response [$x]['id'] = $row['id'];
            $response [$x]['dealerid'] = $row['dealerid'];
            $response [$x]['part_name'] = $row['part_name'];
            $response [$x]['part_no'] = $row['part_no'];
            $response [$x]['warranty_info'] = $row['warranty_info'];
            $response [$x]['chassis'] = $row['chassis'];
            $response [$x]['replace_id'] = $row['replace_id'];
            $response [$x]['model'] = $row['model'];
            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['color'] = $row['color'];
            $response [$x]['remark'] = $row['remark'];

            $response [$x]['c_name'] = $row['c_name'];
            $response [$x]['sale_date'] = $row['sale_date'];
            $response [$x]['warranty'] = $row['warranty'];
            $response [$x]['docked'] = $row['docked'];

            $response [$x]['courier'] = $row['courier'];
            $response [$x]['courier_partner'] = $row['courier_partner'];
            $response [$x]['warranty'] = $row['warranty'];
            $response [$x]['status'] = $row['status'];
            $response [$x]['file'] = $row['file'];
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>