<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');
include ('config.php');


$dealerid = $_POST['d_id'];
$endingdate = $_POST['endingdate'];
$date = $_POST['date'];


$data=mysqli_query($con,"SELECT count(*) FROM `dealer_adv` where `dealer_id` = '$dealerid' AND `mobile_van_starts_date` != '' ");
    while ($arr=mysqli_fetch_array($data)) 
    {
    $t_count=$arr['count(*)']; 
    }

    if($t_count > 0){
        echo json_encode(['status'=>false,'message'=>'Mobile Number Already Regestered!']);
 
    }
         else{


                $q = "SELECT * FROM `dealer_adv` where `dealer_id` = '$dealerid' ";
                $query = mysqli_query($con,$q);
                while($row=mysqli_fetch_array($query))
                {
                    $bal = $row['left_amt'];
                }

                $bal2 = $bal - 15000; 
                // echo json_encode($_REQUEST);
                $response= array();


                if($con){ 
                    $sql = "UPDATE `dealer_adv` SET
                    `mobile_van_starts_date`='$date',
                    `mobile_van_end_date`='$endingdate',
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
