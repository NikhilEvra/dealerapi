<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$dealerid = $_POST['d_id']; 
$advertisement = $_POST['advertisement'];


$data=mysqli_query($con,"SELECT count(*) FROM `dealer_adv` where `dealer_id` = '$dealerid' AND `marketing_plan` != 'no' ");
    while ($arr=mysqli_fetch_array($data)) 
    {
    $t_count=$arr['count(*)']; 
    }

    if($t_count > 0){
        echo json_encode(['status'=>false,'message'=>'You Have Already Submitted Marketing Plan Info !']);
 
    }
         else{


$q = "SELECT * FROM `dealer_adv` where `dealer_id` = '$dealerid' ";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $bal = $row['left_amt'];
}

$bal2 = $bal - 5000;

// echo json_encode($_REQUEST);
$response= array();

// return json_encode($response);


if($con){ 
    $sql = "UPDATE `dealer_adv` SET
    `marketing_plan`='$advertisement',
    `left_amt`='$bal2'
    WHERE `dealer_id` = '$dealerid' ";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}
         }
?>
