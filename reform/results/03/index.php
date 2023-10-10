<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "K様邸";
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

			<div class="section-mv section-mv--reform03">
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
								リゾートホテルのような癒しと<br class="p-reform-results__subheading-themeBreak-xl">寛ぎのインテリア
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
									<div class="item">
										<img src="./image/slide07.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide08.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide09.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide10.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide11.jpg">
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
									<div class="item item7">
										<span class="slideLink" data-slick="7"><img src="./image/thumb07.jpg"></span>
									</div>
									<div class="item item8">
										<span class="slideLink" data-slick="8"><img src="./image/thumb08.jpg"></span>
									</div>
									<div class="item item9">
										<span class="slideLink" data-slick="9"><img src="./image/thumb09.jpg"></span>
									</div>
									<div class="item item10">
										<span class="slideLink" data-slick="10"><img src="./image/thumb10.jpg"></span>
									</div>
									<div class="item item11">
										<span class="slideLink" data-slick="11"><img src="./image/thumb11.jpg"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 text">
							<div class="inner inner--reform-results">
								<div class="title">
									<?php echo $pageName ?><span class="small font-weight-bold">（家族構成：30代夫婦+猫2匹）</span>
								</div>
								<div class="description">
									<p class="font-weight-bold">
										リゾートホテルのような癒しと寛ぎのインテリアに
									</p>
									築20年超の三井ホーム。内装のリフォームのみで2代目オーナーに受け継がれ、2匹の猫との癒しの住まいとなりました。<br>
									共働きで多忙な毎日を送るご夫妻。「猫が飼いたい」と探し始めた住まいは、Kさんのご実家に近い場所で出合い、住み始めた後にかわいい保護猫との出会いがあったのだそう。料理のしやすい広いキッチンは、外食が多かったというご夫妻の生活を一変。「家で過ごす時間が楽しくなりました」。
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
								間取りの変更はなく大理石調の床や、壁のクロスの張替えがリフォームの中心。L字のLDKはご夫妻の好きなブルーを基調に清々しいインテリア。ゆったりくつろげる大きめのソファも余裕の大空間。
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
								<span class="title title--reformResults">和室</span>
								<i class="point">02</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								和室には障子を取り付け、ブルー系の畳や襖などでモダンな民芸調の和室に。冬はこたつを置いてのんびり過ごしているそう。
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
								<span class="title title--reformResults">玄関収納</span>
								<i class="point">03</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								吹き抜けの玄関。シューズクロークも既存のもので、ご夫妻の購入の決め手のひとつになった収納スペース。
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
								<span class="title title--reformResults">書斎</span>
								<i class="point">04</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								ロフト風の室内に遊び心がある書斎。天井はグリーンに、壁の1面だけクロスの色を変えて、窓枠をダークブラウンに塗り変えてクラシカルな雰囲気に。
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
								<span class="title title--reformResults">キッチン</span>
								<i class="point">05</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								吊り戸棚を撤去し、手元を照らすダウンライトを新設して明るいキッチンに。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img05.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section08 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">洗面所</span>
								<i class="point">06</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								入り口の位置を変更して洗面所とバスルームの動線をスムーズに。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img06.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section09 pt-7 pt-md-8 pt-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">ダイニング</span>
								<i class="point">07</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								回遊性のあるLDKは家事動線もスムーズ。ブルーグレーのインテリアでコーディネートした室内はリゾートホテルのような雰囲気。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img07.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section08 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">外観</span>
								<i class="point">08</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								サイズの違うスクエアの窓が並ぶ個性的でスタイリッシュな外観。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img08.jpg">
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
							新築も検討しましたが、広いリビングやたっぷりとした収納、動線などの間取りも良く、スタイリッシュな外観も気に入っています。大規模なリフォームがなく、この大きさの住まいが手に入れられたことは運が良かったのかもしれませんね。<br>リゾートホテルをイメージしたインテリアはブルーが基調。リビングは爽やかな雰囲気に、和室は民芸調と遊びを取り入れ、2匹の猫たちの存在とともに、家で過ごす時間が癒しになっています。
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