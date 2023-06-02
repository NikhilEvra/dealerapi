<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

// $d_id = '11';

$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM replace_sparepart where  `dealerid` = '$d_id' AND `status` = 'Open' ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
        echo json_encode($b,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>