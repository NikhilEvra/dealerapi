<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}
$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `name` = '$d_id'  ");
    $x = 0;
    while ($arr=mysqli_fetch_array($data)) 
    {
        $response [$x]['total']=$arr['count(*)']; 
        $x++;
    }
       

        $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `name` = '$d_id' AND `status` = 'Open' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['Open']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `name` = '$d_id' AND `status` = 'Closed' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['Closed']=$arr['count(*)']; 
            $x++;
        }
            echo json_encode($response,JSON_PRETTY_PRINT);
    
}else{
    echo "error connecting database";
}

?>