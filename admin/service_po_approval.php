<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$response= array();

$po_id = $_POST['po_id'];
$dealerid = $_POST['dealerid'];
$panel_id = $_POST['panel_id'];
-
date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

if($con){ 
    
    $sql = "UPDATE `po` SET `status`='Open', `approved_time`='$t' , `approved_date`='$d'  WHERE po_id = '$po_id'";
    $sql2 = "UPDATE `cart` SET `status`='Po-Approved' , `approved_time`='$t' , `approved_date`='$d'   WHERE po_id = '$po_id'";

    $sql3 = "INSERT INTO `notifications`(`id`, `panel`, `message`, `status`, `date`, `time`, `sender_panel`, `sender_id`,`po_id`)
    VALUES (Null,'Operations','PO Approved','Active','$d','$t','Services','$panel_id','$po_id')";

    $sql4 = "INSERT INTO `notifications_entry`(`id`, `n_id`, `date`, `time`, `po_id`) VALUES (Null,'$panel_id','$d','$t','$po_id')";

    $sql5 = "UPDATE `po` SET `company_status` = 'Operations',
    `dept_status`='Check PO'
     WHERE po_id = '$po_id'";
     

    $result = mysqli_query($con,$sql);
    $result2 = mysqli_query($con,$sql2);
    $result3 = mysqli_query($con,$sql3);
    $result4 = mysqli_query($con,$sql4);
    $result5 = mysqli_query($con,$sql5);

    // $data=mysqli_query($con,"SELECT count(*) FROM po where  `status` = 'Open'  ");
      
    // while ($arr=mysqli_fetch_array($data)) 
    // {
    //     $b =$arr['count(*)']; 
       
        
    // }
    // $sql3 = "UPDATE `inventory` SET `po_raised`='$b'   WHERE dealer_id = '$dealerid'";

    // $result3 = mysqli_query($con,$sql3);
    
    if($result && $result2 && $result3 && $result4 && $result5 ){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>