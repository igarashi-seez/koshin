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
  
	


//タイトル
$entry_title = "1／23(土)～24(日)　「新春リフォーム相談会」を開催します";

//フォーム処理
$event_name = "1／23(土)～24(日)　「新春リフォーム相談会」を開催します";//元のURL
$name_result = (mb_convert_encoding($event_name, 'UTF-8', 'auto'));//UTFにしてからurlエンコード
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
			<strong>1／23(土)～24(日)　「新春リフォーム相談会」を開催します</strong>
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
											
								イベント</span>
								<span class="label label-outline-dark">リフォーム甲府店</span>
							</p>							
							<p class="date">2021.01.23</p>
						</div>
						<h1 class="title">
						
							<span class="status">
								<i class="icon-done"></i>
							</span>
						
						
						<span class="entrytitle statusAv">
						
						1／23(土)～24(日)　「新春リフォーム相談会」を開催します</span>
						</h1>						
						
						<div class="entry">
							<p></p>
<p><img alt="11.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/11.jpg" width="1000" height="1062" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center;"><strong>会場の地図は、<span style="color: #0000ff;"><a href="https://goo.gl/maps/cvs15FXKPneWA7KB9" target="_blank"><span style="color: #0000ff;">こちら</span></a></span>です。</strong></p>
<p></p>
<p><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=%E6%96%B0%E6%98%A5%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E7%9B%B8%E8%AB%87%E4%BC%9A%E3%82%92%E9%96%8B%E5%82%AC%E3%81%97%E3%81%BE%E3%81%99%E3%80%90%E5%B1%B1%E6%A2%A8%E3%80%91&amp;office=7&amp;_ga=2.72910419.198702403.1610172695-814995448.1562807290"><img alt="イベント予約1.jpgのサムネイル画像" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/01/%E3%82%A4%E3%83%99%E3%83%B3%E3%83%88%E4%BA%88%E7%B4%841-thumb-700xauto-1221.jpg" width="700" height="181" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center;"><span style="background-color: #ccffff;">※　当イベントは予約制になっております。</span></p>
<p style="text-align: center;"><span style="background-color: #ccffff;">ご予約の際は、「その他・備考」欄に来場希望の日時をご入力ください。</span></p>
<p style="text-align: center;"><span style="background-color: #ccffff;">お電話でのご予約・お問い合わせは、0120-677-331　又は　055-221-3100　まで。</span></p>
<p style="text-align: center;"><img alt="22.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/22.jpg" width="1000" height="1402" class="mt-image-center" style="font-size: 1.5em; display: block; margin: 0px auto 20px;" /></p>
<p style="text-align: center;"><span style="background-color: #ccffcc;">※　当イベントは予約制になっております。</span></p>
<p style="text-align: center;"><span style="background-color: #ccffcc;">ご予約の際は、「その他・備考」欄に来場希望の日時をご入力ください。</span></p>
<p style="text-align: center;"><span style="background-color: #ccffcc;">お電話でのご予約・お問い合わせは、0120-677-331　又は　055-221-3100　まで。</span></p>
						</div>
						
						

						
						
						<?php $event_send = "7"; ?>
						



						
						
						
						<p class="mail">
						<a class="btn btn-red btn-xxl mx-auto" href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=<?php echo($name_result) ?>&office=<?php echo($event_send) ?>" target="_blank"<?php echo($cv_eve_ksa_pc) ?>>メールでのお問い合わせ・お申込み</a>
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

