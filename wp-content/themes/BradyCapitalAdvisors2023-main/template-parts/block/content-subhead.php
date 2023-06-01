<?php
/*
 * Block Name: subhead
 * Template for custom block author
 */?>

<section class="title">
			<div class="container">
				<div class="row">
					<div class="col-lg-11 col-xl-10">
						<h1><?php the_field('head') ?></h1>
						<span class="bar"></span>
						<h2 class="h3"><i><?php the_field('sub_head') ?></i></h2>
						<p><?php the_field('desc') ?></p>
					</div>
				</div>
			</div>
</section>