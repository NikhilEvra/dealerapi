<?php

header('Access-Control-Allow-Origin: *');  

include ('config.php');
$model = $_POST['model'];
$response = array();
if($con){
    $sql = "select * from company_color_inv where  `model` = '$model'  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['color'] = $row['color'];
            $response [$x]['p_id'] = $row['p_id'];
            $response [$x]['banner'] = $row['banner_image'];
            $response [$x]['price_wb'] = $row['price_wb'];
           
            $x++;
           
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>