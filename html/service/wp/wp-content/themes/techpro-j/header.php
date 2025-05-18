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
        <title><?php echo wp_get_document_title(); ?></title>
        <meta name="description" content="テックプロパティジャパン株式会社は、東京都渋谷区の不動産会社です。不動産に関する幅広いニーズに応えるため、AIなどのITをフル活用し、お客様のご自宅や投資物件、商業物件などの購入・売却・賃貸・管理をサポートします。私たちの経験豊富なチームは、オープンかつ透明なアプローチでお客様との関係を築き、信頼性と誠実さを大切にしています。不動産テック企業として、エキスパートとAIを結集し、業界の革新に挑戦しています。" />
		<link rel="icon" href="<?php echo get_theme_file_uri('images/fav.png'); ?>">

        <!--------------------------  CSS -------------------------->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@200;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('css/vendors/reset.css'); ?>">
        <!-- <link rel="stylesheet" type="text/css" href="./css/vendors/splide.min.css"> -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('css/style.css'); ?>" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">

		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
    </head>




    <body id="page-top">
		<div class="animation-bg"></div>



    <!-------------------------- ▼ header // start -------------------------->
    <header class="page-header">
		<div class="container">
			<nav class="gnav js-header">
				<div class="logo js-header"><a href="https://techpro-j.com/"><img src="<?php echo get_theme_file_uri('images/logo_white.svg"'); ?>" alt="テックプロパティジャパン" class="-before">
				<img src="<?php echo get_theme_file_uri('images/logo.svg"'); ?>" alt="テックプロパティジャパン" class="-after"></a></div><!-- end .logo -->

				<ul class="gnav-list">
					<li><a href="https://techpro-j.com/" class="js-header rolltext">HOME</a></li>
					<li class="gnav-list__item megamenu"><a href="https://techpro-j.com/service/" class="js-header rolltext">SERVICE
						<span class="l-header__gnav__icon">
							<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.97929 6.58579L7.27219 7.2929L7.97929 8L8.6864 7.2929L7.97929 6.58579ZM14.2929 0.27219L7.97929 6.58579L8.6864 7.2929L15 0.9793L14.2929 0.27219ZM7.97929 6.58579L1.6657 0.272189L0.958601 0.979299L7.27219 7.2929L7.97929 6.58579Z" fill="white"></path>
							</svg>
						</span></a>
						<div class="downMenu1">
							<ul class="downMenu-list">
								<li class="downMenu-list__item"><a href="https://techpro-j.com/service/club20" class="rolltext">利回り20%倶楽部</a></li>
								<li class="downMenu-list__item"><a href="https://techpro-j.com/service/new_apartment" class="rolltext">新築アパートプラン</a></li>
								<li class="downMenu-list__item"><a href="https://techpro-j.com/service/assessment" class="rolltext">不動産査定</a></li>
							</ul>
						</div>
					</li>
					<li><a href="https://techpro-j.com/news/" class="js-header rolltext">NEWS</a></li>
					<li class="gnav-list__item megamenu"><a href="https://techpro-j.com/company" class="js-header rolltext">COMPANY
						<span class="l-header__gnav__icon">
							<svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.97929 6.58579L7.27219 7.2929L7.97929 8L8.6864 7.2929L7.97929 6.58579ZM14.2929 0.27219L7.97929 6.58579L8.6864 7.2929L15 0.9793L14.2929 0.27219ZM7.97929 6.58579L1.6657 0.272189L0.958601 0.979299L7.27219 7.2929L7.97929 6.58579Z" fill="white"></path>
							</svg>
						</span></a>
						<div class="downMenu2">
							<ul class="downMenu-list">
								<li class="downMenu-list__item"><a href="https://techpro-j.com/company#greeting" class="rolltext">代表挨拶</a></li>
								<li class="downMenu-list__item"><a href="https://techpro-j.com/company#staff" class="rolltext">メンバー紹介</a></li>
								<li class="downMenu-list__item"><a href="https://techpro-j.com/company#company_overview" class="rolltext">会社概要</a></li>
								<li class="downMenu-list__item"><a href="https://techpro-j.com/company#philosophy" class="rolltext">企業理念</a></li>
								<li class="downMenu-list__item"><a href="https://techpro-j.com/company#csr" class="rolltext">CSR活動</a></li>
							</ul>
						</div>
					</li>
					<li><a href="https://techpro-j.com/recruit" class="js-header rolltext">RECRUIT</a></li>
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
						<li><a href="https://techpro-j.com/service/index">SERVICE</a>
							<ul class="drawer_ul_child">
								<li class="drawer_ul_child_list"><a href="https://techpro-j.com/service/club20">利回り20%倶楽部</a></li>
								<li class="drawer_ul_child_list"><a href="https://techpro-j.com/service/new_apartment">新築アパートプラン</a></li>
								<li class="drawer_ul_child_list"><a href="https://techpro-j.com/service/assessment">不動産査定</a></li>
							</ul>
						</li>
						<li><a href="https://techpro-j.com/news/">NEWS</a></li>
						<li><a href="https://techpro-j.com/company">COMPANY</a></li>
						<li><a href="https://techpro-j.com/recruit">RECRUIT</a></li>
						<li><a href="https://techpro-j.com/contact/">CONTACT</a></li>
					</ul>
					</div>
				</div>
			</nav>

        </div><!-- end .cotainer -->
    </header><!-- end .header -->
    <!-------------------------- ▲ header // end -------------------------->