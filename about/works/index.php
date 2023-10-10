<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/base.php"); ?>
<?php
	$palentName = "甲信アルプスホームとは";
	$pageName = "私たちの仕事";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/meta.php"); ?>
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $path; ?>/about/style.css">

<link rel="stylesheet" href="<?php echo $path; ?>/assets/css/modaal.min.css">
<script src="<?php echo $path; ?>/assets/js/modaal.min.js"></script>

<link rel="stylesheet" href="/assets/css/additional/common.min.css" media="screen">
<link rel="stylesheet" href="assets/css/style.css" media="screen">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

<!-- slick -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>
<script type="text/javascript" src="assets/js/slider.js" defer></script>

<script type="text/javascript" src="assets/js/jquery.rwdImageMaps.min.js" defer></script>

<script type="text/javascript" src="assets/js/memberPic.js" defer></script>

</head>

<body>
<div class="layout-type01 about works">

<!-- include header -->
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/header.php"); ?>

<main>

	<div class="section-mv">
		<div class="container container-sm inner">
			<p class="h1"><?php echo	$palentName; ?></p>
		</div>
	</div>

	<div class="breadcrumb">
		<div class="container container-sm inner">
			<a href="<?php echo $path; ?>/">ホーム</a>
			<a href="<?php echo $path; ?>/about/"><?php echo	$palentName; ?></a>
			<strong><?php echo $pageName; ?></strong>
		</div>
	</div>


  <div class="wk-hero">
    <div class="wk-hero__img container"><img src="assets/images/main.jpg" alt="社員の集合写真（右から、渡邊 慶司、山本 恭兵、新津 美里、小金沢 豊、松枝 克弥、坂井 飛鳥）"></div>
    <div class="wk-hero__inner u-text-wh">
      <div class="container container-sm">
        <div class="wk-hero__content">
          <div class="wk-hero__copy u-text-bold">夢をカタチにしていく、<br> 住まいづくりのスタッフ</div>
          <div class="wk-hero__text mt-6">出会いを大切に育み、お客様の夢をカタチにし、<br class="u-dn-ml">一邸一邸心を込めて創り、<br>建てたあとも永く細やかにサポートしていく。<br>三井ホームの各担当者は、それぞれの役割を果たしながら、<br class="u-dn-ml">全員が一丸となって、<br>お客様の家づくりをお手伝いいたします。</div>
          <div class="wk-hero__figure u-dn u-db-md"><img src="assets/images/support.png" alt="お客様を中心に私たち営業・設計、工事・検査、オーナーサポートの仕事が巡っています。"></div>
        </div>
      </div>
    </div>
  </div>
	<div class="wk-flowBox wk-flowBox--00 u-text-wh u-text-center">各プロフェッショナルが連携し、<br>お客様の住まいづくりを<br class="u-dn-md">カタチにします。</div>
	<div class="wk-flowBox__wrapper">
		<div class="wk-memberBox u-dn u-db-md">
      <div class="wk-contentInner wk-contentInner--member">
        <ul class="wk-memberBox__list">
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/matsueda.php">
                <img src="assets/images/person_01a.png" alt="松枝 克弥">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/niitsu.php">
                <img src="assets/images/person_02a.png" alt="新津 美里">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/yamamoto.php">
                <img src="assets/images/person_03a.png" alt="山本 恭兵">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/koganezawa.php">
                <img src="assets/images/person_04a.png" alt="小金沢 豊">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off" href="/about/staff/watanabe.php">
                <img src="assets/images/person_05a.png" alt="渡邊 慶司">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off">
                <img src="assets/images/person_06a.png" alt="坂井 飛鳥">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off">
                <img src="assets/images/person_07a.png" alt="坂井 飛鳥">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
          <li class="wk-memberBox__item">
            <p>
              <div class="wk-memberBox__item--link wk-memberBox__item--link-off">
                <img src="assets/images/person_08a.png" alt="坂井 飛鳥">
                <!-- <span>READ<br>MORE ></span> -->
              </div>
            </p>
          </li>
        </ul>
      </div>
		</div><!-- //.wk-memberBox -->
		<div class="wk-contentInner">
			<div class="wk-sliderIndex__wrapper u-dn-md">
				<span class="wk-sliderIndex__title u-text-uppercase">Step</span>
				<div class="wk-sliderIndex js-sliderIndex"></div>
			</div>
		</div>
		<ul class="wk-flowBox__slider js-flowBox__slider">
			<li class="wk-flowBox wk-flowBox--01 u-text-wh">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num"><span class="u-text-uppercase">Step</span>01</div>
						<h3 class="u-text-bold">出会い</h3>
						<p class="u-text-justify">お客様とのご縁からお付き合いが始まります。住まいづくりに関する様々な情報をご提供するとともに、パートナーとして信頼して頂けるよう丁寧に真摯にお伝えしています。</p>
					</div>
					<div class="wk-flowBox__label u-text-center u-dn u-db-md">
						<p class="u-text-bold">営業<span class="u-text-uppercase">Sales</span></p>
					</div>
				</div>
				<div class="wk-memberBox--sp wk-memberBox--sp--01 u-dn-md">
					<img src="assets/images/step01-sp.png" alt="設計 松枝 克弥,新津 美里" usemap="#image-map01">
					<!-- <map name="image-map01">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="181,-1,233,160" shape="rect">
						<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="268,0,323,160" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->

			<li class="wk-flowBox wk-flowBox--02 u-text-wh">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>02</div>
						<h3 class="u-text-bold">ディスカッション</h3>
						<p class="u-text-justify">「住まいづくり」は人生の一大イベント。<br>お客様のご要望をお聞きし、対話を重ね、夢やライフスタイル、価値観、隠れたニーズや想いなどを共有し、イメージを具体化します。</p>
					</div>
				</div>
				<div class="wk-memberBox--sp wk-memberBox--sp--02 u-dn-md">
					<img src="assets/images/step02-sp.png" alt="設計 松枝 克弥, 新津 美里" usemap="#image-map02">
					<!-- <map name="image-map02">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="221,-1,279,164" shape="rect">
    				<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="299,0,367,164" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->

			<li class="wk-flowBox wk-flowBox--03 u-text-wh">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02-02 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>03</div>
						<h3 class="u-text-bold">プランのご提案</h3>
						<p class="u-text-justify">お客様との対話から得られた内容をもとに、平面図や外観パース、インテリア、エクステリアのイメージなどを作ります。より具体的に想像できる、こだわりのプランを作成します。</p>
					</div>
					<div class="wk-flowBox__label u-text-center u-dn u-db-md">
						<p class="u-text-bold">設計<span class="u-text-uppercase">Design</span></p>
					</div>
					<div class="wk-flowBox__label wk-flowBox__label--small wk-flowBox__label-02 u-text-center u-dn u-db-md">
						<p class="u-text-bold">設計<br>コンサル<br>タント<span class="u-text-uppercase">DESIGN CONSULTANT</span></p>
					</div>
				</div>
				<div class="wk-memberBox--sp wk-memberBox--sp--03 u-dn-md">
					<img src="assets/images/step03-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵" usemap="#image-map03">
					<!-- <map name="image-map03">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="219,0,283,165" shape="rect">
						<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="300,0,366,167" shape="rect">
						<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="393,71,444,233" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->

			<li class="wk-flowBox wk-flowBox--04 u-text-wh">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02-02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>04</div>
						<h3 class="u-text-bold">ご契約・詳細打ち合わせ</h3>
						<p class="u-text-justify">ご契約後は、設計をより詳細に詰めていきます。間取りや外観はもちろん、キッチンや家具、照明、カーテンなどのインテリアデザインも打ち合わせます。スイッチやコンセントの位置も重要です。毎日の暮らしをイメージしながら考えます。</p>
					</div>
					<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
						<p class="u-text-bold">インテリア<br>コーディ<br>ネーター<span class="u-text-uppercase">INTERIOR COORDINATOR</span></p>
					</div>
				</div>
				<div class="wk-memberBox--sp wk-memberBox--sp--04 u-dn-md">
					<img src="assets/images/step04-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊" usemap="#image-map04">
					<!-- <map name="image-map04">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="212,0,273,166" shape="rect">
						<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="294,1,377,167" shape="rect">
						<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="398,70,454,231" shape="rect">
						<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="475,146,548,313" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->

			<li class="wk-flowBox wk-flowBox--05 u-text-gray">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02-02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--04 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>05</div>
						<h3 class="u-text-bold">着工・お引き渡し</h3>
						<p class="u-text-justify">基礎工事、建方工事、インテリアやエクステリアの工事を進めます。完成後は三井ホームの社内検査とお客様検査の竣工確認を行い、お引き渡しとなります。<br>お客様の笑顔やご家族の喜ぶ姿は、私たちの喜びとなる瞬間です。</p>
					</div>
					<div class="wk-flowBox__label u-text-center u-dn u-db-md">
						<p class="u-text-bold">工事<span class="u-text-uppercase">CONSTRUCTION</span></p>
					</div>
				</div>
				<div class="wk-memberBox--sp wk-memberBox--sp--05 u-dn-md">
					<img src="assets/images/step05-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊" usemap="#image-map05">
					<!-- <map name="image-map05">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="215,0,283,163" shape="rect">
						<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="298,0,360,165" shape="rect">
						<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="384,71,457,238" shape="rect">
						<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="472,151,538,315" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->

			<li class="wk-flowBox wk-flowBox--06 u-text-gray">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02-02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--04 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--05 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>06</div>
						<h3 class="u-text-bold">アフターフォロー</h3>
						<p class="u-text-justify">お客様との本当のお付き合いは、完成した家を引き渡して終わりではなく、お引渡しから「一生のおつきあい」が始まります。<br>お客様が新生活をスタートさせた後は、折にふれてご訪問します。</p>
					</div>
					<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
						<p class="u-text-bold">オーナー<br>サポート<span class="u-text-uppercase">Owner Support</span></p>
					</div>
				</div>
				<div class="wk-memberBox--sp wk-memberBox--sp--06 u-dn-md">
					<img src="assets/images/step06-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊,渡邊 慶司" usemap="#image-map06">
					<!-- <map name="image-map06">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="217,0,277,162" shape="rect">
						<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="305,167,361,0" shape="rect">
						<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="394,71,453,235" shape="rect">
						<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="482,153,543,318" shape="rect">
						<area target="" alt="" title="" href="/about/staff/watanabe.php" coords="573,231,632,393" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->

			<li class="wk-flowBox wk-flowBox--07 u-text-gray">
				<div class="wk-contentInner">
					<div class="wk-flowBox__dashed--01 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--02-02 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--03 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--04 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--05 u-dn u-db-md"></div>
					<div class="wk-flowBox__dashed--06 u-dn u-db-md"></div>
					<div class="wk-flowBox__cotent">
						<div class="wk-flowBox__num u-text-middle"><span class="u-text-uppercase">Step</span>07</div>
						<h3 class="u-text-bold">リフォームのご相談</h3>
						<p class="u-text-justify">何年、何十年とお住まいいただく中で、生活スタイルが変化して、建物のリフォームが必要となってくることがあります。その時にはリフォーム担当がご相談に乗らせていただきます。工事の大小にかかわらず、建物のリフォームに関することは、なんでもご相談ください。</p>
						<a href="/reform/" class="wk-flowBox__button u-text-wh u-dn u-dib-md">三井のリフォーム</a>
					</div>
					<div class="wk-flowBox__label wk-flowBox__label--small u-text-center u-dn u-db-md">
						<p class="u-text-bold">リフォーム<span class="u-text-uppercase">Reform</span></p>
					</div>
				</div>
				<a href="/reform/" class="wk-flowBox__button u-text-wh u-dn-md">三井のリフォーム</a>
				<div class="wk-memberBox--sp wk-memberBox--sp--07 u-dn-md">
					<img src="assets/images/step07-sp.png" alt="営業：松枝 克弥,新津 美里、設計：山本 恭兵、施工：小金沢 豊,渡邊 慶司,坂井 飛鳥" usemap="#image-map07">
					<!-- <map name="image-map07">
						<area target="" alt="" title="" href="/about/staff/matsueda.php" coords="70,166,0,0" shape="rect">
						<area target="" alt="" title="" href="/about/staff/niitsu.php" coords="94,1,157,166" shape="rect">
						<area target="" alt="" title="" href="/about/staff/yamamoto.php" coords="185,67,234,233" shape="rect">
						<area target="" alt="" title="" href="/about/staff/koganezawa.php" coords="265,152,332,319" shape="rect">
						<area target="" alt="" title="" href="/about/staff/watanabe.php" coords="359,229,413,391" shape="rect">
						<area target="" alt="" title="" href="/about/staff/sakai.php" coords="453,314,517,477" shape="rect">
					</map> -->
				</div><!-- //.wk-memberBox--sp -->
			</li><!-- //.wk-flowBox -->
		</ul><!-- //.wk-flowBox__wrapper -->
	</div>


	<?php include ("{$_SERVER['DOCUMENT_ROOT']}/about/member-list.php"); ?>

<?php /* ?>
		<div class="section-contact py-7 py-lg-9 bg-gray03">
			<div class="container container-sm">
				<div class="mt-5">
					<?php echo $contactbtn; ?>
				</div>
			</div>
		</div>
<?php */ ?>

</main>


<!-- include footer -->
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/footer.php"); ?>

<!-- include scripts -->
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/template/script.php"); ?>


</div>

<script>
	$(".modalsrc").modaal();
</script>

<script>
$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
});
</script>


</body>
</html>
