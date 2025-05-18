<?php get_header(); ?>

	<!-------------------------- ▼ page-header // start -------------------------->
	<div id="contact">
	<div class="page-header-title contact">
        <div class="contact-img">
			<!-- <img src="images/company/mainvisual.jpg" alt=""> -->
        </div><!-- /.img -->
        <div class="page-title-area">
			<h1 class="page-title">
				<span class="en">Contact</span>
				<span class="ja">お問い合わせ</span>
			</h1>
        </div><!-- /.page-title-area -->
	</div><!-- /.page-header -->
	</div><!-- /.contact -->
	
    <!-------------------------- ▲ mainvisual // end -------------------------->

	<!-------------------------- ▼ privacy_body // start -------------------------->

	<div class="contact_body">
		<div class="contact-form">
		<?php 
			echo do_shortcode('[contact-form-7 id="d9d4045" title="お問い合わせ"]');

		?>

		</div><!-- /.contact-form -->
	</div><!-- /.contact_body -->


	<?php get_footer(); ?>


