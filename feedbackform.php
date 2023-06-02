<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
$response= array();

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");
if($con){ 
    $sql = "INSERT INTO `feedback`(`id`, `name`, `location`, `designation`, `no_of_vehicles`, `duration`, `any_other_vehicle`, `features`, `improvement`, `p_remark`, `t_remark`, `s_remark`, `spare_part_remark`, `f_remark`, `rating`, `date`, `time`) 
    VALUES ('null','".$_POST['name']."','".$_POST['location']."','".$_POST['designation']."','".$_POST['no_of_vehicles']."','".$_POST['duration']."','".$_POST['any_other_vehicle']."','".$_POST['features']."','".$_POST['improvement']."','".$_POST['p_remark']."','".$_POST['t_remark']."','".$_POST['s_remark']."','".$_POST['spare_part_remark']."','".$_POST['f_remark']."','".$_POST['rating']."','$d','$t')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>