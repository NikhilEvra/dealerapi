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
if($con){
    $data="select * from customer_sale_master where id = '23' ";
    $result = mysqli_query($con,$data);
    while($row = mysqli_fetch_assoc($result)) { 
    
      $name = $row['c_name'];
	  $saledate = $row['sale_date'];
	  $state = $row['state'];
	  $c_pan = $row['c_pan'];
	  $location = $row['location'];
	  $city = $row['city'];
	  $chassis = $row['chassis_no'];
	  $battery = $row['battery_no'];
	  $motor = $row['motor_no'];
	  $charger = $row['charger_no'];
      $controller = $row['controller_no'];
	  $model = $row['model_name'];
	  $color = $row['color'];
	  $amount = $row ['amount'];

  }

	$cgst = $amount * 2.5/100;
	$sgst = $amount * 2.5/100;
	$total = $amount + $cgst + $sgst;
  

  $data1="select * from user_master where u_id = '11' ";
  $result1 = mysqli_query($con,$data1);
  while($row = mysqli_fetch_assoc($result1)) { 
	$dealership = $row['dealership_name'];
	$gst = $row['gst'];
 // $state = $row['state'];
	$pan = $row['pan'];
	
}
}
?>
<div class="container" style="border :1px solid;">

<h2 style="font-weight:bold; text-align:center; font-size:16px"><img src="folder/icon.png" style="height:30px">Evra Energy India Private Limited</h2>
    <div class="row">
        <div class="col-xs-12" >
    		
    		<hr>
    		<div class="row" style="font-size:12px" >
    			<div class="col-xs-6">
    				<address >
					<strong>To: </strong><?php echo $name;  ?><br>
    				<strong>Invoice No:</strong>
                 #123465<br>
			
				 <strong>Invoice Date:</strong>	16-05-2023<br>
				 <strong>Date of Sale:</strong> <?php  echo $saledate; ?><br>
				 <strong>Customer PAN:</strong>	<?php echo $c_pan; ?><br>
				 <strong>PLace of Sale:</strong><?php  echo $state; ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
				<address>
					

    					<strong>Dealsership:</strong>
    					<?php  echo $dealership; ?><br>
						<strong>Dealer-GST No:</strong>
    					<?php echo $gst ;?><br>
						<strong>Dealer-PAN:</strong>
    					<?php echo $pan ; ?><br>
						<strong>Hypothetication:</strong>
    					ICICI BANK
    				
    				</address>
    				
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<!-- <strong>Payment Method:</strong>
    					Visa ending **** 4242<br>
    			
    				</address> -->
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					
					
    				</address>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-xs-6">
				<address>
        			<strong>Billing Adderss:</strong><br>
                
    					<?php  echo $location; ?><br>
    					<?php echo $city; ?><br>
    					Haryana<br>
						<strong>Pin Code:</strong>121002
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
				<address>
        			<strong>Shipped Address:</strong><br>
       
    					<?php echo $location ?><br>
    					<?php echo $city ?><br>
    					<?php echo $state ?>
    				</address>
    			</div>
    		</div>
    	</div>
		
    </div>

    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order Summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive" >
    					<table class="table table-condensed" style="font-size:12px">
    						<thead>
                                <tr>
        							<td><strong>Model</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
								
									<td class="text-center"><strong>C-GST</strong></td>	
									<td class="text-center"><strong>S-GST</strong></td>
        							<td class="text-right"><strong>Amount </strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<tr>
    								<td><?php echo $model; ?>-<?php echo $color ?></td>
    								<td class="text-center"> <?php echo $amount;  ?></td>
    								<td class="text-center">1</td>
									<td class="text-center"><?php echo $cgst; ?></td>
									<td class="text-center"><?php echo $sgst; ?></td>
    								<td class="text-right"> <?php echo $total; ?></td>
    							</tr>
    							<tr>
									
    								<td class="thick-line"><strong>Chassis-No:</strong><?php echo $chassis; ?></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
									<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Discount:</strong</td>
    								<td class="thick-line text-right"> 0</td>
    							</tr>
								<tr>
    								<td class="no-line"><strong>Controller-No:</strong><?php echo $controller; ?></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total:</strong></td>
    								<td class="no-line text-right"><?php echo $total ?> </td>
    							</tr>
								<tr>
    								<td class="no-line"> <strong>Battery-No:</strong><?php echo $battery; ?></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"></td>
    								<td class="no-line text-right"> </td>
    							</tr>
    							<tr>
    								<td class="no-line"><strong>Motor-No:</strong><?php echo $motor; ?></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
									<td class="no-line"></td>
    								<td class="no-line text-center"></td>
    								<td class="no-line text-right"></td>
    							</tr>

    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
			<p style="font-weight:bold; font-size:12px">Tax Payable After Reverse Charge No</p>
			<h6 style="font-weight:bold; text-align:center">Terms And Conditions</h6>
			<p style="font-size:10px">
			1-Above prices are current ex-showroom prices. Buyer will have to pay price prevailing at the time of delivery.<br>
			2-Optional, Acessories, insurance, registration, taxes, octroi, other levies etc.will be charged extra at applicable.<br>
			3-Prices are for current specifications and are subject to change without notice.<br>
			4-Prices abd additional charges as above will to be paid completely	, to conclude the sale.<br>
			5-Acceptance of advance/deposits by the seller is merely an indication to sell and not result into conduct of sale.<br>
			6-The seller have a genereal lein on the goods for all money due to thge seller from the buyer on account of this or other transactions.<br>	
			7-All disputes arrising between the parrties hereto shall bhe refferd to atribation according toattribition laws of INDIA<br>
			8-Only the courts of faridabad shall have juridiction in any proceddings relating to this contract.<br>
			9-The company shall not be liable due to any prevention, hindrence, delay in manufacture, delivery of vehicles or accessories/optional due to shortage of material, striuk, roit,
			civil commotion, accident, machinery breakdown, government policies, act of god and nature and all events beyond the control of company.<br>
            10-Taxes as applicable<p><br>
			<p style="font-weight:bold; float:right">For <?php echo $dealership; ?></p>
    	</div>
    </div>
	* This is a system generated invoice
</div>