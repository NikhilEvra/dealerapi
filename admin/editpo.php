<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);

$po_id = $_POST['po_id'];
$model = $_POST['model'];
$dealer_id = $_POST['dealerid'];
$varient = $_POST['varient'];
$q_w_b = $_POST['q_w_b'];
$q_wo_b = $_POST['q_wo_b'];
$amt_w_b = $_POST['amt_w_b'];
$amt_wo_b = $_POST['amt_wo_b'];
$id = $_POST['id'];

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

$total = $amountWithOutBatt + $amountWithBatt;
$gst = $total * 5 / 100;
$grand_total = $total + $gst;



if($con){ 
    $q = "SELECT * FROM cart where ( `po_id`, `id`) = ('$po_id','$id')";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)) {
  
  $id = $row['id'];   
  $po_id = $row['po_id'];   
  $status = $row['status'];   
  $dealer_id = $row['dealer_id'];   
  $model = $row['model'];   
  $varient = $row['varient'];   
  $quantity_with_batt = $row['quantity_with_batt'];   
  $quantity_without_batt = $row['quantity_without_batt'];   
  $amountWithOutBatt = $row['amountWithOutBatt'];   
  $amountWithBatt = $row['amountWithBatt'];   
  $unit_price = $row['unit_price'];   
  $total = $row['total'];   
  $without_tax_total = $row['without_tax_total'];   
  $add_time = $row['add_time'];   
  $add_date = $row['add_date'];   
  $approved_time = $row['approved_time']; 
  $approved_date = $row['approved_date'];   
  $disapprove_time = $row['disapprove_time'];   
  $disapprove_date = $row['disapprove_date'];   


   

  $sql = "INSERT INTO `cart_backup`(`id`, `po_id`, `status`, `dealer_id`, `model`, `varient`, `quantity_with_batt`, `quantity_without_batt`, `amountWithOutBatt`,
  `amountWithBatt`, `unit_price`, `total`, `without_tax_total`, `add_time`, `add_date`, `approved_time`, `approved_date`, `disapprove_time`, `disapprove_date`) 
 VALUES (null,'$po_id','$status','$dealer_id','$model','$varient','$quantity_with_batt','$quantity_without_batt','$amountWithOutBatt','$amountWithBatt',
 '$unit_price','$total','$without_tax_total','$add_time','$add_date','$approved_time','$approved_date','$disapprove_time','$disapprove_date') ";
     
  $result = mysqli_query($con,$sql);
}

$sql2 = "UPDATE `cart` SET `model` = '$model',
`varient`='$varient',
`quantity_with_batt`='$q_w_b',
`amountWithBatt`='$amt_w_b',
`quantity_without_batt`='$q_wo_b',
`amountWithOutBatt`='$amt_wo_b',
`total`='$grand_total',
`without_tax_total`='$total',
`add_time`='$t',
`add_date`='$d'
 WHERE po_id = '$po_id' AND id = '$id'";
 $result2 = mysqli_query($con,$sql2);


if($result && $result2){
    echo json_encode(['status'=>true,'message'=>'Success!']);
}else{
    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
}    
   
}

?>