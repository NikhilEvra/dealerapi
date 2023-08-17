<?php
header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM po where  `status` = 'Open' AND `dealer_id` = '$d_id'  ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
        echo json_encode($b,JSON_PRETTY_PRINT);
    }

}
else{
    echo "error connecting database";
}


?>