<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$entityBody = file_get_contents('php://input');

include ('config.php');

$q = "SELECT * FROM `complaints`";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $id = $row['id'];

}
$c_id = $id + '1';
$cc_id = "EVRA00" . $c_id;
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

$path = "https://evramedia.com/apifolder/folder/";
$img = $_FILES['file']['name'];
$img_n = $path.$img;
$img_name = $_FILES['file']['tmp_name'];
$target_path = "folder/";  
$target_path = $target_path.basename( $_FILES['file']['name']);   
move_uploaded_file($img_name, $target_path);
if($con){ 
    $sql = "INSERT INTO `complaints`(`id`, `c_date`, `c_time`, `name`, `location`, `designation`, `topic`, `remark`, `filename`, `status`, `complaint_id`) 
    VALUES ('null', '$d', '$t', '".$_POST['name']."','".$_POST['location']."','".$_POST['designation']."','".$_POST['topic']."','".$_POST['remark']."',
    '$img_n','Open', '$cc_id')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}



?>
