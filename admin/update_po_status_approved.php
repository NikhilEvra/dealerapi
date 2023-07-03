<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$response= array();

$po_id = $_POST['po_id'];
$dealerid = $_POST['dealerid'];
date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

if($con){ 
    $sql = "UPDATE `po` SET `status`='Approved', `approved_time`='$t' , `approved_date`='$d'  WHERE po_id = '$po_id'";
    $sql2 = "UPDATE `cart` SET `status`='Po-Approved' , `approved_time`='$t' , `approved_date`='$d'   WHERE po_id = '$po_id'";
    
   
    $result = mysqli_query($con,$sql);
    $result2 = mysqli_query($con,$sql2);

    $data=mysqli_query($con,"SELECT count(*) FROM po where  `status` = 'Open'  ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b =$arr['count(*)']; 
       
        // echo json_encode($b,JSON_PRETTY_PRINT);
    }
    $sql3 = "UPDATE `inventory` SET `po_raised`='$b'   WHERE dealer_id = '$dealerid'";

    $result3 = mysqli_query($con,$sql3);
    
    if($result && $result2 && $result3){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>