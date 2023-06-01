<?php
/*
 * Block Name: Redirects
 * Template for custom block author
 */?>



<section class="sec pt-0 pb-4 position-relative">
	<span class="bg-pattern" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg-pattern-dark.png'); opacity: 0.5"></span>
	<div class="container wider position-relative p-0">
		<div class="row">

		<?php
                if( have_rows('redirection') ):
                    while( have_rows('redirection') ) : the_row();
                    ?>
                    <div class="col-6 col-lg-3 col-xl-2 p-lg-0">
						<div class="img ratio-img doublehgt">
							<img src="<?php echo get_sub_field('image') ?>" alt="" class="w-100" />
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="img ratio-img">
							<img src="<?php echo get_sub_field('image_copy') ?>" alt="" class="w-100" />
						</div>
					</div>
					<div class="col-lg-6">
						<div class="align-items-start d-flex dark-box flex-column justify-content-center">
							<h2 class="h3"><?php echo get_sub_field('heading') ?></h2>
							<p><?php echo get_sub_field('short_desc') ?></p>
							<a href="<?php echo get_sub_field('btn-url') ?>" class="cta d-inline-flex mt-4">
							<?php echo get_sub_field('btn-text') ?>
								<span class="icon"><img src="<?php echo get_template_directory_uri() ?>/images/cta-arrow.svg" alt="" /></span>
							</a>
						</div>
					</div>
                <?php
                    endwhile;
                endif;
                ?>


			
		</div>
	</div>
</section>
