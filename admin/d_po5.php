<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$response= array();

$po_id = $_POST['po_id'];
$dealerid = $_POST['dealerid'];
$panel_id = $_POST['panel_id'];
$remarks = $_POST['remarks'];

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

    if($con){ 
        $sql = "INSERT INTO `notifications`(`id`, `panel`, `message`, `status`, `date`, `time`, `sender_panel`, `sender_id`,`po_id`)
                VALUES (Null,'Operations','PO payment not recieved from dealer','Active','$d','$t','Accounts','$panel_id','$po_id')";

        $sql2 = "INSERT INTO `notifications_entry`(`id`, `n_id`, `date`, `time`, `po_id`) VALUES (Null,'$panel_id','$d','$t','$po_id')";
        
        $sql3 = "UPDATE `po` SET `company_status` = 'Operations',
        `dept_status`='PO_s_by_accounts_p_n_recieved',
        `accounts_remarks2`='$remarks'
         WHERE po_id = '$po_id'"; 

        $result = mysqli_query($con,$sql);
        $result2 = mysqli_query($con,$sql2);
        $result3 = mysqli_query($con,$sql3);

        if($result && $result2 && $result3){
            echo json_encode(['status'=>true,'message'=>'Success!']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
        }

    }

?>