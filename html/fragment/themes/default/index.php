<?php
	$home = Page::byUrlQ("home");
	$imageFeature = Page::byUrlQ("glB_2FxzFs");
	$trendingPost = Page::byUrlQ("xRLQmmQqzO");
	$smallGallery = Page::byUrlQ("Hhr24269C5");
	$category = Page::byUrlQ("HusMA6ETxF");

	//headerImage
	$hImageOne = $fragments['headerImageOne']['record'];
    $hImageTwo = $fragments['headerImageTwo']['record'];
	//headerImage

	//imagePromotion
	$iPromotionOne = $fragments['imagePromotionOne']['record'];
	$iPromotionTwo = $fragments['imagePromotionTwo']['record'];
	$iPromotionThree = $fragments['imagePromotionThree']['record'];
	//imagePromotion

	//imageCarrousel
	$iCarrouselOne = $fragments['imageCarrouselOne']['record'];
	$iCarrouselTwo = $fragments['imageCarrouselTwo']['record'];
	$iCarrouselThree = $fragments['imageCarrouselThree']['record'];
	$iCarrouselFour = $fragments['imageCarrouselFour']['record'];
	$iCarrouselFive = $fragments['imageCarrouselFive']['record'];
	//imageCarrousel

	//imageFeature
	$resultImageFeature = Page::search(array(
    	'idparent' => $imageFeature->idpage,
    	'fragments' => array('titleImage', 'image', 'descImage', 'author', 'date')
    ));
    $imageFeatureRes = $resultImageFeature['records'];
	//imageFeature

	//imageAlone
	$image = $fragments['image']['record'];
	//imageAlone

	//trendingPosts
	$resultTrendingPost = Page::search(array(
		'idparent' => $trendingPost->idpage,
		'fragments' => array('imagePost', 'desc')
	));
	$trendingPostRes = $resultTrendingPost['records'];
	//trendingPosts

	//smallGallery
	$resultSmallGallery = Page::search(array(
		'idparent' => $smallGallery->idpage,
		'fragments' => array('imageGallery')
	));
	$smallGalleryRes = $resultSmallGallery['records'];
	//smallGallery

	//category
	$resultCategory = Page::search(array(
		'idparent' => $category->idpage,
		'fragments' => array('titleCategorie')
	));
	$categoryRes = $resultCategory['records'];
	//category

	//Footer
	$descFooter = $fragments['footerDesc']['record']
	//Footer

?><!DOCTYPE html>
<html>
<head>
    <link href="fragment/themes/default/design/css/foundation.min.css" rel="stylesheet">
    <link href="fragment/themes/default/design/css/app.css" rel="stylesheet">
</head>
<body>
	<header>
	<?php include 'componentes/searchBar.php' ?>

	<br>

	<!-- headerImage -->
	<section class=“block features” id=“caracteristicas”>
	   <div class=“holder”>
	       <div class=“container-fluid”>
	           <div class=“header”></div>
	           <div class=“content”>
				<article class="grid-container">
				  <div class="grid-x grid-margin-x">
				    <div class="medium-4 cell">
				    	<div><?= $hImageOne->value ?></div>
				    </div>
				    <div class="medium-8 cell">
				    	<div><?= $hImageTwo->value ?></div>
				    </div>
				  </div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- ./headerImage -->

	<br>
	           	
	<?php include 'componentes/titleBar.php' ?>
	<?php include 'componentes/menuHeader.php' ?>
	</header>
	<br>
	<!-- imagePromotion -->
	<section class=“block features” id=“caracteristicas”>
	   <div class=“holder”>
	       <div class=“container-fluid”>
	           <div class=“header”></div>
	           <div class=“content”>
				<article class="grid-container">
				  <div class="grid-x grid-margin-x">
				    <div class="medium-8 cell">
				      <p><img><?= $iPromotionOne->value ?></p>
				    </div>
				    <div class="medium-4 cell">
				      <p><img><?= $iPromotionTwo->value ?></p>
				      <p><img><?= $iPromotionThree->value ?></p>
				    </div>
				  </div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- ./imagePromotion -->
	<hr>
	<h4 class="text-center">BREAKING NEWS</h4>
	<hr>
	<!-- imageCarrousel -->
	<section class=“block features” id=“caracteristicas”>
	   <div class=“holder”>
	       <div class=“container-fluid”>
	           <div class=“header”></div>
	           <div class=“content”>
				<article class="grid-container">
					<div class="grid-x grid-margin-x small-up-3 medium-up-4 large-up-5">

				    <div class="cell">
				      <img><?= $iCarrouselOne->value ?>
				    </div>

				    <div class="cell">
				      <img><?= $iCarrouselTwo->value ?>
				    </div>

				    <div class="cell">
				      <img><?= $iCarrouselThree->value ?>
				    </div>

				    <div class="cell show-for-medium">
				      <img><?= $iCarrouselFour->value ?>
				    </div>

				    <div class="cell show-for-large">
				      <img><?= $iCarrouselFive->value ?>
				    </div>

				  </div>
				</article>
	           </div>
	       </div>
	   </div>
	</section>
	<!-- ./imageCarrousel -->
	<hr>
	<h4 class="text-center">LATEST STORIES</h4>
	<hr>

