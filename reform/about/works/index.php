<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$palentName = "三井のリフォームとは";
$pageName = "私たちの仕事";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
	<link rel="stylesheet" href="<?php echo $path; ?>/reform/about/works/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $path; ?>/about/style.css">

	<link rel="stylesheet" href="/assets/css/additional/common.min.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css" media="screen">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

	<!-- slick -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>
	<script type="text/javascript" src="assets/js/slider.js" defer></script>

	<script type="text/javascript" src="assets/js/jquery.rwdImageMaps.min.js" defer></script>

	<script type="text/javascript" src="assets/js/memberPic.js" defer></script>
</head>




<body>
	<div class="reform layout-type01 about works">

		<!-- include header -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

		<main>

<div class="section-mv">
	<div class="container container-sm inner">
		<p class="h1"><?php echo $palentName ?></p>
	</div>
</div>

<div class="breadcrumb bg-gray">
	<div class="container container-sm inner">
		<a href="<?php echo $path; ?>/reform/">ホーム</a>
		<a href="<?php echo $path; ?>/reform/about/"><?php echo $palentName ?></a>
		<strong><?php echo $pageName ?></strong>
	</div>
</div>


<div class="wk-hero">
	<div class="wk-hero__img container"><img src="assets/images/main.jpg" alt=""></div>
	<div class="wk-hero__inner u-text-wh">
		<div class="container container-sm">
			<div class="wk-hero__content">
				<div class="wk-hero__copy u-text-bold">想いをカタチにしていく、<br> 住まいづくりのスタッフ</div>
				<div class="wk-hero__text mt-6">「いまの家を大切にしたい」というお客様の想いをカタチに、<br class="u-dn-ml">一邸一邸心を込め、<br>リフォーム後も永く細やかにサポートしていく。<br>三井のリフォームの各分野の専門家たちが連携をとりながら、<br class="u-dn-ml">お客様の多彩なニーズに対応し、<br>より心地よい住まいを提案いたします。</div>
				<div class="wk-hero__figure u-dn u-db-md"><img src="assets/images/support.png" alt=""></div>
			</div>
		</div>
	</div>
