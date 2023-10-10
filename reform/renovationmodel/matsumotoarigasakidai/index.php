<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php

//フォーム送信営業所
$modelhouse_num = "8";

//フォーム処理
$mh_name = "リノベーションモデル・蟻ヶ崎台「愛犬と幸せに暮す家」"; //元のURL
$mhname_result = urlencode(mb_convert_encoding($mh_name, 'UTF-8', 'auto')); //UTFにしてからurlエンコード
$mh_ga = "matsumotoarigasakidai02";
$mh_title = 'リノベーションモデル・蟻ヶ崎台';
?>
<?php include("../config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
	<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/assets/inc/gdn-eventtag_202003.php"); ?>
	<link rel="stylesheet" href="<?php echo $path; ?>/modelhouse/style.css">
</head>

<body>
	<div class="reform layout-type01 modelhouse list">

		<!-- include header -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick-theme.css">

		<main>

			<?php echo $mhhead ?>

			<div class="section01 py-7 py-md-9">
				<div class="container container-sm">

					<h1 class="h2-type02 mb-3">
						リノベーションモデル・蟻ヶ崎台　<br class="only-sp">&#147;愛⽝と幸せに暮らす家&#148;
					</h1>

					<div class="slider-type01">
						<div id="slider" class="slider">

							<div class="item">
								<img src="./image/img0109.jpg" srcset="./image/img0109@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0110.jpg" srcset="./image/img0110@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0114.jpg" srcset="./image/img0114@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0113.jpg" srcset="./image/img0113@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0106.jpg" srcset="./image/img0106@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0107.jpg" srcset="./image/img0107@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0111.jpg" srcset="./image/img0111@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0102.jpg" srcset="./image/img0102@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0104.jpg" srcset="./image/img0104@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0116.jpg" srcset="./image/img0116@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0115.jpg" srcset="./image/img0115@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0108.jpg" srcset="./image/img0108@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0112.jpg" srcset="./image/img0112@2x.jpg 2x">
							</div>
							<div class="item">
								<img src="./image/img0101.jpg" srcset="./image/img0101@2x.jpg 2x">
							</div>

						</div>

						<div id="slideNav" class="slide-nav">
							<div class="item item1 current">
								<span class="slideLink" data-slick="1"><img src="./image/img0109thumb.jpg" srcset="./image/img0109thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item2">
								<span class="slideLink" data-slick="2"><img src="./image/img0110thumb.jpg" srcset="./image/img0110thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item3">
								<span class="slideLink" data-slick="3"><img src="./image/img0114thumb.jpg" srcset="./image/img0114thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item4">
								<span class="slideLink" data-slick="4"><img src="./image/img0113thumb.jpg" srcset="./image/img0113thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item5">
								<span class="slideLink" data-slick="5"><img src="./image/img0106thumb.jpg" srcset="./image/img0106thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item6">
								<span class="slideLink" data-slick="6"><img src="./image/img0107thumb.jpg" srcset="./image/img0107thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item7">
								<span class="slideLink" data-slick="7"><img src="./image/img0111thumb.jpg" srcset="./image/img0111thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item8">
								<span class="slideLink" data-slick="8"><img src="./image/img0102thumb.jpg" srcset="./image/img0102thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item9">
								<span class="slideLink" data-slick="9"><img src="./image/img0104thumb.jpg" srcset="./image/img0104thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item10">
								<span class="slideLink" data-slick="10"><img src="./image/img0116thumb.jpg" srcset="./image/img0116thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item11">
								<span class="slideLink" data-slick="11"><img src="./image/img0115thumb.jpg" srcset="./image/img0115thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item12">
								<span class="slideLink" data-slick="12"><img src="./image/img0108thumb.jpg" srcset="./image/img0108thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item13">
								<span class="slideLink" data-slick="13"><img src="./image/img0112thumb.jpg" srcset="./image/img0112thumb@2x.jpg 2x"></span>
							</div>
							<div class="item item14">
								<span class="slideLink" data-slick="14"><img src="./image/img0101thumb.jpg" srcset="./image/img0101thumb@2x.jpg 2x"></span>
							</div>
						</div>
					</div>

					<p class="mt-3">&#147;愛⽝と幸せに暮らす家&#148;と銘打ったこの住まいは、愛⽝と⼈間が安⼼・安全に暮らすための⼯夫を散りばめました。</p>
					<p class="mt-3">これからペットを迎える予定の⽅や、既に愛⽝と暮らしている⽅にもおすすめの<br class="only-pc">築35年・三井ホームのフルリノベーションモデルです。</p>

					<?php /*
					<div class="navs-type02 mt-7">
						<a href="<?php echo $path; ?>/renovationmodel/machinaka-yamanashi/"><i class="icon-arrows arrow-sm icon-prevarrow"></i>前のモデルへ</a>
						<a href="<?php echo $path; ?>/renovationmodel/matsumoto/"><i class="icon-arrows arrow-sm  icon-nextarrow"></i>次のモデルへ</a>
					</div>
					*/ ?>
				</div>
			</div>

			<div class="section02 py-7 py-md-9 bg-gray" style="padding-bottom:0px !important;">
	<div class="container">
		<div class="text-center">
			<a class="btn btn-red btn-xl mx-auto" href="https://my.matterport.com/show/?m=szBqrqJFdqD" target="_blank" {$cv_mh_ksa_pc}>VR見学はこちら</a>
			<p class="font-size-sm mt-3" style="margin-bottom:0px !important;">
				実際に訪れたようなバーチャル体験！<br>
				24時間いつでもご見学いただけます。
			</p>
		</div>
	</div>
</div>

			<?php echo $mhreservation; ?>

			<div class="section03 py-7 py-md-9">

				<div class="container text-center">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="pills01">
							<img class="img-fluid" src="./image/floor01.png">
						</div>
						<div class="tab-pane fade" id="pills02">
							<img class="img-fluid" src="./image/floor02.png">
						</div>
						<div class="tab-pane fade" id="pills03">
							<img class="img-fluid" src="./image/floor03.png">
						</div>
					</div>
					<ul class="nav nav-pills-type01 justify-content-center mt-3">
						<li class="item">
							<a class="btn btn-gray btn-sm active" data-toggle="pill" href="#pills01">1階</a>
						</li>
						<li class="item">
							<a class="btn btn-gray btn-sm" data-toggle="pill" href="#pills02">2階</a>
						</li>
						<?php /*
						<li class="item">
							<a class="btn btn-gray btn-sm" data-toggle="pill" href="#pills03">部屋裏収納</a>
						</li>
						*/ ?>
					</ul>
				</div>

				<div class="container container-sm mt-5">
					<div class="row gutter-40">
						<div class="col-md-12">
							<div class="table-type01">
								<table>
									<colgroup>
										<col class="width-m">
									</colgroup>
									<tbody>
										<tr>
											<th>商品名</th>
											<td class="font-weight-bold">
												リノベーションモデル・蟻ヶ崎台　<br class="only-sp">&#147;愛⽝と幸せに暮らす家&#148;
											</td>
										</tr>
										<tr>
											<th>住宅タイプ</th>
											<td>
												築35年・三井ホーム フルリノベーション
											</td>
										</tr>
										<tr>
											<th>住所</th>
											<td>
												松本市蟻ヶ崎台18-1
											</td>
										</tr>
										<tr>
											<th>電話番号</th>
											<td>
												0120-677-331
											</td>
										</tr>
										<tr>
											<th>定休日</th>
											<td>
												水曜日
											</td>
										</tr>
										<tr>
											<th>交通</th>
											<td>
												⻑野⾃動⾞道「松本」ICより⾞で15分
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section04 pb-7 pb-md-11">
				<h2 class="h2-type03 mb-5">
					<i class="icon-pin"></i>
					物件の所在地
				</h2>

				<div class="map-type01">
					<iframe src="https://www.google.com/maps/d/embed?mid=193vPy8GkLUOSaRYuL259r5DfIpO3X9UH&ehbc=2E312F" style="border-style: none;"></iframe>
					<!-- <iframe src="https://www.google.com/maps/d/embed?mid=193vPy8GkLUOSaRYuL259r5DfIpO3X9UH" style="border-style: none;"></iframe> -->
				</div>
			</div>

			<?php /*
				<div class="section05 py-7 py-md-11 bg-gray">
					<div class="container">
						<a class="btn btn-dark btn-md mx-auto" href="<?php echo $path; ?>/renovationmodel/list/">モデルハウス一覧へ戻る</a>
					</div>
				</div>
			*/ ?>

		</main>


		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>
		<script type="text/javascript" src="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.min.js"></script>
		<script>
			$('#slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				adaptiveHeight: true,
				nextArrow: '<i class="icon-arrows icon-nextarrow"></i>',
				prevArrow: '<i class="icon-arrows icon-prevarrow"></i>'
			});
			$("#slideNav .item").on('click', function() {
				$numSlick = $(this).children(".slideLink").attr('data-slick') - 1;
				$('#slider').slick('slickGoTo', $numSlick);
			});
			// On before slide change
			$('#slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
				$numNextSlide = nextSlide;
				$numCurrentSlide = currentSlide;
				$eleThumbSlide = ".item" + ($numNextSlide + 1);
				console.log($eleThumbSlide);
				$("#slideNav").children(".item").removeClass("current");
				$("#slideNav").children($eleThumbSlide).addClass("current");
			});
		</script>

	</div>
</body>

</html>