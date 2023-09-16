<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$zone = $_POST['zone'];
$user_type = $_POST['user_type'];
$model = $_POST['model'];


$response = array();
if($con){
    if($usertype == 'Dealer'){
    $sql = "select * from spare_parts where zone = '$zone' AND model = '$model' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['item'] = $row['item'];
            $response [$x]['qty'] = $row['qty'];
            $response [$x]['dealer_price'] = $row['dealer_price'];
            $response [$x]['model'] = $row['model'];
            $response [$x]['zone'] = $row['zone'];

            $x++;
        }
        
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    }
    elseif($usertype == 'Sub-Dealer'){
        $sql = "select * from spare_parts where zone = '$zone' AND model = '$model' ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response [$x]['id'] = $row['id'];
                $response [$x]['item'] = $row['item'];
                $response [$x]['qty'] = $row['qty'];
                $response [$x]['dealer_price'] = $row['sub_dealer_price'];
                $response [$x]['model'] = $row['model'];
                $response [$x]['zone'] = $row['zone'];

    
    
                $x++;
            }
            
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        }
  

}
else{
    echo "error connecting database";
}
?>