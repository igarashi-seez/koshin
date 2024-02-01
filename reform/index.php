<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "";
$title = "三井のリフォーム｜長野・山梨｜戸建て・マンションのリフォームなら甲信アルプスホーム";
$description = "住宅リフォームなら三井のリフォーム 甲信アルプスホームにお任せください。三井ホームのオーナー様はもちろん、三井ホーム以外の他社様で施工したお住まいも、様々な工法に精通した経験豊富なスタッフが、快適に長く、そして安心して住み続けられるプランをご提案いたします。";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" href="./news/style.css" media="screen">
	<link rel="stylesheet" href="../notice.css" media="screen">
	<link rel="stylesheet" href="./css/slider.css" media="screen">
	<link rel="stylesheet" href="./css/slick.css" media="screen">
	<link rel="stylesheet" href="./css/style.css?240116" media="screen">
	<script type="text/javascript" src="./js/slick.min.js"></script>
	<script type="text/javascript" src="./js/slider.js"></script>
</head>

<body>
	<div class="reform index">

		<!-- include header -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

		<main>

			<div class="section-mv">

				<div id="mvSlider" class="mv-slider">
					<div class="item item00">
						<a href="https://www.mitsuihome-ksa.co.jp/reform/news/south/likeamodelhouse.php"></a>
					</div>
					<div class="item item01"></div>
					<div class="item item02"></div>
					<div class="item item03"></div>
					<div class="item item04"></div>
					<div class="item item05"></div>
					<div class="item item06"></div>
					<div class="item item07"></div>
					<div class="item item08"></div>
					<div class="item item09"></div>
					<div class="item item10"></div>
				</div>

				<div class="text reform-mv-text js-mv-text -hide">
					<h1>
						たいせつなことがみえてくる。
					</h1>
					<p>
						デザインリフォームのことなら「三井のリフォーム」へ
					</p>
				</div>

				<div class="text reform-mv-text js-mv-modelhouse-text">
					<h1>
						Like a modelhouse
					</h1>
					<p>
						三井のリフォームは“まるでモデルハウス”
					</p>
				</div>

				<div class="contact-type01 container container-sm">
					<div class="inner">
						<h3 class="contact-head">
							三井ホームのモデルハウスでも<br class="d-none d-md-block">ご相談いただけます
						</h3>
						<dl class="contact-body">
							<dt class="title">
								リフォームのご相談・お問い合わせ
							</dt>
							<dd class="content">
								<i class="icon-freedialog"></i><span class="tel">0120-677-331</span>
							</dd>
						</dl>

					</div>
				</div>

			</div>

			<?php /* 省エネリフォーム臨時掲載：ここから ※20231013一時非表示 */ ?>
			<?php /*
			<div class="ex-banner202303">
				<a href="/reform/news/reformAll/post-61.php" class="ex-banner202303__link"><img src="/reform/assets/img/banner/ecoreform-202303.jpg" alt="省エネリフォーム相談会開催中！ 補助金最大290万円" width="" height="" loading="lazy"></a>
			</div><!-- /.ex-banner202303 -->
			<style>
				.ex-banner202303{
					margin: 80px 0 16px;
					padding: 0 30px;
				}
				.ex-banner202303__link{
					display: block;
					margin: auto;
					transition: opacity .3s;
					width: min(1000px, 90%);
				}
				.ex-banner202303__link:hover{
					opacity: .7;
				}
				.ex-banner202303__link img{
					max-width: 100%;
					height: auto;
				}
				@media screen and (max-width: 768px){
					.ex-banner202303{
						margin-top: 40px;
						margin-bottom: 0;
					}
					.ex-banner202303__link{
						width: 95%;
					}
				}
				@media screen and (max-width: 480px){
					.ex-banner202303{
						margin-top: 16px;
						margin-bottom: -16px;
					}
				}
			</style>
			 */ ?>
			<?php /* 省エネリフォーム臨時掲載：ここまで */ ?>
      
			<?php include("../notice.php"); ?>
			
      <?php /* 新着情報：ここから */ ?>
          <?php include("{$_SERVER['DOCUMENT_ROOT']}/template/entries_form.php"); ?>
      <?php /* 新着情報：ここまで */ ?>

			<?php //include("../notice.php"); ?>
			<!-- js-observe-contens -->
			<div class="reform-top-main-contents">
				<section class="section01 reform-top-section01">
					<div class="reform-top-inner--wide">
						<ul class="reform-top-section01__list">
