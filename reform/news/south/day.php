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
$entry_title = "快適な夏の暮らしに向けたお得な１DAYリフォームキャンペーン開催中";

//フォーム処理
$event_name = "快適な夏の暮らしに向けたお得な１DAYリフォームキャンペーン開催中";//元のURL
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
			<strong>快適な夏の暮らしに向けたお得な１DAYリフォームキャンペーン開催中</strong>
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
                                			
								お知らせ</span>
								<span class="label label-outline-dark">リフォーム松本店</span>
							</p>							
							<p class="date">2020.04.13</p>
						</div>
						<h1 class="title">
						
							<span class="status">
								<i class="icon-done"></i>
							</span>
						
						
						<span class="entrytitle statusAv">
						
						快適な夏の暮らしに向けたお得な１DAYリフォームキャンペーン開催中</span>
						</h1>						
						
						<div class="entry">
							<p><img alt="アートボード 2@300x-100.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%82%A2%E3%83%BC%E3%83%88%E3%83%9C%E3%83%BC%E3%83%89%202%40300x-100.jpg" width="2552" height="3580" class="mt-image-none" /></p>
<p><strong>※長野県内のお客様に限ります※</strong></p>
						</div>
						
						

						
						
						<?php $event_send = "8"; ?>
						



						
						
						
							
						

			
						
						
					
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

