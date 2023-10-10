<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "部位別リフォーム";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/reform/gallery/config.php"); ?>

	<link rel="stylesheet" href="<?php echo $path; ?>/modelhouse/style.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/reform/gallery/style.css">
</head>

<body>
	<div class="reform layout-type01 modelhouse list">

		<!-- include header -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick-theme.css">

		<main>

			<?php echo $heading ?>

			<div class="breadcrumb">
				<div class="container container-sm inner">
					<a href="<?php echo $path; ?>/reform/">ホーム</a>
					<strong><?php echo $pageName ?></strong>
				</div>
			</div>



			<div class="section01 reform-gallery-top-section01">
				<div class="reform-gallery-top-inner">

					<ul class="reform-gallery-top__list">
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
						<li class="reform-gallery-top__list-item">
							<a class="inner" href="<?php echo $item['url']; ?>">
								<figure>
									<img src="<?php echo $path; ?>/assets/images/reform/gallery/img<?php echo str_pad($key, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="596" height="330" decoding="async" loading="lazy">
								</figure>
								<div class="title"><?php echo $item['title']; ?></div>
							</a>
						</li>
<?php endforeach; ?>
					</ul>
				</div>
			</div>

			<div class="section03 py-7 py-md-9 bg-gray">
				<div class="container">
					<a class="btn btn-dark btn-md mx-auto" href="https://www.mitsui-reform.com/design-reform/" target="_blank">グループ・関連サイト<br>実例紹介はこちら</a>
				</div>
			</div>

		</main>


		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>

	</div>
</body>

</html>