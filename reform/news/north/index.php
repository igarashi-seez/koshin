<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
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
<link rel="stylesheet" href="/events/style.css" media="screen">
</head>

<body>
<div class="reform layout-type01 events">

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
			<strong>北・東信</strong>
		</div>
	</div>


	<div class="section py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="no-gutters">
				<div class="col-lg-12 text">
					<div class="inner">
						
						
						<div class="navs-type01 my-6">

							<ul class="nav nav-tabs nav-justified">
								<li class="nav-item">
									<a class="nav-link" href="/reform/news/">全て</a>
								</li>
								
								
								
								<li class="nav-item"><a class="nav-link active" href="https://www.mitsuihome-ksa.co.jp/reform/news/north/">北・東信</a></li>
								
								
								
								<li class="nav-item"><a class="nav-link" href="https://www.mitsuihome-ksa.co.jp/reform/news/south/">中・南信</a></li>
								
								
								
								<li class="nav-item"><a class="nav-link" href="https://www.mitsuihome-ksa.co.jp/reform/news/yamanashi/">山梨</a></li>
								
														
							</ul>
							<ul class="list-type01">
		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/36tuti.php">

				
				<?php if(is_new ('20210225')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2021.02.25
				</div>
				<div class="labels">
					
					
					
					<span class="label label-green-lighter">
															
					セミナー相談会</span>
					<span class="label label-outline-dark">リフォーム長野店</span>
				</div>
				<div class="title">
					【長野】3/6(土)・3/7(日)パナソニックリビングショールームにて春のリフォーム相談会を開催します。
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/313321.php">

				
				<?php if(is_new ('20210222')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2021.02.22
				</div>
				<div class="labels">
					
					
					
					<span class="label label-blue-lighter">
															
					イベント</span>
					<span class="label label-outline-dark">リフォーム上田店</span>
				</div>
				<div class="title">
					3/13(土)～3/21(日)リフォーム設計相談会＆見学会開催
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/south/97.php">

				
				<?php if(is_new ('20210219')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2021.02.19
				</div>
				<div class="labels">
					
					
					
                    <span class="label label-brown-lighter">
															
					現場ブログ</span>
					<span class="label label-outline-dark">リフォーム松本店</span>
				</div>
				<div class="title">
					【2/19】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/quo-design.php">

				
				<?php if(is_new ('20201217')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2020.12.17
				</div>
				<div class="labels">
					
					
					
					<span class="label label-blue-lighter">
															
					イベント</span>
					<span class="label label-outline-dark">本社</span>
				</div>
				<div class="title">
					【こだわりのデザインリフォーム】お客様のライフステージに合わせたお住まいをご提案
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/quo-kobgetsu.php">

				
				<?php if(is_new ('20201217')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2020.12.17
				</div>
				<div class="labels">
					
					
					
					<span class="label label-blue-lighter">
															
					イベント</span>
					<span class="label label-outline-dark">本社</span>
				</div>
				<div class="title">
					【部位別デザインリフォーム】初めてのリフォームでも安心、お住まいのお悩みごとにお応えします
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/post.php">

				
				<div class="status">
					<i class="icon-done"></i>
				</div>
				

				<div class="date">
					2020.07.18
				</div>
				<div class="labels">
					
					
					
					<span class="label label-green-lighter">
															
					オーナー様向け</span>
					<span class="label label-outline-dark">長野支店</span>
				</div>
				<div class="title">
					お手入れ＆住まいの無料点検　～永く三井ホームにお住まいのオーナー様へ～
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/post-3.php">

				
				<?php if(is_new ('20200413')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2020.04.13
				</div>
				<div class="labels">
					
					
					
					<span class="label label-brown-lighter">
                    										
					お知らせ</span>
					<span class="label label-outline-dark">本社</span>
				</div>
				<div class="title">
					外壁塗り替えリフォームパック
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/post-2.php">

				
				<?php if(is_new ('20200413')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2020.04.13
				</div>
				<div class="labels">
					
					
					
					<span class="label label-brown-lighter">
                    										
					お知らせ</span>
					<span class="label label-outline-dark">本社</span>
				</div>
				<div class="title">
					戸建て水回り４点セットキャンペーン実施中
				</div>
				</a>
			</li>
		

		
			<li class="item">
				<a href="https://www.mitsuihome-ksa.co.jp/reform/news/north/post-1.php">

				
				<?php if(is_new ('20200317')) { ?>
					<div class="status">
						<i class="icon-new"></i>
					</div>
				<?php } else { ?>
				<div class="status no-status">
				</div>										
				<?php } ?>
				

				<div class="date">
					2020.03.17
				</div>
				<div class="labels">
					
					
					
					<span class="label label-brown-lighter">
                    										
					お知らせ</span>
					<span class="label label-outline-dark">リフォーム上田店</span>
				</div>
				<div class="title">
					リフォーム『よろず相談』承ります！
				</div>
				</a>
			</li>
		
		</ul>
		


							
						</div>						
					
					</div>
				</div>
			</div>
		</div>
	</div><!-- /section01 -->




</main>


<!-- include footer -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

<!-- include scripts -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>


</div>
</body>

</html>

