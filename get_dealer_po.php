<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

// $d_id = '11';

$response = array();
if($con){
    $sql = "select * from po where  `dealer_id` = '$d_id' AND `status` = 'Open' ORDER BY id DESC  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['po_id'] = $row['po_id'];
            $response [$x]['company_status'] = $row['company_status'];
            // $response [$x]['varient'] = $row['varient'];
            // $response [$x]['quantity_with_batt'] = $row['quantity_with_batt'];
            // $response [$x]['quantity_without_batt'] = $row['quantity_without_batt'];
            // $response [$x]['amountWithOutBatt'] = $row['amountWithOutBatt'];
            // $response [$x]['amountWithBatt'] = $row['amountWithBatt'];
            // $response [$x]['total'] = $row['total'];
            // $response [$x]['withput_gst'] = $row['amountWithOutBatt'] + $row['amountWithBatt'];
           
            $x++;
          
        }
        
      
    }
    
      $sql2 = "select * from po where  `dealer_id` = '$d_id' AND `status` = 'Po Disapproved' ORDER BY id DESC  ";
    $result2 = mysqli_query($con,$sql2);
    if($result2){
        $x = 0;
        while($row = mysqli_fetch_assoc($result2)) {
            $b [$x]['id'] = $row['id'];
            $b [$x]['po_id'] = $row['po_id'];
            $b [$x]['company_status'] = $row['company_status'];

           
            $x++;
          
        }
        
    }
     $sql3 = "select * from po where  `dealer_id` = '$d_id' AND `status` = 'PO-Pending' ORDER BY id DESC  ";
    $result3 = mysqli_query($con,$sql3);
    if($result3){
        $x = 0;
        while($row = mysqli_fetch_assoc($result3)) {
            $c [$x]['id'] = $row['id'];
            $c [$x]['po_id'] = $row['po_id'];
            $c [$x]['company_status'] = $row['company_status'];

           
            $x++;
          
        }
        
    }
    
     $sql4 = "select * from po where  `dealer_id` = '$d_id' AND `status` = 'Po Disapproved' ORDER BY id DESC  ";
    $result4 = mysqli_query($con,$sql4);
    if($result4){
        $x = 0;
        while($row = mysqli_fetch_assoc($result4)) {
            $d [$x]['id'] = $row['id'];
            $d [$x]['po_id'] = $row['po_id'];
            $d [$x]['company_status'] = $row['company_status'];

           
            $x++;
          
        }
        
    }
        $response2 = array(array($response),array($b),array($c),array($d));
        echo json_encode($response2,JSON_PRETTY_PRINT);
}else{
    echo "error connecting database";
}

?>