<?php
	$gallery_item = [
		1 => [
			'title' => 'キッチン',
			'url' => '/reform/gallery/gallery01/',
		],
		2 => [
			'title' => 'リビング・ダイニング',
			'url' => '/reform/gallery/gallery02/',
		],
		3 => [
			'title' => '洗面室・トイレ・浴室',
			'url' => '/reform/gallery/gallery03/',
		],
		4 => [
			'title' => '和室・書斎',
			'url' => '/reform/gallery/gallery04/',
		],
		5 => [
			'title' => '寝室・子供部屋',
			'url' => '/reform/gallery/gallery05/',
		],
		6 => [
			'title' => '玄関・ホール',
			'url' => '/reform/gallery/gallery06/',
		],
		7 => [
			'title' => '外観・エクステリア',
			'url' => '/reform/gallery/gallery07/',
		],
		8 => [
			'title' => '店舗',
			'url' => '/reform/gallery/gallery08/',
		],
		9 => [
			'title' => '診療所・クリニック',
			'url' => '/reform/gallery/gallery09/',
		],
		10 => [
			'title' => '二世帯住宅',
			'url' => '/reform/gallery/gallery10/',
		],
		11 => [
			'title' => '古民家',
			'url' => '/reform/gallery/gallery11/',
		],
		12 => [
			'title' => '愛犬家住宅',
			'url' => '/reform/doglover/',
		],
		13 => [
			'title' => '脱炭素化リフォーム',
			'url' => '/reform/decarbonization/',
		],
	];
	foreach ($gallery_item as $key => $item) :
?>
							<li class="reform-top-section01__list-item">
								<a href="<?php echo $item['url']; ?>" class="reform-top-section01__list-itemLink">
									<img src="<?php echo $path; ?>/assets/images/reform/index/link<?php echo str_pad($key, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" class="reform-top-section01__list-itemImage" width="500" height="200" decoding="async" loading="lazy">
									<span class="reform-top-section01__list-itemText"><?php echo $item['title']; ?></span>
								</a>
							</li>
