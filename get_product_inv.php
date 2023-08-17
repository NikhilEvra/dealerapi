<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    $sql = "select * from product where status = 'Active' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['name'] = $row['name'];
            $response [$x]['p_id'] = $row['p_id'];
            $response [$x]['image'] = $row['image'];
            
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>