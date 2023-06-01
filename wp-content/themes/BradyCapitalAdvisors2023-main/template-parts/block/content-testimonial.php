<?php
/*
 * Block Name: Testimonial
 * Template for custom block author
 */?>

<section class="testimonials position-relative">
	<span class="bg-pattern" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg-pattern-dark.png'); opacity: 0.3"></span>
	<div class="container position-relative">
		<div class="owl-carousel slider">
            <?php
                if( have_rows('testimonial') ):
                    while( have_rows('testimonial') ) : the_row();
                    ?>
                    <div class="item text-center">
                        <h2 class="text-uppercase"><?php echo get_sub_field('name') ?></h2>
                        <h3><?php echo get_sub_field('slogan') ?></h3>
                        <div class="quote"><img src="<?php echo get_template_directory_uri() ?>/images/quote-icon.svg" alt="" height="18" width="24" /></div>
                        <div class="text mx-auto" style="max-width: 680px">
                            <p><?php echo get_sub_field('review') ?></p>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
				
		</div>
	</div>
</section>