<?php endforeach; ?>
						</ul>
						<div class="text-center reform-top-section01__button">
							<a class="btn btn-dark btn-md mx-auto reform-top__common-button" href="<?php echo $path; ?>/reform/gallery/">部位別リフォーム一覧表示</a>
						</div>
					</div>
				</section>

				<section class="section00 reform-top-section00">
					<div class="reform-top-inner--reason">
						<h2 class="h2-type01 reform-top-heading-primary">
							<span class="english">REASON</span>
							三井のリフォームが選ばれる理由
						</h2>
						<ol class="reform-top-section00__list">
							<li class="reform-top-section00__list-item">
								<div class="reform-top-section00__list-number">01</div>
								<h3 class="reform-top-section00__list-heading">
									地域に根差した信頼と、<br>全国ネットの安心
								</h3>
								<p class="reform-top-section00__list-text">
									⻑野県と⼭梨県を拠点に35年。地域に根差した信頼と、数多くのリフォーム実績を積み重ねてきた全国ネットの安⼼をあわせ持ち、お客様のご要望にお応えしています。
								</p>
							</li>
							<li class="reform-top-section00__list-item">
								<div class="reform-top-section00__list-number">02</div>
								<h3 class="reform-top-section00__list-heading">
									任せて安心の<br>プロジェクトチーム制
								</h3>
								<p class="reform-top-section00__list-text">
									5つの分野の専門家たちが、連携を図りながら三位一体でサポートしています。お客様の多様なニーズにも柔軟に対応し、もっと心地よい住まいを提案しています。
								</p>
							</li>
							<li class="reform-top-section00__list-item">
								<div class="reform-top-section00__list-number">03</div>
								<h3 class="reform-top-section00__list-heading">
									温故知新。<br>これからの暮らしをデザインする
								</h3>
								<p class="reform-top-section00__list-text">
									三井のリフォームが提案する「デザインリフォーム」は、単にデザイン性のある間取りや内装への変更にとどまりません。 家をデザインするだけでなく、 これからの暮らしもデザインするという想いをプラスして提案しています。
								</p>
							</li>
						</ol>
						<div class="text-center reform-top-section00__button">
							<a class="btn btn-dark btn-md mx-auto reform-top__common-button" href="<?php echo $path; ?>/reform/about/ksa/">三井のリフォームが選ばれる理由</a>
						</div>
					</div>
				</section>

				<section class="section03 reform-top-section03">
					<div class="reform-top-inner">
						<h2 class="h2-type01 reform-top-heading-primary">
							<span class="english">SHOWROOMS & MODELHOUSE</span>
							ショールーム＆モデルハウス
						</h2>
						<ul class="reform-top-section03__list">
							<li class="reform-top-section03__list-item">
								<div id="slick_reform01" class="image">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0301.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0301@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0302_01.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0302_01@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0303_01.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0303_01@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0304_01.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0304_01@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
								</div>
								<div class="reform-top-section03__list-itemText">
									<dl class="reform-top-section03__list-itemInfo">
										<dt>松本店</dt>
										<dd>
											<div class="address">
												<span>松本市笹部1-3-6</span>
												<a href="m&#97;i&#108;t&#111;:&#109;&#45;r&#101;for&#109;&#64;&#109;&#105;&#116;&#115;u&#105;&#104;&#111;&#109;&#101;&#45;&#107;&#115;&#97;.&#99;o&#46;&#106;&#112;"><i class="icon-mail-dark"></i></a>
											</div>
											<div class="tel">
												<i class="icon-freedialog"></i>
												<span class="tel-number">0120-677-331(携帯共通)</span>
											</div>
										</dd>
									</dl>
									<div class="button">
										<a class="btn btn-dark btn-sm" href="https://goo.gl/maps/3CwrwiNHUB9gAxQk9" target="_blank"><i class="icon-pin-white"></i>Google Map</a>
									</div>
								</div>
							</li>
							<li class="reform-top-section03__list-item">
								<div id="slick_reform02" class="image">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0302.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0302@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0302_02.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0302_02@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0303_02.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0303_02@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0304_02.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0304_02@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0305_02.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0305_02@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
								</div>
								<div class="reform-top-section03__list-itemText">
									<dl class="reform-top-section03__list-itemInfo">
										<dt>長野店</dt>
										<dd>
											<div class="address">
												<span>長野市七瀬中町161-1<br>ハーモニー七瀬ビル1F</span>
												<a href="m&#97;i&#108;t&#111;:&#110;&#45;re&#102;&#111;&#114;&#109;&#64;&#109;&#105;t&#115;&#117;&#105;h&#111;&#109;&#101;&#45;ks&#97;.c&#111;.jp"><i class="icon-mail-dark"></i></a>
											</div>
											<div class="tel">
												<i class="icon-freedialog"></i>
												<span class="tel-number">0120-677-331</span>
											</div>
											<div class="mobile">
												<span class="icon-mobile-container">
													<i class="icon-mobile"></i>
												</span>
												<span class="tel-number">026-217-4431</span>
											</div>
										</dd>
									</dl>
									<div class="button">
										<a class="btn btn-dark btn-sm" href="https://goo.gl/maps/aMGjDgFSXunskJEPA" target="_blank"><i class="icon-pin-white"></i>Google Map</a>
									</div>
								</div>
							</li>
							<li class="reform-top-section03__list-item">
								<div id="slick_reform03" class="image">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0303.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0303@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0302_03.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0302_03@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0303_03.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0303_03@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0304_03.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0304_03@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
								</div>
								<div class="reform-top-section03__list-itemText">
									<dl class="reform-top-section03__list-itemInfo">
										<dt>上田店</dt>
										<dd>
											<div class="address">
												<span>上田市上田1471-1</span>
												<a href="m&#97;i&#108;t&#111;:&#117;&#45;&#114;e&#102;&#111;&#114;m&#64;&#109;&#105;&#116;s&#117;&#105;&#104;&#111;m&#101;-&#107;s&#97;&#46;&#99;&#111;.j&#112;"><i class="icon-mail-dark"></i></a>
											</div>
											<div class="tel">
												<i class="icon-freedialog"></i>
												<span class="tel-number">0120-263-142</span>
											</div>
											<div class="mobile">
												<span class="icon-mobile-container">
													<i class="icon-mobile"></i>
												</span>
												<span class="tel-number">0268-28-8277</span>
											</div>
										</dd>
									</dl>
									<div class="button">
										<a class="btn btn-dark btn-sm" href="https://goo.gl/maps/h7SHVUF2NFKodrXh8" target="_blank"><i class="icon-pin-white"></i>Google Map</a>
									</div>
								</div>
							</li>
							<li class="reform-top-section03__list-item">
								<div id="slick_reform04" class="image">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0304.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0304@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0302_04.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0302_04@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0303_04.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0303_04@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0304_04.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0304_04@2x.jpg" alt="" width="293" height="147" decoding="async" loading="lazy">
								</div>
								<div class="reform-top-section03__list-itemText">
									<dl class="reform-top-section03__list-itemInfo">
										<dt>甲府店</dt>
										<dd>
											<div class="address">
												<span>甲府市下石田2-13-9</span>
												<a href="m&#97;i&#108;t&#111;:k&#45;ref&#111;&#114;m@&#109;&#105;&#116;s&#117;&#105;&#104;om&#101;&#45;&#107;sa&#46;c&#111;&#46;&#106;p"><i class="icon-mail-dark"></i></a>
											</div>
											<div class="tel">
												<i class="icon-freedialog"></i>
												<span class="tel-number">0120-677-331</span>
											</div>
											<div class="mobile">
												<span class="icon-mobile-container">
													<i class="icon-mobile"></i>
												</span>
												<span class="tel-number">055-221-3100</span>
											</div>
										</dd>
									</dl>
									<div class="button">
										<a class="btn btn-dark btn-sm" href="https://goo.gl/maps/FMuRa4udrWeKoRTX8" target="_blank"><i class="icon-pin-white"></i>Google Map</a>
									</div>
								</div>
							</li>
							<li class="reform-top-section03__list-item">
								<div id="slick_reform05" class="image">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0305.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0305@2x.jpg" alt="" width="588" height="296" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0302_05.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0302_05@2x.jpg" alt="" width="588" height="296" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0303_05.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0303_05@2x.jpg" alt="" width="588" height="296" decoding="async" loading="lazy">
									<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/img0304_05.jpg" srcset="<?php echo $path; ?>/assets/images/reform/index/img0304_05@2x.jpg" alt="" width="588" height="296" decoding="async" loading="lazy">
								</div>
								<div class="reform-top-section03__list-itemText">
									<dl class="reform-top-section03__list-itemInfo">
										<dt>リノベーションモデル・蟻ヶ崎台</dt>
										<dd>
											<div class="address">
												<span>松本市蟻ヶ崎台18-1</span>
												<?php /* 20220324 蟻ヶ崎台メールアイコン非表示
												<a href="m&#97;i&#108;t&#111;:k&#45;ref&#111;&#114;m@&#109;&#105;&#116;s&#117;&#105;&#104;om&#101;&#45;&#107;sa&#46;c&#111;&#46;&#106;p"><i class="icon-mail-dark"></i></a>
												*/ ?>
											</div>
											<div class="tel">
												<i class="icon-freedialog"></i>
												<span class="tel-number">0120-677-331</span>
											</div>
										</dd>
									</dl>
									<div class="button">
										<a class="btn btn-dark btn-sm" href="/reform/renovationmodel/matsumotoarigasakidai/">詳しくはこちら</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>

				<section class="section04 reform-top-section04">
					<div class="reform-top-inner">
						<h2 class="h2-type01 reform-top-heading-primary">
							<span class="english">ABOUT</span>
							三井のリフォームについて
						</h2>
						<h3 class="reform-top-section04__subHeading">
							リフォームのことなら<br>私たちにお任せください
						</h3>
						<ul class="reform-top-section04__list">
							<li class="reform-top-section04__list-item">
								<a href="<?php echo $path; ?>/reform/about/works/" class="reform-top-section04__list-itemLink">
									<picture class="reform-top-section04__list-itemImage">
										<source media="(max-width: 767px)" srcset="<?php echo $path; ?>/assets/images/reform/index/about01_sp.jpg">
										<img src="<?php echo $path; ?>/assets/images/reform/index/about01_pc.jpg" alt="" decoding="async" loading="lazy">
									</picture>
									<span class="reform-top-section04__list-itemText">私たちの仕事</span>
								</a>
							</li>
							<?php /*
							<li class="reform-top-section04__list-item">
								<a href="<?php echo $path; ?>/reform/about/staff/" class="reform-top-section04__list-itemLink">
									<picture class="reform-top-section04__list-itemImage">
										<source media="(max-width: 767px)" srcset="<?php echo $path; ?>/assets/images/reform/index/about02_sp.jpg">
										<img src="<?php echo $path; ?>/assets/images/reform/index/about02_pc.jpg" alt="" decoding="async" loading="lazy">
									</picture>
									<span class="reform-top-section04__list-itemText">スタッフ紹介</span>
								</a>
							</li>
							*/ ?>
							<li class="reform-top-section04__list-item">
								<a href="<?php echo $path; ?>/reform/about/works/reform_planner/" class="reform-top-section04__list-itemLink">
									<picture class="reform-top-section04__list-itemImage">
										<source media="(max-width: 767px)" srcset="<?php echo $path; ?>/assets/images/reform/index/about03_sp.jpg">
										<img src="<?php echo $path; ?>/assets/images/reform/index/about03_pc.jpg" alt="" decoding="async" loading="lazy">
									</picture>
									<span class="reform-top-section04__list-itemText">リフォームプランナー<sup class="reform-top-sup">&reg;</sup></span>
								</a>
							</li>
						</ul>
						<div class="reform-top-section04__info">
							<h3 class="reform-top-section04__subHeading -border">
								お気軽に<br class="only-sp">ご相談ください
							</h3>
							<dl class="reform-top-section04__tel">
								<dt class="reform-top-section04__tel-title">TEL.</dt>
								<dd class="reform-top-section04__tel-number">0120-677-331</dd>
							</dl>
							<div class="reform-top-section04__button">
								<a <?php echo $contact; ?>>
									<span class="reform-top-section04__button-mail">メールでのお問い合わせはこちら</span>
								</a>
							</div>
							<div class="reform-top-section04__button -combo">
								<div class="reform-top-section04__button-comboParts">
									<a href="https://www.mitsuihome-ksa.co.jp/reform/news/south/post-32.php" target="_blank">
										<span class="reform-top-section04__button-online">オンラインで相談したい方はこちら</span>
									</a>
								</div>
								<div class="reform-top-section04__button-comboParts">
									<a href="/modelhouse/list/" target="_blank">
										<span class="reform-top-section04__button-modelhouse">モデルハウスで実物を確認したい方は<br class="reform-top-section04__break">こちら</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div><!-- /js-observe-contens -->


			<section class="section05 py-7 py-md-9 py-lg-11 bg-gray">
				<div class="container container-sm">

					<h2 class="h2-type01 reform-top-heading-primary">
						<span class="english">LINKS</span>
						本社・グループ・関連サイト
					</h2>

					<div class="mb-9">
						<h3 class="h4-type02 mt-6 mb-3">三井のリフォーム本社サイト</h3>
						<div class="slickLink banners-type01">
							<div class="item">
								<a href="http://www.mitsui-reform.com/house/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0501.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0501@2x.png 2x"></a>
							</div>
							<div class="item">
								<a href="http://www.mitsui-reform.com/mansion/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0502.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0502@2x.png 2x"></a>
							</div>
							<div class="item">
								<a href="http://www.mitsui-reform.com/medical/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0503.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0503@2x.png 2x"></a>
							</div>
							<div class="item">
								<a href="http://www.mitsui-reform.com/buy-and-reform/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0504.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0504@2x.png 2x"></a>
							</div>
						</div>
					</div>
					<div>
						<h3 class="h4-type02 mt-6 mb-3">グループ・関連サイト</h3>
						<div class="slickLink banners-type01">
							<div class="item">
								<a href="http://www.mitsui-reform.com/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0505.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0505@2x.png 2x" alt="三井のリフォーム"></a>
							</div>
							<div class="item">
								<a href="https://www.mitsuihome.co.jp/?_ga=2.8932604.872835185.1587426779-1526742085.1584411341" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0506.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0506@2x.png 2x" alt="三井ホーム"></a>
							</div>
							<div class="item">
								<a href="http://www.mitsuifudosan.co.jp/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0507.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0507@2x.png 2x" alt="三井不動産"></a>
							</div>
							<div class="item">
								<a href="https://www.mitsui-reform.com/lifestyle-labo/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0508.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0508@2x.png 2x" alt="三井のリフォーム 生活研究所"></a>
							</div>
							<div class="item">
								<a href="http://www.asupia.co.jp/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0509.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0509@2x.png 2x" alt="株式会社アスピア"></a>
							</div>
							<div class="item">
								<a href="http://www.c-hakuyou.co.jp/" target="_blank"><img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/index/banner0510.png" srcset="<?php echo $path; ?>/assets/images/reform/index/banner0510@2x.png 2x" alt="株式会社ケア柏葉(はくよう)"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="reform-top-banner-renovation">
				<a href="/reform/renovationmodel/" class="reform-top-banner-renovation__link">
					<img src="/assets/images/common/banner-renovation-modelhouse230915.jpg" alt="リノベーションモデル・蟻ヶ崎台">
				</a>
				<button class="reform-top-banner-renovation__close"></button>
			</div><!-- /リノベーションモデル バナー -->
		</main>

		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>
	</div>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>

		<script type="text/javascript" src="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.min.js"></script>
		<script src="<?php echo $path; ?>/assets/js/jquery.matchHeight-min.js"></script>
		<script>
			$("#mvSlider").slick({
				speed: 2000,
				infinite: true,
				autoplay: true,
				fade: true,
				slidesToShow: 1,
				lazyLoad: "progressive"
			});
			const modelHouseText = document.querySelector('.js-mv-modelhouse-text')
			const normalText = document.querySelector('.js-mv-text')
			$("#mvSlider").on('beforeChange', (_event, _slick, _currentSlide, nextSlide) => {
				if(modelHouseText && normalText) {
					if(nextSlide !== 0) {
						//たいせつなことがみえてくる。　を表示
						normalText.classList.remove('-hide');
						modelHouseText.classList.add('-hide');
					} else {
						//Like a modelhouse　を表示
						normalText.classList.add('-hide');
						modelHouseText.classList.remove('-hide');
					}
				}
			})

			$(".slickLink").slick({

				// normal options...
				infinite: true,
				autoplay: true,
				slidesToShow: 4,
				nextArrow: '<i class="icon-arrows icon-nextarrow"></i>',
				prevArrow: '<i class="icon-arrows icon-prevarrow"></i>',

				// the magic
				responsive: [{

					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						infinite: true
					}

				}, {
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						centerMode: true,
						centerPadding: 30 + "px",
						arrows: false
					}

				}]
			});

			window.addEventListener("DOMContentLoaded", function () {
				let w = window.innerWidth;
				if (w > 640) {
					$(".reform-top-section03__list-itemInfo" + ":visible").matchHeight();
				} else {
					$(".reform-top-section03__list-itemInfo").matchHeight({ remove: true });
				}
				window.addEventListener("resize", function() {
					w = window.innerWidth;
					if (w > 640) {
						$(".reform-top-section03__list-itemInfo" + ":visible").matchHeight();
					} else {
						$(".reform-top-section03__list-itemInfo").matchHeight({ remove: true });
					}
				});
			});
		</script>
    <script src="/assets/js/jquery-ui.min.js"></script>
		<script>
			$('.js-tabs-target').tabs({
				active: 1
			});
		</script>
</body>

</html>