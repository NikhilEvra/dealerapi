<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
if (isset($_GET['model'])){
    $model = $_GET['model'];
}

if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    if($model == 'EX1' ){
        $sql = "select * from inventory where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['grey'] = $row['EX1(grey)'] ;
                $response ['black'] = $row['EX1(black)'] ;
                $response ['red'] = $row['EX1(red)'] ;
                $response ['blue'] = $row['EX1(blue)'] ;
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'EX2' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['white'] =  $row['EX2(white)'] ;
                $response ['black'] = $row['EX2(black)'];
                $response ['mustard'] = $row['EX2(mustard)'] ;
                $response ['yellow'] = $row['EX2(yellow)'] ;
                $response ['green'] = $row['EX2(green)'] ;
                $response ['lightgrey'] =  $row['EX2(lightgrey)'] ;
                $response ['darkgrey'] = $row['EX2(darkgrey)'] ;
                $response ['red'] = $row['EX2(red)'];
                $response ['blue'] = $row['EX2(blue)'];
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'EX2plus' ){
        $sql = "select * from inventory  where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['white'] =  $row['EX2+(white)'];
                $response ['black'] = $row['EX2(black)'];
                $response ['silver'] = $row['EX2+(silver)']  ;
                $response ['red'] = $row['EX2+(red)'] ;
                $response ['yellow'] =  $row['EX2+(yellow)'];
                $response ['blue'] = $row['EX2+(blue)'];
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'EX3' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['grey'] = $row['EX3(grey)'] ;
                $response ['black'] = $row['EX3(black)'] ;
                $response ['red'] = $row['EX3(red)'] ;
                $response ['blue'] = $row['EX3(blue)'] ;
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'EX3plus' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['red'] = $row['EX3+(red)'] ;
                $response ['blue'] = $row['EX3+(blue)'];
                $response ['orange'] = $row['EX3+(orange)'];
            
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'HELTER' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['blue'] = $row['HELTER(blue)'];
                $response ['red'] =  $row['HELTER(red)'];
                $response ['yellow'] = $row['HELTER(yellow)'];
                $response ['skyblue'] = $row['HELTER(skyblue)'];
            
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'MINE' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['white'] =$row['MINE(white)'] ;
                $response ['silver'] =   $row['MINE(silver)'];
                $response ['red'] = $row['MINE(red)'];
                $response ['black'] =  $row['MINE(black)'];
            
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'SPARKLE' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['white'] = $row['SPARKLE(white)'] ;
                $response ['silver'] =   $row['SPARKLE(silver)'] ;
                $response ['black'] =  $row['SPARKLE(black)'];
             
            
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'SPARKLE(DB)' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['black'] =  $row['SPARKLE(DB)(black)']  ;
                $response ['blue'] =   $row['SPARKLE(DB)(blue)']  ;
                $response ['red'] =  $row['SPARKLE(DB)(red)'];
                $response ['white'] =  $row['SPARKLE(DB)(white)'];
             
            
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
    else if($model == 'LUSTER' ){
        $sql = "select * from inventory    where `dealer_id` = '$d_id'  ";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while($row = mysqli_fetch_assoc($result)) {
                $response ['id'] = $row['id'];
                $response ['yellow'] = $row['LUSTER(yellow)'] ;
                $response ['green'] = $row['LUSTER(green)']   ;
      
            
                $x++;
            }
    
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        
    }
     

}else{
    echo "error connecting database";
}


?>