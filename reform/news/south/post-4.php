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
$entry_title = "ステイホーム×リフォームキャンペーン＆相談会を開催します。";

//フォーム処理
$event_name = "ステイホーム×リフォームキャンペーン＆相談会を開催します。";//元のURL
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
			<strong>ステイホーム×リフォームキャンペーン＆相談会を開催します。</strong>
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
								<span class="label label-outline-dark">リフォーム松本店</span>
							</p>							
							<p class="date">2020.10.03</p>
						</div>
						<h1 class="title">
						
							<span class="status">
								<i class="icon-done"></i>
							</span>
						
						
						<span class="entrytitle statusAv">
						
						ステイホーム×リフォームキャンペーン＆相談会を開催します。</span>
						</h1>						
						
						<div class="entry">
							<p></p>
<p><img alt="メイン①.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%83%A1%E3%82%A4%E3%83%B3%E2%91%A0.jpg" width="2580" height="2666" class="mt-image-right" style="float: right; margin: 0 0 20px 20px;" /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><img alt="アセット 8.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%208.jpg" width="2359" height="3420" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="地図.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E5%9C%B0%E5%9B%B3.jpg" width="994" height="761" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" />　</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=%E3%82%B9%E3%83%86%E3%82%A4%E3%83%9B%E3%83%BC%E3%83%A0%C3%97%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%82%AD%E3%83%A3%E3%83%B3%E3%83%9A%E3%83%BC%E3%83%B3%EF%BC%86%E7%9B%B8%E8%AB%87%E4%BC%9A%E3%82%92%E9%96%8B%E5%82%AC%E3%81%97%E3%81%BE%E3%81%99%E3%80%82&amp;office=8&amp;_ga=2.188289640.1377333171.1600409313-127063366.1576908635" title="相談会ご予約はこちらから" target="_blank"><img alt="相談会バナー.png" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E7%9B%B8%E8%AB%87%E4%BC%9A%E3%83%90%E3%83%8A%E3%83%BC.png" width="999" height="258" class="mt-image-right" style="float: right; margin: 0 0 20px 20px;" /></a></p>
						</div>
						
						

						
						
						<?php $event_send = "8"; ?>
						



						
						
						
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

