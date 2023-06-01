<?php
/*
 * Block Name: About
 * Template for custom block author
 */?>
<section class="welcome">
	<div class="container">
		<div class="inner-welcome" style="padding:65px;">
			<h2 class="text-uppercase"><?php the_field('heading') ?></h2>
			<div class="row">
				<div class="col-lg-7 pe-xl-5 m-lg-0 mb-4">
					<h3 class="mb-0"><?php the_field('left_side_content') ?></h3>
				</div>
				<div class="col-lg p-lg-2 ps-xl-5">
					<p><?php the_field('right_side_content') ?></p>
					<a href="<?php the_field('button_link') ?>" class="cta mt-4 d-inline-flex">
                    <?php the_field('right_side_button_text') ?>
						<span class="icon"><img src="<?php echo get_template_directory_uri() ?>/images/cta-arrow.svg" alt="" /></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>