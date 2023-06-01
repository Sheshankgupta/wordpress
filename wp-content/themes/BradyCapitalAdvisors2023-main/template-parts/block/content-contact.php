<section class="sec contact pt-md-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 pt55">
				<h2 class="text-uppercase">Write to us</h2>
				<h3 class="mb-5"><a href="#"><?php the_field('phone_number') ?></a></h3>
				<h2 class="text-uppercase">GIVE US A CALL</h2>
				<h3 class="mb-5"><a href="#"><?php the_field('email') ?></a></h3>
			</div>
			<div class="col-lg ps-md-5">
            <?php $posts = get_field('form');
            if( $posts ): 
                foreach( $posts as $p ): 
                echo do_shortcode( '[contact-form-7 id="239" title="Contact form"]' ); 
                endforeach;
            endif; ?>
			</div>
		</div>
	</div>
</section>