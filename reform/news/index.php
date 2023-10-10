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
<link rel="stylesheet" href="/reform/news/style.css" media="screen">
<link rel="stylesheet" href="/events/style.css?v=202305" media="screen">
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
			<strong><?php echo $pageName?></strong>
		</div>
	</div>


	<div class="section py-md-9 py-6 py-lg-10">

			<div class="p-news">

				<div class="c-news-search-box js-tabs-target">

					<ul class="c-news-search-box__nav">
						<li class="c-news-search-box__nav-item"><a href="#news01" class="c-news-search-box__nav-link">新築</a></li>
						<li class="c-news-search-box__nav-item"><a href="#news02" class="c-news-search-box__nav-link">リフォーム</a></li>
					</ul>

					<div class="c-news-search-box__content" id="news01">
						<form action="" method="">
							<div class="c-news-search-box__row">
								<div class="c-news-search-box__col">
									<p class="c-news-search-box__heading">エリア検索</p>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>長野県北・東信</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>長野県中・南信</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>山梨</span></label>
								</div>
								<div class="c-news-search-box__col">
									<p class="c-news-search-box__heading">カテゴリー検索</p>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>見学会</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>キャンペーン</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>イベント</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>セミナー相談会</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>お知らせ</span></label>
								</div>
							<!-- /.c-news-search-box__row --></div>
							<p><button class="c-news-search-box__button">検索する</button></p>
						</form>
					<!-- /.c-news-search-box__content --></div>

					<div class="c-news-search-box__content" id="news02">
						<form action="" method="">
							<div class="c-news-search-box__row">
								<div class="c-news-search-box__col">
									<p class="c-news-search-box__heading">エリア検索</p>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>長野県北・東信</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>長野県中・南信</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>山梨</span></label>
								</div>
								<div class="c-news-search-box__col">
									<p class="c-news-search-box__heading">カテゴリー検索</p>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>見学会</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>キャンペーン</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>イベント</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>セミナー相談会</span></label>
									<label class="c-news-search-box__list"><input type="checkbox" name="" value=""><span>お知らせ</span></label>
								</div>
							<!-- /.c-news-search-box__row --></div>
							<p><button class="c-news-search-box__button">検索する</button></p>
						</form>
					<!-- /.c-news-search-box__content --></div>
				<!-- /.c-news-search-box --></div>

				<div class="c-news-cards">
					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<p class="c-news-cards__status">終了</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】12/3(土)・4(日) お住まい見学会のごあんない</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-brown-lighter">キャンペーン</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【予約制】三井ホームの住まいにSTAYHOME体験</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">イベント</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野古牧モデルハウス】クリスマスイベント開催中！</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<p class="c-news-cards__status">終了</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-green-lighter">セミナー相談会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市安茂里】 お客様のお住まい個別見学のご案内ー予約制OPEN HOUSEー</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-brown-lighter">お知らせ</a></p>
							<p class="c-news-cards-category__branch">佐久営業所</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【佐久市】11月20日(日) お客様のお住まい見学会 -Owner's House-</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>

					<div class="c-news-cards__item">
						<p class="c-news-cards__date">2022.11.19</p>
						<div class="c-news-cards-category">
							<p><a href="/" class="c-news-cards-category__genre label label-blue-lighter">見学会</a></p>
							<p class="c-news-cards-category__branch">長野支店</p>
						</div>
						<a href="/" class="c-news-cards__link">
							<p class="c-news-cards__title">【長野市】11月13日(日) お客様のお住まい完成見学会 ＼予約受付開始／</p>
							<p class="c-news-cards__image"><img src="https://dummyimage.com/316x180/000/fff" width="316" height="180" alt=""></p>
						</a>
						<div class="c-news-cards-footer">
							<a href="/" class="c-news-cards-footer__button01">詳しくはこちら</a>
							<a href="/" class="c-news-cards-footer__button02">お申込みはこちら</a>
						</div>
					<!-- /.c-news-cards__item --></div>
				<!-- /.c-news-cards --></div>
			<!-- /.p-news --></div>

			<div class="c-pager">
				<ul class="c-pager__list">
					<li class="c-pager__prev"><a href="/reform/news/" class="c-pager__arrow  c-pager__arrow--prev">前へ</a></li>
					<li class="c-pager__item"><a href="/reform/news/" class="c-pager__link  c-pager__link--active">1</a></li>
					<li class="c-pager__item"><a href="/reform/news/" class="c-pager__link">2</a></li>
					<li class="c-pager__item"><a href="/reform/news/" class="c-pager__link">3</a></li>
					<li class="c-pager__next"><a href="/reform/news/" class="c-pager__arrow  c-pager__arrow--next">次へ</a></li>
				</ul>
			<!-- /.c-pager --></div>

	</div><!-- /section01 -->

</main>


<!-- include footer -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

<!-- include scripts -->
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>
<script src="/assets/js/jquery-ui.min.js"></script>
<script>
	$('.js-tabs-target').tabs({
		active: 1
	});
</script>

</div>
</body>

</html>

