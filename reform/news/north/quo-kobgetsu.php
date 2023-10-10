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
$entry_title = "【部位別デザインリフォーム】初めてのリフォームでも安心、お住まいのお悩みごとにお応えします";

//フォーム処理
$event_name = "【部位別デザインリフォーム】初めてのリフォームでも安心、お住まいのお悩みごとにお応えします";//元のURL
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
			<strong>【部位別デザインリフォーム】初めてのリフォームでも安心、お住まいのお悩みごとにお応えします</strong>
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
								<span class="label label-outline-dark">本社</span>
							</p>							
							<p class="date">2020.12.17</p>
						</div>
						<h1 class="title">
						
						<?php if(is_new ('20201217')) { ?>
							<span class="status">
								<i class="icon-new"></i>
							</span>
						<?php } ?>
						
						
						<?php if(is_new ('20201217')) { ?>
							<span class="entrytitle statusAv">
						<?php } ?>
						
						【部位別デザインリフォーム】初めてのリフォームでも安心、お住まいのお悩みごとにお応えします</span>
						</h1>						
						
						<div class="entry">
							<p><img alt="kobetsureform_0714_01.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_01.jpg" width="1001" height="413" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>「三井のリフォーム」の部位別デザインリフォームは<br />住み継ぐためのリフォームです。</strong></span></p>
