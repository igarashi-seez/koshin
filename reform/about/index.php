<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
	$pageName = "三井のリフォームとは";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>

<link rel="stylesheet" href="<?php echo $path; ?>/reform/about/style.css">
</head>

<body>
<div class="reform layout-type01 about">

<!-- include header -->
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

<main>

	<div class="section-mv">
		<div class="container container-sm inner">
			<h1><?php echo $pageName ?></h1>
		</div>
	</div>

	<div class="breadcrumb bg-gray">
		<div class="container container-sm inner">
			<a href="<?php echo $path; ?>/reform/">ホーム</a>
			<strong><?php echo $pageName ?></strong>
		</div>
	</div>



	<div class="section02 py-7 py-md-9 py-lg-11 bg-gray">
		<div class="container container-sm">

			<div class="row gutter-100 block-type06">


				<!-- ここから -->
				<div class="col-md-6 item">
					<a class="inner" href="<?php echo $path; ?>/reform/about/ksa/">
						<div class="image">
							<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/about/img01.jpg" srcset="<?php echo $path; ?>/assets/images/reform/about/img01@2x.jpg 2x" alt="甲信アルプスホームについて">
						</div>
						<div class="text">
							<dl>
								<dt>三井のリフォームが選ばれる理由</dt>
								<dd>地域トップクラスの実績を誇る三井のリフォームが選ばれる理由をご紹介します。
								</dd>
							</dl>
							<div class="button text-right">
								<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
							</div>
						</div>
					</a>
				</div>
				<!-- ここまで -->
				<!-- ここから -->
				<div class="col-md-6 item">
					<a class="inner" href="<?php echo $path; ?>/reform/about/works/">
						<div class="image">
							<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/about/img03.jpg" srcset="<?php echo $path; ?>/assets/images/reform/about/img03@2x.jpg 2x" alt="私たちの仕事">
						</div>
						<div class="text">
							<dl>
								<dt>私たちの仕事</dt>
								<dd>出会いを大切に育み、お客様の夢をカタチにし、一邸一邸心を込めて創ります。
							</dl>
							<div class="button text-right">
								<span class="btn-type01 inverse">MORE<i class="icon-angle-right02"></i></span>
							</div>
						</div>
					</a>
				</div>
				<!-- ここまで -->
				<!-- ここから -->
				<div class="col-md-6 item">
					<a class="inner" href="<?php echo $path; ?>/reform/about/staff/">
						<div class="image">
							<img class="img-fluid" src="<?php echo $path; ?>/assets/images/reform/about/img04.jpg" srcset="<?php echo $path; ?>/assets/images/reform/about/img04@2x.jpg 2x" alt="スタッフ紹介">
						</div>
						<div class="text">
							<dl>
								<dt>スタッフ紹介</dt>
								<dd>三井のリフォームのスタッフをご紹介
								</dd>
							</dl>
							<div class="button text-right">
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
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

<!-- include scripts -->
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>


</div>
</body>
</html>
