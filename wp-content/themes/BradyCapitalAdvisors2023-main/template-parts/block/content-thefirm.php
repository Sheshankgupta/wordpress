<?php
/*
 * Block Name: thefirm
 * Template for custom block author
 */?>

<section class="sec light over overflow-hidden position-relative under-welcome mx-0 px-0">
			<span class="bg-pattern" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg-pattern.png'); opacity: 0.08; top: 600px"></span>
			<div class="container wider position-relative">
				<div class="row">
					<div class="col-6 col-lg-3 col-xl-2 ps-lg-0">
						<div class="img ratio-img doublehgt">
							<img src="<?php echo the_field('img1') ?>" alt="" class="w-100" />
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="img ratio-img">
							<img src="<?php echo the_field('img2') ?>" alt="" class="w-100" />
						</div>
					</div>
					<div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
						<h2 class="text-uppercase"><?php echo the_field('head') ?></h2>
						<h3 class="mb-4"><?php echo the_field('slog') ?></h3>
						<p>
                        <?php echo the_field('desc') ?>
						</p>
					</div>
				</div>
			</div>
		</section>