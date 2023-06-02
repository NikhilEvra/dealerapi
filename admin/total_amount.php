<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');


// $d_id = '11';

if($con){
    $data="SELECT SUM(amount) AS 'amount' FROM customer_sale_master  ";
    $result = mysqli_query($con,$data);
    while($row = mysqli_fetch_assoc($result)) {
    
      $a ['total'] = $row['amount'];
   
  }
  echo json_encode($a,JSON_PRETTY_PRINT);
}else{
    echo "error connecting database";
}

?>