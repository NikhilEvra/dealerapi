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

if($result){
    echo json_encode(['status'=>true,'message'=>'Success!']);
}else{
    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
}    
    
}

?>