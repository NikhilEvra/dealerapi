<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM `complaints`   ");
    $x = 0;
    while ($arr=mysqli_fetch_array($data)) 
    {
        $response [$x]['total']=$arr['count(*)']; 
        $x++;
    }
       

        $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `status` = 'Open' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['a']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `status` = 'Closed' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['b']=$arr['count(*)']; 
            $x++;
        }
            echo json_encode($response,JSON_PRETTY_PRINT);
    
}else{
    echo "error connecting database";
}

?>