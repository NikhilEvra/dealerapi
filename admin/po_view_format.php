<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;

    
}
@media print {
         .container{
			
            width:95%;
         }
         p.bodyText {font-family:georgia, times, serif;}
      }</style>

<?php
include ('config.php');

// if (isset($_GET['po_id'])){
//     $po_id = $_GET['po_id'];
// }

$po_id = 'EE/PO/36749';

if($con){
    $data="select * from cart where po_id = '$po_id' ";
    $result = mysqli_query($con,$data);
    while($row = mysqli_fetch_assoc($result)) { 
    
     
      $d_id = $row['dealer_id'];
      $add_date = $row['add_date'];
      
  }

  $data1="select * from user_master where u_id = '$d_id' ";
  $result1 = mysqli_query($con,$data1);
  while($row = mysqli_fetch_assoc($result1)) { 
	$dealership = $row['dealership_name'];
	$email = $row['email'];
 // $state = $row['state'];
	$phone = $row['phone'];
	
}

  
}
?>
<div class="container" style="border :1px solid;">

<h2 style="font-weight:bold; text-align:center; font-size:16px;"><img src="../folder/icon.png" style="height:70px">Purchase Order</h2>
    <div class="row">
        <div class="col-xs-12" >
    		
    		<hr>
    		<div class="row" style="font-size:15px" >
    			<div class="col-xs-12">
    				<address >
					<strong>Business Name: </strong><?php echo $dealership;  ?><br>
    				<strong>Address:</strong>
                 <br>

				 <strong>Phone No:</strong><?php  echo $phone; ?><br>
				 <strong>Email:</strong> <?php  echo $email; ?><br>
				
				<hr>
    				</address>
    			</div>
    			
    		</div>
    	
			<div class="row">
    			<div class="col-xs-6">
				<address>
        			<!-- <strong style="font-size:16px" >VENDOR DETAILS:</strong><br> -->
                
    					<strong>EVRA ENERGY INDIA PVT LTD</strong><br>
    					PLOT NO. 12, 22 FEET, BREAD FACTORY WALI GALI, INDRA <br>
    					COMPLEX, SECTOR-87, FARIDABAD, HARYANA 121002 INDIA.<br>
                        CIN: U34300GJ2021PTC119241 / GSTIN : 06AAGCE2678H1ZI<br>
                        Tel:  +91-97959-55955 / EMAIL: 
					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
				<address>
        			<strong>DATED: </strong><?php  echo $add_date; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <br>
       
    					<strong>P.O.NO: </strong> <?php  echo $po_id; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                   
    				</address>
    			</div>
    		</div>
    	</div>
		
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title" style="text-align:center"><strong>Order Summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive" >
    					<table class="table table-condensed" style="font-size:14px">
    						<thead>
                                <tr>
                                <td  ><strong>ITEM #</strong></td>
        							<td  class="text-center"><strong>Discription</strong></td>
        						
        							<td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Unit Price (Rs.)</strong></td>
        							<td class="text-right"><strong>Amount </strong></td>
                                </tr>
    						</thead>
    						<tbody>
                            <?php


if($con){
    $data="select * from cart where po_id = 'EE/PO/36749' ";
    $result = mysqli_query($con,$data);
    while($row = mysqli_fetch_assoc($result)) { 
    
      $model = $row['model'];
	  $varient = $row['varient'];
	  $quantity = $row['quantity_with_batt'];
	  $amount = $row['total'];
      $d_id = $row['dealer_id'];
      $add_date = $row['add_date'];
      $unit_price = $row['unit_price'];


    //   $amt = $quantity * $unit_price;

?>
    							<tr>
                                <td >1</td>
    								<td  class="text-center"><?php echo $model; ?>-<?php echo $varient ?></td>
    							
    								<td class="text-center"><?php echo $quantity; ?></td>
                                    <td class="text-center"> <?php echo $unit_price;  ?></td>
						
    								<td class="text-right"> <?php echo $amount; ?></td>
    							</tr>

                                <?php

}



$data3="SELECT SUM(total) AS 'Total' FROM cart WHERE po_id = '$po_id'  ";
$result3 = mysqli_query($con,$data3);
while($row = mysqli_fetch_assoc($result3)) {

  $b = $row['Total'];

}

$data4="SELECT SUM(without_tax_total) AS 'Total' FROM cart WHERE po_id = '$po_id'  ";
$result3 = mysqli_query($con,$data4);
while($row = mysqli_fetch_assoc($result4)) {

  $c = $row['Total'];

}

$tax = $c * 5 / 100 ;

//   $data1="select * from user_master where u_id = '$d_id' ";
//   $result1 = mysqli_query($con,$data1);
//   while($row = mysqli_fetch_assoc($result1)) { 
// 	$dealership = $row['dealership_name'];
// 	$email = $row['email'];

// 	$phone = $row['phone'];

// }

}
?>
    							<tr>
									
    								<td class="thick-line"></td>
                                    <td class="thick-line"></td>
									<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Sub Total:</strong</td>
    								<td class="thick-line text-right"> <?php echo $c; ?></td>
    							</tr>
								<tr>
    								<td class="no-line"><strong></strong></td>
    								<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Taxes:</strong></td>
    								<td class="no-line text-right"><?php echo $total ?> </td>
    							</tr>
								<tr>
    								<td class="no-line"> </td>
                                    <td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Others:</strong></td>
    								<td class="no-line text-right">00 </td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Grand Total:</strong></td>
    								<td class="no-line text-right"><?php echo $b;  ?></td>
    							</tr>

    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
			<!-- <p style="font-weight:bold; font-size:12px">Tax Payable After Reverse Charge No</p> -->
			
			<p style="font-size:10px">
		
			<p style="font-weight:bold; float:right">Authorized Signatory</p>
    	</div>
    </div>
	<strong>* Taxes are extra as applicable as GST.</strong>
</div>