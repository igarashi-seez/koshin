<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "とおやま歯科医院";
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

			<div class="section-mv section-mv--reform01">
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
							<h1 class="h2-type06 p-reform-results__heading">
								<?php echo $pageName ?>
							</h1>
							<h2 class="p-reform-results__subheading-theme">
								子どもたちがワクワクする<br class="p-reform-results__subheading-themeBreak-xl">治療室
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
										<img src="./image/slide11.jpg" width="670" height="447">
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
									<?php echo $pageName ?><span class="small font-weight-bold">（長野県松本市）</span>
								</div>
								<div class="description">
									<p class="font-weight-bold">
										子どもたちがワクワクする治療室に
									</p>
									松本インターから車で10分ほど。スーパーやコンビニなどの店舗も多く、1日を通して往来の多い通りに面しています。<br>
									歯科医師の遠山周明先生と牧先生ご夫妻が開業したのは2014年。三井ホームが手掛ける建物のデザインを気に入り「歯科医院というよりカフェのように気軽に入れる雰囲気に」との要望をかなえました。<br>
									そして2020年には、牧先生が担当する小児矯正の専門スペースを増築。定期的に通院の必要がある矯正治療を「楽しくワクワクするような空間で」との思いから、ポップで明るい色彩を取り入れました。
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
								看板がなければカフェかスイーツの店のような外観。右側の白い部分が増築した建物。<br>
								窓のイラストは牧先生がデザイナーのAi Kabasawaさんにリクエストした描きおろしの「花ワインコ」。個性的なイラストが目をひきます。
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
								<span class="title title--reformResults">治療室</span>
								<i class="point">02</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								治療に集中できるよう、壁と天井には、かわいいイラストを描いたクロスを張り、天井にはテレビやDVDが映るモニターを設置。
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
								<span class="title title--reformResults">廊下</span>
								<i class="point">03</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								矯正治療室へつながる廊下はアーチを境に、一般診療スペースとの切り替えをしています。黄緑やピンクなど色とりどりクロスで壁と天井の色彩を変化させ、虹の下をくぐって治療室へ入るようなイメージにしました。
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
								<span class="title title--reformResults">アクティビティルーム</span>
								<i class="point">04</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								とおやま歯科が取り組む「マイオブレース」というマウスピースを使用した予防型矯正治療。呼吸や姿勢、飲み込む時の舌の動きなど、一人ひとりの癖からアプローチして直していく方法です。身体を動かすトレーニングなどもあり、クッション性のある床を採用しています。
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
								<span class="title title--reformResults">カウンセリングルーム</span>
								<i class="point">05</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								一人ひとりの口の中の悩みごとに丁寧に向き合うカウンセリングルーム。プライバシーを守るコンパクトなスぺ―ス。
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
								<span class="title title--reformResults">一般診療室</span>
								<i class="point">06</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								一般診療の治療室は白を基調に明るく清潔感があふれるスペース。各室に色の違うステンドグラスが配され空間を和らげています。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img06.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section09 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">待合室</span>
								<i class="point">07</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								自然光に包まれる吹き抜けの待合室。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img07.jpg">
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
							甲信アルプスホームさんが手掛けた地元のクリニックを参考に、私たちが目指す「親しみやい治療」への想いから「カフェのような雰囲気」を希望しました。今回の増築では一般診療と分けた子ども専用の矯正治療室を新設。矯正治療は月1回のトレーニングを伴いますので、お子さんが楽しく通える雰囲気をつくりました。私たちも3人の子どもを育てる子育て世代。これからも歯科医師という立場だけでなく、地域の“相談しやすい人”であり続けたいと思っています。
						</p>
						<a href="http://www.tooyama-shika.com/" target="_blank" rel="noopener noreferrer" class="font-weight-bold">http://www.tooyama-shika.com/</a>
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