</div>
<div class="wk-flowBox wk-flowBox--00 u-text-wh u-text-center">各プロフェッショナルが連携し、<br>お客様の住まいづくりを<br class="u-dn-md">カタチにします。</div>
<div class="wk-flowBox__wrapper">
	<div class="wk-memberBox u-dn u-db-md">
		<div class="wk-contentInner wk-contentInner--member">
			<ul class="wk-memberBox__list">
				<li class="wk-memberBox__item">
					<p>
						<div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/matsueda.php">
							<img src="assets/images/r_person_01a.png" alt="">
							<!-- <span>READ<br>MORE ></span> -->
						</div>
					</p>
				</li>
				<li class="wk-memberBox__item">
					<p>
						<div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/niitsu.php">
							<img src="assets/images/r_person_02a.png" alt="">
							<!-- <span>READ<br>MORE ></span> -->
						</div>
					</p>
				</li>
				<li class="wk-memberBox__item">
					<p>
						<div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/yamamoto.php">
							<img src="assets/images/r_person_03a.png" alt="">
							<!-- <span>READ<br>MORE ></span> -->
						</div>
					</p>
				</li>
				<li class="wk-memberBox__item">
					<p>
						<div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/koganezawa.php">
							<img src="assets/images/r_person_04a.png" alt="">
							<!-- <span>READ<br>MORE ></span> -->
						</div>
					</p>
				</li>
				<li class="wk-memberBox__item">
					<p>
						<div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/watanabe.php">
							<img src="assets/images/r_person_05a.png" alt="">
							<!-- <span>READ<br>MORE ></span> -->
						</div>
					</p>
				</li>
			</ul>
		</div>
	</div><!-- //.wk-memberBox -->
	<div class="wk-contentInner">
		<div class="wk-sliderIndex__wrapper u-dn-md">
			<span class="wk-sliderIndex__title u-text-uppercase">Step</span>
			<div class="wk-sliderIndex js-sliderIndex"></div>
		</div>
	</div>
	<ul class="wk-flowBox__slider js-flowBox__slider">
		<li class="wk-flowBox wk-flowBox--01 u-text-wh">
			<div class="wk-contentInner">
				<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
				<div class="wk-flowBox__cotent">
					<div class="wk-flowBox__num"><span class="u-text-uppercase">Step</span>01</div>
					<h3 class="u-text-bold">出会い・ディスカッション</h3>
					<p class="u-text-justify">お客様とのご縁からお付き合いが始まります。いまの住まいに関する多彩なお悩みに対し、様々なアイデアをご提供するとともに、パートナーとして信頼して頂けるよう丁寧に真摯にお伝えしています。お客様のご要望をお聞きし、対話を重ね、現地調査にもお伺いし、夢やライフスタイル、価値観、隠れたニーズや想いなどを共有し、イメージを具現化します。</p>
				</div>
				<div class="wk-flowBox__label u-text-center u-dn u-db-md">
					<p class="u-text-bold">営業<span class="u-text-uppercase">Sales</span></p>
				</div>
			</div>
			<div class="wk-memberBox--sp wk-memberBox--sp--01 u-dn-md">
				<img src="assets/images/step01-sp.png" alt="設計 松枝 克弥,新津 美里" usemap="#image-map01">
				<!-- <map name="image-map01">
					<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="181,-1,233,160" shape="rect">
					<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="268,0,323,160" shape="rect">
				</map> -->
			</div><!-- //.wk-memberBox--sp -->
		</li><!-- //.wk-flowBox -->

		<li class="wk-flowBox wk-flowBox--02 u-text-wh">
			<div class="wk-contentInner">
				<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
				<div class="wk-flowBox__cotent">
					<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>02</div>
					<h3 class="u-text-bold">ご提案</h3>
					<p class="u-text-justify">お客様との対話から得られた内容をもとに、平面図や外観パース、インテリア、エクステリアのイメージなどを作ります。より具体的に想像できる、こだわりのプランを作成します。</p>
				</div>
				<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
					<p class="u-text-bold">リフォーム<br>プランナー<span class="u-text-uppercase">REFORM PLANNER</span></p>
				</div>
			</div>
			<div class="wk-memberBox--sp wk-memberBox--sp--02 u-dn-md">
				<img src="assets/images/step02-sp.png" alt="設計 松枝 克弥, 新津 美里" usemap="#image-map02">
				<!-- <map name="image-map02">
					<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="221,-1,279,164" shape="rect">
					<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="299,0,367,164" shape="rect">
				</map> -->
			</div><!-- //.wk-memberBox--sp -->
		</li><!-- //.wk-flowBox -->

		<li class="wk-flowBox wk-flowBox--03 u-text-wh">
			<div class="wk-contentInner">
				<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
				<div class="wk-flowBox__cotent">
					<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>03</div>
					<h3 class="u-text-bold">ご契約</h3>
					<p class="u-text-justify">プランがご希望に合いましたらご契約を締結します。</p>
				</div>
			</div>
			<div class="wk-memberBox--sp wk-memberBox--sp--03 u-dn-md">
				<img src="assets/images/step03-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵" usemap="#image-map03">
				<!-- <map name="image-map03">
					<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="219,0,283,165" shape="rect">
					<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="300,0,366,167" shape="rect">
					<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="393,71,444,233" shape="rect">
				</map> -->
			</div><!-- //.wk-memberBox--sp -->
		</li><!-- //.wk-flowBox -->

		<li class="wk-flowBox wk-flowBox--04 u-text-wh">
			<div class="wk-contentInner">
				<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
				<div class="wk-flowBox__cotent">
					<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>04</div>
					<h3 class="u-text-bold">詳細打ち合わせ</h3>
					<p class="u-text-justify">間取りや外観はもちろん、キッチンや家具、照明、カーテンなどのインテリアデザインなどより詳細に打ち合わせます。毎日の暮らしをイメージしながら考えます。</p>
				</div>
				<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
					<p class="u-text-bold">インテリア<br>コーディ<br>ネーター<span class="u-text-uppercase">INTERIOR COORDINATOR</span></p>
				</div>
			</div>
			<div class="wk-memberBox--sp wk-memberBox--sp--04 u-dn-md">
				<img src="assets/images/step04-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊" usemap="#image-map04">
				<!-- <map name="image-map04">
					<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="212,0,273,166" shape="rect">
					<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="294,1,377,167" shape="rect">
					<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="398,70,454,231" shape="rect">
					<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="475,146,548,313" shape="rect">
				</map> -->
			</div><!-- //.wk-memberBox--sp -->
		</li><!-- //.wk-flowBox -->

		<li class="wk-flowBox wk-flowBox--05 u-text-gray">
			<div class="wk-contentInner">
				<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--04 u-dn u-db-md"></div>
				<div class="wk-flowBox__cotent">
					<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>05</div>
					<h3 class="u-text-bold">着工・お引き渡し</h3>
					<p class="u-text-justify">基礎工事、建方工事、インテリアやエクステリアの工事を進めます。安全管理や品質管理を徹底し、お客様が在宅しながらの工事の場合はお住まいのご家族の生活にも配慮しています。完成後は三井ホームの社内検査とお客様検査の竣工確認を行い、お引渡しとなります。お客様の笑顔やご家族の喜ぶ姿は、私たちの喜びとなる瞬間です。</p>
				</div>
				<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
					<p class="u-text-bold">コンスト<br>ラクション<br>エンジニア<span class="u-text-uppercase">Construction ENGINEER</span></p>
				</div>
			</div>
			<div class="wk-memberBox--sp wk-memberBox--sp--05 u-dn-md">
				<img src="assets/images/step05-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊" usemap="#image-map05">
				<!-- <map name="image-map05">
					<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="215,0,283,163" shape="rect">
					<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="298,0,360,165" shape="rect">
					<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="384,71,457,238" shape="rect">
					<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="472,151,538,315" shape="rect">
				</map> -->
			</div><!-- //.wk-memberBox--sp -->
		</li><!-- //.wk-flowBox -->

		<li class="wk-flowBox wk-flowBox--06 u-text-gray">
			<div class="wk-contentInner">
				<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--04 u-dn u-db-md"></div>
				<div class="wk-flowBox__dashed--05 u-dn u-db-md"></div>
				<div class="wk-flowBox__cotent">
					<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>06</div>
					<h3 class="u-text-bold">アフターフォロー</h3>
					<p class="u-text-justify">お客様との本当のお付き合いは、完成した家を引き渡して終わりではなく、お引渡しから「一生のおつきあい」が始まります。<br>お客様が新生活をスタートさせた後も、急な不具合も気軽に相談できる「24時間コールセンター受付」や、定期的にチェックする「定期アフターメンテナンスサービス」などをご提供し、お客様とのさらなる信頼を築いてまいります。</p>
				</div>
				<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
					<p class="u-text-bold">メンテ<br>ナンス<br>スタッフ<span class="u-text-uppercase">MAINTENANCE STAFF</span></p>
				</div>
			</div>
			<div class="wk-memberBox--sp wk-memberBox--sp--06 u-dn-md">
				<img src="assets/images/step06-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊,渡邊 慶司" usemap="#image-map06">
				<!-- <map name="image-map06">
					<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="217,0,277,162" shape="rect">
					<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="305,167,361,0" shape="rect">
					<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="394,71,453,235" shape="rect">
					<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="482,153,543,318" shape="rect">
					<area target="" alt="" title="" href="/about/staff/watanabe.php" coords="573,231,632,393" shape="rect">
				</map> -->
			</div><!-- //.wk-memberBox--sp -->
		</li><!-- //.wk-flowBox -->


	</ul><!-- //.wk-flowBox__wrapper -->
</div>


<div class="p-member py-6 py-md-11" style="background-color: #F5F3F1;">
  <div class="container container-sm">
  </div>
</div>

<?php /* ?>
	<div class="section-contact py-7 py-lg-9 bg-gray03">
		<div class="container container-sm">
			<div class="mt-5">
				<?php echo $contactbtn; ?>
			</div>
		</div>
	</div>
<?php */ ?>

</main>


		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>


	</div>
</body>

</html>