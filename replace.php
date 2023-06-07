<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
$dealerid = $_POST['dealerid'];
$model = $_POST['model'];
$varient = $_POST['color'];
$part_no = $_POST['part_no'];
$warranty_info = $_POST['warranty_info'];
$event  = $_POST['event'];
$remark = $_POST['remark'];

$docked  = $_POST['docked'];
$courier = $_POST['courier'];
$courier_p = $_POST['courier_partner'];

$chassis = $_POST['chassis'];
$c_name = $_POST['c_name'];
$sale_date = $_POST['sale_date'];
$warranty = $_POST['warranty'];
$path = "https://evramedia.com/apifolder/folder/";
$img = $_FILES['file']['name'];
$img_n = $path.$img;
$img_name = $_FILES['file']['tmp_name'];
$target_path = "folder/";
$target_path = $target_path.basename( $_FILES['file']['name']);   
move_uploaded_file($img_name, $target_path);
 
$q = "SELECT * FROM `replace_sparepart`";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $id = $row['id'];

}
$u_id = $id + '1';
$uu_id = "EE/RR/00" . $u_id;


if($con){ 
    $sql = "INSERT INTO `replace_sparepart`(`id`, `dealerid`, `replace_id`, `part_name`, `part_no`, `warranty_info`, `file`, `remark`, `chassis`, `model`, `color`, `c_name`, `sale_date`, `warranty`, `docked`, `courier`, `courier_partner`, `status`)
     VALUES ('null','$dealerid','$uu_id','$event','$part_no','$warranty_info','$img_n','$remark','$chassis','$model','$varient','$c_name','$sale_date','$warranty','$docked','$courier','$courier_p','Open')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>