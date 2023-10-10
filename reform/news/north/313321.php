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
$entry_title = "3/13(土)～3/21(日)リフォーム設計相談会＆見学会開催";

//フォーム処理
$event_name = "3/13(土)～3/21(日)リフォーム設計相談会＆見学会開催";//元のURL
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
			<strong>3/13(土)～3/21(日)リフォーム設計相談会＆見学会開催</strong>
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
								<span class="label label-outline-dark">リフォーム上田店</span>
							</p>							
							<p class="date">2021.02.22</p>
						</div>
						<h1 class="title">
						
						<?php if(is_new ('20210222')) { ?>
							<span class="status">
								<i class="icon-new"></i>
							</span>
						<?php } ?>
						
						
						<?php if(is_new ('20210222')) { ?>
							<span class="entrytitle statusAv">
						<?php } ?>
						
						3/13(土)～3/21(日)リフォーム設計相談会＆見学会開催</span>
						</h1>						
						
						<div class="entry">
							<p style="text-align: center;"><strong>「リフォーム相談会＆完成見学会」開催のお知らせ</strong></p>
<p style="text-align: center;">施工実例のご紹介を交えながら、</p>
<p style="text-align: center;">お客様のそれぞれの暮らしやライフプランに沿った</p>
<p style="text-align: center;">リフォーム計画をご提案いたします。</p>
<p style="text-align: center;">お住まいのことでお悩みごとや、</p>
<p style="text-align: center;">現在ご検討中の計画などございましたら</p>
<p style="text-align: center;">お気軽にご来場ください。</p>
<p style="text-align: center;">一緒にお手伝いをさせて頂きます。</p>
<p><img alt="title1.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/title1.jpg" width="1000" height="306" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="R2.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/R2.jpg" width="765" height="1525" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><img alt="Rmp.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/images/Rmp.jpg" width="600" height="403" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
						</div>
						
						

						
						
						<?php $event_send = "10"; ?>
						



						
						
						
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

