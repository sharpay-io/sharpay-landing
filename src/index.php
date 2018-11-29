<?php

include 'init.php';

$langsArray = array(
	'en' => array( 'lang' => 'EN', 'url' => '/', 'img' => '/images/flat/uk.svg', 'title' => 'English' ),
	'zh' => array( 'lang' => 'ZH', 'url' => '/zh/', 'img' => '/images/flat/china.svg', 'title' => '漢語' ),
	'ko' => array( 'lang' => 'KO', 'url' => '/ko/', 'img' => '/images/flat/korea.svg', 'title' => '한국어' ),
	'jp' => array( 'lang' => 'JP', 'url' => '/jp/', 'img' => '/images/flat/japanese.svg', 'title' => '日本語' ),
	'es' => array( 'lang' => 'ES', 'url' => '/es/', 'img' => '/images/flat/spain.png', 'title' => 'Español' ),
	'it' => array( 'lang' => 'IT', 'url' => '/it/', 'img' => '/images/flat/italy.png', 'title' => 'Italiano' ),
	'pt' => array( 'lang' => 'PT', 'url' => '/pt/', 'img' => '/images/flat/portugal.png', 'title' => 'Português' ),
	'ru' => array( 'lang' => 'RU', 'url' => '/ru/', 'img' => '/images/flat/russia.svg', 'title' => 'Русский' ),
	'hi' => array( 'lang' => 'HI', 'url' => '/hi/', 'img' => '/images/flat/india.svg', 'title' => 'हिंदी' ),
	'ph' => array( 'lang' => 'PH', 'url' => '/ph/', 'img' => '/images/flat/philippines.svg', 'title' => 'Filipino' ),
	'nl' => array( 'lang' => 'NL', 'url' => '/nl/', 'img' => '/images/flat/nederlands.svg', 'title' => 'Nederlands' ),
	// 'ar' => array( 'lang' => 'AR', 'url' => '/ar/', 'img' => '/images/flat/arabic.png', 'title' => 'العَرَبِيَّة' ),
);

?><!DOCTYPE html>
<html lang="<?=$lang?>">

<head>
	<meta charset="utf-8">
  <title><?=L::title?></title>
  <meta content="<?=L::meta_description?>" name="description">
  <meta content="<?=L::meta_og_title?>" property="og:title">
  <meta content="<?=L::meta_og_description?>" property="og:description">
	<meta content="https://sharpay.io/images/og_image.jpg" property="og:image">
	<meta content="summary" name="twitter:card">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="#2f2f2f">
	<meta name="msapplication-navbutton-color" content="#2f2f2f">
	<meta name="apple-mobile-web-app-status-bar-style" content="#2f2f2f">
	<link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/images/webclip.png" rel="apple-touch-icon">

	<link href="/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="/css/webflow.css" rel="stylesheet" type="text/css">
	<!-- <link href="/css/slick.css" rel="stylesheet" type="text/css"> -->
	<!-- <link href="/css/slick-theme.css?v=<?=$timestamp?>" rel="stylesheet" type="text/css"> -->
	<link href="/css/sharpay2.webflow.css?v=<?=$timestamp?>" rel="stylesheet" type="text/css">

	<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
	<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

	<script async src="https://app.sharpay.io/api/script.js"></script>
</head>

