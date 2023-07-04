<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
$dealer_id = $_POST['dealerid'];
$amount = $_POST['amount'];

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

// if($con){ 
//     $sql = "INSERT INTO `po`(`id`, `dealer_id`, `model`, `unit_price`, `amount`, `quantity`, `final_amt`) VALUES ('null','$name','".$_POST['model']."','".$_POST['unit_price']."','".$_POST['amount']."','".$_POST['quantity']."','12')";
//     $result = mysqli_query($con,$sql);
//     if($result){
//         echo json_encode(['status'=>true,'message'=>'Success!']);
//     }else{
//         echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
//     }
// }

$random = rand(11111,99999); 
$po_id = "EE/PO/" . $random;

if($con){ 
    $q = "SELECT * FROM cart where ( `dealer_id`, `status`) = ('$dealer_id','Open')";

$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)) {
  
  $id = $row['id'];   

  $sql = "UPDATE `cart` SET `status`='PO-Pending',`po_id`='$po_id' WHERE id = '$id' ";
      
 $result = mysqli_query($con,$sql);
}


$data="SELECT SUM(total) AS 'Total' FROM cart WHERE po_id = '$po_id' AND status = 'PO-Pending' ";
$result3 = mysqli_query($con,$data);
while($row = mysqli_fetch_array($result3)) {

  $amount = $row['Total'];
}

$sql2 = "INSERT INTO `po`(`id`, `po_id`, `dealer_id`, `amount`, `status`, `add_date`, `add_time`) 
VALUES ('null','$po_id','$dealer_id','$amount','PO-Pending','$d','$t')"; 
$result2 = mysqli_query($con,$sql2);

$sql3 = "INSERT INTO `notifications`(`id`, `panel`, `message`, `status`, `date`, `time`, `sender_panel`, `sender_id`,`po_id`)
VALUES (Null,'Services','New Po Raised','Active','$d','$t','Dealer','$dealer_id','$po_id')";

$sql4 = "INSERT INTO `notifications_entry`(`id`, `n_id`, `date`, `time`, `po_id`) VALUES (Null,'$dealer_id','$d','$t','$po_id')";
$result3 = mysqli_query($con,$sql3);
$result4 = mysqli_query($con,$sql4);

if($result && $result2 && $result3 && $result4){
    echo json_encode(['status'=>true,'message'=>'Success!']);
}else{
    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
}    
   
}

?>