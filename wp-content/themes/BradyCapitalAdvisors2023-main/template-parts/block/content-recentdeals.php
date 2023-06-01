<?php
/*
 * Block Name: recentdeals
 * Template for custom block author
 */?>

<section class="sec recent-deals">
		<div class="container">
			<h2 class="h3 mb-5">Recent Deals</h2>
			<div class="row  justify-content-around">

                <?php
                if( have_rows('recentdeals') ):
                    while( have_rows('recentdeals') ) : the_row();
                    ?>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 display-flex">
						<div class="box">
						    <div class="img mb-3 ratio-img ratio-16"><img src="<?php echo get_sub_field('deal-img') ?>" alt="" /></div>
						    <h2 class="p mb-3"><strong><?php echo get_sub_field('the-deal') ?></strong></h2>
						    <p>
                                <strong><?php echo get_sub_field('deal-hghlight') ?></strong><br />
                                <?php echo get_sub_field('deal-content') ?>
						    </p>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
					
			</div>
		</div>
	</section>