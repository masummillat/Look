<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include 'header.php' ?>
	<?php

	    include 'connection.php';

		$result = array();
		$rows = array();
		//Create connection

        $sql = "select Pid,PTitle,SimDesc,OldPrice,NewPrice,Image1,Categories from Product";

        $query = mysql_query($sql);

        if (!$query) {
            echo "could not enter data".mysql_error();
        }
         
     	while($row = mysql_fetch_assoc($query)){
     		$result[] = $row;
     	}

	?>



		<div class="container ">
					<div class="row-fluid">
						<div class="col-12 col-xs-12 col-sm-6 col-md-6 column1">
							<div class="thumbnail img-responsive topimage animated fadeInLeft " style="max-width:100%; max-height:auto;">
								<img data-src="#" src="images/product1.jpg" alt="" style="max-width:100%; max-height:auto;">
								<div class="caption" style="color: #ffffff; margin-left: 10%; position: absolute;text-transform: uppercase;top: 12%;z-index: 100;">
									<h3>High heel collection</h3>
									<p>
									</p>
									<p>
										<a href="detail.html" class="btn btn-primary" >Learn more</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-xs-6 col-sm-3 col-md-3 column2">
							<div class="thumbnail img-responsive topimage">
								<img data-src="#" src="images/product2.jpg" alt="">
								<div class="caption" style="color: #ffffff; margin-left: 10%; position: absolute;text-transform: uppercase;top: 1%;z-index: 100;">
									<h3 style="font-size:18px;">best style for party</h3>
									<p>
									</p>
									<p>
										<a href="#" class="btn btn-primary">Learn more</a>
									</p>
								</div>
							</div>
							<div class="thumbnail img-responsive topimage">
								<img data-src="#" src="images/product2.jpg" alt="">
								<div class="caption"style="color: #ffffff; margin-left: 10%; position: absolute;text-transform: uppercase;top: 52%;z-index: 100;">
									<h3 style="font-size:18px;">Vintage style</h3>
									<p>
									</p>
									<p>
										<a href="#" class="btn btn-primary">Learn more</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-xs-6 col-sm-3 col-md-3 column3" >
							<div class="thumbnail img-responsive topimage" >
								<img data-src="#" src="images/product2.jpg" alt="">
								<div class="caption" style="color: #ffffff; margin-left: 10%; position: absolute;text-transform: uppercase;top: 1%;z-index: 100;">
									<h3 style="font-size:18px;">new season</h3>
									<p>
									</p>
									<p>
										<a href="#" class="btn btn-primary">Learn more</a>
									</p>
								</div>
							</div>
							<div class="thumbnail img-responsive topimage">
								<img data-src="#" src="images/product2.jpg" alt="">
								<div class="caption"  style="color: #ffffff; margin-left: 10%; position: absolute;text-transform: uppercase;top: 52%;z-index: 100;">
									<h3 style="font-size:18px;">Very unique collection</h3>
									<p>
									</p>
									<p>
										<a href="#" class="btn btn-primary">Learn more</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>






				<div class="container" style="margin-bottom:30px; padding-left:0; padding-right:0;">
					<div class="row-fluid featured_product_bar" style="margin-bottom:30px;margin-left:12px;margin-right:12px;"  >
						<h3 style="margin-top:3px; margin-bottom:3px; max-height:100px; width:auto;text-transform: uppercase;">Featured Product</h3>
					</div>
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-id" data-slide-to="0" class=""></li>
							<li data-target="#carousel-id" data-slide-to="1" class=""></li>
							<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner">
						
							 <div class="item active">
							 
							 <?php $count= 0; foreach ($result as $r) { ?>	
									<?$count++; if($count<=4) {?>
							 	
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding-right:2px;">
									<div class="thumbnail">
										<a href="#">
											<img  data-src="#"alt=""src="images/<?=$r['Image1']?>" style="height:200px;">
										</a>
										<div class="caption">
											<div class="price">
												<div class="price-old">
													<span class="currency">$</span><?=$r['OldPrice']?>
												</div>
												<div class="price-current">
													<span class="currency">$</span><?=$r['NewPrice']?>
												</div>
											</div>
											
											
											<h3><?=$r['PTitle']?></h3>
												<?$desc=substr($r['SimDesc'],0,30); $trimed=trim($desc)?>
											<p><?=$desc?></p>
											<form action="" method="post" name="CartWishform">
												<div class="btn-group">
													<button type="button" class="btn btn-primary btnfont" name="cart" onclick=""><i class="fa fa-shopping-cart">&nbsp;<span>TO CART</span></i>
													</button>
													<button type="button" class="btn btn-primary btnfont" name="wish"><i class="fa fa-heart">&nbsp;<span>WISHLIST</i></button>
												</div>
											</form>
										</div>
									</div>
								</div><? } ?>
						<? } ?>
								
							</div> 
							<!--Second slide-->
							<div class="item">
								<!--1st product-->
								<?php $count= 0; foreach ($result as $r) { ?>	
									<?$count++; if($count>=5 && $count<=8) {?>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding-right:2px;">
									<div class="thumbnail">
										<a href="#">
											<img  data-src="#"alt=""src="images/<?=$r['Image1']?>" style="height:200px;">
										</a>
										<div class="caption">
											<div class="price">
												<div class="price-old">
													<span class="currency">$</span><?=$r['OldPrice']?>
												</div>
												<div class="price-current">
													<span class="currency">$</span><?=$r['NewPrice']?>
												</div>
											</div>
											
											
											<h3><?=$r['PTitle']?></h3>
												<?$desc=substr($r['SimDesc'],0,30); $trimed=trim($desc)?>
											<p><?=$desc?></p>
											<form action="" method="post" name="CartWishform">
												<div class="btn-group">
													<button type="button" class="btn btn-primary btnfont" name="cart" onclick=""><i class="fa fa-shopping-cart">&nbsp;<span>TO CART</span></i>
													</button>
													<button type="button" class="btn btn-primary btnfont" name="wish"><i class="fa fa-heart">&nbsp;<span>WISHLIST</i></button>
												</div>
											</form>
										</div>
									</div>
								</div><?}?>
								<?}?>

							</div>

						</div>
						<a class="left carousel-control slidePositionLeft" href="#carousel-id" data-slide="prev" style="background:none;"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control  slidePositionRight" href="#carousel-id" data-slide="next" style="background:none;"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>


				<section>
					<div class="container" style="padding-left:0; padding-right:0;">
						<div class="fluid-row Best_sellers" style="margin-left:12px; margin-right:12px;">
							<h4style="margin-top:3px; margin-bottom:3px; max-height:100px; width:auto;text-transform: uppercase;">BEST SELLERS</h4>
						</div>
						<!--..............Best sellers product starts here ...............-->
						<div class="fluid-row">
							<!-- product 1-->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
								<div class="thumbnail">
									<a href="#">
										<img data-src="#"alt=""src="images/product02.png">
									</a>
									<div class="caption">
										<div class="price">
											<div class="price-old">
												<span class="currency">$</span>450
											</div>
											<div class="price-current">
												<span class="currency">$</span>350
											</div>
										</div>
										<h3>Man Sport Hiking shoe</h3>
										<p>
											This is a new porduct of lotto. Newly arraival in Bangladesh...
										</p>
										<div class="btn-group">
											<button type="button" class="btn btn-primary btnfont"><i class="fa fa-shopping-cart"> TO CART</i>
											</button>
											<button type="button" class="btn btn-primary btnfont"><i class="fa fa-heart"> WISHLIST</i></button>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!--Best Sellers 2nd row-->
						<div class="fluid-row">
							<!-- product 1-->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="thumbnail">
										<a href="#">
											<img data-src="#"alt=""src="images/product02.png">
										</a>
										<div class="caption">
											<div class="price">
												<div class="price-old">
													<span class="currency">$</span>450
												</div>
												<div class="price-current">
													<span class="currency">$</span>350
												</div>
											</div>
											<!-- Review star -->
											
											<!--ending of stars  -->
											<h3>Man Sport Hiking shoe</h3>
											<p>
												This is a new porduct of lotto. Newly arraival in Bangladesh...
											</p>
											<div class="btn-group">
												<button type="button" class="btn btn-primary btnfont"><i class="fa fa-shopping-cart"> TO CART</i>
												</button>
												<button type="button" class="btn btn-primary btnfont"><i class="fa fa-heart"> WISHLIST</i></button>
											</div>
										</div>
									</div>
								</div>
							
						</div>
						<!--End of Best Sellers-->
					</div>
				</section>







	<?php include 'footer.php' ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>