<body class="body">
	<div id="sharpay_widget_floating" data-sharpay="srpio" data-dark="true" data-lang="<?=$lang?>" data-sharecount="true" data-sharecount-mode="site"></div>
	<!-- <div id="particles"></div> -->

	<div id="singin-modal" class="modal">
		<div id="singin-dialog" class="dialog">
			<h2 class="h2"><?=L::singin_header?></h2>
			<div class="row">
				<? if( $lang != 'zh' ) { ?>
				<div class="col"><a href="https://app.sharpay.io/auth" class="btn w-inline-block" target="_blank" onclick="gtag('event', 'app', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('app');"><div><?=L::singin_app_login?></div></a></div>
				<div class="col">
					<a href="https://sale.sharpay.io/" class="btn w-inline-block" target="_blank" onclick="gtag('event', 'sale', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('sale');">
						<div><?=L::singin_cabinet_login?></div>
					</a>
				</div>
				<? } else { ?>
				<a href="https://app.sharpay.io/auth" class="btn w-inline-block" target="_blank" onclick="gtag('event', 'app', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('app');"><div><?=L::singin_app_login?></div></a>
				<? } ?>
			</div>
		</div>
	</div>

	<div id="video-modal" class="modal">
		<div id="video-dialog"></div>
	</div>

	<div id="head" data-ix="new-interaction" class="head-section">
		<div id="main-menu" data-collapse="medium" data-animation="default" data-duration="400" class="h-nav w-nav">
			<div class="h-nav-cont">
				<a href="/" class="h-nav-logo w-nav-brand"><img src="/images/logo-sharpay.svg"></a>
				<nav role="navigation" class="h-menu w-nav-menu">
					<a href="#news" class="nav-link w-nav-link"><?=L::head_menu_news?></a>
					<a href="#view" class="nav-link w-nav-link"><?=L::head_menu_view?></a>
					<a href="#sites" class="nav-link w-nav-link"><?=L::head_menu_sites?></a>
					<a href="#users" class="nav-link w-nav-link"><?=L::head_menu_users?></a>
					<a href="#roadmap" class="nav-link w-nav-link"><?=L::head_menu_roadmap?></a>
					<a href="#emission" class="nav-link w-nav-link"><?=L::head_menu_emission?></a>
					<!-- <a href="#token" class="nav-link w-nav-link"><?=L::head_menu_token?></a> -->
					<a href="#advisers" class="nav-link w-nav-link"><?=L::head_menu_advisers?></a>
					<a href="#team" class="nav-link w-nav-link"><?=L::head_menu_team?></a>
					<a href="#signin" class="nav-link w-nav-link orange-span"><?=L::head_menu_signin?></a>
					<div class="nav-lang nl-mob">
					<? foreach( $langsArray as $lng => $item ) {
						?><a href="<?=$item['url']?>" class="nav-link nl-lang w-nav-link"><?=$item['lang']?></a><?
					} ?>
					</div>
				</nav>
				<div class="nav-lang">
					<ul class="languagepicker roundborders large">
					<? if( isset( $langsArray[ $lang ] ) ) {
						?><li><img src="<?=$langsArray[ $lang ]['img']?>"/> <?=$langsArray[ $lang ]['title']?></li><?
						unset( $langsArray[ $lang ] );
					} ?>

					<? foreach( $langsArray as $lng => $item ) { ?>
						<a href="<?=$item['url']?>"><li><img src="<?=$item['img']?>"/> <?=$item['title']?></li></a>
					<? } ?>
					</ul>
				</div>
				<div class="menu-btn w-nav-button">
					<div class="w-icon-nav-menu"></div>
				</div>
			</div>
		</div>

		<div id="trackico-rating-mob">
			<?/*<a href="https://icobench.com/ico/sharpay" target="_blank" title="<?=L::head_trackers_icobench_title?>">
				<img src="/images/ratings/Rating_ICObench_Sharpay_4_8.svg" />
			</a>
			<a href="https://www.trackico.io/ico/sharpay/" target="_blank" title="<?=L::head_trackers_trackico_title?>">
				<img src="/images/ratings/Rating_TrackICO_Sharpay_5_0.svg" />
			</a>
			<!--a href="http://www.kryptovergleich.org/ico/sharpay-ico/" target="_blank" title="<?=L::head_trackers_kryptovergleich_title?>">
				<img src="/images/ratings/Rating_Krypto_Sharpay_4_4.svg" />
			</a-->*/?>
		</div>

		<div class="container-head">

			<div id="trackico-rating">
				<?/*<a href="https://icobench.com/ico/sharpay" target="_blank" title="<?=L::head_trackers_icobench_title?>">
					<img src="/images/ratings/Rating_ICObench_Sharpay_4_8.svg" />
				</a>
				<a href="https://www.trackico.io/ico/sharpay/" target="_blank" title="<?=L::head_trackers_trackico_title?>">
					<img src="/images/ratings/Rating_TrackICO_Sharpay_5_0.svg" />
				</a>
				<!--a href="http://www.kryptovergleich.org/ico/sharpay-ico/" target="_blank" title="<?=L::head_trackers_kryptovergleich_title?>">
					<img src="/images/ratings/Rating_Krypto_Sharpay_4_4.svg" />
				</a-->*/?>
			</div>

			<div class="h-text-wrap">
				<h1 class="h1 sharpey-slogan"><?=L::head_slogan?></h1>
				<div class="h-subtitle">
					<?=L::head_subtitle?><br>
					<?=L::head_status?> <a href="#" target="_blank" class="mvp-go sharpay_widget_custom" data-sharpay="srpio" data-lang="<?=$lang?>" onclick="gtag('event', 'app', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('app');"> </a>
				</div>
				<div class="h-btns">
					<a href="<?=L::head_white_paper_path?>" target="_blank" class="b1 btn w-inline-block" onclick="gtag('event', 'whitepaper', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('whitepaper');">
						<div><?=L::head_white_paper?></div>
					</a>
					<a href="<?=L::head_presentation_path?>" target="_blank" class="btn w-inline-block" onclick="gtag('event', 'presentation', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('presentation');">
						<div><?=L::head_presentation?></div>
					</a>
					<a href="<?=L::head_one_pager_path?>" target="_blank" class="btn w-inline-block" onclick="gtag('event', 'onepager', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('onepager');">
						<div><?=L::head_one_pager?></div>
					</a>
					<a href="https://t.me/sharpay_admin" target="_blank" class="btn w-inline-block" onclick="gtag('event', 'chat', {'lang': '<?=$lang?>'}); yaCounter48279077.reachGoal('chat');">
						<div><span class="chat-online"></span><?=L::head_chat?></div>
					</a>
				</div>

				<div id="head-marketing-msg">
					<div id="video"></div>
					<div class="soc-links">
						<a href="https://t.me/sharpay_io" target="_blank" class="soc-link w-inline-block" title="<?=L::telegram_title?>"><img src="/images/telegram-blue.svg?v2"></a>
						<a href="https://bitcointalk.org/index.php?topic=2518528.0" target="_blank" class="soc-link w-inline-block" title="<?=L::bitcointalk_title?>"><img src="/images/bitcointalk.svg"></a>
						<a href="https://www.facebook.com/SHARPAYio-Share-button-with-blockchain-profit-804507049710585/" target="_blank" class="soc-link w-inline-block" title="<?=L::facebook_title?>"><img src="/images/facebook.svg"></a>
						<a href="https://twitter.com/sharpay_io" target="_blank" class="soc-link w-inline-block" title="<?=L::twitter_title?>"><img src="/images/twitter.svg"></a>
						<a href="https://github.com/sharpay-io" target="_blank" class="soc-link w-inline-block" title="<?=L::github_title?>"><img src="/images/github.svg"></a>
						<a href="https://medium.com/@sharpay" target="_blank" class="soc-link w-inline-block" title="<?=L::medium_title?>"><img src="/images/medium.svg"></a>
						<a href="https://www.reddit.com/user/sharpay-io/" target="_blank" class="soc-link w-inline-block" title="<?=L::reddit_title?>"><img src="/images/reddit_1.svg"></a>
						<a href="http://steemit.com/@sharpay" target="_blank" class="soc-link w-inline-block" title="<?=L::steemit_title?>"><img src="/images/steemit.svg"></a>
						<a href="http://golos.blog/@sharpay" target="_blank" class="soc-link w-inline-block" title="<?=L::golos_title?>"><img src="/images/golos.svg"></a>
						<a href="mailto:tokensale@sharpay.io" target="_blank" class="soc-link w-inline-block" title="<?=L::email_title?>"><img src="/images/mailto.svg"></a>
						<a href="https://t.me/sharpay_admin" target="_blank" class="soc-link w-inline-block" title="<?=L::chat_title?>"><img src="/images/chat.svg"></a>
					</div>
					<div id="head-marketing-msg-text">
						<?/*=L::head_marketing_msg_1?><br />
						<?=L::head_marketing_msg_2?><br />*/?>
						<a class="font165" href="https://www.nasdaq.com/press-release/simex-launches-sharpay-s-token-trading-20180904-01259" target="_blank"><?=L::head_marketing_msg_3?></a>
					</div>
				</div>

				<div class="progress-sale">
					<div class="sales-wrap"><? $badgeAdd = in_array($lang, array('zh', 'ko')) ? '-'.$lang : ''; ?>
						<img src="/images/chart/raised<?=$badgeAdd?>.png" alt="Soft cap raised successfully!">
						<img src="/images/chart/kyc<?=$badgeAdd?>.png" class="kycrun" alt="KYC started via Sum And Substance Ltd!">
						<img src="/images/chart/emission<?=$badgeAdd?>.png?v=2" class="emissionrun" alt="Successfully ERC20 token emission!">
						<img src="/images/chart/withdrawal<?=$badgeAdd?>.png" class="withdrawalrun" alt="Active withdrawal to personal ETH addresses!">
						<img src="/images/chart/listing<?=$badgeAdd?>.png" class="listingrun" alt="The first exchange where you can officially buy and sell our S tokens is SIMEX!">
						<img src="/images/chart/idex<?=$badgeAdd?>.png" class="idexrun" alt="Good Listing IDEX Top exchange">
						<img src="/images/chart/cmc<?=$badgeAdd?>.png" class="cmcrun" alt="Must have S token on CoinMarketCap.com">
						<img src="/images/chart/airdrop<?=$badgeAdd?>.png" class="airdroprun" alt="For free airdrop Get +5% S tokens">
						
						<div></div>
						<a href="https://sale.sharpay.io/" target="_blank"><div class="kychover"></div></a>
						<a href="https://etherscan.io/address/0x96b0bf939d9460095c15251f71fda11e41dcbddb" target="_blank"><div class="emissionhover"></div></a>
						<a href="https://sale.sharpay.io/" target="_blank"><div class="withdrawalhover"></div></a>
						<a href="https://coinmarketcap.com/currencies/sharpay/" target="_blank"><div class="cmchover"></div></a>
						<a href="https://simex.global/en/exchange/s/eth" target="_blank"><div class="listinghover"></div></a>
						<a href="https://idex.market/eth/s" target="_blank"><div class="idexhover"></div></a>
						<a href="/airdrop/" target="_blank"><div class="airdrophover"></div></a>
					</div>
				</div>
				<?/* ?>
				<div class="tokensale-close"><h3><?=L::head_sale_close?></h3></div>
				<? */ ?>

			</div>
		</div>
	</div>

	<? include 'slides/news.php' ?>

	<div id="token" class="section">
		<?/*<div class="container">
			<div class="-l-col" data-ix="l-init">
				<h2 class="h2"><span class="orange-span"><?=L::token_sale?></span></h2>
				<p class="p"><?=L::token_sale_dates?><br>
					<?=L::token_sale_price?><br>
					<?=L::token_sale_min_purchase?><br />
					<?=L::token_sale_bonus?><br />
					<span class="orange-span"><?=L::token_sale_bonus2?></span><br />
					<?=L::token_sale_amount?>
				</p>
			</div>
			<div class="r-col token-chart-col" data-ix="r-init">
				<div id="clockChart">
					<div class="clock" data-timer="0" -data-date="May 31 2018 23:59:59 GMT+0000"> </div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="l-col token-chart-col" data-ix="l-init">
				<h2 class="h2 h2-2"><span class="orange-span"><?=L::token_presale?></span></h2>
				<p class="p"><?=L::token_presale_dates?><br>
					<?=L::token_presale_price?><br>
					<?=L::token_presale_min_purchase?><br>
					<?=L::token_presale_amount?> &mdash; <strong><?=L::token_presale_sold?></strong><br>
					<?=L::token_presale_contrib?>
				</p>
			</div>
			<div class="-r-col" data-ix="r-init">
				<div id="tokenChart"></div>
			</div>
		</div>*/?>

		<div class="container container-exchange">
			<div class="row-l-col" data-ix="l-init">
				<h2 class="h2"><span class="orange-span"><?=L::token_listing?></span></h2>
			</div>
			<div class="row-r-col token-chart-col" data-ix="r-init" style="margin: 0; padding: 0;">
				<p class="p exchange" style="max-width: 1140px; line-height: 24px; margin-top: 5px;">
					<?=L::token_exchange?> 
					<a href="https://simex.global/en/exchange/s/eth" target="_blank"><img src="/images/exchanges/simex.svg" title="SIMEX"></a>
					<a href="https://idex.market/eth/s" target="_blank"><img src="/images/exchanges/idex.svg" title="IDEX" style="height: 15px;"></a>
					<a href="https://etherdelta.com/#0x96b0bf939d9460095c15251f71fda11e41dcbddb-ETH" target="_blank"><img src="/images/exchanges/etherdelta.svg" title="EtherDelta"></a>
					<a href="https://oex.com/trading-center?zoneId=8&coinId=269" target="_blank"><img src="/images/exchanges/oex.svg" title="OEX"></a>
				</p>
				<p class="p exchange" style="max-width: 1140px; line-height: 24px; margin-top: 5px;">
					<?=L::token_exchange_p2?>
				</p>
			</div>
		</div>

	</div>

	<div id="view" class="section section-dark">
		<div class="cont2 container">
			<div class="row-cont">
				<div class="row-l-col" data-ix="l-init">
					<h2 class="h2"><span class="orange-span"><?=L::view_what_is_that?></span></h2>
					<p class="p"><?=L::view_p1?></p>
					<p class="p"><?=L::view_p2?></p>
					<div id="btn-img-container">
						<div id="bi1" class="btn-img">
							<a href="#" class="sharpay_widget_custom" data-sharpay="srpio">
							<img src="/images/btn1.svg" />
							</a>
						</div>
						<div id="bi2" class="btn-img">
							<a href="#" class="sharpay_widget_custom" data-sharpay="srpio">
							<img src="/images/share-btn3.svg">
							</a>
						</div>
						<div id="bi3" class="r2 btn-img">
							<a href="#" class="sharpay_widget_custom" data-sharpay="srpio">
							<img src="/images/btn3.svg">
							</a>
						</div>
						<div id="bi4" class="r2 btn-img">
							<a href="#" class="sharpay_widget_custom" data-sharpay="srpio">
							<img src="/images/custom-btn2x.png">
							</a>
						</div>
					</div>
				</div>
				<div class="row-r-col" data-ix="r-init">
					<iframe id="what-is-that-video" src="https://www.youtube-nocookie.com/embed/eOac-9DljiI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row-cont">
				<div class="row-l-col" data-ix="l-init">
					<h2 class="h2 h2-2"><span class="orange-span"><?=L::view_connections?></span></h2>
					<p class="p"><?=L::view_connections_p1?></p>
				</div>
				<div id="soc-plugged" class="row-r-col rr2" data-ix="r-init">
					<div class="soc-img"><img src="/images/fb.svg"></div>
					<div class="soc-img"><img src="/images/tw.svg"></div>
					<div class="soc-img"><img src="/images/in.svg"></div>
					<div class="soc-img"><img src="/images/vk.svg"></div>
					<div class="soc-img"><img src="/images/reddit.svg"></div>
					<div class="soc-img"><img src="/images/tele.svg"></div>
					<div class="soc-img"><img src="/images/tumblr.svg"></div>
					<div class="soc-img"><img src="/images/sns/kakao.svg"></div>
					<!--div class="soc-img"><img src="/images/sns/linkedin.svg"></div-->
					<div class="soc-img"><img src="/images/sns/ok.svg"></div>
				</div>
			</div>
			<div class="row-cont">
				<div class="row-l-col" data-ix="l-init">
					<p class="p"><?=L::view_connections_p2?></p>
				</div>
				<div id="soc-future" class="row-r-col rr2" data-ix="r-init">
					<div class="soc-img"><img src="/images/sns/pinterest.svg"></div>
					<div class="soc-img"><img src="/images/wechat.svg"></div>
					<div class="soc-img"><img src="/images/qq.svg"></div>
					<div class="soc-img"><img src="/images/gplus-icon.svg"></div>
					<!-- <div class="soc-img"><img src="/images/snapchaat.svg"></div> -->
					<div class="soc-img"><img src="/images/viber.svg"></div>
					<div class="soc-img"><img src="/images/lj.svg"></div>
					<div id="soc-img-plus" class="soc-img"><img src="/images/plus-icon.svg" class="plus-icon"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="sites" class="section">
		<div class="container">
			<div class="l-col lc22" data-ix="l-init">
				<h2 class="h2"><?=L::sites_how_it_works?></span></h2>
			</div>
			<div class="r-col" data-ix="r-init">
				<p class="p"><?=L::sites_asterisk1?></p>
			</div>
		</div>
		<div class="container">
			<div class="sheme3" data-ix="l-init">
				<img src="<?=L::sites_diagram_path?>" class="img hide768">
				<img src="<?=L::sites_diagram_small_path?>" class="img show768">
			</div>
		</div>
	</div>

	<div id="users" class="section section-dark">
		<div class="container">
			<div class="l-col lc22" data-ix="l-init">
				<h2 class="h2"><?=L::users_how_it_works?></h2>
				<p class="p">
					<span class="orange-span">*</span> <?=L::users_asterisk1?><br><br>
					<span class="orange-span">**</span> <?=L::users_asterisk2?><br><br>
					<span class="orange-span">***</span> <?=L::users_asterisk3?><br><br>
					<span class="orange-span">****</span> <?=L::users_asterisk4?><br><br>
					<span class="orange-span">*****</span> <?=L::users_asterisk5?>
				</p>
			</div>
			<div class="r-col rc3 rc3-1" data-ix="r-init">
				<div class="sheme2"><img src="<?=L::users_diagram_path?>" class="img"></div>
			</div>
		</div>
	</div>

  <div id="add" class="section">
		<div class="c5 container">
			<div class="l-col lc3" data-ix="l-init">
				<h2 class="h2"><?=L::advantages_header?></h2>
			</div>
		</div>
		<div class="c5 container">
			<div class="l-col lc3" data-ix="l-init">
				<div class="big-p add-block">
					<div class="icon-wrapper">
						<img id="conversion-icon" class="add-icon" src="/images/icons/conversion.svg" />
					</div>
					<div class="add-text"><?=L::advantages_p1?></div>
				</div>
				<div class="big-p add-block second-row">
					<div class="icon-wrapper">
						<img id="kpi-icon" class="add-icon" src="/images/icons/kpi.svg" />
					</div>
					<div class="add-text"><?=L::advantages_p2?></div>
				</div>
			</div>
			<div class="r-col rc-4" data-ix="r-init">
				<div class="big-p add-block">
					<div class="icon-wrapper">
						<img id="traffic-icon" class="add-icon" src="/images/icons/traffic.svg" />
					</div>
					<div class="add-text right-col-text"><?=L::advantages_p3?></div>
				</div>
				<div class="big-p add-block second-row">
					<div class="icon-wrapper">
						<img id="usability-icon" class="add-icon" src="/images/icons/logo.svg" />
					</div>
					<div class="add-text right-col-text"><?=L::advantages_p4?></div>
				</div>
			</div>
		</div>
	</div>

	<div id="roadmap" class="section section-dark">
		<div class="cont2 container">
			<div class="h2-wrap">
				<h2 class="h2" data-ix="l-init"><?=L::roadmap_header?></h2>
			</div>
			<div class="user-items" data-ix="l-init">
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2012</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2012?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2013</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-arr"><img src="/images/arr-y.svg" width="10" class="arr-img"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2013?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2014</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-line-over"></div>
							<div class="arr-mob ui-arr"><img src="/images/arr-y.svg" width="10" class="arr-img"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2014?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2015</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
						<div class="ui-line ul-left ull2">
							<div class="ua2 ui-arr"><img src="/images/arr-y.svg" width="10"></div>
							<div class="ui-line-over ulo2"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2015?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2016</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2016?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2017</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-line-over"></div>
							<div class="arr-mob ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2017?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2018</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
						<div class="ui-line ul-left ull2">
							<div class="ua2 ui-arr"><img src="/images/arr-y.svg" width="10"></div>
							<div class="ui-line-over ulo2"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2018?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2019</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2019?></p>
				</div>
				<div class="ui2 user-item">
					<div class="ui-top">
						<div class="year">
							<div>2020</div>
						</div>
						<div class="ui-line ul2">
							<div class="ui-line-over"></div>
							<div class="arr-mob ui-arr"><img src="/images/arr-y.svg" width="10"></div>
						</div>
					</div>
					<p class="year-text"><?=L::roadmap_2020?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="emission" class="section">
		<div class="container">
			<div class="l-col lc2" data-ix="l-init">
				<h2 class="h2"><?=L::emission_header?></h2>
				<div class="big-p"><?=L::emission_subheader?></div>
				<div class="diag-item">
					<div class="diag-img">
						<div id="emissionChart"></div>
					</div>
					<div class="diag-table dt-1">
						<div class="diag-row">
							<div class="circle"></div>
							<div><?=L::emission_sale?></div>
						</div>
						<div class="diag-row">
							<div class="c2 circle"></div>
							<div><?=L::emission_reserve?></div>
						</div>
						<div class="diag-row">
							<div class="c3 circle"></div>
							<div><?=L::emission_team_bonus?></div>
						</div>
						<div class="diag-row">
							<div class="c4 circle"></div>
							<div><?=L::emission_investor_bonus?></div>
						</div>
						<div class="diag-row">
							<div class="c5 circle"></div>
							<div><?=L::emission_advisers?></div>
						</div>
						<div class="diag-row">
							<div class="c6 circle"></div>
							<div><?=L::emission_bounty?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="r-col rc4" data-ix="r-init">
				<h2 class="h2"><?=L::blockchain_header?></h2>
				<div class="big-p"><?=L::blockchain_stage1?></div>
				<p class="p"><?=L::blockchain_emission_on_eth?></p>
				<div class="big-p"><?=L::blockchain_stage2?></div>
				<p class="p"><?=L::blockchain_independent?></p>
				<p class="p p2"><?=L::blockchain_sites_income?></p>
			</div>
		</div>
	</div>

	<div id="rashod" class="section section-dark">
		<div class="container">
			<div class="l-col" data-ix="l-init">
				<h2 class="h2"><?=L::expenses_header?></h2>
				<p class="p p2"><?=L::expenses_p1?></p>
			</div>
			<div class="r-col" data-ix="r-init">
				<div>
					<div class="sheme2">
						<div id="rashodChart"></div>
					</div>
					<div class="diag-table dt-2">
						<div class="diag-row">
							<div class="circle"></div>
							<div><?=L::expenses_development?></div>
						</div>
						<div class="diag-row">
							<div class="c2 circle"></div>
							<div><?=L::expenses_staff?></div>
						</div>
						<div class="diag-row">
							<div class="c3 circle"></div>
							<div><?=L::expenses_marketing?></div>
						</div>
						<div class="diag-row">
							<div class="c4 circle"></div>
							<div><?=L::expenses_legal?></div>
						</div>
						<div class="diag-row">
							<div class="c5 circle"></div>
							<div><?=L::expenses_admin?></div>
						</div>
						<div class="diag-row">
							<div class="c6 circle"></div>
							<div><?=L::expenses_other?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="advisers" class="section sf">
		<div class="cont2 container">
			<div class="h2-wrap">
				<h2 class="h2" data-ix="l-init"><?=L::advisers_header?></h2>
			</div>

			<div class="team-cont" data-ix="l-init">
				<div class="team-item">
					<div class="team-img"><img src="/images/Ken.png"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::advisers_ken?>
								<img class="flag" src="/images/flat/usa.svg" title="<?=L::usa_title?>" />
								<a href="https://www.linkedin.com/in/kenhuang8/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::advisers_ken_title?></div>
						</div>
						<p class="team-p"><?=L::advisers_ken_bio?></p>
					</div>
				</div>

				<div class="team-item">
					<div class="team-img"><img src="/images/Simon.png"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::advisers_simon?>
								<img class="flag" src="/images/flat/china.svg" title="<?=L::china_title?>" />
								<a href="https://www.linkedin.com/in/prof-simon-choi-2621005/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::advisers_simon_title?></div>
						</div>
						<p class="team-p"><?=L::advisers_simon_bio?></p>
					</div>
				</div>

				<div class="team-item">
					<div class="team-img"><img src="/images/Vincent.png"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::advisers_vincent?>
								<img class="flag" src="/images/flat/belgium.svg" title="<?=L::belgium_title?>" />
								<a href="https://steemit.com/@arcange" target="_blank"><img class="flag" src="/images/steemit_team.svg" title="<?=L::steemit_title?>" /></a>
								<a href="https://golos.io/@arcange" target="_blank"><img class="flag" src="/images/golos_team.svg" title="<?=L::golos_title?>" /></a>
								<a href="https://www.linkedin.com/in/vincentmascart/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::advisers_vincent_title?></div>
						</div>
						<p class="team-p"><?=L::advisers_vincent_bio?></p>
					</div>
				</div>
			</div>

		</div>
	</div>  <!-- advisers -->

	<div id="team" class="section section-dark">
		<div class="cont2 container">
			<div class="h2-wrap">
				<h2 class="h2" data-ix="l-init"><?=L::team_header?></h2>
			</div>
			<div class="team-cont" data-ix="l-init">
				<div class="team-item">
					<div class="team-img"><img src="/images/Anton.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_anton?>
								<img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>" />
								<a href="https://bitcointalk.org/index.php?action=profile;u=941359" target="_blank"><img class="flag" src="/images/bitcointalk_team.svg" title="<?=L::bitcointalk_title?>" /></a>
								<a href="https://www.facebook.com/solodikov" target="_blank"><img class="flag" src="/images/facebook_team.svg" title="<?=L::facebook_title?>" /></a>
								<a href="https://www.linkedin.com/in/solodikov/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_anton_title?></div>
						</div>
						<p class="team-p"><?=L::team_anton_bio?></p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img"><img src="/images/Igor.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_igor?>
								<img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>"/>
								<a href="https://www.linkedin.com/in/igor-karavaev-80a0674/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_igor_title?></div>
						</div>
						<p class="team-p"><?=L::team_igor_bio?></p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img"><img src="/images/Arkady.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_arkady?>
								<img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>"/>
								<a href="https://www.linkedin.com/in/arkady-yasashnyy-20678638/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_arkady_title?></div>
						</div>
						<p class="team-p"><?=L::team_arkady_bio?></p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img"><img src="/images/Aleksey.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_alexey?>
								<img class="flag" src="/images/flat/belarus.svg"  title="<?=L::belarus_title?>"/>
								<a href="https://github.com/liketux" target="_blank"><img class="flag" src="/images/github_team.svg" title="<?=L::github_title?>" /></a>
								<!-- <a href="https://www.facebook.com/liketux" target="_blank"><img class="flag" src="/images/facebook_team.svg" title="<?=L::facebook_title?>" /></a> -->
								<a href="https://www.linkedin.com/in/liketux/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_alexey_title?></div>
						</div>
						<p class="team-p"><?=L::team_alexey_bio?></p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img"><img src="/images/Valery.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_valery?>
								<img class="flag" src="/images/flat/australia.svg" title="<?=L::australia_title?>"/>
								<!--img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>"/-->
								<a href="https://github.com/yushchenko" target="_blank"><img class="flag" src="/images/github_team.svg" title="<?=L::github_title?>" /></a>
								<a href="https://www.linkedin.com/in/yushchenko/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_valery_title?></div>
						</div>
						<p class="team-p"><?=L::team_valery_bio?></p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img"><img src="/images/Ilya.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_ilya?>
								<img class="flag" src="/images/flat/china.svg" title="<?=L::china_title?>"/>
								<a href="https://www.linkedin.com/in/ilya-afanasyev-b63460a8/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
								<a href="https://www.facebook.com/randomi3e" target="_blank"><img class="flag" src="/images/facebook_team.svg" title="<?=L::facebook_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_ilya_title?></div>
						</div>
						<p class="team-p"><?=L::team_ilya_bio?></p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img"><img src="/images/Levi.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_levi?>
								<img class="flag" src="/images/flat/hong-kong.svg" title="<?=L::hongkong_title?>"/>
								<img class="flag" src="/images/flat/china.svg" title="<?=L::china_title?>"/>
								<a href="https://www.linkedin.com/in/leviticus-yau/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
								<a href="https://www.facebook.com/leviticus.yau" target="_blank"><img class="flag" src="/images/facebook_team.svg" title="<?=L::facebook_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_levi_title?></div>
						</div>
						<p class="team-p"><?=L::team_levi_bio?></p>
					</div>
				</div>
				<?/*<div class="team-item">
					<div class="team-img"><img src="/images/Paulina.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_paulina?>
								<img class="flag" src="/images/flat/turkey.png" title="<?=L::turkey_title?>" />
								<a href="https://www.linkedin.com/in/paulina-kulyukhina-92684a25/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_paulina_title?></div>
						</div>
						<p class="team-p"><?=L::team_paulina_bio?></p>
					</div>
				</div>*/?>
				<div class="team-item">
					<div class="team-img"><img src="/images/Katerina.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_katerina?>
								<img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>" />
								<a href="https://www.facebook.com/profile.php?id=100001633474084" target="_blank"><img class="flag" src="/images/facebook_team.svg" title="<?=L::facebook_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_katerina_title?></div>
						</div>
						<p class="team-p"><?=L::team_katerina_bio?></p>
					</div>
				</div>
				<?/*<div class="team-item">
					<div class="team-img"><img src="/images/Dominica.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_dominica?>
								<img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>" />
								<a href="https://www.linkedin.com/in/dominica-koks-97bb1a157/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_dominica_title?></div>
						</div>
						<p class="team-p"><?=L::team_dominica_bio?></p>
					</div>
				</div>*/?>
				<?/*<div class="team-item">
					<div class="team-img"><img src="/images/William2.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_william?>
								<img class="flag" src="/images/flat/germany.svg" title="<?=L::germany_title?>" />
								<a href="https://www.linkedin.com/in/william-bratsky/" target="_blank"><img class="flag" src="/images/linkedin.svg" title="<?=L::linkedin_title?>" /></a>
								<a href="https://t.me/williambratsky" target="_blank"><img class="flag" src="/images/telegram-help-button.svg" title="<?=L::telegram_title?>" /></a>
								<a href="https://bitcointalk.org/index.php?action=profile;u=1664749" target="_blank"><img class="flag" src="/images/bitcointalk_team.svg" title="<?=L::bitcointalk_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_william_title?></div>
						</div>
						<p class="team-p"><?=L::team_william_bio?></p>
					</div>
				</div>*/?>
				<div class="team-item">
					<div class="team-img"><img src="/images/Vadim.jpg"></div>
					<div class="team-top">
						<div class="team-top-text">
							<div class="name"><?=L::team_vadim?>
								<img class="flag" src="/images/flat/russia.svg" title="<?=L::russia_title?>" />
								<a href="https://www.facebook.com/vadim.vodolej" target="_blank"><img class="flag" src="/images/facebook_team.svg" title="<?=L::facebook_title?>" /></a>
							</div>
							<div class="team-status"><?=L::team_vadim_title?></div>
						</div>
						<p class="team-p"><?=L::team_vadim_bio?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?/*<div id="events" class="section section-dark">
		<div class="container">
			<div id="events-text" data-ix="l-init">
				<h2 class="h2"><span class="orange-span"><?=L::events_header?></span></h2>
				<p><?=L::events_meet_us?></p>
				<p><?=L::events_here?></p>
			</div>
			<div id="event-baners" data-ix="r-init">
				<img class="event-banner" src="/images/events/0122_san-francisco.png" />
				<img class="event-banner" src="/images/events/0125_London.png" />
				<img class="event-banner" src="/images/events/0129_Amsterdam.png" />
				<img class="event-banner" src="/images/events/0227_Seoul.png" />
				<img class="event-banner" src="/images/events/0301_Tokyo.png" />
				<img class="event-banner" src="/images/events/0303_Xiamen.png" />
				<img class="event-banner" src="/images/events/0305_Taipei.png" />
				<img class="event-banner" src="/images/events/0307_Shanghai.png" />
				<img class="event-banner" src="/images/events/0313_Chengdu.png" />
				<img class="event-banner" src="/images/events/0317_Beijing.png" />
				<img class="event-banner" src="/images/events/0317_PuertoRico.png" />
				<img class="event-banner" src="/images/events/0320_HongKong.png" />
				<img class="event-banner" src="/images/events/0323_Shenzhen.png" />
				<img class="event-banner" src="/images/events/0327_Changzhou.png" />
				<img class="event-banner" src="/images/events/0516_Monaco.png" />
				<img class="event-banner" src="/images/events/0525_Seoul.png" />
				<img class="event-banner" src="/images/events/0528_Xiamen.png" />
			</div>
		</div>
	</div>*/?>

	<? include 'slides/media.php' ?>

	<div id="footer" class="section sf section-dark">
		<div class="container f-cont">
			<div class="h-form-title hft2"><?=L::footer_start?></div>
			<div class="fbf form-block w-form">
				<form id="wf-form-Email" name="wf-form-Email" data-name="Email" action="https://sharpay.us17.list-manage.com/subscribe/post?u=9640eb44e1bee917058684b01&amp;amp;id=e65ae8e1a9" method="post" class="form">
					<input type="email" class="text-field w-input en" maxlength="256" name="Mail-2" data-name="EMAIL" placeholder="<?=L::footer_email_placeholder?>" id="Mail-2">
					<input type="submit" value="<?=L::footer_subscribe?>" data-wait="<?=L::footer_wait?>" class="form-btn w-button">
				</form>
				<div class="sm2 success-msg w-form-done">
					<div><?=L::footer_subscription_success?></div>
				</div>
				<div class="error-message w-form-fail">
					<div><?=L::footer_subscription_error?></div>
				</div>
			</div>
			<div class="sl-f soc-links">
				<a href="https://t.me/sharpay_io" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::telegram_title?>"><img src="/images/telegram.svg"></a>
				<a href="https://bitcointalk.org/index.php?topic=2518528.0" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::bitcointalk_title?>"><img src="/images/bitcointalk.svg"></a>
				<a href="https://www.facebook.com/SHARPAYio-Share-button-with-blockchain-profit-804507049710585/" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::facebook_title?>"><img src="/images/facebook.svg"></a>
				<a href="https://twitter.com/sharpay_io" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::twitter_title?>"><img src="/images/twitter.svg"></a>
				<a href="https://github.com/sharpay-io" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::github_title?>"><img src="/images/github.svg"></a>
				<a href="https://medium.com/@sharpay" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::medium_title?>"><img src="/images/medium.svg"></a>
				<a href="https://www.reddit.com/user/sharpay-io/" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::reddit_title?>"><img src="/images/reddit_1.svg"></a>
				<a target="_blank" href="http://steemit.com/@sharpay" class="sl-f soc-link w-inline-block" title="<?=L::steemit_title?>"><img src="/images/steemit.svg"></a>
				<a href="http://golos.blog/@sharpay" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::golos_title?>"><img src="/images/golos.svg"></a>
				<a href="mailto:tokensale@sharpay.io" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::email_title?>"><img src="/images/mailto.svg"></a>
				<a href="https://t.me/sharpay_admin" target="_blank" class="sl-f soc-link w-inline-block" title="<?=L::chat_title?>"><img src="/images/chat.svg"></a>
			</div>
			<p class="f-p"><?=L::footer_legal?></p>
			<p class="f-p"><a href="/privacy-policy.html" class="text-muted nav-link">Privacy Policy</a></p>
		</div>
	</div>

  <? include 'js/sharpay_script.php' ?>

  <? include 'js/charts_script.php' ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109731082-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-109731082-2', { 'linker': { 'domains': ['sale.sharpay.io', 'sharpay.io'], 'accept_incoming': true } } );
		gtag('config', 'UA-109731082-3', { 'linker': { 'domains': ['sale.sharpay.io', 'sharpay.io'], 'accept_incoming': true } } );
	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48279077 = new Ya.Metrika2({ id:48279077, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48279077" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->


	<!-- Mgid Sensor -->
	<script type="text/javascript"> (function() { var d = document, w = window; w.MgSensorData = w.MgSensorData || []; w.MgSensorData.push({cid:299708, lng:"us" , project: "a.mgid.com"}); var l = "a.mgid.com"; var n = d.getElementsByTagName("script")[0]; var s = d.createElement("script"); s.type = "text/javascript"; s.async = true; var dt = !Date.now?new Date().valueOf():Date.now(); s.src = "//" + l + "/mgsensor.js?d=" + dt; n.parentNode.insertBefore(s, n); })(); </script>
	<!-- /Mgid Sensor -->

</body>
</html>
