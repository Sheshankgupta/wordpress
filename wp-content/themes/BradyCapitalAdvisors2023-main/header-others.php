<?php
$rep=get_field('title','option');
if($rep){
    foreach( $rep as $row ){}
}?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php wp_head(); ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Brady Capital Advisors</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
	<body>
		<header class="header" id="header">
			<div class="align-items-center container d-flex justify-content-center justify-content-lg-between">
				<nav class="d-lg-block d-none sitenav" id="siteNav">
					<ul class="nav">
						<?php wp_nav_menu(array(
							'menu'=>'Menu 1',
							'theme_loction'=>'primary-menu',
							'menu_class'=>'nav-custom'
						)); ?>
					</ul>
				</nav>
				<div class="brand">
					<a href="<?php echo get_site_url() ?>"><img src="<?php if(get_header_image()){ echo get_header_image(); } else{ echo $row['header_image']['url'];} ?>" alt="" height="80" width="73" /></a>
				</div>
				<nav class="d-none d-lg-flex justify-content-lg-end sitenav">
					<ul class="nav">
						<li><a href="<?php echo get_site_url() ?>"><?php echo $row['contact'] ?></a></li>
						<?php wp_nav_menu(array(
							'menu' => 'Menu 2',
							'theme_loction'=>'primary-menu-2',
							'menu_class'=>'nav-custom-2'
						)); ?>
						<!-- <li><a href="contact.html" class="cta">Contact</a></li> -->
					</ul>
				</nav>
				<div class="navicon d-lg-none" id="navCall"><span></span><span></span><span></span></div>
			</div>
		</header>
