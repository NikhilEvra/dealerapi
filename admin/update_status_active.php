<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$response= array();

$d_id = $_POST['d_id'];
// $d_id = 'E0020';

if($con){ 
    $data1="select * from user_master where u_id = '$d_id' ";
    $result1 = mysqli_query($con,$data1);
    while($row = mysqli_fetch_assoc($result1)) { 
      $dealership = $row['dealership_name'];
      $gst = $row['gst'];
      $outlet = $row['outlet_code'];
      $pan = $row['pan'];
      $bank = $row['bank'];
      
  }

  if($bank == '' && $gst == '' && $pan == '' && $outlet == '' && $dealership == '')
  {
    // echo "yes";
    echo json_encode(['status'=>false,'message'=>'Data not Updated!']);
  
  }  else{
//    echo "$bank";
//    echo "$gst";
                $sql = "UPDATE `user_master` SET `status`='Active' WHERE u_id = '$d_id'";
                $result = mysqli_query($con,$sql);
                if($result){
                    echo json_encode(['status'=>true,'message'=>'Success!']);
                }else{
                    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
                }
         }

    
}

?>