<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

// $d_id = '11';
    
if($con){
       
      
        $data=mysqli_query($con,"SELECT count(*) FROM `po` where `dealer_id` = '$d_id' AND `status` = 'Open' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $a ['po_open']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `po` where `dealer_id` = '$d_id' AND `status` = 'PO-Pending' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $b ['po_pending']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `po` where `dealer_id` = '$d_id' AND `status` = 'Closed' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $c ['po_closed']=$arr['count(*)']; 
           
        }
        $data=mysqli_query($con,"SELECT count(*) FROM `po` where `dealer_id` = '$d_id' AND `status` = 'Po Disapproved' ");
        
        while ($arr=mysqli_fetch_array($data)) 
        {
           $d ['po_disapproved']=$arr['count(*)']; 
           
        }
        $response = array(array($a),array($b),array($c),array($d));
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