<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['varient'])){ 
    $varient = $_GET['varient'];
}
if (isset($_GET['m'])){
    $m = $_GET['m'];
}
if (isset($_GET['u_type'])){
    $u_type = $_GET['u_type'];
}


$response = array();
if($con){
    if($u_type = 'Dealer'){
        $sql = "select * from varients where  `color` = '$varient' AND  `p_name` = '$m'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                // $response [$x]['id'] = $row['id'];
                // $response [$x]['color'] = $row['color'];
                // $response [$x]['p_id'] = $row['p_id'];
                $response [$x]['price_wb'] = $row['price_wb'];
                
                $x++;
                
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
    }
    elseif($u_type = 'Sub-Dealer'){
        $sql = "select * from varients where  `color` = '$varient' AND  `p_name` = '$m'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                // $response [$x]['id'] = $row['id'];
                // $response [$x]['color'] = $row['color'];
                // $response [$x]['p_id'] = $row['p_id'];
                $response [$x]['price_wb'] = $row['price_wb_sub_dealer'];
                
                $x++;
                
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
    }
   
}else{
    echo "error connecting database";
}

?>