<?php
/*
 * Block Name: Redirects 2
 * Template for custom block author
 */?>
 <section class="sec py-0 mb-5 position-relative">
	<span class="bg-pattern" style="background-image:url('<?php bloginfo('template_directory') ?>/images/bg-pattern-dark.png'); opacity: 0.5"></span>
	<div class="container wider position-relative">
		<div class="row flex-lg-row-reverse">

                <?php
                if( have_rows('redirection') ):
                    while( have_rows('redirection') ) : the_row();
                    ?>
                    <div class="col-lg-6 col-xxl-5">
                        <div class="img">
                            <img src="<?php echo get_sub_field('image') ?>" alt="" class="w-100" />
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
