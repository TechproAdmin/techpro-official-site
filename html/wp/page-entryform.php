<?php get_header(); ?>

	<!-------------------------- ▼ page-header // start -------------------------->
	<div class="page-header-title entryform">
        <div class="recruit-img">
			<!-- <img src="images/company/mainvisual.jpg" alt=""> -->
        </div><!-- /.img -->
        <div class="page-title-area">
			<h1 class="page-title">
				<span class="en">Recruit</span>
				<span class="ja">採用情報</span>
			</h1>
        </div><!-- /.page-title-area -->
	</div><!-- /.page-header -->

    <!-------------------------- ▲ mainvisual // end -------------------------->


    <!-------------------------- ▼ recruit_body // start -------------------------->

	<div class="entry_body">
		<section>
			<div class="catchcopy">エントリーフォーム</div><!-- /.catchcopy -->
			<div class="lead">
				以下の項目を入力して必要書類をお送りください。<br />​※書類選考通過した方のみ、担当よりご連絡いたします。
			</div><!-- /.lead -->
		</section>

		<div class="entry_form">
			<?php 

				echo do_shortcode('[contact-form-7 id="9fbc548" title="エントリーフォーム"]');
			?>
			
		</div><!-- /.entry_form" -->



					
	</div><!-- /.entry_body -->



    <?php get_footer(); ?>


