<?php
header('Access-Control-Allow-Origin: *');  
include ('config.php');

$response = array();
if($con){
    $sql = "select * from inventory where id = '4' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['a'] = $row['EX1'];
            $response [$x]['b'] = $row['EX2'];
            $response [$x]['c'] = $row['EX3'];
            $x++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

}
else{
    echo "error connecting database";
}


?>