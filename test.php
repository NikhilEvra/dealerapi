<?php  
//  header('Access-Control-Allow-Origin: *');  
//  header('Content-Type: application/json');
// include ('config.php');
// // $model = $_POST['model'];
// $response = array();
// if($con){
//     $sql = "select * from inventory where  `dealer_id` = '11'   ";
//     $result = mysqli_query($con,$sql);
//     if($result){
//         $x = 0;
//         while($row = mysqli_fetch_assoc($result)) {
//             $response [$x]['id'] = $row['id'];
//             $response [$x]['v'] = $row['EX1'];
//              $response [$x]['v2'] = $row['EX2'];
        
            
//             $x++;
            
//         }
//         echo json_encode($response,JSON_PRETTY_PRINT);
//     }
// }else{
//     echo "error connecting database";
// }


date_default_timezone_set("Asia/Calcutta");  
$time = date("m/d/Y h:i:s a", time() + 60);
echo $time;
?>