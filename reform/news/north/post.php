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
$entry_title = "お手入れ＆住まいの無料点検　～永く三井ホームにお住まいのオーナー様へ～";

//フォーム処理
$event_name = "お手入れ＆住まいの無料点検　～永く三井ホームにお住まいのオーナー様へ～";//元のURL
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
			<strong>お手入れ＆住まいの無料点検　～永く三井ホームにお住まいのオーナー様へ～</strong>
		</div>
	</div>


	<div class="section py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="no-gutters">
				<div class="col-lg-12 text">
					<div class="inner">
					
						<div class="entry-header">
							<p class="labels">
								
								
								
								<span class="label label-green-lighter">
											
								オーナー様向け</span>
								<span class="label label-outline-dark">長野支店</span>
							</p>							
							<p class="date">2020.07.18</p>
						</div>
						<h1 class="title">
						
							<span class="status">
								<i class="icon-done"></i>
							</span>
						
						
						<span class="entrytitle statusAv">
						
						お手入れ＆住まいの無料点検　～永く三井ホームにお住まいのオーナー様へ～</span>
						</h1>						
						
						<div class="entry">
							<h4 style="text-align: center;">実施期間／7月18日(土)～8月31日(月)</h4>
<p style="text-align: center;"><span style="color: #ffffff;">◆</span></p>
<p style="text-align: center;">※水・日・祝日および8/9～8/16は除きます。</p>
<p style="text-align: center;">※予約状況によりご希望に添えない場合もございます。</p>
<p style="text-align: center;"><span style="color: #ffffff;">◆</span></p>
<p style="text-align: center;"><span style="color: #ffffff;">◆</span></p>
<p><img alt="長野OS点検のご案内800.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E9%95%B7%E9%87%8EOS%E7%82%B9%E6%A4%9C%E3%81%AE%E3%81%94%E6%A1%88%E5%86%85800.jpg" width="800" height="535" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p style="text-align: center;"><span style="color: #ffffff;">◆</span></p>
<p style="text-align: center;"><span style="color: #ffffff;">◆</span></p>
<h4 style="text-align: center;">10年点検はしたけれど、こんな心配事はございませんか？</h4>
<p style="text-align: center;"><span style="color: #ffffff;">◆</span></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"><span style="color: #ffffff;"><img alt="アセット 1心配事1.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%201%E5%BF%83%E9%85%8D%E4%BA%8B1.jpg" width="195" height="175" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><span style="color: #000000;"><img alt="アセット 2心配事2.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%202%E5%BF%83%E9%85%8D%E4%BA%8B2.jpg" width="203" height="173" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></span></span></p>
<p style="text-align: center;"><span style="color: #ffffff;"><span style="color: #000000;"><img alt="アセット 3心配事3.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%203%E5%BF%83%E9%85%8D%E4%BA%8B3.jpg" width="224" height="175" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="アセット 4心配事4.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%204%E5%BF%83%E9%85%8D%E4%BA%8B4.jpg" width="204" height="240" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="アセット 7心配事7.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%207%E5%BF%83%E9%85%8D%E4%BA%8B7.jpg" width="204" height="178" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="アセット 5心配事5.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%205%E5%BF%83%E9%85%8D%E4%BA%8B5.jpg" width="209" height="169" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="アセット 6心配事6.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%206%E5%BF%83%E9%85%8D%E4%BA%8B6.jpg" width="202" height="163" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" />気になるところがございましたら、お気軽にお問合せください。</span></span></p>
<h4 style="text-align: center;"><span style="color: #ffffff;"><span style="color: #000000;">お問合せ・ご予約／026-224-0431</span></span></h4>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p></p>
<p></p>
						</div>
						
						

						
						
						<?php $event_send = "2"; ?>
						



						
						
						
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

