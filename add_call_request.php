<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$q = "SELECT * FROM `call_request`";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $id = $row['id'];

}
$c_id = $id + '1';
$call_id = "EE/CALL/" . $c_id;


$dealerid = $_POST['d_id'];
$location = $_POST['location'];
$designation = $_POST['designation'];
$topic = $_POST['topic'];
$remark = $_POST['remark'];
$dealership = $_POST['dealership'];





// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");




if($con){ 
    $sql = "INSERT INTO `call_request`(`id`, `call_id`, `dealer_id`, `topic`, `location`, `designation`, `dealership_name`, `time`, `date`)
     VALUES (Null,'$call_id','$dealerid','$topic','$location','$designation','$dealership','$t','$d')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}



?>
