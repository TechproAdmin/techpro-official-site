<?php
// WordPress をロード
require('./wp/wp-load.php');

// 現在のリクエストURIを取得
$request_uri = $_SERVER['REQUEST_URI'];

// トップページ（"/" または "/index.php"）以外のアクセスは WordPress に渡す
if ($request_uri !== '/' && $request_uri !== '/index.php') {
    // WordPress の index.php に処理を渡す
    require('./wp/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-------------------------- 電話番号の自動検出 -------------------------->
        <meta name="format-detection" content="telephone=no" />
        <!--------------------------  Webサイト内電話番号がSkyp置換制御 -------------------------->
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!--------------------------  meta情報 -------------------------->
        <title>テックプロパティジャパン株式会社｜東京都渋谷区の不動産会社｜不動産とテクノロジーのプロフェッショナル</title>
        <meta name="description" content="テックプロパティジャパン株式会社は、東京都渋谷区の不動産会社です。不動産に関する幅広いニーズに応えるため、AIなどのITをフル活用し、お客様のご自宅や投資物件、商業物件などの購入・売却・賃貸・管理をサポートします。私たちの経験豊富なチームは、オープンかつ透明なアプローチでお客様との関係を築き、信頼性と誠実さを大切にしています。不動産テック企業として、エキスパートとAIを結集し、業界の革新に挑戦しています。" />
		<link rel="icon" href="./images/fav.png">

        <!--------------------------  CSS -------------------------->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@200;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/vendors/reset.css">
        <!-- <link rel="stylesheet" type="text/css" href="./css/vendors/splide.min.css"> -->
        <link rel="stylesheet" type="text/css" href="./css/style.css?ver=20250514" />

		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>








    </head>
    <body id="page-top">

    <!-------------------------- ▼ loading // start -------------------------->
    <section class="loading">
        <div class="bg"></div><!-- end .bg -->
        <div class="container">
            <div class="text">
				<div class="main">TECH PROPERTY</div>
				<div class="tagline">
                    JAPAN CORPORATION
				</div><!-- end .tagline -->
			</div><!-- end .text-->
        </div><!-- end .container -->
    </section><!-- end .loading --> 
    <!-------------------------- ▲ loading // end -------------------------->



    <!-------------------------- ▼ header // start -------------------------->
    <header class="header" id="header">
		<div class="container">
			<video src="./videos/main.mp4" autoplay loop muted playsinline></video>
			<nav class="gnav js-header">
				<div class="logo js-header"><a href="https://techpro-j.com/">
					<img src="./images/logo_white.svg" alt="テックプロパティジャパン" class="-before">
					<img src="./images/logo.svg" alt="テックプロパティジャパン" class="-after"></a>
				</div><!-- end .logo -->
				
					<ul class="gnav-list">
					<li><a href="https://techpro-j.com/" class="js-header rolltext">HOME</a></li>
					<li class="gnav-list__item megamenu"><a href="./service/" class="js-header rolltext">SERVICE
						<span class="l-header__gnav__icon">
							<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.97929 6.58579L7.27219 7.2929L7.97929 8L8.6864 7.2929L7.97929 6.58579ZM14.2929 0.27219L7.97929 6.58579L8.6864 7.2929L15 0.9793L14.2929 0.27219ZM7.97929 6.58579L1.6657 0.272189L0.958601 0.979299L7.27219 7.2929L7.97929 6.58579Z" fill="white"></path>
							</svg>
						</span></a>
						<div class="downMenu1">
							<ul class="downMenu-list">
								<li class="downMenu-list__item"><a href="./service/club20" class="rolltext">利回り20%倶楽部</a></li>
								<li class="downMenu-list__item"><a href="./service/new_apartment" class="rolltext">新築アパートプラン</a></li>
								<li class="downMenu-list__item"><a href="./service/assessment" class="rolltext">不動産査定</a></li>
							</ul>
						</div>
					</li>
					<li><a href="https://techpro-j.com/news/" class="js-header rolltext">NEWS</a></li>
					<li class="gnav-list__item megamenu"><a href="company" class="js-header rolltext">COMPANY
						<span class="l-header__gnav__icon">
							<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.97929 6.58579L7.27219 7.2929L7.97929 8L8.6864 7.2929L7.97929 6.58579ZM14.2929 0.27219L7.97929 6.58579L8.6864 7.2929L15 0.9793L14.2929 0.27219ZM7.97929 6.58579L1.6657 0.272189L0.958601 0.979299L7.27219 7.2929L7.97929 6.58579Z" fill="white"></path>
							</svg>
						</span></a>
						<div class="downMenu2">
							<ul class="downMenu-list">
								<li class="downMenu-list__item"><a href="company#greeting" class="rolltext">代表挨拶</a></li>
								<li class="downMenu-list__item"><a href="company#staff" class="rolltext">メンバー紹介</a></li>
								<li class="downMenu-list__item"><a href="company#company_overview" class="rolltext">会社概要</a></li>
								<li class="downMenu-list__item"><a href="company#philosophy" class="rolltext">企業理念</a></li>
								<li class="downMenu-list__item"><a href="company#csr" class="rolltext">CSR活動</a></li>
							</ul>
						</div>
					</li>
					<li><a href="recruit" class="js-header rolltext">RECRUIT</a></li>
					<li><a href="https://techpro-j.com/contact/" class="js-header rolltext">CONTACT</a></li>
				</ul>
			</nav>

			<nav>
				<div class="hamburger" id="js-hamburger">
					<div class="toggle-btn" id="js-toggle-btn">
					<span></span>
					<span></span>
					<span></span>
					</div>
				</div>
				<div class="drawer-nav" id="js-nav">
					<div class="drawer-nav-wrapper">
					<ul class="drawer_ul">
						<li><a href="https://techpro-j.com/">HOME</a></li>
						<li><a href="./service/">SERVICE</a>
							<ul class="drawer_ul_child">
								<li class="drawer_ul_child_list"><a href="./service/club20">利回り20%倶楽部</a></li>
								<li class="drawer_ul_child_list"><a href="./service/new_apartment">新築アパートプラン</a></li>
								<li class="drawer_ul_child_list"><a href="./service/assessment">不動産査定</a></li>
							</ul>
						</li>
						<li><a href="https://techpro-j.com/news/">NEWS</a></li>
						<li><a href="company">COMPANY</a></li>
						<li><a href="recruit">RECRUIT</a></li>
						<li><a href="https://techpro-j.com/contact/">CONTACT</a></li>
					</ul>
					</div>
				</div>
			</nav>

        </div><!-- end .cotainer -->
    </header><!-- end .header -->
    <!-------------------------- ▲ header // end -------------------------->

	<!-------------------------- ▼ mainvisual // start -------------------------->
	<div class="mainvisual">
		<div class="container">
			<div class="first-view">
				<div class="text">

					<h2><div class="catch">未来を築く<br>不動産とテクノロジーの<br>
						プロフェッショナル</div><!-- end .catch --></h2>
					<h1><div class="catch">Tech Property Japan Co., Ltd.</div></h1>
					
				</div><!-- end .text -->
				<div class="mv_scroll">
						<div class="mv_scroll-text">scroll</div><!-- /.mv_scroll-text -->
						<div class="mv_scroll-bar"></div><!-- /.mv_scroll-bar -->
					</div><!-- /.mv_scroll -->
			</div><!-- /.first-view -->
		</div><!-- /.container -->
	</div><!-- /.mainvisual -->

    <!-------------------------- ▲ mainvisual // end -------------------------->


    

    <!-------------------------- ▼ feature // start -------------------------->
    <section id="feature" class="feature">
		<div class="container">
			<div class="title">
				<div class="text">
					<h3><div class="catch">Our Policy</div><!-- end .catch --></h3>
					<p class="catch">私たちは、不動産業界に変革をもたらすテクノロジーの力を信じています。革新性と信頼性を両立させながら、常にお客様の期待を超える価値を提供することを使命とし、業界の未来をリードしてまいります。</p>
				</div><!-- end .text -->
				<div class="thumb"><img src="./images/feature_img01.jpg" alt="*"></div><!-- end .thumb -->
			</div><!-- end .title -->
			<div class="box-wrapper">
				<div class="box">
					<div class="top">
						<div class="thumb">
							<div class="number"><p>01</p></div><!-- end .number -->
							<img src="./images/feature_img02.jpg" alt="*">
						</div><!-- end .thumb -->
						<div class="text">
							<div class="en"><p>不動産テックのリーダーシップ</p></div><!-- end p -->
							<h3><div class="catch">テックプロパティジャパンは、不動産業界の常識を覆す「不動産×テクノロジー」の融合を推進し、時代の先端を走り続けています。<br>
								独自システムの物件価格査定や物件の収益性分析、投資判断の自動化を実現。<br>
								これにより、従来は経験と勘に頼っていた不動産取引が、誰にとっても「明快かつ安心」なものへと進化しています。<br>
								業界の未来を見据え、革新的な仕組みとスピード感で、不動産テックのリーダーとしての責任を果たします。</div><!-- end .catch --></h3>
							<div class="geometory"><img src="./images/feature-box-geometory02.png" alt="*"></div><!-- end .geometory -->
						</div><!-- end .text-->
						
					</div><!-- end .top -->
					
				</div><!-- end .box -->
				<div class="box">
					<div class="top">
						<div class="thumb">
							<div class="number"><p>02</p></div><!-- end .number -->
							<img src="./images/feature_img03.jpg" alt="*">
						</div><!-- end .thumb -->
						<div class="text">
							<div class="en"><p>顧客第一主義</p></div><!-- end p -->
							<h3><div class="catch">私たちが最も大切にしているのは、「お客様にとっての最善とは何か？」という視点です。<br>
								利回りや積算といった表面的な数字だけではなく、エリア特性・出口戦略・融資条件も含めた総合的なご提案により、一人ひとりの投資方針に寄り添った最適解を提供しています。<br>
								また、物件購入後のフォローや売却相談もワンストップで対応し、末永い関係構築を目指しています。<br>
								安心して任せられる“パートナー”として、真摯かつ透明性のある対応をお約束します。</div><!-- end .catch --></h3>
						<div class="geometory"><img src="./images/feature-box-geometory01.png" alt="*"></div><!-- end .geometory -->
						</div><!-- end .text-->
					</div><!-- end .top -->
					
					
				</div><!-- end .box -->
				<div class="box">
					<div class="top">
						<div class="thumb">
							<div class="number"><p>03</p></div><!-- end .number -->
							<img src="./images/feature_img04.jpg" alt="*">
						</div><!-- end .thumb -->
						<div class="text">
							<div class="en"><p>従業員満足</p></div><!-- end p -->
							<h3><div class="catch">テックプロパティジャパンでは「人こそが最高の資産」と考え、社員一人ひとりの挑戦と成長を全力でサポートしています。<br>
								業務効率を徹底的にテクノロジーで最適化することで、社員が本来やるべき“創造的な仕事”に集中できる環境を整備。<br>
								また、時差出勤制度やリモート勤務、資格支援制度など、働きやすさとキャリアアップの両立を実現しています。<br>
								こうした取り組みが、お客様満足にもつながる「良い循環」を生み出し、強い組織力を支えています。</div><!-- end .catch --></h3>
							
							
						<div class="geometory"><img src="./images/feature-box-geometory03.png" alt="*"></div><!-- end .geometory -->
						</div><!-- end .text-->
					</div><!-- end .top -->
					
				</div><!-- end .box -->
			</div><!-- end .box-wrapper -->
        </div><!-- end .container -->
    </section><!-- end .feature --> 
    <!-------------------------- ▲ feature // end -------------------------->

    <!-------------------------- ▼ service // start -------------------------->
    <section id="service" class="service">
        <div class="container">
			<div class="title">
				<h3><div class="catch heading">SERVICE</div><!-- end .catch --></h3>
				<h2><div class="catch">サービス概要</div><!-- end .catch --></h2>
			</div><!-- end .title -->
			<div class="box-wrapper">
				<div class="box">
					<div class="thumb-wrapper">
						<div class="thumb"><img src="./images/service_img01.jpg" alt="*"></div><!-- end .thumb -->
						<div class="thumb"><img src="./images/service_img02.jpg" alt="*"></div><!-- end .thumb -->
					</div><!-- end .thumb-wrapper -->
					<div class="text">
						<div class="back"><p>20% Yield Club</p></div><!-- end .back -->
						<div class="inset">
							<div class="semi-title">
								<h3><div class="catch">利回り20%倶楽部</div><!-- end .catch --></h3>
							</div><!-- end .semi-title -->
							<div class="sentence">
								<p>
									”現況利回り20%以上”を原則基準に、全国の高利回り・高積算な収益物件を厳選して、<br>会員様限定でご紹介しています。
								</p>
								<p class="arrow-button"><a href="./service/club20" class="rolltext">利回り20%倶楽部の詳細はこちら</a></p>
							</div><!-- end .sentence -->
						</div><!-- end .inset -->
					</div><!-- end .text -->
				</div><!-- end .box -->
				<div class="box">
					<div class="thumb-wrapper">
						<div class="thumb"><img src="./images/service_img03.jpg" alt="*"></div><!-- end .thumb -->
						<div class="thumb"><img src="./images/service_img04.jpg" alt="*"></div><!-- end .thumb -->
					</div><!-- end .thumb-wrapper -->
					<div class="text">
						<div class="back"><p>new apartment plan</p></div><!-- end .back -->
						<div class="inset">
							<div class="semi-title">
								<h3><div class="catch">新築アパートプラン</div><!-- end .catch --></h3>
							</div><!-- end .semi-title -->
							<div class="sentence">
								<p>
									首都圏で高利回りの新築アパートを建築できる土地をご紹介しています。
								</p>
								<p class="arrow-button"><a href="./service/new_apartment" class="rolltext">新築アパートプランの詳細はこちら</a></p>
							</div><!-- end .sentence -->
						</div><!-- end .inset -->
					</div><!-- end .text -->
				</div><!-- end .box -->
				<div class="box">
					<div class="thumb-wrapper">
						<div class="thumb"><img src="./images/service_img05.jpg" alt="*"></div><!-- end .thumb -->
						<div class="thumb"><img src="./images/service_img06.jpg" alt="*"></div><!-- end .thumb -->
					</div><!-- end .thumb-wrapper -->
					<div class="text">
						<div class="back"><p>real estate appraisal</p></div><!-- end .back -->
						<div class="inset">
							<div class="semi-title">
								<h3><div class="catch">不動産査定</div><!-- end .catch --></h3>
							</div><!-- end .semi-title -->
							<div class="sentence">
								<p>
									AIと独自のロジックを融合させ、ご所有の不動産の価値を査定いたします。
								</p>
								<p class="arrow-button"><a href="./service/assessment" class="rolltext">不動産査定の詳細はこちら</a></p>
							</div><!-- end .sentence -->
						</div><!-- end .inset -->
					</div><!-- end .text -->
				</div><!-- end .box -->
				
				
			</div><!-- end .box-wrapperr -->
        </div><!-- end .container -->
    </section><!-- end .service --> 
    <!-------------------------- ▲ service // end -------------------------->


	
	<!-------------------------- ▼ news // start -------------------------->
	<section id="news" class="news">
		<div class="container">
			<div class="title">
					<h3><div class="catch heading">NEWS</div><!-- end .catch --></h3>
					<h2><div class="catch">お知らせ</div><!-- end .catch --></h2>
			</div><!-- end .title -->
			<div class="box-wrapper">
				<div class="box">
					<div class="inner">
		
						<?php
							$wp_query = new WP_Query();
							$args = array(
								'post_type' => 'post',
								'category__not_in' => array( 19, 20, 22 ),
								'posts_per_page' => 8,
							);
							$wp_query->query( $args );
							if ( $wp_query->have_posts() ) {
								?>
							
							<dl class="news-box">
								<?php
									while ( have_posts() ) {
									the_post();
									?>
								<dt><a href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format')); ?></a></dt>
								<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
																	
								<?php
								}
								wp_reset_query();
								}
								?>
							</dl>

					</div><!-- end .inner -->
				</div><!-- end .box -->
								
			</div><!-- end .box-wrapper -->
		</div><!-- end .container -->
	</section><!-- end .news -->
	<!-------------------------- ▲ news // end -------------------------->


	<!-------------------------- ▼ recruit // start -------------------------->
    <section class="recruit">
        <div class="container">
			<div class="title">
				<h3><div class="catch heading">RECRUIT</div><!-- end .catch --></h3>
				<h2><div class="catch">採用情報</div><!-- end .catch --></h2>
			</div><!-- end .title -->
			<div class="box-wrapper">
				<div class="box">
					<div class="thumb-wrapper">
						<div class="thumb"><img src="./images/recruit_img01.jpg" alt="*"></div><!-- end .thumb -->
						<div class="thumb"><img src="./images/recruit_img02.jpg" alt="*"></div><!-- end .thumb -->
					</div><!-- end .thumb-wrapper -->
					<div class="text">
						
						<div class="inset">
							
							<div class="sentence">
								<p>
									スタートアップならではのスピード感と、AIなどのテクノロジーを駆使した環境で、一緒に働く仲間を募集しています。
不動産×テクノロジーのプロフェッショナルに。
								</p>
								<p class="arrow-button"><a href="recruit" class="rolltext">採用情報の詳細はこちら</a></p>
							</div><!-- end .sentence -->
						</div><!-- end .inset -->
					</div><!-- end .text -->
				</div><!-- end .box -->
				
				
				
			</div><!-- end .box-wrapperr -->
        </div><!-- end .container -->
    </section><!-- end .service --> 
    <!-------------------------- ▲ service // end -------------------------->



    <!-------------------------- ▼ cta // start -------------------------->
    <section id="contact" class="cta">
        <div class="container">
			<h2><div class="catch">CONTACT US</div><!-- end .catch --></h2>
			<div class="inner">
				<div class="bg"><img src="./images/cta-bg.jpg" alt=""></div><!-- end .bg -->
				<div class="block">
					<ul>
						<li>
							<a href="tel:03-6843-1838" class="tellnot">
								<h3><div class="catch">テックプロパティジャパン株式会社</div><!-- end .catch --></h3>
								<div class="number">
									<div class="icon"><img src="./images/phone.svg" alt=""></div>
									<p>03-6843-1838</p>
									<div class="date"><p>受付時間：<span class="en">10:00-19:00</span></p></div><!-- end .date -->
									<div class="icon"><img src="./images/fax.svg" alt=""></div>
									<p>03-4243-2722</p>
								</div><!-- end .number -->
								
							</a>
						</li>
						
					</ul>
					<div class="form">
						<a href="https://techpro-j.com/contact/" class="rolltext" target="_blank">
							<!-- <div class="icon"><img src="./images/message.svg" alt="*"></div>end .div -->
							<div class="catch"><p>お問い合わせフォーム</p></div><!-- end .catch -->
							<div class="link"><img src="./images/link.svg" alt="*"></div><!-- end .link -->
						</a>
					</div><!-- end .form -->
				</div><!-- end .block -->
			</div><!-- emd .inner -->
        </div><!-- end .container -->
    </section><!-- end .cta --> 
    <!-------------------------- ▲ cta // end -------------------------->


    <!-------------------------- ▼ footer // start -------------------------->
    <footer class="footer">
        <div class="container">
			<div class="top">
				<div class="logo">
					<a href="https://techpro-j.com/"><img src="./images/logo2.svg" alt="*" class="plane"></a>
					<!-- <img src="./images/logo-white.svg" alt="*" class="white"> -->
				</div><!-- end .logo -->
				<nav>
					<ul>
						<li><a href="https://techpro-j.com/" class="rolltext"><p class="en">Home</p><p class="jp">ホーム</p></a></li>
						<li><a href="./service/" class="rolltext"><p class="en">Service</p><p class="jp">サービス</p></a></li>
						<li><a href="https://techpro-j.com/news/" class="rolltext"><p class="en">News</p><p class="jp">お知らせ</p></a></li>
						<li><a href="company" class="rolltext"><p class="en">Company</p><p class="jp">会社情報</p></a></li>
					</ul>
					<ul>
						<li class="bordernone"><a href="recruit" class="rolltext"><p class="en">Recruit</p><p class="jp">採用情報</p></a></li>
						<li><a href="https://techpro-j.com/contact/" class="rolltext"><p class="en">Contact</p><p class="jp">お問い合わせ</p></a></li>
					</ul>
				</nav>
				<div class="sns"><a href="https://lin.ee/yE8ULip" target="_blank"><img src="images/LINE_black.png" alt=""></a></div><!-- /.sns -->
			</div><!-- end .top -->
			
			<div class="privacy">
				<p><a href="privacy-policy" class="rolltext pri">PRIVACY POLICY</a></p>
				<p><a href="cookie-policy" class="rolltext coo">COOKIE POLICY</a></p>
			</div><!-- end .privacy -->
			<div class="copyright">
				<small>©Tech Property Japan Co.,Ltd.</small>
			</div><!-- end .copyright -->
        </div><!-- end .container -->
		<button class="js-backToTop">TOP</button>

    </footer><!-- end .footer --> 
    <!-------------------------- ▲ footer // end -------------------------->
	




    <!-------------------------- ▼ base // start -------------------------->
    <section class="base">
        <div class="container">
        </div><!-- end .container -->
    </section><!-- end .base --> 
    <!-------------------------- ▲ base // end -------------------------->



	
 
    <!--------------------------  JavaScript -------------------------->
    <script src="./js/gsap.min.js"></script>
	<script src="./js/SplitText.min.js"></script>
	<script src="./js/loading.js?ver=20250501"></script>
    <!-- <script src="./js/splide.min.js"></script> -->
    <!-- <script src="./js/splide-setting.js"></script> -->
	<script src="./js/ScrollTrigger.min.js"></script>
	<script src="./js/animation-base.js?ver=20250501"></script>
	<script src="./js/common.js?ver=20250514"></script>



    </body>
</html>



