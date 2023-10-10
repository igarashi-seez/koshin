<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "N様邸";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick-theme.css">

	<link rel="stylesheet" href="<?php echo $path; ?>/reform/results/style.css">
</head>

<body>
	<div class="reform layout-type01 gallery gallery01 reform-results">

		<!-- include header -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

		<main>

			<div class="section-mv section-mv--reform04">
				<div class="container container-sm inner">
					<p class="h1"><?php echo $pageName ?></p>
				</div>
			</div>

			<div class="breadcrumb">
				<div class="container container-sm inner">
					<a href="<?php echo $path; ?>/reform/">ホーム</a>
					<a href="<?php echo $path; ?>/reform/results/">リフォーム実績</a>
					<strong><?php echo $pageName ?></strong>
				</div>
			</div>


			<div class="section01 py-7 py-md-9 py-lg-11">
				<div class="container">

					<div class="row flex-row-reverse">
						<div class="col-lg-9 image">
							<img class="img-fluid shadow-lg" src="./image/mv.jpg">
						</div>
						<div class="mt-5 mt-lg-0 col-lg-3 align-self-center text">

							<span class="small">リフォーム実績</span>
							<h1 class="h2-type06">
								<?php echo $pageName ?>
							</h1>
							<h2 class="p-reform-results__subheading-theme">
								家族のカタチに合わせた<br class="p-reform-results__subheading-themeBreak-xl">暮らし継ぐリフォーム
							</h2>
						</div>
					</div>

				</div>
			</div>

			<div class="section02 py-7 py-md-9 py-lg-11 bg-gray">
				<div class="container">

					<div class="row no-gutters block-type11">
						<div class="col-lg-7 image">
							<div class="slider-type01">
								<div id="slider" class="slider slider--reform-results">

									<div class="item">
										<img src="./image/slide01.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide02.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide03.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide04.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide05.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide06.jpg" width="670" height="447">
									</div>
								</div>

								<div id="slideNav" class="slide-nav slide-nav--reform-results">
									<div class="item item1 current">
										<span class="slideLink" data-slick="1"><img src="./image/thumb01.jpg"></span>
									</div>
									<div class="item item2">
										<span class="slideLink" data-slick="2"><img src="./image/thumb02.jpg"></span>
									</div>
									<div class="item item3">
										<span class="slideLink" data-slick="3"><img src="./image/thumb03.jpg"></span>
									</div>
									<div class="item item4">
										<span class="slideLink" data-slick="4"><img src="./image/thumb04.jpg"></span>
									</div>
									<div class="item item5">
										<span class="slideLink" data-slick="5"><img src="./image/thumb05.jpg"></span>
									</div>
									<div class="item item6">
										<span class="slideLink" data-slick="6"><img src="./image/thumb06.jpg"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 text">
							<div class="inner inner--reform-results">
								<div class="title">
									<?php echo $pageName ?><span class="small font-weight-bold">（家族構成：30代夫婦+子ども）</span>
								</div>
								<div class="description">
									<p class="font-weight-bold">
										家族のカタチに合わせたリフォームで住まいを受け継ぐ
									</p>
									ご両親が建てた築25年の三井ホームをフルリフォームしたN邸。和室中心だった間取りから、子育て世代が使いやすい広いリビングや床暖房のダイニング&amp;キッチンにリノベーションしました。<br>
									転勤を伴う仕事柄、転居の多いNさんですが、お子さんの誕生を機に「拠点になる家を持ちたい」と考えるようになったそう。しばらく空いていた実家の建て替えも検討して甲信アルプスホームに相談。<br>
									全館空調を導入した大規模リフォームは、冬の寒さも気にならない24時間快適な住まいとなりました。隣家に住むご両親から受け継いだ住まいで世代をつなぐ温かな交流が始まっています。
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="section03 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">メイン</span>
								<i class="point">01</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								和室だった1階をゆったりしたLDKに。自然光がたっぷり入る明るい空間は、お子さんが伸び伸びと遊ぶ姿を見ながら家事をしたり、くつろいだりと、親子の時間が楽しめます。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img01.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section04 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">シューズクローク</span>
								<i class="point">02</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								玄関にはたっぷり収納できるシューズクローク。ベビーカーやコートなど外出に必要なものも収納できて便利。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img02.jpg">
						</div>
					</div>

				</div>
			</div>
			<div class="section05 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">リビングの和室コーナー</span>
								<i class="point">03</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								リビングにある小上がりの畳コーナー。ランダムな5角形は空間を広く見せ、動線もスムーズ「物は仕舞って空間をスッキリさせたい」という奥様の要望から収納はたっぷり。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img03.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section06 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">キッチン</span>
								<i class="point">04</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								オール電化でIHのキッチン。バックセットもナチュラルな雰囲気にコーディネート。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img04.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section07 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">ウオークインクローゼット</span>
								<i class="point">05</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								寝室から続くウオークインクローゼットは1年中の洋服がすべて仕舞える大容量。回遊できる動線で通気性も優れています。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img05.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section08 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">多目的スペース</span>
								<i class="point">06</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								2階のホールは室内干しができるスペース。冬や梅雨の時期にも活躍しています。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img06.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="py-7 py-md-8 py-lg-9 bg-gray03">
				<div class="container container-sm">
					<div>
						<h4 class="h4-type01">
							お施主様の声
						</h4>
						<p class="dl-type01">
							両親が新築したのは阪神・淡路大震災があった1995年。家族を守る安心安全の住まいへの思いから甲信アルプスホームに決めたと聞いています。家族を持ち、今度は私も家族を守る家にしたいと思い、同じ甲信アルプスホームを希望しました。新築も考えましたが「建て替えるのはもったいない」との言葉をいただきリフォームに。<br>家づくり信頼感と、全館空調の快適さ、そして何より広いリビングで子どもが伸び伸びと遊ぶ姿に安らぎを感じています。
						</p>
					</div>
				</div>
			</div>

			<div class="py-7 py-md-8 py-lg-9">
				<div class="container">
					<a class="btn btn-dark btn-md mx-auto" href="<?php echo $path; ?>/reform/results/">リフォーム実績一覧へ戻る</a>
				</div>
			</div>

		</main>


		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>

		<?php include("../slick.php"); ?>

	</div>
</body>

</html>