<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$q = "SELECT * FROM `user_master`";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $id = $row['id'];

}
$u_id = $id + '1';
$uu_id = "E00" . $u_id;

$no = $_POST['phone'];
$otp = rand(1111,9999);
// echo json_encode($_REQ  
$response= array();
// return json_encode($response);

if($con){ 
    $data=mysqli_query($con,"SELECT count(*) FROM `user_master` where `phone` = '".$_POST['phone']."'  ");
    while ($arr=mysqli_fetch_array($data)) 
    {
    $t_email=$arr['count(*)']; 
    }

    if($t_email > 0){
        echo json_encode(['status'=>false,'message'=>'Mobile Number Already Regestered!']);
 
    }
        else{
                $sql = "INSERT INTO `user_master`(`id`, `status`, `u_id`, `name`, `email`, `phone`, `user_type`, `signup_otp`) VALUES ('Null','Pending','$uu_id','".$_POST['name']."','".$_POST['email']."','$no','".$_POST['usertype']."','$otp')";
                $result = mysqli_query($con,$sql);

                $sql2 = "INSERT INTO `inventory`(`id`, `dealer_id`, `po_raised`, `EX1`, `EX2`, `EX3`, `EX2+`, `EX3+`, `HELTER`, `LUSTER`, `MINE`, `SPARKLE`, `SPARKLE(DB)`, `EX1(grey)`, `EX1(black)`, `EX1(red)`, `EX1(blue)`, `EX2(black)`, `EX2(mustard)`, `EX2(yellow)`, `EX2(green)`, `EX2(white)`, `EX2(lightgrey)`, `EX2(darkgrey)`, `EX2(red)`, `EX2(blue)`, `EX2+(white)`, `EX2+(silver)`, `EX2+(black)`, `EX2+(red)`, `EX2+(yellow)`, `EX2+(blue)`, `EX3(grey)`, `EX3(black)`, `EX3(red)`, `EX3(blue)`, `EX3+(red)`, `EX3+(blue)`, `EX3+(orange)`, `EX3+(grey)`, `SPARKLE(white)`, `SPARKLE(silver)`, `SPARKLE(black)`, `Mine(white)`, `Mine(silver)`, `Mine(red)`, `Mine(black)`, `LUSTER(yellow)`, `LUSTER(green)`, `Helter(blue)`, `Helter(red)`, `Helter(yellow)`, `Helter(skyblue)`, `SPARKLE(DB)(black)`, `SPARKLE(DB)(blue)`, `SPARKLE(DB)(red)`, `SPARKLE(DB)(white)`) 
                VALUES ('null','$uu_id','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";
                
                $fields = array(
                    "variables_values" => "$otp",
                    "route" => "otp",
                    "numbers" => "$no",
                    );
                    
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode($fields),
                    CURLOPT_HTTPHEADER => array(
                    "authorization: hp6KLBVI8cAvnSu0yMXPk4F17JQUjH9moOC2Dzd3WftqaZsx5lKgEx4zbCIQHPjpnO7AVdsoYRXi2Z15",
                    "accept: */*",
                    "cache-control: no-cache",
                    "content-type: application/json"
                    ),
                    ));
                    
                    $response = curl_exec($curl);
                    $err = curl_error($curl);
                    
                    curl_close($curl);
                    

                 

                $result2 = mysqli_query($con,$sql2);

                
                $model = array(
                    'EX1', 'EX2', 'EX2+', 'EX3', 'LUSTER', 'HELTER',
                    'MINE'
                    );
                    foreach ($model as $x ) {
                    $sql3 = "INSERT INTO `model_inv`(`id`, `dealer_id`, `model`, `inventory`)
                    VALUES (Null,'$uu_id','$x','0')";
                    $result3 = mysqli_query($con, $sql3);
                    
                    }
                    
                //  $response=array();

                    $sql4="select * from company_color_inv where status = 'Active' ";
                    $result4 = mysqli_query($con,$data4);
                    $x=0;
                    while($row = mysqli_fetch_assoc($result4)) { 
                      $model1 = $row['model'];
                      $color1 = $row['color'];
                      foreach ($model1 as $m ) {
                        foreach ($color1 as $c ) {
                        $sql5 = "INSERT INTO `color_inv`(`id`, `dealer_id`, `model`, `color`, `inventory`)
                        VALUES (Null,'$uu_id','$m','$c','0')";
                        $result5 = mysqli_query($con, $sql5);
                        }
                        }
                     $x++;
                  }
   
                 

                if($result && $result2 && $result3&& $result4&& $result5){
                    echo json_encode(['status'=>true,'message'=>'Success!']);
                }else{
                    echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
                }
            }

}

?>