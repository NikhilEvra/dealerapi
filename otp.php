
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
$no = $_POST['phone'];
$otp = rand(1111,9999);


if($con){ 

    $data=mysqli_query($con,"SELECT count(*) FROM `user_master` where `phone` = '$no' ");
    while ($arr=mysqli_fetch_array($data)) 
    {
    $t_user=$arr['count(*)']; 
    }

        if($t_user == 0){
            echo json_encode(['status'=>false,'message'=>'Phone Number Not Regestered !']);

        }
         else{

     
                        $sql = "UPDATE `user_master` SET `otp`='$otp' WHERE `phone`='$no' ";
                        $result = mysqli_query($con,$sql);
                        if($result){
                            echo json_encode(['status'=>true,'message'=>'Success!']);
                        }else{
                            echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
                        }
                        // $fields = array(
                        //     "variables_values" => "$otp",
                        //     "route" => "otp",
                        //     "numbers" => "$no",
                        //     );
                            
                        //     $curl = curl_init();
                            
                        //     curl_setopt_array($curl, array(
                        //     CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                        //     CURLOPT_RETURNTRANSFER => true,
                        //     CURLOPT_ENCODING => "",
                        //     CURLOPT_MAXREDIRS => 10,
                        //     CURLOPT_TIMEOUT => 30,
                        //     CURLOPT_SSL_VERIFYHOST => 0,
                        //     CURLOPT_SSL_VERIFYPEER => 0,
                        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        //     CURLOPT_CUSTOMREQUEST => "POST",
                        //     CURLOPT_POSTFIELDS => json_encode($fields),
                        //     CURLOPT_HTTPHEADER => array(
                        //     "authorization: hp6KLBVI8cAvnSu0yMXPk4F17JQUjH9moOC2Dzd3WftqaZsx5lKgEx4zbCIQHPjpnO7AVdsoYRXi2Z15",
                        //     "accept: */*",
                        //     "cache-control: no-cache",
                        //     "content-type: application/json"
                        //     ),
                        //     ));
                            
                        //     $response = curl_exec($curl);
                        //     $err = curl_error($curl);
                            
                        //     curl_close($curl);
                            
            }
}






?>