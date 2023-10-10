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
$entry_title = "【9/29】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします";

//フォーム処理
$event_name = "【9/29】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします";//元のURL
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
			<strong>【9/29】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします</strong>
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
							<p class="date">2020.09.29</p>
						</div>
						<h1 class="title">
						
						<?php if(is_new ('20200929')) { ?>
							<span class="status">
								<i class="icon-new"></i>
							</span>
						<?php } ?>
						
						
						<?php if(is_new ('20200929')) { ?>
							<span class="entrytitle statusAv">
						<?php } ?>
						
						【9/29】松本市蟻ケ崎台「愛犬家住宅」リフォーム工事の様子をお知らせします</span>
						</h1>						
						
						<div class="entry">
							<p style="text-align: center; padding: 20px;">こんにちは、三井のリフォームです。</p>
<p style="text-align: center; padding: 30px; margin: 10px;">現在、松本市蟻ケ崎台にて計画中の<strong>「愛犬家住宅リフォーム」</strong>。<br />三井ホームでご建築頂いた築35年の建物をリフォームすべく、<br /> 現在、2021年9月のオープンに向け、工事が進行中です。</p>
<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E8%9F%BB%E3%82%B1%E5%B4%8E%E5%A4%96%E8%A6%B3%E3%83%91%E3%83%BC%E3%82%B9%EF%BC%91.jpg"><img alt="蟻ケ崎外観パース１.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E8%9F%BB%E3%82%B1%E5%B4%8E%E5%A4%96%E8%A6%B3%E3%83%91%E3%83%BC%E3%82%B9%EF%BC%91-thumb-800xauto-2856.jpg" width="800" height="510" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p></p>
<p style="text-align: center; padding: 20px;">※画像は完成予定イメージです。</p>
<div style="background-color: #f6df7e !important;">
<p><br /><br /> <a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E3%81%9D%E3%82%82%E3%81%9D%E3%82%82%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%81%A8%E3%81%AF%EF%BC%9F.png"><img alt="そもそも愛犬家住宅とは？.png" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E3%81%9D%E3%82%82%E3%81%9D%E3%82%82%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%81%A8%E3%81%AF%EF%BC%9F-thumb-400xauto-2848.png" width="400" height="114" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; padding: 10px;">愛犬家住宅とは、その名のとおり「愛犬のための住宅」。<br />「ペットと安心・安全・快適に暮らす住まい」をコンセプトに、<br />ペットの足腰に負担を掛けないフローリング材や防臭効果のある壁紙を使用するのはもちろんのこと、<br /> 家族の一員であるペットが暮らしやすい間取りや動線を意識してつくられています。<br /><br /> 三井ホームでは、一般社団法人愛犬家住宅協会の認定する「愛犬家住宅コーディネーター」の資格を有するスタッフが、<br />愛犬家住環境の専門家としてお客様の計画をサポートします。</p>
<p><img alt="アセット 5.png" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%205-thumb-200x34-2854.png" width="100" height="17" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 30px;" /></p>
<p><br /><br /></p>
</div>
<p style="text-align: center; padding: 20px;">【9月29日更新】<br />　本日は、2階解体工事の様子をお知らせします。</p>
<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E5%A4%96%E8%A6%B3%E3%80%80%E5%B7%A5%E4%BA%8B%E5%89%8D2-1.jpg"><img alt="外観　工事前2-1.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/%E5%A4%96%E8%A6%B3%E3%80%80%E5%B7%A5%E4%BA%8B%E5%89%8D2-1-thumb-800xauto-2984.jpg" width="800" height="401" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E5%A4%96%E8%A6%B3%E3%80%80%E5%B7%A5%E4%BA%8B%E5%BE%8C.jpg"><img alt="外観　工事後.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/%E5%A4%96%E8%A6%B3%E3%80%80%E5%B7%A5%E4%BA%8B%E5%BE%8C-thumb-800xauto-2970.jpg" width="800" height="274" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; padding: 10px;"><span>撮影のため現場に到着すると、2週間前には玄関があった既存部分が無くなっていました。<br />（今回は別の場所から入りました）<br />2階へ上ると一面、新築の上棟現場のような木材の匂いがしており、35年の年月を感じさせません。</span></p>
<p style="text-align: center; padding: 10px;">（解体工事前↓）</p>
<p><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/2F%20before.jpg"><img alt="2F before.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/2F%20before-thumb-1000xauto-3039.jpg" width="1000" height="226" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center;">2週間前は壁で仕切られ、3部屋あった二階ですが、解体を経てこうなりました。</p>
<p style="text-align: center;"><br />（解体後↓）</p>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0047.JPG"><img alt="DSC_0047.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0047-thumb-500xauto-3026.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0085.JPG"><img alt="DSC_0085.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0085-thumb-500xauto-3031.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/2F%E6%B4%8B%E5%AE%A41017.JPG"><img alt="2F洋室1017.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/2F%E6%B4%8B%E5%AE%A41017-thumb-500xauto-3029.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px;">（※壁がなくなったことで、とても広いワンルームにいるような感覚でした）</p>
<p style="text-align: center; padding: 10px;">本リフォーム工事では、これまでに天井裏にあった断熱材を撤去、屋根裏へ敷きなおしを行います。<br />屋根断熱で日射熱を遮断することで冷暖房効率を上げるとともに、勾配天井や吹き抜け等の大空間を実現します。<br />もともと高気密・高断熱の三井ホームですが、<strong>さらに</strong>夏涼しく冬暖かい家を目指します。</p>
<p style="text-align: center; padding: 10px;">窓付近です↓。35年経過しても雨漏りによるカビや腐食がなく、きれいな状態を保っていました。</p>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0057.JPG"><img alt="DSC_0057.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0057-thumb-500xauto-2978.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0090.JPG"><img alt="DSC_0090.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0090-thumb-500xauto-2990.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0086.jpg"><img alt="DSC_0086.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0086-thumb-500xauto-2992.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /> </a></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px;">三井ホームは2×4木材を主な基本構造体とする「ツーバイフォー工法（枠組壁工法）」です。<br />窓や耐力壁には2×4材を重ねて使用し、強度・気密性を高めています。</p>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0072-2.jpg"><img alt="DSC_0072-2.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0072-2-thumb-500xauto-2999.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/20200929_094432-2.jpg"><img alt="20200929_094432-2.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/20200929_094432-2-thumb-394x333-3005.jpg" width="394" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto;" /></a><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/20200929_094432-2.jpg"><br /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/DSC_0077.JPG"><img alt="DSC_0077.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/DSC_0077-thumb-500xauto-3003.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px;"><br />また、木材に近寄ってみると、等間隔に釘の穴がびっしり開いているのが分かります。</p>
<p style="text-align: center; padding: 10px;"><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/kugi.jpg"><img alt="kugi.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/10/kugi-thumb-500xauto-2997.jpg" width="500" height="333" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></p>
<p style="text-align: center; padding: 10px;">三井ホームの釘打ちピッチは、10㎝間隔。他のメーカーに比べても約1.5倍近く多い釘が使われています。<br />多く打つことで時間・手間・費用がかかりますが、「高耐久」で「地震に強い」といわれる三井ホームの高強度の秘訣は、こんなところからも生まれています。</p>
<p style="text-align: center; padding: 10px;">次回は、2階窓サッシの工事進捗をお知らせする予定です。<br />少しづつ建物が形になっていく様子を楽しみにご覧頂ければと思います。</p>
<hr style="border-top: solid 1px #808080; border-bottom: none; width: 1000px;" />
<p style="text-align: center; padding: 20px;">【9月8日更新】<br />現場では先日、一部解体工事が始まりました。<br />敷地内に機材を入れるため、前面の門扉や植栽を撤去していきます。<br />(※画像クリックで拡大します)</p>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90.JPG"><img alt="愛犬家・門扉解体の様子.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90-thumb-500xauto-2842.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%92.JPG"><img alt="愛犬家住宅・門扉解体の様子２.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%92-thumb-500xauto-2844.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%93.jpg"><img alt="愛犬家住宅・門扉解体の様子３.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%93-thumb-500xauto-2846.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<table border="0">
<tbody>
<tr>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%95.JPG"><img alt="愛犬家・門扉解体の様子５.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%95-thumb-500xauto-2862.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%96.JPG"><img alt="愛犬家・門扉解体の様子６.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%96-thumb-500xauto-2864.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
<td><a href="http://www.mitsuihome-ksa.co.jp/reform/news/images/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%97.JPG"><img alt="愛犬家・門扉解体の様子７.JPG" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%90%EF%BC%97-thumb-500xauto-2866.jpg" width="500" height="375" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></a></td>
</tr>
</tbody>
</table>
<p style="text-align: center; padding: 10px;">※個人情報保護のため、一部画像を修正しております</p>
<p style="text-align: center; padding: 10px;">大きな機材で、カーポートもバラバラに...</p>
<p><img alt="愛犬家住宅・門扉解体の様子4.jpg" src="http://www.mitsuihome-ksa.co.jp/reform/news/assets_c/2020/09/%E6%84%9B%E7%8A%AC%E5%AE%B6%E4%BD%8F%E5%AE%85%E3%83%BB%E9%96%80%E6%89%89%E8%A7%A3%E4%BD%93%E3%81%AE%E6%A7%98%E5%AD%904-thumb-300xauto-2860.jpg" width="300" height="225" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;" /></p>
<p style="text-align: center; padding: 30px; margin: 10px;">今後も定期的に工事の様子をお届けします。<br /> 少しづつ建物が形になっていく様子を楽しみにご覧頂ければと思います。</p>
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

