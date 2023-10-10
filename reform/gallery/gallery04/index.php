<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "和室・書斎";
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

			<?php include("../breadcrumb.php"); ?>

			<div class="section01 py-6 py-md-7">
				<div class="container container-sm">

					<h2 class="h2-type02 mb-3"><?php echo $pageName; ?></h2>

					<div class="slider-type01">
						<div id="slider" class="slider">
<?php for ($i = 1; $i < 11; $i++) { ?>
							<div class="item">
								<img src="./image/img<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="1000" height="560" decoding="async">
							</div>
<?php }; ?>
						</div>
						<div id="slideNav" class="slide-nav">
<?php
for ($i = 1; $i < 11; $i++) {
	if ($i === 1) {
?>
							<div class="item item<?php echo $i; ?> current">
								<span class="slideLink" data-slick="<?php echo $i; ?>">
									<img src="./image/thumb<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="160" height="100" decoding="async">
								</span>
							</div>
<?php } else { ?>
							<div class="item item<?php echo $i; ?>">
								<span class="slideLink" data-slick="<?php echo $i; ?>">
									<img src="./image/thumb<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="160" height="100" decoding="async">
								</span>
							</div>
<?php
		}
	}
?>
						</div>
					</div>

				</div>
			</div>

			<?php echo $back_button ?>

		</main>


		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>
		<?php include("../slick.php"); ?>


	</div>
</body>

</html>