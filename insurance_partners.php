<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$response = array();
if($con){
    $sql = "select * from insurance_partner where status = 'Active' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            // $response [$x]['id'] = $row['id'];
            $response [$x]['name'] = $row['name'];
            // $response [$x]['title'] = $row['topic'];
           
            
            $x++;
            
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>

