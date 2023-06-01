<?php
/*
 * Block Name: whatwedo
 * Template for custom block author
 */?>
<section class="sec content">
	<div class="container wider">
		<div class="row flex-lg-row-reverse">
			<div class="col-lg-6 pe-lg-0">
				<div class="img neg-top mb-4 mb-lg-0">
					<img src="<?php the_field('image') ?>" alt="" class="w-100" />
				</div>
			</div>
			<div class="col-lg-6 col-xxl-5 offset-xxl-1">
				<div class="d-flex meta-number text-uppercase">
					

                    <?php
                if( have_rows('borrowstat') ):
                    while( have_rows('borrowstat') ) : the_row();
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
				<div class="img-arrow-down d-none d-md-block" style="padding-left: 30px; padding-top: 40px">
					<img src="<?php echo get_template_directory_uri() ?>/images/arrow-long-below.svg" alt=""/>
				</div>
			</div>
		</div>
	</div>
	<div class="container pt-5 mt-4">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<h2 class="h3 mb-4"><?php the_field('partners_heading') ?></h2>
				<ul class="list mb-0">
                <?php
                if( have_rows('left_partners') ):
                    while( have_rows('left_partners') ) : the_row();
                    ?>
                    <li><?php echo get_sub_field('partners') ?></li>
                <?php
                    endwhile;
                endif;
                ?>
					
				</ul>
			</div>
			<div class="col-lg-6">
				<h2 class="h3 mb-4"><?php the_field('partners_heading') ?></h2>
				<ul class="list mb-0">
                <?php
                if( have_rows('right_partners') ):
                    while( have_rows('right_partners') ) : the_row();
                    ?>
                     <li><?php echo get_sub_field('partners') ?></li>
                <?php
                    endwhile;
                endif;
                ?>
				</ul>
			</div>
		</div>
	</div>
</section>