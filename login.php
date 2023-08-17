<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); 
// $entityBody = file_get_contents('php://input');
if (isset($_GET['userid'])){
    $userid = $_GET['userid'];
}
if (isset($_GET['spassword'])){
    $spassword = $_GET['spassword'];
}

include ('config.php');
$response = array();

if($con){
        $data=mysqli_query($con,"SELECT count(*) FROM `user_master` where `phone` = '$userid' AND `password` = '$spassword' ");
        while ($arr=mysqli_fetch_array($data)) 
        {
        $t_email=$arr['count(*)']; 
        }

        if($t_email == 0){
            echo json_encode(['status'=>false,'message'=>'Invalid Credentials!']);

        }
            else{
            $sql = "SELECT * FROM `user_master` WHERE `phone` = '$userid' AND `password` = '$spassword' AND `status` = 'Active'";
            $result = mysqli_query($con,$sql);
            if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response [$x]['id'] = $row['u_id'];
                $response [$x]['name'] = $row['name'];
                $response [$x]['email'] = $row['email'];
                $response [$x]['password'] = $row['password'];
                $response [$x]['phone'] = $row['phone'];
                $response [$x]['usertype'] = $row['user_type'];
                $response [$x]['dealership_name'] = $row['dealership_name'];
                $response [$x]['address'] = $row['address'];

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