<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


// $d_id = '11';

$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM po where  `status` = 'open' AND `company_status` = 'Operations' AND `dept_status` = 'Check PO' ");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
        echo json_encode($b,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>