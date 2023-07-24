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
  VALUES (null,$po_id,[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],
  [value-16],[value-17],[value-18],[value-19]) ";
      
 $result = mysqli_query($con,$sql);
}


// $data="SELECT SUM(total) AS 'Total' FROM cart WHERE po_id = '$po_id' AND status = 'PO-Pending' ";
// $result3 = mysqli_query($con,$data);
// while($row = mysqli_fetch_array($result3)) {

//   $amount = $row['Total'];
// }

// $sql2 = "INSERT INTO `po`(`id`, `po_id`, `dealer_id`, `amount`, `status`, `add_date`, `add_time`) 
// VALUES ('null','$po_id','$dealer_id','$amount','PO-Pending','$d','$t')"; 
// $result2 = mysqli_query($con,$sql2);

// $sql3 = "INSERT INTO `notifications`(`id`, `panel`, `message`, `status`, `date`, `time`, `sender_panel`, `sender_id`,`po_id`)
// VALUES (Null,'Services','New Po Raised','Active','$d','$t','Dealer','$dealer_id','$po_id')";

// $sql4 = "INSERT INTO `notifications_entry`(`id`, `n_id`, `date`, `time`, `po_id`) VALUES (Null,'$dealer_id','$d','$t','$po_id')";
// $result3 = mysqli_query($con,$sql3);
// $result4 = mysqli_query($con,$sql4);

if($result){
    echo json_encode(['status'=>true,'message'=>'Success!']);
}else{
    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
}    
   
}

?>