<p></p>
<p style="text-align: center;">三井ホームのハウジングパートナーである甲信アルプスホームは、「部位別デザインリフォーム」をご提案しております。一般的なリプレイスだけのリフォームとは違い、部位であっても将来を見据えての提案型リフォーム。築年数を経れば、都度リフォームする部位も出てきます。経験豊富なスタッフがお客様のこだわりを実現するリフォームを提案いたします。</p>
<p></p>
<p><img alt="kobetsureform_0714_02.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_02.jpg" width="700" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><br /><br /></p>
<p></p>
<p><img alt="LP_reform_kobetsu_202005_05.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_kobetsu_202005_05.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>システムキッチン工事</strong></span></p>
<p style="text-align: center;"><strong><span style="color: #ff0000;">洗練されたデザインと豊富なカラーバリエーションのシステムキッチンをラインアップ。</span>省エネ性能も向上し、お手入れも簡単です。対面型、アイランド型等、ライフスタイルに応じたキッチンレイアウトに対応可能です。</strong></p>
<p></p>
<p style="text-align: center;"><strong><img alt="kobetsureform_0714_03.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_03.jpg" width="489" height="311" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><br /><br /></strong></p>
<p></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>洗面化粧台・トイレ・浴室工事</strong></span></p>
<p style="text-align: center;"><strong>清潔感あふれる洗面化粧台で、すがすがしい朝を。家族が多いご家庭にはツーボウルタイプがお勧めです。<span style="color: #ff0000;">最新の洗浄機能付き便器は、お手入れがしやすく、家計と地球環境にやさしい節水型です。</span>くつろぎの空間である浴室は、いつでも快適で清潔なユニットバスに。</strong></p>
<p></p>
<p><strong><img alt="kobetsureform_0714_04.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_04.jpg" width="489" height="311" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></strong></p>
<p><br /><br /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>サッシ・ガラス・玄関ドア交換工事</strong></span></p>
<p style="text-align: center;"><strong>住まいの断熱性を向上して、快適に暮らすためには、開口部（玄関、窓）の性能向上が必要です。窓をリフォームして、エコロジーなライフスタイルを。<span style="color: #ff0000;">玄関ドアは住まいの顔です。美観維持と耐久性維持のために定期的なメンテナンスを行いましょう。</span></strong></p>
<p></p>
<p><img alt="kobetsureform_0714_05.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_05.jpg" width="848" height="378" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><br /><br /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>内装リフォーム</strong></span></p>
<p style="text-align: center;"><span style="color: #000000;"><strong>床・壁・天井等の内装材は、インテリアのイメージを決める大切な要素です。素材、デザイン、カラーに加え、ノンホルムアルデヒド、調湿機能等、<span style="color: #ff0000;">お客様の求める内装材でインテリアイメージを一新します。</span></strong></span></p>
<p></p>
<p style="text-align: center;"><strong><img alt="LP_reform_kobetsu_202005_04.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_kobetsu_202005_04.jpg" width="489" height="299" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></strong></p>
<p style="text-align: center;"></p>
<p><br /><br /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>その他、数々の個別リフォームについてご相談いただけます。 <br /><span style="color: #ff0000;">ご相談・お見積りは無料、</span>まずはこちらからお気軽にご相談ください。</strong></span></p>
<p><br /><br /></p>
<p style="text-align: center;"><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=%E3%80%90%E9%83%A8%E4%BD%8D%E5%88%A5%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%80%91%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AE%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%A7%E3%82%82%E5%AE%89%E5%BF%83%E3%80%81%E3%81%8A%E4%BD%8F%E3%81%84%E3%81%AE%E3%81%8A%E6%82%A9%E3%81%BF%E3%81%94%E3%81%A8%E3%81%AB%E3%81%8A%E5%BF%9C%E3%81%88%E3%81%97%E3%81%BE%E3%81%99&office=11&_gl=1*105ihik*_gcl_aw*R0NMLjE1OTIzNTk3MDQuQ2p3S0NBancyNkgzQlJCMkVpd0F5MzJ6aFdZbFV3WVpvSTBOeWxXU29rVEF3MUtLXzhXbWVTMWJlWXlUYWs3QjJPNG9OOTV4SjU1T2N4b0NlaFlRQXZEX0J3RQ.." onclick="gtag('event', 'click', {'event_category': 'quo_reform','event_label': 'kobetsu'});" target="_blank"><img alt="LP_reform_202005_ctr.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_ctr.jpg" width="500" class="mt-image-none" style="display: block; margin-left: auto; margin-right: auto;" /></a></p>
<p><br /><br /></p>
<p style="text-align: center;"><img alt="kobetsureform_0714_06.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_06.jpg" width="250" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center;"><strong> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/south/day.php" onclick="gtag('event', 'click', {'event_category': 'campaign','event_label': '1day'});" target="_blank"><img alt="ctr_1day.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/ctr_1day.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/north/post-2.php" onclick="gtag('event', 'click', {'event_category': 'campaign','event_label': 'mizumawari'});" target="_blank"><img alt="ctr_4ten.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/ctr_4ten.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/north/post-3.php" onclick="gtag('event', 'click', {'event_category': 'campaign','event_label': 'gaisou'});" target="_blank"><img alt="ctr_puck.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/ctr_puck.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></strong></p>
<p><br /><br /></p>
<p><img alt="LP_reform_202005_17.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_17.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p style="text-align: left;"><span style="font-size: 20px; color: #ff9f0f;"><strong>Q.水まわりの位置は変更できる？</strong></span></p>
<p style="text-align: left;"><strong style="color: #0093b8; font-size: 20px;">A.変更できます！</strong></p>
<p style="text-align: left;">水まわりの位置も変更できます。移動可能範囲は限定される場合もございますので、詳しくは当社のプロジェクトマネジャーにご相談下さい。</p>
<p style="text-align: left;"><img alt="LP_reform_202005_20.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_20.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: left;"><span style="font-size: 20px; color: #ff9f0f;"><strong>Q.外観のイメージを一新したい。</strong></span></p>
<p style="text-align: left;"><strong style="color: #0093b8; font-size: 20px;">A.一新できます！</strong></p>
<p style="text-align: left;">外壁の色を変えるだけでも全く違うイメージの色になります。また、屋根や外壁の塗装は10年程度で更新する必要がございますので、それを機に一新してみてはいかがでしょうか？</p>
<p style="text-align: left;"></p>
<p style="text-align: left;"><img alt="LP_reform_202005_20.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_20.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p style="text-align: left;"><span style="font-size: 20px; color: #ff9f0f;"><strong>Q.システムキッチンやユニットバスなどは自由にメーカーを選べるの？</strong></span></p>
<p style="text-align: left;"><strong style="color: #0093b8; font-size: 20px;">A.基本的に取扱いメーカーの限定はありません。</strong></p>
<p style="text-align: left;">「ショールームで気に入った設備機器がある」、「デザインが美しい輸入品の水栓金具を使いたい」といったご要望にきめ細かく対応しています。 但し、品質維持、保障が難しい製品は取扱いできない場合があります。</p>
<p style="text-align: left;"><img alt="LP_reform_202005_20.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_20.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p style="text-align: left;"><span style="font-size: 20px; color: #ff9f0f;"><strong>Q.相談や見積は無料でできる？</strong></span></p>
<p style="text-align: left;"><strong style="color: #0093b8; font-size: 20px;">A.ご相談、企画設計と概算のお見積までは一切費用はかかりません。</strong></p>
<p style="text-align: left;">ご相談、企画設計と概算のお見積までは一切費用はかかりません。たくさんご要望をお聞きいたしますので、夢を膨らませておいてください。</p>
<p><br /><br /></p>
<p style="text-align: center;"><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=%E3%80%90%E9%83%A8%E4%BD%8D%E5%88%A5%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%80%91%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AE%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%A7%E3%82%82%E5%AE%89%E5%BF%83%E3%80%81%E3%81%8A%E4%BD%8F%E3%81%84%E3%81%AE%E3%81%8A%E6%82%A9%E3%81%BF%E3%81%94%E3%81%A8%E3%81%AB%E3%81%8A%E5%BF%9C%E3%81%88%E3%81%97%E3%81%BE%E3%81%99&office=11&_gl=1*105ihik*_gcl_aw*R0NMLjE1OTIzNTk3MDQuQ2p3S0NBancyNkgzQlJCMkVpd0F5MzJ6aFdZbFV3WVpvSTBOeWxXU29rVEF3MUtLXzhXbWVTMWJlWXlUYWs3QjJPNG9OOTV4SjU1T2N4b0NlaFlRQXZEX0J3RQ.." onclick="gtag('event', 'click', {'event_category': 'quo_reform','event_label': 'kobetsu'});" target="_blank"><img alt="LP_reform_202005_ctr.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_ctr.jpg" width="500" class="mt-image-none" style="display: block; margin-left: auto; margin-right: auto;" /></a></p>
<p></p>
<p><br /><br /></p>
<p></p>
<p><img alt="LP_reform_202005_03.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_12.jpg" width="500" class="mt-image-center" style="display: block; margin-left: auto; margin-right: auto;" /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>実績豊富な三井のリフォーム</strong></span></p>
<p style="text-align: center;"><strong>100人100様のライフスタイルに合わせ、<span style="color: #ff0000;">高い次元で暮らしをご提案する「三井のリフォーム」</span>。様々なノウハウを動員して、お客様の想いをカタチにします。</strong></p>
<p></p>
<p><strong><img alt="LP_reform_202005_13.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_13.jpg" width="500" class="mt-image-none" style="display: block; margin-left: auto; margin-right: auto;" /></strong></p>
<p><br /><br /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>確かな技術と細やかなご提案「リフォームプランナー®」</strong></span></p>
<p></p>
<p style="text-align: center;"><strong><span style="color: #ff0000;">設計担当の「リフォームプランナー®」は業界初の"設計の専門職</span>"として1986年に組織化して以来、全国で約150名、長野県山梨県で約10名の女性建築士が活躍しております。</strong></p>
<p></p>
<p style="text-align: center;"><span style="font-size: 15px;">※「リフォームプランナー®」と呼べるのは「三井のリフォーム」だけ。全国に約155名の「リフォームプランナー®」が在籍しています。 <br />※「リフォームプランナー」は三井不動産グループの登録商標です。第4439726号 </span></p>
<p></p>
<p><strong><img alt="LP_reform_202005_14.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_15.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></strong></p>
<p><br /><br /></p>
<p style="text-align: center;"><span style="font-size: 24px;"><strong>様々な工法に精通し、幅広いオーダーに対応</strong></span></p>
<p></p>
<p style="text-align: center;"><strong>さまざまな工法に精通した「三井のリフォーム」は構造躯体の特徴をしっかりと踏まえたうえで、<span style="color: #ff0000;">大規模な全面工事から、部分的な改装まで最適なリフォームをご提案</span>いたします。</strong></p>
<p></p>
<p><strong><img alt="LP_reform_202005_16.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_16.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><br /></strong></p>
<p><br /><br /></p>
<p style="text-align: center;"><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=%E3%80%90%E9%83%A8%E4%BD%8D%E5%88%A5%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%80%91%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AE%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%A7%E3%82%82%E5%AE%89%E5%BF%83%E3%80%81%E3%81%8A%E4%BD%8F%E3%81%84%E3%81%AE%E3%81%8A%E6%82%A9%E3%81%BF%E3%81%94%E3%81%A8%E3%81%AB%E3%81%8A%E5%BF%9C%E3%81%88%E3%81%97%E3%81%BE%E3%81%99&office=11&_gl=1*105ihik*_gcl_aw*R0NMLjE1OTIzNTk3MDQuQ2p3S0NBancyNkgzQlJCMkVpd0F5MzJ6aFdZbFV3WVpvSTBOeWxXU29rVEF3MUtLXzhXbWVTMWJlWXlUYWs3QjJPNG9OOTV4SjU1T2N4b0NlaFlRQXZEX0J3RQ.." onclick="gtag('event', 'click', {'event_category': 'quo_reform','event_label': 'kobetsu'});" target="_blank"><img alt="LP_reform_202005_ctr.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_ctr.jpg" width="500" class="mt-image-none" style="display: block; margin-left: auto; margin-right: auto;" /></a></p>
<p><br /><br /></p>
<p style="text-align: left;"><strong><span style="font-size: 14px;"><img alt="LP_reform_202005_19.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_19.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><br /></span></strong></p>
<p></p>
<p><span style="font-size: 20px;"><strong>家族の数だけそれぞれの暮らしがあります。</strong></span><span style="font-size: 20px;"><strong>私達はライフスタイルに合わせた住まいを通じて、</strong></span><span style="font-size: 20px;"><strong>家族の楽しい時間をご提案いたします。</strong></span></p>
<p></p>
<p><strong><span style="color: #ff0000; font-size: 20px;">ご相談は無料、まずはお気軽にWEBサイトからご相談ください。 </span></strong> <strong><span style="color: #ff0000; font-size: 20px;">今ならWEBからのご相談でQUOカードをプレゼント！ 私達とこれからの暮らしを考えましょう！</span></strong></p>
<p><br /><br /></p>
<p style="text-align: center;"><a href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=%E3%80%90%E9%83%A8%E4%BD%8D%E5%88%A5%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%80%91%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AE%E3%83%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0%E3%81%A7%E3%82%82%E5%AE%89%E5%BF%83%E3%80%81%E3%81%8A%E4%BD%8F%E3%81%84%E3%81%AE%E3%81%8A%E6%82%A9%E3%81%BF%E3%81%94%E3%81%A8%E3%81%AB%E3%81%8A%E5%BF%9C%E3%81%88%E3%81%97%E3%81%BE%E3%81%99&office=11&_gl=1*105ihik*_gcl_aw*R0NMLjE1OTIzNTk3MDQuQ2p3S0NBancyNkgzQlJCMkVpd0F5MzJ6aFdZbFV3WVpvSTBOeWxXU29rVEF3MUtLXzhXbWVTMWJlWXlUYWs3QjJPNG9OOTV4SjU1T2N4b0NlaFlRQXZEX0J3RQ.." onclick="gtag('event', 'click', {'event_category': 'quo_reform','event_label': 'kobetsu'});" target="_blank"><img alt="LP_reform_202005_ctr.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/LP_reform_202005_ctr.jpg" width="500" class="mt-image-none" style="display: block; margin-left: auto; margin-right: auto;" /></a></p>
<p><br /><br /></p>
<p style="text-align: center;"><img alt="kobetsureform_0714_06.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/kobetsureform_0714_06.jpg" width="250" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center;"><strong> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/south/day.php" onclick="gtag('event', 'click', {'event_category': 'campaign','event_label': '1day'});" target="_blank"><img alt="ctr_1day.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/ctr_1day.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/north/post-2.php" onclick="gtag('event', 'click', {'event_category': 'campaign','event_label': 'mizumawari'});" target="_blank"><img alt="ctr_4ten.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/ctr_4ten.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/north/post-3.php" onclick="gtag('event', 'click', {'event_category': 'campaign','event_label': 'gaisou'});" target="_blank"><img alt="ctr_puck.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/images/ctr_puck.jpg" width="500" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></strong></p>
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

