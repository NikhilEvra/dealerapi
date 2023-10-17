
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); 
include ('config.php');


$response = array();

if($con){

    $data=mysqli_query($con,"SELECT COUNT(*) FROM customer_sale_master LEFT JOIN user_master ON customer_sale_master.dealer_id=user_master.u_id WHERE user_master.cnf = 'Nikhil Automobiles'");
      
    while ($arr=mysqli_fetch_array($data)) 
    {
        $b ['total']=$arr['count(*)']; 
       
        echo json_encode($b,JSON_PRETTY_PRINT);
    }
} else{
    echo "error connecting database";
}

?>
