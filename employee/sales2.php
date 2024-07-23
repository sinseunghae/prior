<!DOCTYPE html>
<html>
<head>
	<!-- js -->	
	<link rel="shortcut icon" href="../images/dcdg.png" type="image/x-icon">
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
	div.scroll {
		background-color: white;
		width: 300px;
		height: 150px;
		overflow: auto;
		text-align: justify;
		padding: 20px;
		margin-bottom: -10px;
		margin-top: 2px;
	}

	#btn-add { background: #053742; color: white; }
	#btn-add:hover { background: rgba(0,0,0,0.3); color: black; }
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
			<div style="margin-top: -19px; margin-bottom: 30px;">
			</div>
		
						<br>
						<form method="post" action="incoming.php">
							<div class="products">
								<label><b style="margin-left: 23px;">Invoice:</b>
									<input type="" name="pt" hidden value="<?php echo $_GET['id']; ?> " />
									<input type="" style="margin-left: 10px;" name="invoice" value="<?php echo $_GET['invoice']; ?>" /><br></label>
									<label><b style="margin-left: 15px; margin-right: 10px;">Date:</b>
									<input type="" name="sales_date" value="<?php echo date('Y-m-d'); ?>"/>
								</label>
									 <!--SUPPLIER-->
                                             <div class="input-box" style="margin-left: 20px; margin-top: 28px;">
                                              <span class="details">Supplier:</span>
                                              <select name=branch_id id=branch_id>
                                               <option value='' selected>Select</option>
                                             <?Php
                                                require "config.php";// connection to database 
                                                $sql="SELECT  * from supplier"; // Query to collect data 
                                
                                                foreach ($dbo->query($sql) as $row2) {
                                                  echo "<option value=$row2[supplier_name]>$row2[supplier_name]</option>";
                                                }
                                                ?>
                                              </select>
                                            </div>
                                            
                                            <!--PRODUCT-->
                                            <div class="input-box" style="margin-left: 20px; margin-top: 25px;">
                                                  <span class="details">Product: </span>
                                                  <select name=product_names id=product_names>
                                                  <option value='' selected>Select</option>
                                                  </select>
                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                  <script>
                                                    $(document).ready(function() {
                                                ////////////
                                                $('#branch_id').change(function(){
                                                //var st=$('#category option:selected').text();
                                                var cat_id=$('#branch_id').val();
                                                $('#product_names').empty(); //remove all existing options
                                                ///////
                                                $.get('ddck.php',{'cat_id':cat_id},function(return_data){
                                                  $.each(return_data.data, function(key,value){
                                                    $("#product_names").append("<option value="+value.barcode+ ">"+value.product_name+", "+value.product_variations+", "+value.product_size+"</option>");
                                                  });
                                                }, "json");
                                                ///////
                                              });
                                                /////////////////////
                                              });
                                            </script>
                                          </div>
                                          <div class="input-box" style="margin-left: 20px; margin-top: 25px;">
            <span class="details">Branch</span>
            <select name=branch id=branch>
              <?php
              for($br = 1; $br <= 4; $br++) {
                    $branch = "";
                      switch($br) {
                        case 1:
                            $branch = "Mabini Branch";
                            break;
                          case 2:
                            $branch = "Abanao Branch";
                            break;
                          case 3:
                            $branch = "Magsaysay Branch";
                            break;
                          case 4:
                            $branch = "Market Branch";
                            break;
                           
                      }
                      echo "<option value='" . $br . "'>" . $branch . "</option>";
                    }
                    ?>
            </select>
          </div>
										<input type="number" name="qty" value="1" min="1" placeholder="Qty" autocomplete="off" style="width: 68px; height:37px; padding-top:6px; padding-bottom: 4px; margin-top: 28px;margin-left: 5px; font-size:15px;" / required>

										<div style="margin-left: 20px; margin-top: 28px;">
											<input type="submit" name="addpos" style="" class="btn" value="Add" id="btn-add">
										</div>
									</form>
								</div>
							</form>
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
						$result = $db->prepare("SELECT * FROM purchase_transac WHERE invoice= :userid");
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
									$supp = $row['supplier_name'];
									$bra = $row['branch_id'];
									?>
								</td>
								<td width="90"><a href="delete.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&qty=<?php echo $row['quantity'];?>&code=<?php echo $row['barcode'];?>"><button type="button" class="btn btn-mini btn-danger"><i class="icon icon-remove"></i>Cancel </button></a></td>
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
								$resultas = $db->prepare("SELECT sum(amount) FROM purchase_transac WHERE invoice= :a");
								$resultas->bindParam(':a', $sdsd);
								$resultas->execute();
								for($i=0; $rowas = $resultas->fetch(); $i++){
									$fgfg=$rowas['sum(amount)'];
									echo formatMoney($fgfg, true);
								}
								?>
								<?php
								$sdsd=$_GET['invoice'];
								$resultas = $db->prepare("SELECT sum(quantity) FROM purchase_transac WHERE invoice= :a");
								$resultas->bindParam(':a', $sdsd);
								$resultas->execute();
								for($i=0; $rowas = $resultas->fetch(); $i++){
									$cdcd=$rowas['sum(quantity)'];
								}
								?>
							</strong></td>

							<th></th>
						</tr>
					</tbody>
				</table><br>

				<!-- Save Button -->
				<div class="d-grid gap-2 col-6 mx-auto">
					<a rel="facebox" href="checkout.php?invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&cashier=<?php echo $supp?>&quantity=<?php echo $cdcd ?>&branch=<?php echo $bra ?>"><button class="btn btn-success btn-md btn-block w-2"><i class="icon icon-save icon-large" style="padding-right:10px; "></i>SAVE</button></a>
				</div>


				<div class="clearfix"></div>
			</div>
		</div>
		<br><br><br><br>
	</div>
</form>
</body>
</html>
<script src="vendors/chosen.jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$('.chosen-select').chosen();
	});
</script>


<!--SUPPLIER-->
                                            <div class="input-box" style="margin-left: 20px; margin-top: 28px;">
                                              <span class="details">Supplier:</span>
                                              <select name=branch_id id=branch_id>
                                               <option value='' selected>Select</option>
                                             <?Php
                                                require "config.php";// connection to database 
                                                $sql="SELECT  * from supplier"; // Query to collect data 
                                
                                                foreach ($dbo->query($sql) as $row2) {
                                                  echo "<option value=$row2[supplier_name]>$row2[supplier_name]</option>";
                                                }
                                                ?>
                                              </select>
                                            </div>
                                            
                                            <!--PRODUCT-->
                                            <div class="input-box" style="margin-left: 20px; margin-top: 25px;">
                                                  <span class="details">Product: </span>
                                                  <select name=product_name id=product_name>
                                                  <option value='' selected>Select</option>
                                                  </select>
                                                  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                  <script>
                                                    $(document).ready(function() {
                                                ////////////
                                                $('#branch_id').change(function(){
                                                //var st=$('#category option:selected').text();
                                                var cat_id=$('#branch_id').val();
                                                $('#product_name').empty(); //remove all existing options
                                                ///////
                                                $.get('ddck.php',{'cat_id':cat_id},function(return_data){
                                                  $.each(return_data.data, function(key,value){
                                                    $("#product_name").append("<option value="+value.barcode+ ">"+value.product_name+", "+value.product_variations+", "+value.product_size+"</option>");
                                                  });
                                                }, "json");
                                                ///////
                                              });
                                                /////////////////////
                                              });
                                            </script>
                                          </div>