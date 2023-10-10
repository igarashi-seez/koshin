<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform//base.php"); ?>
<?php
$pageName = "新着情報";
?>
<?php
function is_new($entry_date){
  $period = '-7 day';
  $target_date = date('Ymd', strtotime($period));
  return ($entry_date >= $target_date);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
<link rel="stylesheet" href="/reform/news/style.css" media="screen">
</head>

<body>
<div class="reform layout-type01 events eventsentry">

<!-- include header -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

<main>

	<div class="section-mv">
		<div class="container container-sm inner">
			<h1><?php echo $pageName?></h1>
		</div>
	</div>

	<div class="breadcrumb bg-gray">
		<div class="container container-sm inner">
			<a href="<?php echo $path; ?>/">ホーム</a>
			<a href="/reform/news/"><?php echo $pageName?></a>
			<strong>2020/1/11（土）・12（日）長野県松本市パナソニックリビングショールームにて新春リフォーム相談会を開催します。</strong>
		</div>
	</div>


	<div class="section py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="no-gutters">
				<div class="col-lg-12 text">
					<div class="inner">
					
						<div class="entry-header">
							<p class="labels">
								
								
								
								<span class="label label-blue-lighter">
																		
								イベント情報</span>
								<span class="label label-outline-dark">松本支店</span>
							</p>							
							<p class="date">2019.12.21</p>
						</div>
						<h1 class="title">
						
							<span class="status">
								<i class="icon-done"></i>
							</span>
						
						
						<span class="entrytitle statusAv">
						
						2020/1/11（土）・12（日）長野県松本市パナソニックリビングショールームにて新春リフォーム相談会を開催します。</span>
						</h1>						
						
						<div class="entry">
							<p style="text-align: center;"><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201.jpg"><img alt="アートボード 1.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2019/12/%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%201-thumb-1000x711-1707.jpg" width="1000" height="711" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;"></a><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%202.jpg"><img alt="20200111.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%202.jpg" width="707" height="1000" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;"></a>ご家族・ご友人お誘いあわせの上お気軽にご来場下さい。</p>
<p style="text-align: center;">【会場MAP】詳しい<a href="https://goo.gl/maps/MpcX3Ed9T2pDLvZUA" title="パナソニックリビング" target="_blank">地図</a>はこちらをご覧ください。</p>
						</div>
						
						

						
						
						<?php $event_send = "1"; ?>
						



						
						
						
						<p class="mail">
						<a class="btn btn-red btn-xxl mx-auto" href="https://www.mitsui-reform.com/ssl/contact/?form_type=1" target="_blank"<?php echo($cv_eve_ksa_re_pc) ?>>メールでのお問い合わせ・お申込み</a>
						</p>
							
						

			
						
						
					
					</div>
				</div>
			</div>
		</div>
	</div><!-- /section01 -->




	<div class="section05 py-7 py-md-11 bg-gray">
		<div class="container">
			<a class="btn btn-dark btn-md mx-auto" href="/reform/news/"><?php echo $pageName?>一覧へ戻る</a>
		</div>
	</div><!-- /section05 -->


</main>


<!-- include footer -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

<!-- include scripts -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>


</div>
</body>

</html>

