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
$entry_title = "【長野】3/6(土)・3/7(日)春のリフォーム相談会を開催します。";

//フォーム処理
$event_name = "【長野】3/6(土)・3/7(日)春のリフォーム相談会を開催します。";//元のURL
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
			<strong>【長野】3/6(土)・3/7(日)春のリフォーム相談会を開催します。</strong>
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
											
								見学会</span>
								
							</p>							
							<p class="date">2021.02.12</p>
						</div>
						<h1 class="title">
						
						<?php if(is_new ('20210212')) { ?>
							<span class="status">
								<i class="icon-new"></i>
							</span>
						<?php } ?>
						
						
						<?php if(is_new ('20210212')) { ?>
							<span class="entrytitle statusAv">
						<?php } ?>
						
						【長野】3/6(土)・3/7(日)春のリフォーム相談会を開催します。</span>
						</h1>						
						
						<div class="entry">
							
						</div>
						
						

						
						
						<?php $event_send = "11"; ?>
						



						
						
						
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

