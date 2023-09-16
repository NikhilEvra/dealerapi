<?php
 header('Access-Control-Allow-Origin: *');  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

// $d_id = '11';
    
if($con){
       
          $sql="SELECT SUM(inventory) AS 'inventory' FROM model_inv WHERE dealer_id = '$d_id' ";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)) {
    
      $a ['grand_total'] = $row['inventory'];
   
  }
        
        $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `name` = '$d_id' AND `status` = 'Open' ");
      
        while ($arr=mysqli_fetch_array($data)) 
        {
            $b ['Open']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `complaints` where `name` = '$d_id' AND `status` = 'Closed' ");
      
        while ($arr=mysqli_fetch_array($data)) 
        {
            $b ['Closed']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `dealer_id` = '$d_id' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $c ['total']=$arr['count(*)']; 
           
        }
             $data=mysqli_query($con,"SELECT count(*) FROM `po` where `dealer_id` = '$d_id' AND `status` = '2' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $d ['po_open']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `po` where `dealer_id` = '$d_id' AND `status` = '1' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $d ['po_pending']=$arr['count(*)']; 
           
        }
        
         $sql2="SELECT * FROM dealer_adv WHERE dealer_id = '$d_id' ";
        $result2 = mysqli_query($con,$sql2);
        while($row = mysqli_fetch_array($result2)) {

        $e ['adv_bal'] = $row['adv_bal'];

        }
        
        $data=mysqli_query($con,"SELECT count(*) FROM `finance_partner` where `status` = 'Active' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $f ['f_partner']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `insurance_partner` where `status` = 'Active' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $g ['i_partner']=$arr['count(*)']; 
           
        }
        
        
        $response = array(array($a),array($b),array($c),array($d),array($e),array($f),array($g));
     
            echo json_encode($response,JSON_PRETTY_PRINT);
    
} else{
    echo "error connecting database";
}

// $a = array('a'=>'1', 'b'=>'2');
// $b = array('c'=>'3');
// $c = array('d'=>'4');
// $arrytest = array(array($a),array($b),array($c));

// echo json_encode($arrytest,JSON_PRETTY_PRINT);

?>