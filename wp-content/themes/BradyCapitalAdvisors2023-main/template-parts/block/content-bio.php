<?php
/*
 * Block Name: aboutsub
 * Template for custom block author
 */?>
	<section class="sec info-user-card">
		<div class="container">
			<div class="user-meta">
				<div class="row">
					<div class="col-md-3 col-lg-auto mb-4 mb-md-0">
						<div class="img"><img src="<?php the_field('bio-img') ?>" alt="" class="w-100" /></div>
					</div>
					<div class="col-md ps-md-5">
						<h2 class="text-uppercase"><?php the_field('desg') ?></h2>
						<h3 class="mb-4"><?php the_field('bio-name') ?></h3>
						<p><?php the_field('bio-text') ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>