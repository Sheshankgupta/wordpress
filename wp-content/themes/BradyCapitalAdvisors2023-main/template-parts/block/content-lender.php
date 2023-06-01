<?php
/*
 * Block Name: lenders
 * Template for custom block author
 */?>
<section class="sec content">
			<div class="container wider">
				<div class="row">
					<div class="col-lg-6 ps-lg-0 mb-4 mb-lg-0">
						<div class="img neg-top">
							<img src="<?php the_field('image') ?>" alt="" class="w-100" />
						</div>
					</div>
					<div class="col-lg-6 ps-lg-5">
						<h2 class="h3 mb-4"><?php the_field('head') ?></h2>
						<p><?php the_field('desc') ?></p>
						<div class="d-flex meta-number mt-5 text-uppercase">
                        <?php
                        if( have_rows('lenderstat') ):
                            while( have_rows('lenderstat') ) : the_row();
                            ?>
                            <div class="box">
                                <h2 class="mb-0"><?php echo get_sub_field('name') ?></h2>
                                <h3 class="h2 mb-0"><?php echo get_sub_field('desc') ?></h3>
                            </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		