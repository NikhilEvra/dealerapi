<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}
$response = array();
if($con){
    $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id'  ");
    $x = 0;
    while ($arr=mysqli_fetch_array($data)) 
    {
        $response [$x]['total']=$arr['count(*)']; 
        $x++;
    }
       

        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'MINE' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['mine']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'SPARKLE' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['sparkle']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'SPARKLE(DB)' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['sparkle_db']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'EX1' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['ex1']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'EX2' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['ex2']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'EX2+' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['ex2plus']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'EX3+' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['ex3plus']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'EX3' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['ex3']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'HELTER' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['helter']=$arr['count(*)']; 
            $x++;
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' AND `model_name` = 'LUSTER' ");
        $x = 0;
        while ($arr=mysqli_fetch_array($data)) 
        {
            $response [$x]['luster']=$arr['count(*)']; 
            $x++;
        }
        
            echo json_encode($response,JSON_PRETTY_PRINT);
    
}else{
    echo "error connecting database";
}

?>