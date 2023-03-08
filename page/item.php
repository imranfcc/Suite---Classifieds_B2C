<!DOCTYPE html>
<html lang="en">
<head>
	<?php if(is_file("page/inc/HTML_HEAD.php")){ include("page/inc/HTML_HEAD.php"); } ?>
</head>
<body>
<?php if(is_file("include/Pages/bodyHeader.cms.php")){ include("include/Pages/bodyHeader.cms.php"); } ?>
<!-- Start : Your Page Source -->


<?php 
$sql = "SELECT * FROM `sh_items_info` WHERE `Id`='$path_exp[4]'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$Item_Title=$row["Title"];
	$Item_Description=$row["Description"];
}

if(isset($path_exp[5]) && $path_exp["5"]>"0"){
	$sql = "SELECT * FROM `sh_sell_by_item` WHERE `Id`='$path_exp[5]'";
	$result = $con->query($sql);
	$seller_num=$result->num_rows;
	if ($result->num_rows > 0) {
		$row2 = $result->fetch_assoc();
	}
} else {
	$sql = "SELECT * FROM `sh_sell_by_item` WHERE `[sh_items_info]Id`='$row[Id]' AND  `Quantity`>'0' ORDER BY `Price` ASC ";
	$result = $con->query($sql);
	$seller_num=$result->num_rows;
	if ($result->num_rows > 0) {
		$row2 = $result->fetch_assoc();
	}
}



?>



<div class="mt-3" style="">
	<div class="container" >
		<div class="row" >
			<div class="col-12 px-1" >
				<div style="font-weight: bold; font-size:140%;"><?php echo $Item_Title; ?></div>
				<div style="font-size:90%;">
					Merk: <a href="<?php echo $path_exp["1"]."/b/".\P\Brand\brandID_to_Name($row["[sh_brand_names]Id"])."/".$row["[sh_brand_names]Id"]; ?>"><?php echo \P\Brand\brandID_to_Name($row["[sh_brand_names]Id"]); ?></a>
					|
					<i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> review
					|
					<i class="fal fa-share-alt"></i> Delen
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-7">
				<img  src="img/space.png"  onclick="location.href='<?php echo $obj->link; ?>'" style=" width:100%; background-image:url('img/Plugin/Items_info/1/handgel_photoshop.jpg'); background-position: center; background-repeat: no-repeat; background-size: contain;">
			</div>
			<div class="col-12 col-lg-5 px-1">
				<div class="rounded  p-1" style="border:1px solid #dee2e6;">
					<?php if($row2["Quantity"]>"0"){  // Yes there is in stock ?>
						<div class="font-weight-bold" style="font-size:160%;"><?php echo sh_amount($row2["Price"]); ?></div><br>
						<?php if($row2["DeliveryTime"]=="1-8wd"){ ?><span class="text-success">1 - 2 weken</span><?php } ?>
						<div class="mt-4">Verkoop door <a href="<?php echo $path_exp["1"]."/v/".suite\sellerID_to_Name($row2["[sh_sell_by]Id"])."/".$row2["[sh_sell_by]Id"];?>"><?php echo suite\sellerID_to_Name($row2["[sh_sell_by]Id"]); ?></a></div>
						<button type="button" class="btn btn-primary btn-master btn-lg btn-block mt-4" onclick="sh_load_url('<?php echo $path_exp['1']; ?>/item_AddToCart?AddItemId=<?php echo $itemInfo['Id']; ?>','#sh-Modal-Ajax');">In winkelwagen</button>
						<div><i class="fas fa-check text-success"></i> <strong class="text-success">Gratis</strong> verzending</div>
						<div><i class="fas fa-check text-success"></i> <strong class="text-success">30 dagen</strong> bedenktijd</div>
					<?php } else { ?>
						<div class="font-weight-bold text-danger" style="font-size:160%;">Niet leverbaar</div>
						<div class="mt-4">Verkoop door <a href="<?php echo $path_exp["1"]."/v/".suite\sellerID_to_Name($row2["[sh_sell_by]Id"])."/".$row2["[sh_sell_by]Id"];?>"><?php echo suite\sellerID_to_Name($row2["[sh_sell_by]Id"]); ?></a></div>
						<button type="button" class="btn btn-primary btn-master btn-lg btn-block mt-4" onclick="sh_load_url('<?php echo $path_exp['1']; ?>/item_AddToCart?AddItemId=<?php echo $itemInfo['Id']; ?>','#sh-Modal-Ajax');" disabled>In winkelwagen</button>


					<?php } ?>
				</div>
				<br>
				<strong>Andere verkopers (<?php echo \suite\item_seller_count($path_exp[4]); ?>)</strong>
				<div><a href=""><i class="fas fa-chevron-right"></i> Bekijk en verglijk alle verkopers</a></div>
				<br>
			</div>
			<div class="col-12 px-1">
				<div class=" font-weight-bold mb-2" style="font-size:150%">Beschrijving</div>
				<p class="mb-3" style="font-size:90%;"><?php echo $Item_Description; ?></p>
			</div>
		</div>
	</div>
</div>

<!-- End : Your Page Source -->
<?php if(is_file("include/Pages/bodyBottom.cms.php")){ include("include/Pages/bodyBottom.cms.php"); } ?>
</body>
</html>