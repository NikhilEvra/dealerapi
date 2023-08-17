<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
// if (isset($_GET['varient'])){ 
//     $varient = $_GET['varient'];
// }
// if (isset($_GET['m'])){
//     $m = $_GET['m'];
// }
// if (isset($_GET['u_type'])){
//     $u_type = $_GET['u_type'];
// }
// if (isset($_GET['battery'])){
//     $battery = $_GET['battery'];
// }

$m = $_POST['model'];
$u_type = $_POST['u_type'];
$battery = $_POST['battery'];
$varient = $_POST['varient'];


$response = array();
if($con){
    if($u_type = 'Dealer'){

        if($battery == 'Lithium ion'){
            $sql = "select * from dealer_subdealer_price where  `color` = '$varient' AND  `model` = '$m'   ";
            $result = mysqli_query($con,$sql);
            if($result){
                $x = 0;
                while($row = mysqli_fetch_assoc($result)) {
                   
                    $response [$x]['price_wb'] = $row['lithum_price_dealer'];
                    
                    $x++;
                    
                }
                echo json_encode($response,JSON_PRETTY_PRINT);
            }

        }
        elseif($battery == 'Lead acid'){
            $sql = "select * from dealer_subdealer_price where  `color` = '$varient' AND  `model` = '$m'   ";
            $result = mysqli_query($con,$sql);
            if($result){
                $x = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $response [$x]['price_wb'] = $row['lead_price_dealer'];
                    
                    $x++;
                    
                }
                echo json_encode($response,JSON_PRETTY_PRINT);
            }

        }
       
    }
    elseif($u_type = 'Sub-Dealer'){
        if($battery = 'L-ION'){
            $sql = "select * from dealer_subdealer_price where  `color` = '$varient' AND  `model` = '$m' ";
            $result = mysqli_query($con,$sql);
            if($result){
                $x = 0;
                while($row = mysqli_fetch_assoc($result)) {
                   
                    $response [$x]['price_wb'] = $row['lithum_price_subdealer'];
                    
                    $x++;
                    
                }
                echo json_encode($response,JSON_PRETTY_PRINT);
            }

        }
        elseif($battery = 'Lead Acid'){
            $sql = "select * from dealer_subdealer_price where  `color` = '$varient' AND  `model` = '$m'   ";
            $result = mysqli_query($con,$sql);
            if($result){
                $x = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $response [$x]['price_wb'] = $row['lead_price_subdealer'];
                    
                    $x++;
                    
                }
                echo json_encode($response,JSON_PRETTY_PRINT);
            }

        }
    }
   
}else{
    echo "error connecting database";
}

?>