<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

if (isset($_GET['chassis'])){
    $chassis = $_GET['chassis'];
}
if (isset($_GET['sparepart'])){
    $sparepart = $_GET['sparepart'];
}
date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$response = array();
if($con){

    // $data=mysqli_query($con,"SELECT count(*) FROM `customer_sale_master` where `chassis_no` = '$chassis'  ");
   
    // while ($arr=mysqli_fetch_array($data)) 
    // {
    //     $counta = $arr['count(*)']; 
        
    // }
    // echo json_encode($counta,JSON_PRETTY_PRINT);
    // if($counta > '1'){
        
    //  }
    
    if($sparepart == 'Battery'){
        $sql = "select * from customer_sale_master where  `chassis_no` = '$chassis'  ";
        $result = mysqli_query($con,$sql);
        if($result){
           
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['dealer'] = $row['dealer_id'];
                $response ['model_name'] = $row['model_name'];
                $response ['color'] = $row['color'];
                $response ['c_name'] = $row['c_name'];
                $response ['sale_date'] = $row['sale_date'];
                $response ['sale_time'] = $row['sale_time'];
                // $response ['battery_no'] = $row['battery_no'];
                $response ['sparepart'] = $row['motor_no'];
                // $resposne ['charger_no'] = $row['charger_no'];
                // $response ['controller_no'] = $row['controller_no'];
                $response['warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
                if($d > $response['warranty']){
                    $i= 'Out Of Warranty';
                }else{
                    $i = 'In Warranty';
                }
                $response ['in_w'] = $i;
              
            } 
               
        }
    
        echo json_encode($response,JSON_PRETTY_PRINT);
    } 
    else if($sparepart == 'Motor'){
        $sql = "select * from customer_sale_master where  `chassis_no` = '$chassis'  ";
    $result = mysqli_query($con,$sql);
    if($result){
       
        while($row = mysqli_fetch_assoc($result)) {
            $response ['id'] = $row['id'];
            $response ['dealer'] = $row['dealer_id'];
            $response ['model_name'] = $row['model_name'];
            $response ['color'] = $row['color'];
            $response ['c_name'] = $row['c_name'];
            $response ['sale_date'] = $row['sale_date'];
            $response ['sale_time'] = $row['sale_time'];
            $response ['sparepart'] = $row['motor_no'];
            $response ['warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
            // $response ['srv_warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
            if($d > $response['warranty']){
                $i= 'Out Of Warranty';
            }else{
                $i = 'In Warranty';
            }
            $response ['in_w'] = $i;
        } 
           
    }

    echo json_encode($response,JSON_PRETTY_PRINT);

    }
    else if($sparepart == 'Charger'){
        $sql = "select * from customer_sale_master where  `chassis_no` = '$chassis'  ";
    $result = mysqli_query($con,$sql);
    if($result){
       
        while($row = mysqli_fetch_assoc($result)) {
            $response ['id'] = $row['id'];
            $response ['dealer'] = $row['dealer_id'];
            $response ['model_name'] = $row['model_name'];
            $response ['color'] = $row['color'];
            $response ['c_name'] = $row['c_name'];
            $response ['sale_date'] = $row['sale_date'];
            $response ['sale_time'] = $row['sale_time'];
            $response ['sparepart'] = $row['charger_no'];
            $response ['warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
            // $response ['srv_warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
            if($d > $response['warranty']){
                $i= 'Out Of Warranty';
            }else{
                $i = 'In Warranty';
            }
            $response ['in_w'] = $i;
        } 
           
    }

    echo json_encode($response,JSON_PRETTY_PRINT);

    }
    else if($sparepart == 'Controller'){
        $sql = "select * from customer_sale_master where  `chassis_no` = '$chassis'  ";
    $result = mysqli_query($con,$sql);
    if($result){
       
        while($row = mysqli_fetch_assoc($result)) {
            $response ['id'] = $row['id'];
            $response ['dealer'] = $row['dealer_id'];
            $response ['model_name'] = $row['model_name'];
            $response ['color'] = $row['color'];
            $response ['c_name'] = $row['c_name'];
            $response ['sale_date'] = $row['sale_date'];
            $response ['sale_time'] = $row['sale_time'];
            $response ['sparepart'] = $row['controller_no'];
            $response ['warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
            // $response ['srv_warranty'] = date('Y/m/d', strtotime('+5 year', strtotime($response ['sale_date'])));
            if($d > $response['warranty']){
                $i= 'Out Of Warranty';
            }else{
                $i = 'In Warranty';
            }
            $response ['in_w'] = $i;
        } 
           
    }

    echo json_encode($response,JSON_PRETTY_PRINT);

    }
   
    
    
  
}else{
    echo "error connecting database";
}
?>