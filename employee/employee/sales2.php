<!DOCTYPE html>
<html>
<head>
	<!-- js -->	

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage : 'src/loading.gif',
				closeImage   : 'src/closelabel.png'
			})
		})
	</script>
	<title>
		POS
	</title>
	<?php
	require_once('auth.php');
	?>

	<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">
	body {
		padding-top: 0px;
		padding-bottom: 40px;
	}
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<!-- combosearch box-->	

<script src="vendors/jquery-1.7.2.min.js"></script>
<script src="vendors/bootstrap.js"></script>



<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
<script src="js/chosen.jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$('.chosen-select').chosen();
	});
</script>



</head>

<body>

	<?php include 'includes/sidebar_employee.php'; ?>
	<div class="content">

	<br><br>
	<?php
	$position=$_SESSION['Branch_ID'];
	if($position) {
		?>

		<div class="row-fluid">

			<?php } ?>				

		
			<div class="contentheader" style="background: #D3E0EA;">
				<i class="icon-money" style="color: #053742;"></i> Point of Sales
			</div>
			<ul class="breadcrumb" style="margin-top: 5px; background: #E8F0F2;">
				<li class="active" style="color: #053742;"><b>DCDG</b></li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 30px;">
			</div>
			<?php  
			$db = mysqli_connect('localhost', 'root', '') or
			die ('Unable to connect. Check your connection parameters.');
			mysqli_select_db($db, 'dcdg' ) or die(mysqli_error($db));
			$query = 'SELECT * FROM branch1';
			$result = mysqli_query($db, $query);

			if ($result):
				if(mysqli_num_rows($result)>0):
					while($product = mysqli_fetch_assoc($result)):
                                                //print_r($product);
						?>

						<form method="post" action="incoming.php">
							<div class="products">
								<input type="" name="pt" value="<?php echo $_GET['id']; ?>" />
								<input type="" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
								<div class="row" style="margin-left: 3px;">
									<select name="product" data-placeholder="Items" class="chosen-select" tabindex="1">
										<option value=""></option>
										<?php
										switch ($position) {
											case '1':
												$query = "SELECT * FROM branch1";
												break;
											case '2':
												$query = "SELECT * FROM branch2";
												break;
											case '3':
												$query = "SELECT * FROM branch3";
												break;
											case '4':
												$query = "SELECT * FROM branch4";
												break;
										}
										$result = $db->query($query); ?>
										<?php 
										if($result->num_rows > 0){ 
											while($row = $result->fetch_assoc()){
												?>  
												<option value="<?php echo $row['barcode'];?>"><?php echo $row['barcode']; ?> - <?php echo $row['product_name']; ?> - <?php echo $row['variations']; ?>- <?php echo $row['sizes']; ?></option>
												<?php      
											} 
										}else{ 
											echo '<option value="">Item not available</option>'; 
										} 
										?>

										<input type="number" name="qty" value="1" min="1" placeholder="Qty" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-top: 15px; margin-left: 5px; margin-right: 5px; font-size:15px;" / required>

										<input type="submit" name="addpos" style="" class="btn btn-info"
										value="Add">
									</form>
								</select>
							</div>
					</form>
				<?php endwhile; ?>
				<?php
			endif;
		endif;   
		?>
		<br>
		<input type="hidden" name="discount" value="" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" />
		<input type="hidden" name="date" value="<?php echo date("m/d/y"); ?>" />
		<table class="table table-bordered" id="resultTable" data-responsive="table" style="background: #D3E0EA; letter-spacing: 0.35px; border: 1px solid;border-color:white;">
			<thead style="background-color: #39A2DB;">
				<tr>
					<th style="text-align: center;"> Barcode </th>
					<th style="text-align: center;"> Product Name </th>
					<th style="text-align: center;"> Variation </th>
					<th style="text-align: center;"> Size </th>
					<th style="text-align: center;"> Price </th>
					<th style="text-align: center;"> Qty </th>
					<th style="text-align: center;"> Amount </th>
					<th style="text-align: center;"> Action </th>
				</tr>
			</thead>
			<tbody>

				<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM sales_dummy WHERE invoice= :userid");
				$result->bindParam(':userid', $id);
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
					?>
					<tr class="record">
						<td hidden><?php echo $row['barcode']; ?></td>
						<td><?php echo $row['barcode']; ?></td>
						<td><?php echo $row['product_name']; ?></td>
						<td><?php echo $row['variations']; ?></td>
						<td><?php echo $row['size']; ?></td>
						<td>
							<?php
							$ppp=$row['price'];
							echo formatMoney($ppp, true);
							?>
						</td>
						<td><?php echo $row['quantity']; ?></td>
						<td>
							<?php
							$dfdf=$row['amount'];
							echo formatMoney($dfdf, true);
							?>
						</td>
						<td width="90"><a href="delete.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_GET['id']; ?>&qty=<?php echo $row['quantity'];?>&code=<?php echo $row['barcode'];?>"><button type="button" class="btn btn-mini btn-warning"><i class="icon icon-remove"></i>Cancel </button></a></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<th> </th>
					<th>  </th>
					<th>  </th>
					<th>  </th>
					<th>  </th>
					<td> Total Amount: </td>
					<th>  </th>
				</tr>
				<tr>
					<th colspan="5"><strong style="font-size: 14px; color: #222222;">Total:</strong></th>
					<td colspan="1"><strong style="font-size: 14px; color: #222222;">
						<?php
						function formatMoney($number, $fractional=false) {
							if ($fractional) {
								$number = sprintf('%.2f', $number);
							}
							while (true) {
								$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
								if ($replaced != $number) {
									$number = $replaced;
								} else {
									break;
								}
							}
							return $number;
						}
						$sdsd=$_GET['invoice'];
						$resultas = $db->prepare("SELECT sum(amount) FROM sales_dummy WHERE invoice= :a");
						$resultas->bindParam(':a', $sdsd);
						$resultas->execute();
						for($i=0; $rowas = $resultas->fetch(); $i++){
							$fgfg=$rowas['sum(amount)'];
							echo formatMoney($fgfg, true);
						}
						?>
					</strong></td>

					<th></th>
				</tr>

		</tbody>
		</table><br>
		<a rel="facebox" style="text-decoration: none;" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&cashier=<?php echo $_SESSION['Branch_ID']?>"><button class="btn btn-success btn-large btn-block"><i class="icon icon-save icon-large" style="padding-right:10px"></i>SAVE</button></a>
		<div class="clearfix"></div>
	</div>
</div>
</div>


</body>
</html>
<script src="vendors/chosen.jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$('.chosen-select').chosen();
	});
</script>