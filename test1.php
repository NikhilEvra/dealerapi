<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from product where status = 'Active' ";
    $result = mysqli_query($con,$sql);
    if($result){
     
        while($row = mysqli_fetch_assoc($result)) {
            $response ['id'] = $row['id'];
            $response ['name'] = $row['name'];
            $response ['p_id'] = $row['p_id'];
            $response ['image'] = $row['image'];
            
           
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>