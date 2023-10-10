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
$entry_title = "【長野】3/6(土)・3/7(日)パナソニックリビングショールームにて春のリフォーム相談会を開催します。";

//フォーム処理
$event_name = "【長野】3/6(土)・3/7(日)パナソニックリビングショールームにて春のリフォーム相談会を開催します。";//元のURL
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
			<strong>【長野】3/6(土)・3/7(日)パナソニックリビングショールームにて春のリフォーム相談会を開催します。</strong>
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
											
								セミナー相談会</span>
								<span class="label label-outline-dark">リフォーム長野店</span>
							</p>							
							<p class="date">2021.02.25</p>
						</div>
						<h1 class="title">
						
						<?php if(is_new ('20210225')) { ?>
							<span class="status">
								<i class="icon-new"></i>
							</span>
						<?php } ?>
						
						
						<?php if(is_new ('20210225')) { ?>
							<span class="entrytitle statusAv">
						<?php } ?>
						
						【長野】3/6(土)・3/7(日)パナソニックリビングショールームにて春のリフォーム相談会を開催します。</span>
						</h1>						
						
						<div class="entry">
							<p><img alt="210213-メインV.png" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/210213-%E3%83%A1%E3%82%A4%E3%83%B3V.png" width="2207" height="1290" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p>　</p>
<p><img alt="210213-裏メインV.png" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/210213-%E8%A3%8F%E3%83%A1%E3%82%A4%E3%83%B3V.png" width="2157" height="1518" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="グリーン住宅ポイント.png" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%B0%E3%83%AA%E3%83%BC%E3%83%B3%E4%BD%8F%E5%AE%85%E3%83%9D%E3%82%A4%E3%83%B3%E3%83%88.png" width="2311" height="691" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="210213-太陽光相談会.png" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/210213-%E5%A4%AA%E9%99%BD%E5%85%89%E7%9B%B8%E8%AB%87%E4%BC%9A.png" width="2231" height="701" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p><img alt="210213-地図.png" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/210213-%E5%9C%B0%E5%9B%B3.png" width="2268" height="1296" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" />会場の詳しい地図は<span style="color: #0000ff;"><a href="https://www.google.com/maps/place/%E3%83%91%E3%83%8A%E3%82%BD%E3%83%8B%E3%83%83%E3%82%AF+%E3%83%AA%E3%83%93%E3%83%B3%E3%82%B0+%E3%82%B7%E3%83%A7%E3%82%A6%E3%83%AB%E3%83%BC%E3%83%A0+%E9%95%B7%E9%87%8E/@36.6350005,138.2011176,17.25z/data=!4m5!3m4!1s0x601d867f9098d5f3:0xb48cdb4e2854e691!8m2!3d36.6334578!4d138.2014937?hl=ja" title="パナソニックショールーム長野" target="_blank"><span style="color: #0000ff;">こちら</span></a></span>です。</p>
<p>イベントは予約制となっております。メール・WEBでのご予約の際は、「その他・備考」欄に来場希望の日時をご入力ください。</p>
<p>お電話でのご予約も承っております。お気軽にお問合せください。</p>
						</div>
						
						

						
						
						<?php $event_send = "9"; ?>
						



						
						
						
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

