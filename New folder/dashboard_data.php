<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

// $d_id = '11';
    
if($con){
       
        $sql = "select * from inventory    where `dealer_id` = '$d_id'   ";
        $result = mysqli_query($con,$sql);
    
        while($row = mysqli_fetch_assoc($result)) {
            $response ['id'] = $row['id'];
            $response ['ex1'] = $row['EX1(grey)'] + $row['EX1(black)'] + $row['EX1(red)'] + $row['EX1(blue)'] ;
            $response ['ex2'] = $row['EX2(black)'] + $row['EX2(mustard)'] + $row['EX2(yellow)'] + $row['EX2(green)']+ $row['EX2(white)'] + $row['EX2(lightgrey)']+ $row['EX2(darkgrey)'] + $row['EX2(red)']+ $row['EX2(blue)'] ;
            $response ['ex2plus'] = $row['EX2+(white)'] + $row['EX2+(silver)'] + $row['EX2+(black)'] + $row['EX2+(red)'] + $row['EX2+(yellow)'] + $row['EX2+(blue)'] ;
            $response ['ex3'] =  $row['EX3(grey)'] + $row['EX3(black)'] + $row['EX3(red)'] + $row['EX3(blue)']  ;
            $response ['ex3plus'] =$row['EX3+(red)'] + $row['EX3+(blue)'] + $row['EX3+(orange)'];
            $response ['helter'] =  $row['HELTER(blue)'] + $row['HELTER(red)'] + $row['HELTER(yellow)'] + $row['HELTER(skyblue)'];
            $response ['luster'] =  $row['LUSTER(yellow)'] + $row['LUSTER(green)'];
            $response ['mine'] =  $row['MINE(white)'] + $row['MINE(silver)'] + $row['MINE(red)'] + $row['MINE(black)'] ;
            $response ['sparkle'] = $row['SPARKLE(white)'] + $row['SPARKLE(silver)'] + $row['SPARKLE(black)'];
            $response ['sparkledb'] =  $row['SPARKLE(DB)(black)'] + $row['SPARKLE(DB)(blue)'] + $row['SPARKLE(DB)(red)'] + $row['SPARKLE(DB)(white)'];
           
           
            
          $a ['total'] =$response ['ex1']  +  $response ['ex2'] +  $response ['ex2plus'] + $response ['ex3'] +  $response ['ex3plus'] + $response ['helter'] +  $response ['mine'] +  $response ['sparkle'] +  $response ['sparkledb'] ; ;
       
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
        $response = array(array($a),array($b),array($c));
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