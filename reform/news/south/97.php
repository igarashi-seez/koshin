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
$entry_title = "【2/19】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします";

//フォーム処理
$event_name = "【2/19】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします";//元のURL
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
			<strong>【2/19】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします</strong>
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
											
								現場ブログ</span>
								<span class="label label-outline-dark">リフォーム松本店</span>
							</p>							
							<p class="date">2021.02.19</p>
						</div>
						<h1 class="title">
						
						<?php if(is_new ('20210219')) { ?>
							<span class="status">
								<i class="icon-new"></i>
							</span>
						<?php } ?>
						
						
						<?php if(is_new ('20210219')) { ?>
							<span class="entrytitle statusAv">
						<?php } ?>
						
						【2/19】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします</span>
						</h1>						
						
						<div class="entry">
							<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">現在、松本市蟻ケ崎台にて計画中の<strong>「愛犬家住宅リフォーム」</strong>。<br />三井ホームでご建築頂いた築35年の建物のリフォーム工事が進行中です。<br />※通期ご見学頂ける「愛犬家住宅」として、2021年9月オープンを予定しております※</p>
<p><img alt="愛犬家before_1.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E6%84%9B%E7%8A%AC%E5%AE%B6before_1-thumb-700xauto-1167.png" width="700" height="310" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><img alt="愛犬家afer700.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/%E6%84%9B%E7%8A%AC%E5%AE%B6afer700-thumb-700xauto-1190.png" width="700" height="365" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p></p>
<p></p>
<p><img alt="そもそも4.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E3%81%9D%E3%82%82%E3%81%9D%E3%82%824-thumb-400xauto-1142.png" width="400" height="130" class="mt-image-center" style="text-align: center; display: block; margin: 60px auto 40px;" /></p>
<p style="text-align: center; font-family: sans-serif; padding: 10px; line-height: 2.0;">愛犬家住宅とは、その名のとおり「愛犬のための住宅」。<br />「ペットと安心・安全・快適に暮らす住まい」をコンセプトに考えられた住まいです。</p>
<p><img alt="aikennkalogo.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/aikennkalogo-thumb-600xauto-1125.png" width="600" height="112" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><img alt="アセット 5.png" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%205-thumb-200x34-2854.png" width="80" height="13.6" class="mt-image-center" style="text-align: center; display: block; margin: 60px auto 60px;" /></p>
<p><img alt="愛犬家ポイント見出し_2.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%9D%E3%82%A4%E3%83%B3%E3%83%88%E8%A6%8B%E5%87%BA%E3%81%97_2-thumb-600xauto-1172.png" width="600" height="87" class="mt-image-center" style="text-align: center; display: block; margin: 40px auto 40px;" /></p>
<p><img alt="愛犬家ドッグラン_1.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%89%E3%83%83%E3%82%B0%E3%83%A9%E3%83%B3_1-thumb-900xauto-1155.png" width="900" height="220" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><img alt="愛犬家ドッグスペース_1.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%89%E3%83%83%E3%82%B0%E3%82%B9%E3%83%9A%E3%83%BC%E3%82%B9_1-thumb-900xauto-1157.png" width="900" height="238" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><img alt="愛犬家バルコニー_1.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%90%E3%83%AB%E3%82%B3%E3%83%8B%E3%83%BC_1-thumb-900xauto-1159.png" width="900" height="244" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><img alt="愛犬家エコカラット_1.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%82%A8%E3%82%B3%E3%82%AB%E3%83%A9%E3%83%83%E3%83%88_1-thumb-900xauto-1161.png" width="900" height="211" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><br /><br /></p>
<p style="font-family: sans-serif; text-align: center;"><span style="text-decoration: underline;"><a href="#monpi">【第１回】門扉解体工事</a> </span>　　<span style="text-decoration: underline;"><a href="#kaitai">【第２回】2階解体工事</a></span>　　<span style="text-decoration: underline;"><a href="#madosassi">【第３回】2階窓サッシ</a></span>　<span style="text-decoration: underline;"><a href="#icynene">【第4回】天井断熱</a></span>　<span></span><span><a href="#smartbreeze">【第5回】全館空調</a></span></p>
<hr />
<p style="text-align: center; padding: 20px;">【2月18日更新】</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">毎日寒いですが、いかがお過ごしでしょうか。<br />今回は愛犬家住宅のポイントの一つ、「敷地内ドッグラン」の様子をお届けします！</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">その前に、現場には最近、ご近所向けの告知看板が設置されました。</p>
<p><img alt="◎DSC_0098.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0098-thumb-640xauto-1308.jpg" width="640" height="427" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="font-family: sans-serif; text-align: center;">道を挟んだ向かいから見てもハッキリわかる、大きな看板です</p>
<p><img alt="◎DSC_0099-1.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0099-1-thumb-640xauto-1306.jpg" width="640" height="427" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="font-family: sans-serif; text-align: center;">ご見学のご相談など、いつでもお気軽にお問い合わせください！</p>
<p style="font-family: sans-serif; text-align: center;">・ ・ ・ ・</p>
<p style="font-family: sans-serif; text-align: center;">そんな看板の裏を抜けた敷地の奥にドッグランがあるそうです。<br />早速突撃！</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0101-2.jpg"><img alt="◎DSC_0101-2.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0101-2-thumb-640xauto-1317.jpg" width="499" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="font-family: sans-serif; text-align: center;">...なにかふわふわしたものが...？</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0088-1.JPG"><img alt="◎DSC_0088-1.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0088-1-thumb-640xauto-1314.jpg" width="499" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="font-family: sans-serif; text-align: center;"><strong>いる！！！！</strong><br /> こちらは弊社スタッフの愛犬、バロンくん。今回の撮影のために来てくれました。</p>
<table border="0">
<tbody>
<tr>
<td><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0105.JPG"><img alt="◎DSC_0105.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0105-thumb-500xauto-1323.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0108-1.jpg"><img alt="◎DSC_0108-1.jpg" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0108-1-thumb-500xauto-1321.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0120.JPG"><img alt="◎DSC_0120.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0120-thumb-500xauto-1325.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<p style="font-family: sans-serif; text-align: center;">こちらがドッグラン全景です。敷地面積はおよそ138.6㎡(約41.9坪)、大型のわんちゃんでものびのび遊んで頂ける広さがあります。<br />足元は足腰の負担を軽減し、メンテナンスも比較的簡単な人工芝を採用しています。</p>
<p style="font-family: sans-serif; text-align: center;">真ん中の樹木は、以前のお住まいの頃よりあったものをそのまま引き継ぎ、シンボルツリーとして再利用しました。<br />サクラの木だそうです。春になって花が咲くのが楽しみですね。</p>
<p style="font-family: sans-serif; text-align: center; padding: 20px;">・ ・ ・ ・</p>
<p style="font-family: sans-serif; text-align: center;">住宅完成はまだ先ですが、敷地内ドッグランを一般のお客様向けに一足早くプレオープンの予定です!<br />詳細は改めてお知らせいたします。<br /><br />最後に、今日は広いドッグランで少しだけ寂しそうだったバロン君で締めさせて頂きます。お客さん来たら一緒に遊べるといいね。</p>
<table border="0">
<tbody>
<tr>
<td><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0073-2.JPG"><img alt="◎DSC_0073-2.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0073-2-thumb-400xauto-1330.jpg" width="400" height="267" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0049.JPG"><img alt="◎DSC_0049.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0049-thumb-400xauto-1332.jpg" width="400" height="267" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/%E2%97%8EDSC_0119.JPG"><img alt="◎DSC_0119.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/%E2%97%8EDSC_0119-thumb-400xauto-1337.jpg" width="400" height="267" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<p id="smartbreeze" style="font-family: sans-serif; text-align: center;">【次回予告】<br />バルコニー工事、着々と進行中です！！！</p>
<p style="font-family: sans-serif; text-align: center;"><a href="https://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0132.JPG"><img alt="DSC_0132.JPG" src="https://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2021/02/DSC_0132-thumb-400xauto-1340.jpg" width="400" height="267" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<hr />
<p style="text-align: center; padding: 20px;">【1月18日更新】</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">あけましておめでとうございます。<br />2021年も三井ホーム・三井のリフォームを宜しくお願い致します。</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;"><br />さて本日は、前回までの断熱の様子とは違う、空調工事の様子をお伝えします。</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/news/images/IMG_0770.JPG"><img alt="IMG_0770.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2021/01/IMG_0770-thumb-800xauto-1250.jpg" width="640" height="480" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">おっ...？？<br />空調の...工事...？</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/news/images/IMG_0774.JPG"><img alt="IMG_0774.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2021/01/IMG_0774-thumb-640xauto-1258.jpg" width="640" height="480" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">これが何だかわかりますでしょうか。<br />空調といっても、本工事で採用する空調システムは"全館空調"。<br />写真上部に見えているグレーは、全館空調で運ばれる空気のダクトです。</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;"><a href="https://www.mitsuihome-ksa.co.jp/news/images/%E3%82%B9%E3%83%9E%E3%83%96%E3%83%AA%E3%83%AD%E3%82%B4.jpg"><img alt="スマブリロゴ.jpg" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2021/01/%E3%82%B9%E3%83%9E%E3%83%96%E3%83%AA%E3%83%AD%E3%82%B4-thumb-autox379-1256.jpg" width="175" height="190" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">三井ホームのオリジナル全館空調"スマートブリーズ"はその名のとおり、1台で家じゅう全てをまかなう空調システムです。<br />冷房・暖房・換気・空調・空気清浄・除湿・加湿の7役を兼ね備え、24時間365日、家の中を快適な空気環境に保ちます。<br /> ※商品によって機能に違いがあります<br /><br /></p>
<p><img alt="AdobeStock_219922748.jpeg" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2021/01/AdobeStock_219922748-thumb-500xauto-1260.jpeg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">夏は比較的涼しい長野県ですが、ペットにとって、長野県といえども夏の暑さは大敵。<br />日中は家でお留守番することも多いペットのために、温度を一定に保つ全館空調はおすすめです。</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/news/images/%E5%85%A8%E9%A4%A8%E7%A9%BA%E8%AA%BF%E6%96%AD%E9%9D%A2.jpg"><img alt="全館空調断面.jpg" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2021/01/%E5%85%A8%E9%A4%A8%E7%A9%BA%E8%AA%BF%E6%96%AD%E9%9D%A2-thumb-600xauto-1254.jpg" width="600" height="452" class="mt-image-center" style="text-align: center; display: block; padding: 20px; margin: 20px auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif; padding: 15px;">全館空調や三井ホームの空気性能について、詳しくは<span style="text-decoration: underline;"><a href="https://www.mitsuihome-ksa.co.jp/technology/air-conditioning/">こちら</a></span>をご覧ください</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">とても快適な全館空調ですが、この機能が最大限に発揮できるのも前述の窓・天井の工事による"断熱性能"あってのもの。<br />高気密・高断熱で快適な空気を逃さず循環させることで、エネルギーロスを最小限に抑えます。<br /> 部屋ごとの温度変化も少ないことから、ヒートショックのリスクも軽減。季節や時間帯による温度変化の影響をほとんど受けない、<br />健康・快適にお過ごし頂ける住まいを目指します。</p>
<p id="icynene" style="text-align: center; font-family: sans-serif; line-height: 2.0; padding: 20px;">少しづつですが、"愛犬家住宅"のこだわりをお伝え出来る工事が始まってきました。<br />次回は家の中を飛び出し、屋外のドッグラン工事の様子をお届けする予定です。</p>
<hr />
<p style="text-align: center; padding: 20px;">【12月11日更新】</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">本日は天井断熱工事の様子をお知らせします。<br />断熱材「アイシネン」が一面に吹き付けられました。<br /> （※アイシネンとは、環境先進国カナダで生まれた軽量水発泡断熱材。<br />原料にフロン系材料を含まないため環境にやさしく、わずかな隙間にもくまなく充填できるのでリフォームに最適です。）</p>
<p><img alt="愛犬家　天井断熱2.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%80%80%E5%A4%A9%E4%BA%95%E6%96%AD%E7%86%B12-thumb-700xauto-1197.png" width="700" height="232" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><img alt="愛犬家 天井断熱.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/%E6%84%9B%E7%8A%AC%E5%AE%B6%20%E5%A4%A9%E4%BA%95%E6%96%AD%E7%86%B1-thumb-700xauto-1195.png" width="700" height="232" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif;">今までの木造枠組みを見慣れた私には天井が迫ってくるかのような大迫力です。<br />可能な限り近寄ってみます。</p>
<p><img alt="DSC_0106.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/DSC_0106-thumb-700xauto-1201.jpg" width="700" height="467" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif;">「これ、触ってみてもいいですか？」と聞いたらOKとのことでしたので。</p>
<p><img alt="DSC_0126.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/DSC_0126-thumb-500xauto-1199.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">見た目はソフトクリームみたいですが、触った感じは弾力の強い発泡スチロールのような感じ。<br />いかにも保温と断熱をしてくれそうな触感です。<br />これを天井一面に、隙間なく充填します。<br /> ちなみに、きめ細かく充填されることで建物から伝わる音を減衰させ、外部からの騒音や室内の音も通りにくくなります。</p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">・・・<br />ところで、お気づきでしょうか。<br />アイシネンが吹き付けられているのは、天井裏ではなく小屋裏！</p>
<p><img alt="小屋裏断熱.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/%E5%B0%8F%E5%B1%8B%E8%A3%8F%E6%96%AD%E7%86%B1-thumb-500xauto-1205.png" width="500" height="332" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /><a href="https://www.mitsuihome-ksa.co.jp/news/images/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%2038.png"><br /></a></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0;">以前もお知らせした通り、本リフォーム工事では、これまでに天井裏にあった断熱材を取り外し、小屋裏へ断熱のやり直しを行いました。<br /> 一般的な天井断熱では小屋裏に熱がこもりやすく、夜になって小屋裏からのふく写熱が室内におりてくるもの。<br /> 屋根で断熱し、日射熱を和らげることで、季節昼夜問わず快適な環境を目指します。</p>
<p id="madosassi" style="text-align: center; font-family: sans-serif; line-height: 2.0;">今日はここまで。<br />先日松本でも降雪がありましたが、来週からは本格的な寒さが始まるようです。<br />時節柄、お身体ご自愛くださいませ。</p>
<hr />
<p style="text-align: center; padding: 20px;">【11月27日更新】</p>
<p style="text-align: center; font-family: sans-serif;">少しづつ寒さを感じるようになってきましたが、いかがお過ごしでしょうか。</p>
<p style="text-align: center; font-family: sans-serif;">蟻ケ崎台の現場では現在2階窓サッシの工事が完了しました。<br />現場では足場が立ち、工事のためににシートがかけられ、建物の全体像がわからなくなっています。</p>
<p><img alt="DSC_0137.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0137-thumb-500xauto-1097.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif;">足場の隙間からちらっと覗くと、外壁のサイディングが剥がされていました。<br />ここでも雨漏りによる腐食・カビは見受けられず、きれいな状態が見てとれます。</p>
<p><img alt="DSC_0047-1.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0047-1-thumb-500xauto-1099.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif; padding: 10px;">なかなか見られない景色です</p>
<p style="text-align: center; font-family: sans-serif;">ふと脇を見ると、既存住宅に入っていた窓がこんなところに...！</p>
<p><img alt="DSC_0138.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0138-thumb-500xauto-1095.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; font-family: sans-serif;">これは期待が高まります。</p>
<p style="text-align: center; padding: 20px; font-family: sans-serif;">並べてみると一目瞭然！</p>
<table border="0">
<tbody>
<tr>
<td><img alt="DSC_0057.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0057-thumb-500xauto-2978.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="2F洋室1017.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/2F%E6%B4%8B%E5%AE%A41017-thumb-500xauto-3029.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="DSC_0062.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0062-thumb-500xauto-1113.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
</tr>
</tbody>
</table>
<table border="0">
<tbody>
<tr>
<td><img alt="DSC_0104-2.jpg" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0104-2-thumb-500xauto-1109.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="DSC_0112-2.jpg" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0112-2-thumb-500xauto-1111.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="DSC_0079.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0079-thumb-500xauto-1115.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px;"><a href="https://www.mitsuihome-ksa.co.jp/news/images/DSC_0073.JPG"><img alt="DSC_0073.JPG" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0073-thumb-500xauto-1121.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif;">外から見るとこんな感じ。内外でサッシの色を変えているのですが、黒だと締まった印象があります。</p>
<p><img alt="DSC_0132.JPGのサムネイル画像" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/DSC_0132-thumb-500xauto-1103.jpg" width="500" height="333" class="mt-image-center" style="display: block; margin-left: auto; margin-right: auto;" /></p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">本リフォーム工事では、新築工事でも採用しているトリプル樹脂サッシを採用しました。<br />内外２枚をLow-Eガラス（高い遮熱・断熱効果を発揮する高機能ガラス）で構成し、<br />層の間には空気よりも断熱性能の高いアルゴンガスを封入。<br /> 長野県の寒さに耐えうる高い断熱性能を有するとともに、複数層にすることで結露をおきにくくします。</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/news/images/%E3%82%B5%E3%83%83%E3%82%B73.png"><img alt="サッシ3.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E3%82%B5%E3%83%83%E3%82%B73-thumb-550xauto-1180.png" width="550" height="501" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif;">以前のアルミサッシの様子です。当時では珍しいペアガラスを採用していましたが、<br />撮影当日は雨が降っていたこともあり、結露が発生してしまっています。</p>
<p><img alt="けつろ.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E3%81%91%E3%81%A4%E3%82%8D-thumb-500xauto-1107.png" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 10px;" /></p>
<p style="text-align: center; font-family: sans-serif; line-height: 2.0; padding: 10px;">窓やドアといった開口部は、エネルギー（熱）ロスの多い箇所です。<br />三井ホームの特性である高気密・高断熱を最大限に活かし、熱を逃がさず快適にお住まい頂くために<br />窓をはじめとする断熱にもこだわり続けることで、<br />吹き抜けや大開口窓といった開放的な空間づくりを可能にしています。</p>
<p><a href="https://www.mitsuihome-ksa.co.jp/news/images/%E5%A4%A7%E9%96%8B%E5%8F%A3.png"><img alt="大開口.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/11/%E5%A4%A7%E9%96%8B%E5%8F%A3-thumb-800xauto-1119.png" width="800" height="305" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p id="kaitai" style="text-align: center; font-family: sans-serif; padding: 10px;">今回はここまで！工事はまだまだ続きます。<br />次回は、壁・天井断熱工事の様子をお知らせします。<br />引き続き続く三井ホームの断熱へのこだわりをご覧ください。</p>
<hr style="border-top: solid 1px #808080; border-bottom: none; width: 1000px;" />
<p style="text-align: center; padding: 20px; font-family: sans-serif;">【9月29日更新】<br />　本日は、2階解体工事の様子をお知らせします。</p>
<p><img alt="愛犬家玄関before.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/%E6%84%9B%E7%8A%AC%E5%AE%B6%E7%8E%84%E9%96%A2before-thumb-800xauto-1186.png" width="800" height="298" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p><a href="https://www.mitsuihome-ksa.co.jp/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E7%8E%84%E9%96%A2after_1.png"><img alt="愛犬家玄関after_1.png" src="https://www.mitsuihome-ksa.co.jp/news/assets_c/2020/12/%E6%84%9B%E7%8A%AC%E5%AE%B6%E7%8E%84%E9%96%A2after_1-thumb-800xauto-1188.png" width="800" height="273" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;"><span>撮影のため現場に到着すると、2週間前には玄関があった既存部分が無くなっていました。<br />（今回は別の場所から入りました）<br />2階へ上ると一面、新築の上棟現場のような木材の匂いがしており、35年の年月を感じさせません。</span></p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">（解体工事前↓）</p>
<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/2F%20before.jpg"><img alt="2F before.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/2F%20before-thumb-1000xauto-3039.jpg" width="1000" height="226" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; font-family: sans-serif;">2週間前は壁で仕切られ、3部屋あった二階ですが、解体を経てこうなりました。</p>
<p style="text-align: center; font-family: sans-serif;"><br />（解体後↓）</p>
<table border="0">
<tbody>
<tr>
<td><img alt="DSC_0047.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0047-thumb-500xauto-3026.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="DSC_0085.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0085-thumb-500xauto-3031.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="2F洋室1017.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/2F%E6%B4%8B%E5%AE%A41017-thumb-500xauto-3029.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">（※壁がなくなったことで、とても広いワンルームにいるような感覚でした）</p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">本リフォーム工事では、これまでに天井裏にあった断熱材を撤去、屋根裏へ敷きなおしを行います。<br />屋根断熱で日射熱を遮断することで冷暖房効率を上げるとともに、勾配天井や吹き抜け等の大空間を実現します。<br />もともと高気密・高断熱の三井ホームですが、<strong>さらに</strong>夏涼しく冬暖かい家を目指します。</p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">窓付近です↓。35年経過しても雨漏りによるカビや腐食がなく、きれいな状態を保っていました。</p>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0057.JPG"><img alt="DSC_0057.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0057-thumb-500xauto-2978.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0090.JPG"><img alt="DSC_0090.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0090-thumb-500xauto-2990.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0086.jpg"><img alt="DSC_0086.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0086-thumb-500xauto-2992.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /> </a></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">唐突ですが、三井ホームは2×4インチ木材を主な基本構造体とする「ツーバイフォー工法（枠組壁工法）」です。<br />窓や耐力壁には2×4材を重ねて使用することで、強度・気密性を高めています。</p>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0072-2.jpg"><img alt="DSC_0072-2.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0072-2-thumb-500xauto-2999.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/20200929_094432-2.jpg"><img alt="20200929_094432-2.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/20200929_094432-2-thumb-394x333-3005.jpg" width="394" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto;" /></a><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/20200929_094432-2.jpg"><br /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0077.JPG"><img alt="DSC_0077.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0077-thumb-500xauto-3003.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px; font-family: sans-serif;"><br />木材に近寄ってみると、等間隔に釘の穴がびっしり開いているのが分かります。</p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;"><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/kugi.jpg"><img alt="kugi.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/kugi-thumb-500xauto-2997.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">三井ホームの釘打ちピッチは、10㎝間隔。他のメーカーに比べても約1.5倍近く多い釘が使われています。<br />多く打つことで時間・手間・費用がかかりますが、「高耐久」で「地震に強い」といわれる三井ホームの高強度の秘訣は、こんなところからも生まれています。</p>
<p id="monpi" style="text-align: center; padding: 10px; font-family: sans-serif;">次回は、2階窓サッシの工事進捗をお知らせする予定です。<br />少しづつ建物が形になっていく様子を楽しみにご覧頂ければと思います。</p>
<hr style="border-top: solid 1px #808080; border-bottom: none; width: 1000px;" />
<p><br /><br /></p>
<p style="text-align: center; padding: 20px; margin-top: 20px; font-family: sans-serif;">【9月8日更新】<br />現場では先日、一部解体工事が始まりました。<br />敷地内に機材を入れるため、前面の門扉や植栽を撤去していきます。</p>
<table border="0">
<tbody>
<tr>
<td><img alt="愛犬家・門扉解体の様子.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90-thumb-500xauto-2842.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="愛犬家住宅・門扉解体の様子２.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%92-thumb-500xauto-2844.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="愛犬家住宅・門扉解体の様子３.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%93-thumb-500xauto-2846.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
</tr>
</tbody>
</table>
<table border="0">
<tbody>
<tr>
<td><img alt="愛犬家・門扉解体の様子５.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%95-thumb-500xauto-2862.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="愛犬家・門扉解体の様子６.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%96-thumb-500xauto-2864.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
<td><img alt="愛犬家・門扉解体の様子７.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%97-thumb-500xauto-2866.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">※個人情報保護のため、一部画像を修正しております</p>
<p style="text-align: center; padding: 10px; font-family: sans-serif;">大きな機材で、カーポートもバラバラに...</p>
<p style="text-align: center;"><img alt="愛犬家住宅・門扉解体の様子4.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%904-thumb-300xauto-2860.jpg" width="300" height="225" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; padding: 30px; margin: 10px; font-family: sans-serif;">今後も定期的に工事の様子をお届けします。<br /> 少しづつ建物が形になっていく様子を楽しみにご覧頂ければと思います。<br /><br /><br /><br /></p>
						</div>
						
						

						
						
						<?php $event_send = "8"; ?>
						



						
						
						
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

