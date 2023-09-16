<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


$date = $_POST['date'];
$dealer_id = $_POST['d_id'];

$response = array();
if($con){
    $sql = "select * from cal_log where date = '$date' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['date'] = $row['date'];
            $response [$x]['title'] = $row['topic'];
           
           
            $x++;
        }
        
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

}
else{
    echo "error connecting database";
}
?>