<?php get_header(); ?>

	<!-------------------------- ▼ page-header // start -------------------------->
	<div class="page-header-title newspage">
        <div class="newspage-img">
			<!-- <img src="images/company/mainvisual.jpg" alt=""> -->
        </div><!-- /.img -->
        <div class="page-title-area">
			<h1 class="page-title">
				<span class="en">News</span>
				<span class="ja">お知らせ</span>
			</h1>
        </div><!-- /.page-title-area -->
	</div><!-- /.page-header -->

    <!-------------------------- ▲ mainvisual // end -------------------------->

	<section class="newspage_body">
		<h2><div class="catch">お知らせ・更新情報</div><!-- end .catch --></h2>

			<?php 
			echo do_shortcode('[display-posts posts_per_page="10" image_size="medium" include_date="true" include_date="true" date_format="Y/m/d" pagination="true"]');

			?>
				
	</section>
    

    <!-------------------------- ▼ cta // start -------------------------->
    <section id="contact" class="cta">
        <div class="container">
			<h2><div class="catch">CONTACT US</div><!-- end .catch --></h2>
			<div class="inner">
				<div class="bg"><img src="<?php echo get_theme_file_uri('images/cta-bg.jpg'); ?>" alt=""></div><!-- end .bg -->
				<div class="block">
					<div class="sentence">
						<p>サービスに関するお申し込み、ご質問、ご相談、御見積など、<br>まずはお気軽にお問い合わせください。</p>
					</div><!-- end .sentence -->
					<ul>
						<li>
							<a href="tel:03-6843-1838" class="tellnot">
								<h3><div class="catch">テックプロパティジャパン株式会社</div><!-- end .catch --></h3>
								<div class="number">
									<div class="icon"><img src="<?php echo get_theme_file_uri('images/phone.svg'); ?>" alt=""></div>
									<p>03-6843-1838</p>
									<div class="date"><p>受付時間：<span class="en">10:00-19:00</span></p></div><!-- end .date -->
									<div class="icon"><img src="<?php echo get_theme_file_uri('images/fax.svg'); ?>" alt=""></div>
									<p>03-4243-2722</p>
								</div><!-- end .number -->
								
							</a>
						</li>
						
					</ul>
					<div class="form">
						<a href="https://techpro-j.com/contact/" class="rolltext" target="_blank">
							<!-- <div class="icon"><img src="./images/message.svg" alt="*"></div>end .div -->
							<div class="catch"><p>お問い合わせフォーム</p></div><!-- end .catch -->
							<div class="link"><img src="<?php echo get_theme_file_uri('images/link.svg'); ?>" alt="*"></div><!-- end .link -->
						</a>
					</div><!-- end .form -->
				</div><!-- end .block -->
			</div><!-- emd .inner -->
        </div><!-- end .container -->
    </section><!-- end .cta --> 
    <!-------------------------- ▲ cta // end -------------------------->


    <?php get_footer(); ?>