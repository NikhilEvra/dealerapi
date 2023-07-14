<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); 
// $entityBody = file_get_contents('php://input');
if (isset($_GET['phone'])){
    $phone = $_GET['phone'];
}
if (isset($_GET['otp'])){
    $otp = $_GET['otp'];
}

include ('config.php');
$response = array();

if($con){
        $data=mysqli_query($con,"SELECT count(*) FROM `admin` where `phone` = '$phone' AND `otp` = '$otp' AND `status` = 'Active'  ");
        while ($arr=mysqli_fetch_array($data)) 
        {
        $t_email=$arr['count(*)']; 
        }

        if($t_email == 0){
            echo json_encode(['status'=>false,'message'=>'Invalid Otp! or Account Approval Pending']);

        }
            else{
            $sql = "SELECT * FROM `admin` WHERE `phone` = '$phone' AND `otp` = '$otp' ";
            $result = mysqli_query($con,$sql);
            if($result){
            $x = 0;
            
            while($row = mysqli_fetch_assoc($result)) {
                $response [$x]['id'] = $row['id'];
                $response [$x]['name'] = $row['name'];
                $response [$x]['email'] = $row['email'];
                $response [$x]['password'] = $row['password'];
                $response [$x]['phone'] = $row['phone'];
                $response [$x]['panel'] = $row['panel'];
                // $response [$x]['dealership_name'] = $row['dealership_name'];
                $x++;
        
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
            } 
              else{
                echo json_encode(['status'=>false,'message'=>'Invalid Credentials or Account Not Approved']);
              }
            }

}
else{
    echo json_encode(['status'=>false,'message'=>'Error!']);
}

?>