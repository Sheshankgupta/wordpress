<?php
/*
 * Block Name: whatwedo
 * Template for custom block author
 */?>
 <section class="sec pb-0 pb-5 deals">
			<div class="container">
				<div class="row">
                <?php
                if( have_rows('deals') ):
                    while( have_rows('deals') ) : the_row();
                    ?>
                    <div class="col-md-6 col-lg-4 mb-5">
						<div class="box d-flex flex-column">
							<div class="img ratio-16 ratio-img"><img src="<?php echo get_sub_field('image') ?>" alt="" /></div>
							<div class="meta p text-uppercase">
								<span class="date me-3">
									<span class="icon me-2"><i class="bi bi-calendar"></i></span><?php echo get_sub_field('date') ?>
								</span>
								<span class="location">
									<span class="icon me-2"><i class="bi bi-geo-alt"></i></span><?php echo get_sub_field('place') ?>
								</span>
							</div>
							<div class="align-items-start d-flex flex-column flex-grow-1 justify-content-between text">
								<p><?php echo get_sub_field('desc') ?></p>
								<a href="<?php echo get_sub_field('deal_url') ?>" class="cta d-inline-block mt-4">
									VIEW DEAL
									<span class="icon"><img src="images/cta-arrow.svg" alt="" /></span>
								</a>
							</div>
						</div>
					</div>
                <?php
                    endwhile;
                endif;
                ?>
				</div>
			</div>
		</section>