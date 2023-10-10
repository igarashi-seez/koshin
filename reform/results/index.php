<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "リフォーム実績";
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
	<div class="reform reform-results layout-type01 gallery gallery01">

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
					<strong><?php echo $pageName ?></strong>
				</div>
			</div>


			<div class="section01 pt-5 pb-7 py-md-9">
				<div class="container container-sm">

					<div class="row gutter-100 block-type06">

						<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/07/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img07.jpg" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">H様邸ガレージ </p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
					<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/06/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img06.jpg?202303" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">伊勢町チャペル</p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
						<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/05/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img05.jpg?202303" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">C様邸</p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
						<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/04/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img04.jpg" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">N様邸</p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
						<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/03/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img03.jpg" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">K様邸</p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
						<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/02/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img02.jpg" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">I様邸</p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
						<!-- ここから -->
						<div class="col-md-6 item">
							<a class="inner" href="<?php echo $path; ?>/reform/results/01/">
								<div class="image">
									<img class="img-fluid p-reform-results__item-image" src="<?php echo $path; ?>/assets/images/reform/results/img01.jpg" alt="">
								</div>
								<div class="p-reform-results__item-text">
									<p class="mb-0">とおやま歯科医院</p>
									<div>
										<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
									</div>
								</div>
							</a>
						</div>
						<!-- ここまで -->
					</div>

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