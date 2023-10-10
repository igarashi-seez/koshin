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
$entry_title = "【こだわりのデザインリフォーム】お客様のライフステージに合わせたお住まいをご提案";

//フォーム処理
$event_name = "【こだわりのデザインリフォーム】お客様のライフステージに合わせたお住まいをご提案";//元のURL
$name_result = (mb_convert_encoding($event_name, 'UTF-8', 'auto'));//UTFにしてからurlエンコード
?>  

<!DOCTYPE html>
<html lang="ja">

<head>
<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
<link rel="stylesheet" href="/reform/news/style.css?v=202305" media="screen">
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
			<strong>【こだわりのデザインリフォーム】お客様のライフステージに合わせたお住まいをご提案</strong>
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
						【こだわりのデザインリフォーム】お客様のライフステージに合わせたお住まいをご提案</span>
						</h1>

<?php $event_send = "11"; ?>
<p class="entry-image"><img alt="2021土地建物相談会-メイン.jpg" src="https://www.mitsuihome-ksa.co.jp/news/images/20230422-1.png" width="1000" height="734"></p>
<p class="mail"><a class="btn btn-red btn-xxl mx-auto" href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=<?php echo($name_result) ?>&office=<?php echo($event_send) ?>" target="_blank"<?php echo($cv_eve_ksa_pc) ?>>メールでのお問い合わせ・お申込み</a></p>

            <div class="entry my-6 my-md-8">

              <h4>イベント概要のタイトルが入ります。テキストは自由入力です。</h4>
              <p>キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。</p>
              <p>以下仮テキスト一例<br>
              Product<br>
              【商品】グラヴィス　ベルサ<br>
              【面積】142.50㎡（43.10坪）<br>
              【間取】4LDK</p>
              <p>Point<br>
              ◆タイル貼りにした大空間のLDKにピットリビング対応<br>
              ◆リビング横に書斎<br>
              ◆洗面所の横に在宅ワークコーナー</p>
              <p>≪完全予約制≫<br>
              事前にWEBからの来場予約をいただけますと<br>
              ご指定の時間でご案内いたします。<br>
              事前予約をぜひご利用くださいませ。</p>
              <p>開催日時<br>
              2023/02/11(土) ～ 2023/02/12(日)   10：00～16：30<br>
              ※完全予約制<br>
              (1)10:00～11:00、(2)11:00～12:00、(3)13:30～14:30、(4)14:30～15:30、(5)15:30～16:30　(雨天開催)</p>
              <p>会場<br>
              神奈川県横浜市青葉区あざみ野南会場<br>
              カーナビをご利用の方は下記のMAPコードをご利用ください。<br>
              2 501 870*32<br>
              ※「マップコード」および「MAPCODE」は(株)デンソーの登録商標です。</p>
              <p>ご注意<br>
              完全予約制となります。<br>
              見学ご希望のお客様はお電話またはWEB予約をお願い致します。</p>
              <p>お知らせ<br>
              各イベントでは、各会場の感染予防対策を徹底の上、実施させていただきます。お客様には、マスクの着用をお願いするとともに、ご来場が重なった場合にはご見学時間を調整させていただく場合がございます。また、予定会場が変更になる場合もございますので、会場HPにてご確認いただきますようお願い申し上げます。ご不便をお掛けして申し訳ございませんが、何卒よろしくお願い申し上げます。</p>

              <p>※テキストは自由入力です。</p>

            </div>

            <div class="entry-row">
              <div class="entry-row__item  entry-row__item--01">
                <img src="https://dummyimage.com/528x330/000/fff" width="528" height="330" alt="">
              </div>
              <div class="entry-row__item  entry-row__item--02">
                <h4>画像見出しが入ります。テキストは自由入力です。</h4>
                <p>キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。</p>
              </div>
            <!-- /.entry-row --></div>

            <div class="entry-row">
              <div class="entry-row__item  entry-row__item--01">
                <img src="https://dummyimage.com/528x330/000/fff" width="528" height="330" alt="">
              </div>
              <div class="entry-row__item  entry-row__item--02">
                <h4>画像見出しが入ります。テキストは自由入力です。</h4>
                <p>キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。</p>
              </div>
            <!-- /.entry-row --></div>

            <div class="entry-row">
              <div class="entry-row__item  entry-row__item--01">
                <img src="https://dummyimage.com/528x330/000/fff" width="528" height="330" alt="">
              </div>
              <div class="entry-row__item  entry-row__item--02">
                <h4>画像見出しが入ります。テキストは自由入力です。</h4>
                <p>キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。キャプションが入ります。このテキストはダミーです。</p>
              </div>
            <!-- /.entry-row --></div>

            <div class="entry-contact">
              <h4>お申し込み・お問い合わせ</h4>
              <p>【甲信アルプスホーム本社】<br>〒390-0847長野県松本市笹部1-3-6　0263-28-3131</p>
              <p>担当：〇〇</p>
              <p>テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。</p>
            <!-- /.entry-contact --></div>

						<p class="mail"><a class="btn btn-red btn-xxl mx-auto" href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=<?php echo($name_result) ?>&office=<?php echo($event_send) ?>" target="_blank"<?php echo($cv_eve_ksa_pc) ?>>メールでのお問い合わせ・お申込み</a></p>

            <div class="entry-map">
              <h4>アクセス</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.8206182661243!2d137.9482274152735!3d36.219554780072365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d0e42bf06b313%3A0x5d0670bea00dc2a5!2z44CSMzkwLTA4NDcg6ZW36YeO55yM5p2-5pys5biC56y56YOo77yR5LiB55uu77yT4oiS77yWIOeUsuS_oeOCouODq-ODl-OCueODm-ODvOODoA!5e0!3m2!1sja!2sjp!4v1685449165329!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- /.entry-map --></div>

            <div class="entry-access">
              <h4>アクセス図</h4>
              <img src="https://dummyimage.com/600x712/000/fff" width="600" height="712" alt="">
            <!-- /.entry-access --></div>


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

