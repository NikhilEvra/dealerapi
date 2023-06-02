<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

//  $d_id = '11';

if($con){
    $data="SELECT SUM(total) AS 'Total' FROM cart WHERE dealer_id = '$d_id' AND status = 'Open' ";
    $result = mysqli_query($con,$data);
    while($row = mysqli_fetch_assoc($result)) {
    
      $a ['grand_total'] = $row['Total'];
   
  }
  echo json_encode($a,JSON_PRETTY_PRINT);
}else{
    echo "error connecting database";
}

?>