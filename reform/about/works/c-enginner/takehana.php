<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "竹花 剛";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
<link rel="stylesheet" href="/reform/about/style.css" media="screen">
<link rel="stylesheet" href="/reform/about/works/style.css" media="screen">
</head>

<body>
<div class="reform layout-type01 reform about staff">

<!-- include header -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

<main>

	<div class="section-mv">
		<div class="container container-sm inner">
			<h1>私たちの仕事</h1>
		</div>
	</div>

	<div class="breadcrumb bg-gray">
		<div class="container container-sm inner">
			<a href="<?php echo $path; ?>/reform/">ホーム</a>
			<a href="<?php echo $path; ?>/reform/about/">三井のリフォームとは</a>
			<a href="/reform/about/works/">私たちの仕事</a>
			<strong>竹花 剛</strong>
		</div>
	</div>


	<div class="section01 py-7 py-md-9 py-lg-11 bg-gray">
		<div class="container">
			<div class="row no-gutters block-type11">
			
				<div class="col-lg-7 image">
					<img src="./image/takehana/img01.jpg" class="img-fluid">
				</div>
				
				<div class="col-lg-5 text">
					<div class="inner">
						<div class="profile">
							<!-- <div class="job">プロジェクトマネージャー</div> -->
							<div class="name">
								竹花 剛
										<!-- <span class="small">グループ長</span> -->
							</div>
						</div>
						<div class="detail">
							<colgroup>
								<col class="width-xs">
							</colgroup>
							<div>一級建築施施工管理技士</div>
							<div>一級土木施工管理技士</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div><!-- /section01 -->



<div class="section02">
	
	<div class="section-inner py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="row no-gutters block-type12">
				<div class="col-md-6 text">
					<h3 class="h3-type04">
						<span>コンストラクションエンジニアとは</span>
					</h3>
					<div class="mt-5 mt-md-7">
						<p>着工からお引き渡しまで現場を指揮する「工事の現場監督」が、コンストラクションエンジニアです。<br class="only-pc">プロジェクトマネジャーから依頼を受けたお客様の計画図面をもとに、お住まいの現地調査を行います。工事の日程や施工スタッフの調整をし、規模の大小はありますが、解体から工事に入ります。<br class="only-pc">施工スタッフは、徹底した教育・訓練を受けた技術者たち。その施工スタッフを統括し、安全管理や品質管理を徹底し、お客様が在宅しながらの工事の場合は、お住まいのご家族の生活にも配慮。工事が終了してお引き渡しまで、安全で確実な施工をリードしています。</p>
					</div>
				</div>
				<div class="col-md-6 image">
					<img src="./image/takehana/img02.jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="section-inner py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="row no-gutters block-type12">
				<div class="col-md-6 text">
					<h3 class="h3-type04">
						<span>お客様の満足を共有できたら嬉しい</span>
					</h3>
					<div class="mt-5 mt-md-7">
						<p>入社後、新築部の工事担当を20年務め、2014年からリモデリング事業部でリフォームを担当しています。<br class="only-pc">新築もリフォームも家づくりですが、リフォームの場合は、お客様が生活するお住まいが現場ですから、細心の注意をはらって行っています。<br class="only-pc">現場は三井ホームのオーナー様、一般在来住宅、マンションなど多種多様。しかし固定概念を持たず、お客様のご要望にも柔軟に対応し、ご提案ができるよう心がけています。<br class="only-pc">お客様と顔を合わせる機会も多く、お客様にご満足いただけることがやりがいです。</p>
					</div>
				</div>				
				<div class="col-md-6 image">
					<img src="./image/takehana/img03.jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="section-inner py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
			<div class="row no-gutters block-type12">
				<div class="col-md-6 text">
					<h3 class="h3-type04">
						<span>豪雪地の暮らしを快適に</span>
					</h3>
					<div class="mt-5 mt-md-7">
						<p>長野県の北部にある豪雪地でのリフォームは印象的でした。<br class="only-pc">50年以上大切に住んできたお住まいを、これから先も３ｍ以上の積雪に耐えるよう、木と鉄を併用した暖かい住まいとなりました。</p>
					</div>
				</div>
				<div class="col-md-6 image">
					<img src="./image/takehana/img04.jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="section-inner bg-gray py-7 py-md-9 py-lg-11">
		<div class="container container-sm">
      <?php include("{$_SERVER['DOCUMENT_ROOT']}/reform/about/works/list.php"); ?>
		</div>
	</div>
</div>
</main>


<!-- include footer -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

<!-- include scripts -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>


<?php include("{$_SERVER['DOCUMENT_ROOT']}/reform/about/script.php"); ?>

</div>
</body>

</html>