<article class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="large-8 cell" style="border-right: 1px solid #E3E5E8;">

			<!-- imageFeature -->
			<section>
				<div class="holder">
					<div class="containter-fluid">
						<div class="header">
							<div class="content">
								<div class="grid-x grid-margin-x">
									<?php foreach ($imageFeatureRes as $ifr) { ?>
					        		<div class="large-6 cell">
					          			<p><img><?= $ifr->fragments['image']->value ?></p>
					        		</div>
						        	<div class="large-6 cell">
						          		<h5><a href="#"><?= $ifr->fragments['titleImage']->value ?></a></h5>
						          		<p>
						          		<span><i class="fi-torso"> By <?= $ifr->fragments['author']->value ?></i></span>
						          		<span><i class="fi-calendar"> <?= $ifr->fragments['date']->value ?></i></span>
						          		</p>
						          		<p><?= $ifr->fragments['descImage']->value ?></p>
						        	</div>
					    			<?php } ?>
					      		</div>
							</div>
						</div>
					</div>
				</div>
			</section>   
			<!-- ./imageFeature -->

		</div>
		<div class="grid-x large-4 cell">
			<aside>

				<!-- followers -->
				<section>
					<div class="holder">
						<div class="container-fluid">
							<div class="header">
								<div class="content">
									<div class="grid-x small-up-3">
					  					<div class="cell text-center">
					  						<i class="fi-social-facebook"></i>
					  						<h6>56,009</h6>
					  						<p><small>FOLLOWERS</small></p>
					  						<br>
					        			</div>
					        		</div>
								</div>
							</div>
						</div>
					</div>
				</section>		
				<!-- ./followers -->

				<!-- followers -->
				<section>
					<div class="holder">
						<div class="container-fluid">
							<div class="header">
								<div class="content">
									<div class="grid-x cell">
								        <p class="lead">FROM OUR FRIENDS</p>
								        <p><img><?= $image->value ?></p>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</section>		
				<!-- ./followers -->

				<!-- trendingPosts -->
				<section>
					<div class="holder">
						<div class="container-fluid">
							<div class="header">
								<div class="content">
									<div class="grid-x cell">
	        							<p class="lead"><?= $trendingPost->title ?></p>
	        							<?php foreach ($trendingPostRes as $tpr) { ?>
										<div class="media-object">
											<div class="media-object-section">
												<img><?= $tpr->fragments['imagePost']->value ?>
									       	</div>
									        <div class="media-object-section">
									        	<h5><?= $tpr->fragments['desc']->value ?></h5>
									        </div>
									    </div>
	        							<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>  				
				<!-- ./trendingPosts -->

			</aside>
		</div>
	</div>
</article>

<!-- smallGalleryInfo -->
	<section>
		<div class="holder">
			<div class="container-fluid">
				<div class="header">
					<div class="content">
						<footer>
						  <div class="grid-x grid-margin-x expanded callout secondary">

						    <div class="large-4 cell">
						      <h5>FLICKR IMAGES</h5>
						      <div class="grid-x small-up-4">
						      <?php foreach ($smallGalleryRes as $sgr) { ?>
						        <div class="cell">
						        	<div class="thumbnail"> <?= $sgr->fragments['imageGallery']->value ?></div>
						        </div>
						  	  <?php } ?>
						      </div>
						    </div>

						    <div class="large-4 cell">
						      <h5>FLICKR IMAGES</h5>
						      <?php foreach ($categoryRes as $cr) { ?>
						      	<span class="secondary label"><?= $cr->fragments['titleCategorie']->value ?></span>
						      <?php } ?>
						      
						    </div>

						    <div class="large-4 cell">
						      <h5>RANDOM MAG</h5>
						      <p><?= $descFooter->value ?></p>
						    </div>
						  </div>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- ./smallGalleryInfo -->
<?php include 'componentes/menuFooter.php' ?>

	<script src="fragment/themes/default/design/js/vendor/jquery.js"></script>
    <script src="fragment/themes/default/design/js/vendor/what-input.js"></script>
    <script src="fragment/themes/default/design/js/vendor/foundation.js"></script>
    <script src="fragment/themes/default/design/js/app.js"></script>
</body>
</html>