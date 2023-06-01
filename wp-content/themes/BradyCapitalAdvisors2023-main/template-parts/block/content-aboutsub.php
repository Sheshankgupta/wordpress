<?php
/*
 * Block Name: aboutsub
 * Template for custom block author
 */?>

<section class="welcome move-top">
			<div class="container">
				<div class="inner-welcome" style="padding:65px">
					<div class="align-items-center d-flex flex-column flex-lg-row justify-content-around number-meta position-relative text-center text-uppercase">
						
					<?php
                if( have_rows('about-page') ):
                    while( have_rows('about-page') ) : the_row();
                    ?>
						<div class="box">
							<h2 class="align-items-center d-flex"><span class="me-2"><?php echo get_sub_field('symbol'); ?></span><?php echo get_sub_field('stat') ?></h2>
							<h3 class="mb-0"><?php echo get_sub_field('heading') ?></h3>
						</div>
                <?php
                    endwhile;
                endif;
                ?>
					
					</div>
				</div>
			</div>
		</section>