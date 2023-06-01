<?php
/*
 * Block Name: Working
 * Template for custom block author
 */?>

<!-- Array ( [0] => Array ( [acf_fc_layout] => widgets [widget] => Array ( [0] => Array ( [widget_image] => Array ( [ID] => 33 [id] => 33 [title] => Untitled_design__1_-removebg-preview [filename] => Untitled_design__1_-removebg-preview-1.png [filesize] => 57028 [url] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1.png [link] => http://brad.pro/untitled_design__1_-removebg-preview/ [alt] => [author] => 1 [description] => [caption] => [name] => untitled_design__1_-removebg-preview [status] => inherit [uploaded_to] => 0 [date] => 2023-02-24 06:40:04 [modified] => 2023-02-24 06:40:04 [menu_order] => 0 [mime_type] => image/png [type] => image [subtype] => png [icon] => http://brad.pro/wp-includes/images/media/default.png [width] => 500 [height] => 500 [sizes] => Array ( [thumbnail] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1-150x150.png [thumbnail-width] => 150 [thumbnail-height] => 150 [medium] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1-300x300.png [medium-width] => 300 [medium-height] => 300 [medium_large] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1.png [medium_large-width] => 500 [medium_large-height] => 500 [large] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1.png [large-width] => 500 [large-height] => 500 [1536x1536] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1.png [1536x1536-width] => 500 [1536x1536-height] => 500 [2048x2048] => http://brad.pro/wp-content/uploads/2023/02/Untitled_design__1_-removebg-preview-1.png [2048x2048-width] => 500 [2048x2048-height] => 500 ) ) [widget_title] => asda [widget_content] => dasda ) ) ) ) -->

 <section class="sec working pb-0 under-welcome" id="more">
	<div class="container">
		<div class="row">
			<div class="col-xxl-11">
            <h2 class="text-uppercase"><?php the_field('main_heading') ?></h2>
				<h3 class="mb-0"><?php the_field('main_content'); ?></h3>
			</div>
		</div>
	</div>
	<div class="working-card mt-4 pt-2">
		<span class="bg-pattern" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg-pattern.png'); opacity: 0.08"></span>
		<div class="container position-relative">
			<div class="row justify-content-around">
                <?php
                    if(get_field('sub-contents')['0']['widget']['0']['widget_image']){
                ?>
				<div class="col-lg-4 mb-4 m-lg-0">
					<div class="box">
						<div class="img mb-5"><img src="<?php echo get_field('sub-contents')['0']['widget']['0']['widget_image']['url'] ?>" alt="" height="91" width="91"/></div>
						<h2 class="mb-3">
                        <?php echo get_field('sub-contents')['0']['widget']['0']['widget_title'] ?>
                        </h2>
						<p>
                        <?php echo get_field('sub-contents')['0']['widget']['0']['widget_content'] ?>
						</p>
					</div>
                </div>
                <?php
                    }
                ?>
				 <?php
                    if(get_field('sub-contents')['0']['widget']['1']['widget_image']){
                ?>
				<div class="col-lg-4 mb-4 m-lg-0">
					<div class="box">
						<div class="img mb-5"><img src="<?php echo get_field('sub-contents')['0']['widget']['1']['widget_image']['url'] ?>" alt="" height="91" width="91"/></div>
						<h2 class="mb-3">
                        <?php echo get_field('sub-contents')['0']['widget']['1']['widget_title'] ?>
                        </h2>
						<p>
                        <?php echo get_field('sub-contents')['0']['widget']['1']['widget_content'] ?>
						</p>
					</div>
                </div>
                <?php
                    }
                ?> <?php
                    if(get_field('sub-contents')['0']['widget']['2']['widget_image']){
                ?>
				<div class="col-lg-4 mb-4 m-lg-0">
					<div class="box">
						<div class="img mb-5"><img src="<?php echo get_field('sub-contents')['0']['widget']['2']['widget_image']['url'] ?>" alt="" height="91" width="91"/></div>
						<h2 class="mb-3">
                        <?php echo get_field('sub-contents')['0']['widget']['2']['widget_title'] ?>
                        </h2>
						<p>
                        <?php echo get_field('sub-contents')['0']['widget']['2']['widget_content'] ?>
						</p>
					</div>
                </div>
                <?php
                    }
                ?>
			</div>
		</div>
	</div>
</section>