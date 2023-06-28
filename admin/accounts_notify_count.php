<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM notifications where  `status` = 'Active' AND  `panel` = 'Accounts' AND  `seen` = ''  ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $a ['total']=$arr['count(*)']; 
       
        echo json_encode($a,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>