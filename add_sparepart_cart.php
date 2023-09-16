<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);

$dealerid = $_POST['d_id'];
$model = $_POST['model'];
$item = $_POST['item'];
$qty = $_POST['quantity'];
$t_price = $_POST['t_price'];
$unit_price = $_POST['unit_price'];
$s_id = $_POST['s_id'];


$gst = $t_price * 28 / 100;
$grand_total = $t_price + $gst;

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

if($con){ 
    $sql = "INSERT INTO `cart`(`id`, `status`, `dealer_id`, `model`, `varient`, `spare_part_qty`, `spare_part_id`, `unit_price`, `without_tax_total`, `total`, `add_time`, `add_date`) 
    VALUES ('null','Open','$dealerid','$model','$item','$qty','$s_id','$unit_price','$t_price','$grand_total','$t','$d')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>