<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$q = "SELECT * FROM `customer_sale_master`";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $id = $row['id'];

}
$u_id = $id + '1';
$invoice_id = "000" . $u_id;

// echo json_encode($_REQUEST);
$model = $_POST['model_name'];
$color = $_POST['test'];
$d_id = $_POST['name'];
$c = strtolower($color); 
$varient = $model.$c;

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

$response= array();
// return json_encode($response);

if($con){ 
    
    $q = "SELECT * FROM inventory where ( `dealer_id`) = ('$d_id')";

    $query = mysqli_query($con,$q);
    
    while($row=mysqli_fetch_array($query)) {
    $m = $row[$varient]; 
   
    }
    $m_count = $m - '1';
 
        $sql="UPDATE `inventory` SET `$varient`='$m_count' WHERE dealer_id = '$d_id' ";
   

    $result = mysqli_query($con,$sql);
    
    $sql2 = "INSERT INTO `customer_sale_master`(`id`,`invoice_id`, `dealer_id`, `c_name`, `c_mobile`, `a_mobile`, `email`, `location`, `model_name`, `color`, `chassis_no`, `battery_no`, `motor_no`, `charger_no`, `controller_no`, `amount`, `discount`, `sale_date`, `sale_time`, `city`, `state`, `c_pan`, `district`, `pincode`) 
    VALUES ('null','$invoice_id','".$_POST['name']."','".$_POST['c_name']."','".$_POST['c_mobile']."','".$_POST['a_mobile']."','".$_POST['email']."','".$_POST['location']."','".$_POST['model_name']."','".$_POST['color']."',
    '".$_POST['chassis']."','".$_POST['battery']."','".$_POST['motor']."','".$_POST['charger']."','".$_POST['controller']."','".$_POST['amount']."','".$_POST['discount']."','$d','$t','".$_POST['city']."','".$_POST['state']."','".$_POST['pan']."','".$_POST['dist']."','".$_POST['pincode']."')";


    $result2 = mysqli_query($con,$sql2);

    if($result2 && $result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
    
}

?>