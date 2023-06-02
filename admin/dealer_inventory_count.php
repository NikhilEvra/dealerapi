<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');
// if (isset($_GET['d_id'])){
//     $d_id = $_GET['d_id'];
// }

$response = array();
if($con){
    $sql = "select * from inventory  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['ex1'] = $row['EX1(grey)'] + $row['EX1(black)'] + $row['EX1(red)'] + $row['EX1(blue)'] ;
            $response [$x]['ex2'] = $row['EX2(black)'] + $row['EX2(mustard)'] + $row['EX2(yellow)'] + $row['EX2(green)']+ $row['EX2(white)'] + $row['EX2(lightgrey)']+ $row['EX2(darkgrey)'] + $row['EX2(red)']+ $row['EX2(blue)'] ;
            $response [$x]['ex2plus'] = $row['EX2+(white)'] + $row['EX2+(silver)'] + $row['EX2+(black)'] + $row['EX2+(red)'] + $row['EX2+(yellow)'] + $row['EX2+(blue)'] ;
            $response [$x]['ex3'] =  $row['EX3(grey)'] + $row['EX3(black)'] + $row['EX3(red)'] + $row['EX3(blue)']  ;
            $response [$x]['ex3plus'] =$row['EX3+(red)'] + $row['EX3+(blue)'] + $row['EX3+(orange)'];
            $response [$x]['helter'] =  $row['HELTER(blue)'] + $row['HELTER(red)'] + $row['HELTER(yellow)'] + $row['HELTER(skyblue)'];
            $response [$x]['luster'] =  $row['LUSTER(yellow)'] + $row['LUSTER(green)'];
            $response [$x]['mine'] =  $row['MINE(white)'] + $row['MINE(silver)'] + $row['MINE(red)'] + $row['MINE(black)'] ;
            $response [$x]['sparkle'] = $row['SPARKLE(white)'] + $row['SPARKLE(silver)'] + $row['SPARKLE(black)'];
            $response [$x]['sparkledb'] =  $row['SPARKLE(DB)(black)'] + $row['SPARKLE(DB)(blue)'] + $row['SPARKLE(DB)(red)'] + $row['SPARKLE(DB)(white)'];
            $response [$x]['po_raised'] = $row['po_raised'];
            $response [$x]['total'] =  $response [$x]['ex1']  +  $response [$x]['ex2'] +  $response [$x]['ex2plus'] + $response [$x]['ex3'] +  $response [$x]['ex3plus'] + $response [$x]['helter'] +  $response [$x]['mine'] +  $response [$x]['sparkle'] +  $response [$x]['sparkledb'] ;
            $response[$x]['a'] = $row['total'];
            $x++;
                
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}


?>