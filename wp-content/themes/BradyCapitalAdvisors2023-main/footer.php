<?php
$rep=get_field('footer','option');
if($rep){
    foreach( $rep as $row ){}
}

?>
<section class="contact-call overflow-hidden">
			<div class="container">
				<div class="align-items-center row">
					<div class="col-lg-6 col-xxl-5 offset-xxl-1 pt-5 p-lg-0 m-0">
						<h2 class="h1"><?php echo $row['footer_main_section']['0']['main_heading'] ?></h2>
						<a href="<?php echo $row['footer_main_section']['0']['button_url'] ?>" class="cta red mt-4 d-inline-flex"><?php echo $row['footer_main_section']['0']['button_text'] ?></a>
					</div>
					<div class="col-lg-6">
						<div class="img"><img src="<?php echo get_template_directory_uri() ?>/images/contact-bg.png" alt="" /></div>
					</div>
				</div>
			</div>
</section>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo mb-5">
							<a href="#"><img src="<?php if(get_header_image()){ echo get_header_image(); } else{ echo $row['footer_image']['url'];} ?>" alt="" height="80" width="73"/></a>
						</div>
					</div>
					<div class="col-md-2">
						<ul class="flex-column nav mb-5">
						<?php
						if( have_rows('footer_links','option') ):
						while( have_rows('footer_links','option') ) : the_row();
						?>
                    		<li><a href="<?php echo get_sub_field('link_url') ?>">
								<?php echo get_sub_field('link_text') ?>
							</a></li>
						<?php
							endwhile;
						endif;
						?>
							
						</ul>
					</div>
					<div class="col-md-auto">
						<ul class="flex-column nav mb-5">
							<li>
							<?php echo $row['footer_bottom_section']['0']['footer_address']['0']['short_address'] ?>
							</li>
							<li><a href="#"><?php echo $row['footer_bottom_section']['0']['footer_address']['0']['phone_number'] ?></a></li>
							<li><a href="#"><?php echo $row['footer_bottom_section']['0']['footer_address']['0']['email_address'] ?></a></li>
						</ul>
					</div>
					<div class="col-md-auto ms-auto">
						<ul class="mb-5 nav social">
						<?php if( have_rows('footer_social_media','option') ):
						while( have_rows('footer_social_media','option') ) : the_row();
						?>
							<li>
								<a href="<?php the_sub_field('link') ?>" class="align-items-center d-flex justify-content-center"><i class="<?php the_sub_field('symbols') ?>"></i></a>
							</li>
							
							<?php
							endwhile;
						endif;
						?>
						</ul>
					</div>
				</div>
			</div>
			<hr />
			<div class="container">
				<div class="justify-content-between row">
					<div class="col-md-auto mt-5"><p>Copyright 2022 &copy; <?php echo $row['footer_credit_section']['0']['company_name'] ?>. All rights reserved.</p></div>
					<div class="col-md-auto mt-5">
						<ul class="nav">
							<li class="me-5 mb-md-0">
								<?php if ($row['footer_credit_section']['0']['privacy_policy_page_link']){?>
								<a href="<?php echo $row['footer_credit_section']['0']['privacy_policy_page_link'] ?>"><u>Privacy Policy</u></a>
								<?php }?>
							</li>
							<li class="mb-md-0">
								<?php if ($row['footer_credit_section']['0']['privacy_policy_page_link']){?>
								<a href="<?php echo $row['footer_credit_section']['0']['terms_of_use_page_link'] ?>"><u>Terms of Use</u></a>
								<?php }?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
	</body>
	<?php wp_footer(); ?>
</html>
