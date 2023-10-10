<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "キッチン";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/reform/gallery/config.php"); ?>

	<link rel="stylesheet" href="<?php echo $path; ?>/modelhouse/style.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/reform/gallery/style.css">
</head>

<body>
	<div class="reform layout-type01 modelhouse list">

		<!-- include header -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick-theme.css">

		<main>

			<?php echo $heading ?>

			<?php include("../breadcrumb.php"); ?>

			<div class="section01 py-6 py-md-7">
				<div class="container container-sm">

					<h2 class="h2-type02 mb-3"><?php echo $pageName; ?></h2>

					<div class="slider-type01">
						<div id="slider" class="slider">
<?php for ($i = 1; $i < 12; $i++) { ?>
							<div class="item">
								<img src="./image/img<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="1000" height="560" decoding="async">
							</div>
<?php }; ?>
						</div>
						<div id="slideNav" class="slide-nav">
<?php
for ($i = 1; $i < 12; $i++) {
	if ($i === 1) {
?>
							<div class="item item<?php echo $i; ?> current">
								<span class="slideLink" data-slick="<?php echo $i; ?>">
									<img src="./image/thumb<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="160" height="100" decoding="async">
								</span>
							</div>
<?php } else { ?>
							<div class="item item<?php echo $i; ?>">
								<span class="slideLink" data-slick="<?php echo $i; ?>">
									<img src="./image/thumb<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" alt="" width="160" height="100" decoding="async">
								</span>
							</div>
<?php
		}
	}
?>
						</div>
					</div>

					<?php //echo $slick_arrow ?>

				</div>
			</div>


			<!-- <div class="section02 py-7 py-md-9 bg-gray">

				<div class="container container-sm">
					<div class="row gutter-40">
						<div class="col-md-7">
							<dl class="dl-type01">
								<div>
									<dt>お客様のご希望</dt>
									<dd>増築を重ね、使い勝手を見直してきたはずなのに、気が付けば暗くて寒いリビングダイニング。 1階の建坪面積は広いのに、まったく日が差さない部屋がいくつもありました。<br>
										自然と、暗くて寒い部屋には、誰も寄り付かず、常にご家族が集まるのは南側の居間の1部屋のみで過ごすという状態になっていました。<br>
										そこで、ご家族の希望は、『家族が集まる暖かい家』でした。</dd>
								</div>
								<div>
									<dt>改装後</dt>
									<dd>リフォームや増築で注意したいのは、居住面積を増やすだけでなく、「光が差し込むのか」「風が通りぬけるのか」など、住み心地をよくすることがとても重要です。<br>
										今回、お客様は大改造をご希望でしたので、こちらも思い切ったご提案ができました。<br>
										いくつもの部屋に区切られていた1階を、リビングダイニング・和室・そして増築したインナーガーデンなどが、ワンルームのように利用できるダイナミックな造りにしました。 光もたっぷり差込み、夏場は涼しい風がお部屋を通りぬけ、冬場は、建物全体をしっかり断熱材で包みましたので、とても暖かなお住まいです。<br>
										人やペット、そして植物が共有できるインナーガーデンの床材は、キズや水滴に強いテラコッタを使用しています。<br>
										リビングには、吹抜けを造ることで日々の『暮らし心地』となる、家族と光と風を自然に受け入れられることをご提案しました。 『暖房』はLDK全体に床暖房と薪ストーブを設置することで大空間の吹抜けでも暖かく過ごせます。 キッチンは暖かさを感じさせるオレンジカラー。<br>
										柱を残しすべてを解体したリフォームです。 外観は、大胆にコンクリートと木を融合させたシンプルモダンです。</dd>
								</div>
							</dl>
						</div>
						<div class="col-md-5">
							<div class="table-type01">
								<table>
									<colgroup>
										<col class="width-m">
									</colgroup>
									<tbody>
										<tr>
											<th>所在地</th>
											<td>長野県埴科郡坂城町</td>
										</tr>
										<tr>
											<th>築年数</th>
											<td>30年</td>
										</tr>
										<tr>
											<th>建築形態</th>
											<td>一戸建て</td>
										</tr>
										<tr>
											<th>工事面積</th>
											<td>198m&sup2;</td>
										</tr>
										<tr>
											<th>構造</th>
											<td>在来木造</td>
										</tr>
										<tr>
											<th>リフォーム部分</th>
											<td>（増改築）<br>キッチン、ダイニング、リビング、洋室、和室、浴室、トイレ、インナーガーデン</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>

			</div> -->

			<?php echo $back_button ?>

		</main>


		<!-- include footer -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

		<!-- include scripts -->
		<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>
		<?php include("../slick.php"); ?>


	</div>
</body>

</html>