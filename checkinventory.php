<?php
  header('Access-Control-Allow-Origin: *');  
  header('Content-Type: application/json');
 include ('config.php');
// if (isset($_GET['model'])){
//     $model = $_GET['model'];
// }
// if (isset($_GET['color'])){
//     $color = $_GET['color'];
// }
// if (isset($_GET['d_id'])){
//     $d_id = $_GET['d_id'];
// }
$model = $_POST['model'];
$color = $_POST['color'];
$d_id = $_POST['d_id'];
$c = strtolower($color);
$varient = $model.$c;

$response = array();
if($con){
    $sql = "select * from inventory where  `dealer_id` = '$d_id'  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['inventory'] = $row[$varient];
          
            
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>