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
$entry_title = "9／1～10／31「まいにち家事ラクキャンペーン」を開催します";

//フォーム処理
$event_name = "9／1～10／31「まいにち家事ラクキャンペーン」を開催します";//元のURL
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
			<strong>9／1～10／31「まいにち家事ラクキャンペーン」を開催します</strong>
		</div>
	</div>


	<div class="section py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="no-gutters">
				<div class="col-lg-12 text">
					<div class="inner">
					
						<div class="entry-header">
							<p class="labels">
								
								
								
								<span class="label label-brown-lighter">
											
								キャンペーン</span>
								<span class="label label-outline-dark">リフォーム甲府店</span>
							</p>							
							<p class="date">2020.08.27</p>
						</div>
						<h1 class="title">
						
							<span class="status">
								<i class="icon-done"></i>
							</span>
						
						
						<span class="entrytitle statusAv">
						
						9／1～10／31「まいにち家事ラクキャンペーン」を開催します</span>
						</h1>						
						
						<div class="entry">
							<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E8%A1%A8%E9%9D%A2.jpg"><img alt="表面.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/08/%E8%A1%A8%E9%9D%A2-thumb-1000xauto-2748.jpg" width="1000" height="972" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center;">実物体感会会場（岡谷酸素　山梨営業所）の地図は、<a href="https://goo.gl/maps/AwqJ4c9o58rfK5kw6" target="_blank">こちら</a>です。</p>
<p style="text-align: center;"><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=9%EF%BC%8F1%EF%BD%9E10%EF%BC%8F31%E3%80%8C%E3%81%BE%E3%81%84%E3%81%AB%E3%81%A1%E5%AE%B6%E4%BA%8B%E3%83%A9%E3%82%AF%E3%82%AD%E3%83%A3%E3%83%B3%E3%83%9A%E3%83%BC%E3%83%B3%E3%80%8D%E3%82%92%E9%96%8B%E5%82%AC%E3%81%97%E3%81%BE%E3%81%99&amp;office=7&amp;_ga=2.56135330.808467835.1597914979-814995448.1562807290"><img alt="イベント予約.jpgのサムネイル画像のサムネイル画像" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/08/%E3%82%A4%E3%83%99%E3%83%B3%E3%83%88%E4%BA%88%E7%B4%84-thumb-999x258-2743-thumb-500xauto-2744-thumb-500x129-2745.jpg" width="500" height="129" class="mt-image-center" /></a></p>
<p style="text-align: center;">※　実物体験会へのご予約の際は、「その他・備考」欄に来場希望のお時間をご入力ください。</p>
<p style="text-align: center;">お電話でのご予約・お問い合わせは、</p>
<p style="text-align: center;">0120-677-331　又は　055-221-3100　まで</p>
<h2 style="text-align: center;"></h2>
<hr />
<p style="text-align: center;"></p>
<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E8%A3%8F%E9%9D%A2.jpg"><img alt="裏面.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/08/%E8%A3%8F%E9%9D%A2-thumb-autox1346-2741.jpg" width="1000" height="1346" class="mt-image-center" style="text-align: center; margin: 0px auto 20px; display: block;" /></a></p>
<p></p>
<h2 style="text-align: center;"></h2>
<p style="text-align: center;">皆様のご予約・お問い合わせをお待ちしております。</p>
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

