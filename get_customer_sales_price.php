<?php

header('Access-Control-Allow-Origin: *');  

include ('config.php');
$model = $_POST['model'];
$color = $_POST['color'];
$battery = $_POST['battery'];


$response = array();
if($con){
    if( $battery = 'Lithium ion' ){
        $sql = "select * from customer_price where  `model` = '$model' AND `color` = '$color'   ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
          
                $response [$x]['price'] = $row['lithum_price'];
            
               
                $x++;
               
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
    }
    elseif( $battery = 'Lead acid' ){
        $sql = "select * from customer_price where  `model` = '$model' AND `color` = '$color'   ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
            
                $response [$x]['price'] = $row['lead_price'];
            
               
                $x++;
               
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
    }
   
}else{
    echo "error connecting database";
}

?>