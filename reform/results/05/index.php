<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "C様邸";
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

			<div class="section-mv section-mv--reform05">
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
							３世代が心地よい<br class="p-reform-results__subheading-themeBreak-xl">二世帯住宅
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
								<div id="slider" class="slider slider--reform-results slider--reform-results-over22">

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
									<?php /* 202205順序入れ替え 画像URLのみ：ここから */ ?>
									<div class="item">
										<img src="./image/slide12.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide11.jpg" width="670" height="447">
									</div>
									<?php /* 202205順序入れ替え 画像URLのみ：ここまで */ ?>
									<div class="item">
										<img src="./image/slide13.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide14.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide15.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide16.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide17.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide18.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide19.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide20.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide21.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide22.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide23.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide24.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide25.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide26.jpg" width="670" height="447">
									</div>
									<div class="item">
										<img src="./image/slide27.jpg" width="670" height="447">
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
									<?php /* 202205順序入れ替え 画像URLのみ：ここから */ ?>
									<div class="item item11">
										<span class="slideLink" data-slick="11"><img src="./image/thumb12.jpg"></span>
									</div>
									<div class="item item12">
										<span class="slideLink" data-slick="12"><img src="./image/thumb11.jpg"></span>
									</div>
									<?php /* 202205順序入れ替え 画像URLのみ：ここまで */ ?>
									<div class="item item13">
										<span class="slideLink" data-slick="13"><img src="./image/thumb13.jpg"></span>
									</div>
									<div class="item item14">
										<span class="slideLink" data-slick="14"><img src="./image/thumb14.jpg"></span>
									</div>
									<div class="item item15">
										<span class="slideLink" data-slick="15"><img src="./image/thumb15.jpg"></span>
									</div>
									<div class="item item16">
										<span class="slideLink" data-slick="16"><img src="./image/thumb16.jpg"></span>
									</div>
									<div class="item item17">
										<span class="slideLink" data-slick="17"><img src="./image/thumb17.jpg"></span>
									</div>
									<div class="item item18">
										<span class="slideLink" data-slick="18"><img src="./image/thumb18.jpg"></span>
									</div>
									<div class="item item19">
										<span class="slideLink" data-slick="19"><img src="./image/thumb19.jpg"></span>
									</div>
									<div class="item item20">
										<span class="slideLink" data-slick="20"><img src="./image/thumb20.jpg"></span>
									</div>
									<div class="item item21">
										<span class="slideLink" data-slick="21"><img src="./image/thumb21.jpg"></span>
									</div>
									<div class="item item22">
										<span class="slideLink" data-slick="22"><img src="./image/thumb22.jpg"></span>
									</div>
									<div class="item item23">
										<span class="slideLink" data-slick="23"><img src="./image/thumb23.jpg"></span>
									</div>
									<div class="item item24">
										<span class="slideLink" data-slick="24"><img src="./image/thumb24.jpg"></span>
									</div>
									<div class="item item25">
										<span class="slideLink" data-slick="25"><img src="./image/thumb25.jpg"></span>
									</div>
									<div class="item item26">
										<span class="slideLink" data-slick="26"><img src="./image/thumb26.jpg"></span>
									</div>
									<div class="item item27">
										<span class="slideLink" data-slick="27"><img src="./image/thumb27.jpg"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 text">
							<div class="inner inner--reform-results">
								<div class="title">
									<?php echo $pageName ?><span class="small font-weight-bold">（家族構成：親世帯（60代夫妻）＋子世帯（30代夫妻+子ども２人））</span>
								</div>
								<div class="description">
									<p class="font-weight-bold">
										３世代が心地よい二世帯住宅に
									</p>
									のどかな田園風景が広がる長野市郊外のＣ様邸。築50年超の母屋と、増築した築20年ほどのお住まいが併設していました。<br>
									この家で生まれ育った三姉妹の長女Ａさんは、ご結婚されて同じ市内で暮らしていましたが、お子さんの小学校入学を機に実家での暮らしを考えました。<br>
									建て替えや新築なども検討しましたが、バスルームを共用する二世帯住宅にリフォームすることに。<br>
									親世帯は母屋を中心に耐震・断熱性能を高めて安心安全をアップデート。築年数の浅い建物は、自然光が入る明るいLDKを中心にモダンな空間になりました。<br>
									耐震改修補助金や省エネ改修補助金など国や自治体の補助金も有効に使って、シニア世代も子育て世代も居心地のよいデザインリフォームをかなえました。
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
								<span class="title title--reformResults">外観</span>
								<i class="point">01</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							築50年超えの母屋は外観の印象を大きく変えずに耐震性能と断熱性能をアップ。2階は居室の一部をインナーバルコニーにして、共働きの子育て世代に使いやすいスペースになりました。
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
								<span class="title title--reformResults">玄関</span>
								<i class="point">02</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							引き戸だった玄関は、広い間口を生かして両開きドアの玄関に。おおらかに迎え入れてくれる空間に風格が漂います。２世帯分が並ぶインターホンと玄関ポストの先は、それぞれの世帯に続いていて、プライバシーと利便性に配慮しています。
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
								<span class="title title--reformResults">玄関ホール</span>
								<i class="point">03</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							玄関ホールは共用スペースで広々としています。左側は親世帯、右側は子世帯と、扉の色で緩やかに分けています。
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
								<span class="title title--reformResults">子世帯玄関</span>
								<i class="point">04</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							子世帯用のもうひとつの玄関。生活時間帯が違っても気兼ねなく出入りできるよう専用の出入り口を設置しました。<br>
							玄関ホールには大きめのヘキサゴンタイルを敷いて遊びをプラス。
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
								<span class="title title--reformResults">子世帯キッチン</span>
								<i class="point">05</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								子世帯のLDKは、自然採光で明るい空間。キッチンとリビングの天井高に段差をつけて間接照明を入れ、空間に広がりを持たせています。<br>
								キッチンはキッチンハウスの「グラフテクト」でコーディネート。料理の得意なご主人をはじめ、家族みんなで料理が楽しめます。
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
								<span class="title title--reformResults">子世帯リビング</span>
								<i class="point">06</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							キッチンとダイニングテーブルの間にある柱は外すことができない構造材。あえて黒く彩色してアイアン風に仕上げ、おしゃれな印象に。照明はAさんご夫妻が空間に合わせてチョイス。
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
								<span class="title title--reformResults">家事スペース</span>
								<i class="point">07</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								キッチンから続く窓辺には小さなカウンター。家事スペースにしたり、子どもたちが宿題をしたりとフレキシブル。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img07.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section10 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">洗面所</span>
								<i class="point">08</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							壁に沿ってL字に広いカウンターを設けた洗面所。壁一面に鏡があるので忙しい朝も家族が並んで使えます。コンセントの位置や、使うカゴのサイズに合わせた棚など、細部にこだわっています。可動式の収納スペースにはAさんのご主人がDIYで棚を設置予定。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img08.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section11 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">トイレ</span>
								<i class="point">09</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							トイレのペーパーホルダーや照明には温もり感のある真鍮をチョイスして空間のアクセントに。
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img09.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section12 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters flex-row-reverse block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">２F寝室</span>
								<i class="point">10</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
								母屋２階の寝室は壁と天井のクロスを替えて落ち着いた雰囲気に
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img10.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="section13 py-7 py-md-8 py-lg-9">
				<div class="container container-sm">

					<div class="row no-gutters block-type12 block-type12--reformResults">
						<div class="col-md-6 text">
							<h2 class="h3-type04">
								<span class="title title--reformResults">２Fウォークインクローゼット</span>
								<i class="point">11</i>
							</h2>
							<div class="mt-4 mt-md-6 mt-lg-7">
							自在に使える可動式の棚を設けたウォークインクローゼット。家具を置いて収納量を増やしたり、作業台を置いてユーティリティースペースにしたりと家族構成の変化にも自在に対応。インナーバルコニーとつながっているので「干す」から「しまう」までのステップがスムーズに
							</div>
						</div>
						<div class="col-md-6 image">
							<img class="img-fluid reformResults-sectionImage" src="./image/img11.jpg">
						</div>
					</div>

				</div>
			</div>

			<div class="py-7 py-md-8 py-lg-9 bg-gray03">
				<div class="container container-sm">
					<div>
						<h4 class="h4-type01">
							お施主さまの声
						</h4>
						<dl class="dl-type01">
							<dt>親世帯の父Ｂさん</dt>
							<dd>
							子ども世帯との暮らしが決まってから、建て替えやリフォーム、別棟の新築など、いくつもの選択肢の中で家族会議を繰り返しました。<br>
							甲信アルプスホームさんのデザインリフォームを振り返って思うのは、良い方々との出会いに恵まれたこと。打ち合わせの時には、営業担当者さんだけでなく、設計コンサルタント（建築家）さんも同席する「プロジェクトチーム」という形で相談にのっていただきました。<br>
							築50年の家は、私の父が木曽ヒノキにこだわって建てた家であることなど、さまざまな想い入れを直接、建築家さんに伝えることができました。<br>
							完成してみると、耐震性や断熱性など、家の性能が上がっただけでなく、住み慣れた家への愛着を形として残していただいたところもあり、感激しました。家族の想いに寄り添う温かな家づくりをしてくださる方々との、良い出会いに感謝し、これからも大切に住み続けたいと思っています。
							</dd>
							<dt>子世帯の長女Ａさん</dt>
							<dd>
							リフォームの工事期間は、親世帯と子世帯とで延べ７カ月ほどでした。営業担当者さんや建築家さんとの打ち合わせの回数も多くなりましたが、私たちは毎回、その時間が楽しみでした。<br>
							というのも、打ち合わせのたびに少しずつ変わる要望に対して、その場で図面修正し、3Dパースにして見せていただくなど、豊富な経験に基づく柔軟な対応力に頼もしさを感じたからです。特にPCで作成した3D画像のパースは具体的で参考になることばかりでした。<br>
							ご提案いただいた、既存の空間を使って広く見せるデザインや、プライバシーを尊重した間取りを実現し、親世帯も子世帯も、それぞれが寛げる居心地の良い家になりました。
							</dd>
						</dl>
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