<?php
session_start();
require_once 'model/Base.php';/*fetch Directory variables*/
require_once 'vendor/autoload.php';
$client = new GuzzleHttp\Client();

	$res_uid = $client->request('GET', DIR_CONT . 'CON_users.php?action=get');/*fetch userId*/
	$usr = json_decode($res_uid->getBody());
?>
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<!--Begin::Dashboard 3-->
	<!--begin:: Widgets/Activity-->
	<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid">
		<div class="kt-portlet__body kt-portlet__body--fit">
			<div class="kt-widget17">
				<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides">
					<div class="kt-widget17__chart slider-height">
						<div class="owl-carousel owl-carousel1 owl-theme" style="z-index: 0;">
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-perfume-phone.jpg">
								  <img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-perfume.jpg" class="top-slider" alt="New and trending in beauty and perfume">
								</picture>
							</div>
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-bazar-phone.jpg">
								  <img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-bazar.jpg" class="top-slider" alt="Great selection and lowest prices">
								</picture>
							</div>
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-cosmetics-phone.jpg">
								  <img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-cosmetics.jpg" class="top-slider" alt="Cosmetic and skin care wholesale prices">
								</picture>
							</div>
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-food-phone.jpg">
									<img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-food.jpg" class="top-slider" alt="wholesale food and beverages">
								</picture>
							</div>
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-products-phone.jpg">
								  <img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-products.jpg" class="top-slider" alt="wholesale products">
								</picture>
							</div>
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-makeup-phone.jpg">
									<img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-makeup.jpg" class="top-slider" alt="wholesale makeup">
								</picture>
							</div>
							<div class="item">
								<picture>
									<source media="(max-width:650px)" srcset="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-haircare-phone.jpg">
								  <img src="assets/media/sliders/supplychain-jomlahbazar-emarket-wholesale-expo2020-slider-haircare.jpg" class="top-slider" alt="Hair care wholesale">
								</picture>
							</div>
						</div>
					</div>
				</div>
				<div class="row safari-row">
					<div class="col-md-3">
						<div class="kt-widget17__stats">
							<div class="kt-widget17__items">
								<div class="kt-widget17__item /*kt-transparent-70 kt-p10*/ kt-pt5 kt-pr0 kt-pl0 kt-pb-0 rounded shadow box-purple">
									<h2 class="kt-font-light text-center"><?php echo $main_categories->data[0]->name;?></h2>
									<div class="row kt-align-center">
										<a href="<?php echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=1' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">
											<span class="kt-widget17__icon"><img src="assets/media/categories/supplychain-jomlahbazar-emarket-wholesale-expo2020-main-category-image-grocery.jpg" alt="" class="btn-width-full"></span>
										</a>
		<?php
		// foreach ($categories->categories1 as $category) {
		// 	if(strlen($category->name)>13) $cat_name=substr($category->name,0,13)."...";
		// 	else $cat_name=$category->name;
		// 	echo '<div class="col-md-6">';
		// 	echo '<a href="'.DIR_VIEW.DIR_PRO.'marketplace.php?cat='.$category->categoryId.'">';
		// 	echo '<span class="kt-widget17__icon"><img src="'.$category->icon.'" alt="" class="btn-width-full" style="height: 150px;"></span>';
		// 	echo '<span class="kt-widget17__subtitle /*kt-font-light*/">'.$cat_name.'</span>';
		// 	echo '</a></div>';
		// }
		?>
								</div>
									<!-- <div class="kt-space-10"></div>
									<p class="kt-m0"><a href="<?php //echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=1' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">View All</a></p> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kt-widget17__stats">
							<div class="kt-widget17__items">
								<div class="kt-widget17__item /*kt-transparent-70 kt-p10*/ kt-pt5 kt-pr0 kt-pl0 kt-pb-0 rounded shadow box-red">
									<h2 class="kt-font-light text-center"><?php echo $main_categories->data[1]->name;?></h2>
									<div class="row kt-align-center">
										<a href="<?php echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=2' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">
											<span class="kt-widget17__icon"><img src="assets/media/categories/supplychain-jomlahbazar-emarket-wholesale-expo2020-main-category-image-perfume.jpg" alt="" class="btn-width-full"></span>
										</a>
		<?php
		// foreach ($categories->categories2 as $category) {
		// 	if(strlen($category->name)>13) $cat_name=substr($category->name,0,13)."...";
		// 	else $cat_name=$category->name;
		// 	echo '<div class="col-md-6">';
		// 	echo '<a href="'.DIR_VIEW.DIR_PRO.'marketplace.php?cat='.$category->categoryId.'">';
		// 	echo '<span class="kt-widget17__icon"><img src="'.$category->icon.'" alt="" class="btn-width-full" style="height: 150px;"></span>';
		// 	echo '<span class="kt-widget17__subtitle /*kt-font-light*/">'.$cat_name.'</span>';
		// 	echo '</a></div>';
		// }
		?>
								</div>
									<!-- <div class="kt-space-10"></div>
									<p class="kt-m0"><a href="<?php //echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=2' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">View All</a></p> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kt-widget17__stats">
							<div class="kt-widget17__items">
								<div class="kt-widget17__item /*kt-transparent-70 kt-p10*/ kt-pt5 kt-pr0 kt-pl0 kt-pb-0 rounded shadow box-yellow">
									<h2 class="kt-font-light text-center"><?php echo $main_categories->data[2]->name;?></h2>
									<div class="row kt-align-center">
										<a href="<?php echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=3' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">
											<span class="kt-widget17__icon"><img src="assets/media/categories/supplychain-jomlahbazar-emarket-wholesale-expo2020-main-category-image-beauty-make-up.jpg" alt="" class="btn-width-full"></span>
										</a>
		<?php
		// foreach ($categories->categories3 as $category) {
		// 	if(strlen($category->name)>13) $cat_name=substr($category->name,0,13)."...";
		// 	else $cat_name=$category->name;
		// 	echo '<div class="col-md-6">';
		// 	echo '<a href="'.DIR_VIEW.DIR_PRO.'marketplace.php?cat='.$category->categoryId.'">';
		// 	echo '<span class="kt-widget17__icon"><img src="'.$category->icon.'" alt="" class="btn-width-full" style="height: 150px;"></span>';
		// 	echo '<span class="kt-widget17__subtitle /*kt-font-light*/">'.$cat_name.'</span>';
		// 	echo '</a></div>';
		// }
		?>
								</div>
									<!-- <div class="kt-space-10"></div>
									<p class="kt-m0"><a href="<?php //echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=3' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">View All</a></p> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kt-widget17__stats">
							<div class="kt-widget17__items">
								<div class="kt-widget17__item /*kt-transparent-70 kt-p10*/ kt-pt5 kt-pr0 kt-pl0 kt-pb-0 rounded shadow box-orange">
									<h2 class="kt-font-light text-center"><?php echo $main_categories->data[3]->name;?></h2>
									<div class="row kt-align-center">
										<a href="<?php echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=4' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">
											<span class="kt-widget17__icon"><img src="assets/media/categories/supplychain-jomlahbazar-emarket-wholesale-expo2020-main-category-image-personal-care.jpg" alt="" class="btn-width-full"></span>
										</a>
		<?php
		// foreach ($categories->categories4 as $category) {
		// 	if(strlen($category->name)>13) $cat_name=substr($category->name,0,13)."...";
		// 	else $cat_name=$category->name;
		// 	echo '<div class="col-md-6">';
		// 	echo '<a href="'.DIR_VIEW.DIR_PRO.'marketplace.php?cat='.$category->categoryId.'">';
		// 	echo '<span class="kt-widget17__icon"><img src="'.$category->icon.'" alt="" class="btn-width-full" style="height: 150px;"></span>';
		// 	echo '<span class="kt-widget17__subtitle /*kt-font-light*/">'.$cat_name.'</span>';
		// 	echo '</a></div>';
		// }
		?>
								</div>
									<!-- <div class="kt-space-10"></div>
									<p class="kt-m0"><a href="<?php //echo DIR_VIEW . DIR_CAT . 'categories.php?maincategoryId=4' ?>" class="kt-link kt-font-bolder kt-m0 kt-font-light">View All</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--end:: Widgets/Activity-->
	<hr>
	<div class="row">
		<h2 class="kt-font-lg">Latest Products <span class="kt-font-14"><a href="<?php echo DIR_VIEW.DIR_PRO."marketplace.php" ; ?>" class="kt-link kt-font-bolder">View All</a><span></h2>
	</div>
	<div class="row">
		<div class="owl-carousel owl-carousel3 owl-theme" style="z-index: 0;">
			<?php
			foreach ($usr as $latest_product) {
				echo '<a href="'.DIR_ROOT.DIR_VW.DIR_PRO.'productdetails.php?productId='.$latest_product->productId.'" class="kt-widget19__username"><div class="item"><div class="kt-portlet kt-portlet--height-fluid kt-widget19 rounded"><div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill"><div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 100px; background-image: url(' . $latest_product->path . ');min-height: 150px;background-size: contain;background-position: center;"></div></div>';
				if (strlen($latest_product->name)>50) $pro_name = substr($latest_product->name,0,50)."...";
				else $pro_name = $latest_product->name;
				echo '<div class="kt-portlet__body height-55"><div class="kt-widget19__wrapper"><div class="kt-widget19__content">
  <div class="kt-widget19__info">' . $pro_name . '</div>
  </div></div></div></div></div></a>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<h2 class="kt-font-lg">Best Seller Products <span class="kt-font-14"><a href="<?php echo DIR_VIEW.DIR_PRO."marketplace.php?bs=1";?>" class="kt-link kt-font-bolder">View All</a><span></h2>
		</div>
		<div class="row">
		<div class="owl-carousel owl-carousel3 owl-theme" style="z-index: 0;">
			<?php
			foreach ($bestseller_products as $bestseller_product) {
				echo '<a href="'.DIR_ROOT.DIR_VW.DIR_PRO.'productdetails.php?productId='.$bestseller_product->productId.'" class="kt-widget19__username"><div class="item"><div class="kt-portlet kt-portlet--height-fluid kt-widget19 rounded"><div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill"><div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 100px; background-image: url(' . $bestseller_product->path . ');min-height: 150px;background-size: contain;background-position: center;"></div></div>';
				echo '<div class="kt-portlet__body height-55"><div class="kt-widget19__wrapper"><div class="kt-widget19__content">
  <div class="kt-widget19__info">' . $bestseller_product->name . '</div>
  </div></div></div></div></div></a>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<h2 class="kt-font-lg">Limited Offer Products <span class="kt-font-14"><a href="<?php echo DIR_VIEW.DIR_PRO."marketplace.php?ft=1";?>" class="kt-link kt-font-bolder">View All</a><span></h2>
		</div>
		<div class="row">
			<div class="owl-carousel owl-carousel3 owl-theme" style="z-index: 0;">
			<?php
			foreach ($limitedoffer_products as $limitedoffer_product) {
				echo '<a href="'.DIR_ROOT.DIR_VW.DIR_PRO.'productdetails.php?productId='.$limitedoffer_product->productId.'" class="kt-widget19__username"><div class="item"><div class="kt-portlet kt-portlet--height-fluid kt-widget19 rounded"><div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill"><div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 100px; background-image: url(' . $limitedoffer_product->path . ');min-height: 150px;background-size: contain;background-position: center;"></div></div>';
				echo '<div class="kt-portlet__body height-55"><div class="kt-widget19__wrapper"><div class="kt-widget19__content">
  <div class="kt-widget19__info">' . $limitedoffer_product->name . '</div>
  </div></div></div></div></div></a>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<h2 class="kt-font-lg">Less than 99 AED Products <span class="kt-font-14"><a href="<?php echo DIR_VIEW.DIR_PRO."marketplace.php?maxp=99";?>" class="kt-link kt-font-bolder">View All</a><span></h2>
		</div>
		<div class="row">
			<div class="owl-carousel owl-carousel3 owl-theme" style="z-index: 0;">
			<?php
			foreach ($less99_products as $less99_product) {
				echo '<a href="'.DIR_ROOT.DIR_VW.DIR_PRO.'productdetails.php?productId='.$less99_product->productId.'" class="kt-widget19__username"><div class="item"><div class="kt-portlet kt-portlet--height-fluid kt-widget19 rounded"><div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill"><div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 100px; background-image: url(' . $less99_product->path . ');min-height: 150px;background-size: contain;background-position: center;"></div></div>';
				echo '<div class="kt-portlet__body height-55"><div class="kt-widget19__wrapper"><div class="kt-widget19__content">
  <div class="kt-widget19__info">' . $less99_product->name . '</div>
  </div></div></div></div></div></a>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="text-align:center;">
			<div class="owl-carousel owl-carousel4 owl-theme" style="z-index: 0;">
				<div class="item"><img src="assets/media/ads/supplychain-jomlahbazar-emarket-wholesale-expo2020-ad-1.jpg" alt="" style="width:100%;height:300px;margin-bottom: 0px;" class="rounded"></div>
				<div class="item"><img src="assets/media/ads/supplychain-jomlahbazar-emarket-wholesale-expo2020-ad-2.jpg" alt="" style="width:100%;height:300px;margin-bottom: 0px;" class="rounded"></div>
				<div class="item"><img src="assets/media/ads/supplychain-jomlahbazar-emarket-wholesale-expo2020-ad-3.jpg" alt="" style="width:100%;height:300px;margin-bottom: 0px;" class="rounded"></div>
				<div class="item"><img src="assets/media/ads/supplychain-jomlahbazar-emarket-wholesale-expo2020-ad-4.jpg" alt="" style="width:100%;height:300px;margin-bottom: 0px;" class="rounded"></div>
				<div class="item"><img src="assets/media/ads/supplychain-jomlahbazar-emarket-wholesale-expo2020-ad-5.jpg" alt="" style="width:100%;height:300px;margin-bottom: 0px;" class="rounded"></div>
				<div class="item"><img src="assets/media/ads/supplychain-jomlahbazar-emarket-wholesale-expo2020-ad-6.jpg" alt="" style="width:100%;height:300px;margin-bottom: 0px;" class="rounded"></div>
			</div>
		</div>
	</div>
	<!--End::Dashboard 3-->
</div>
<!-- end:: Content -->
</div>
<?php
include(DIR_VIEW . DIR_CON . "footer.php");
?>
<script type="text/javascript">
	$('.owl-carousel1').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		items: 1,
		navText: ["<i class='la la-angle-left'></i>","<i class='la la-angle-right'></i>"]
	});
	$('.owl-carousel2').owlCarousel({
		margin: 10,
		items: 7
	});
	$('.owl-carousel3').owlCarousel({
		margin: 10,
		responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:7,
            loop:false
        }
    }
	});
	$('.owl-carousel4').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots:false,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	        },
	        600:{
	            items:2,
	        },
	        1000:{
	            items:4,
	            loop:false
	        }
	    }
	});
</script>
