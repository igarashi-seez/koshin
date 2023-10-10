<?php
$pageName = $mh_name;

//Googleトラッキングイベント
$cv_con_mit_pc = "onClick=\"ga('send', 'event', 'Contact', 'mitsuihome', 'PC');\"";
$cv_cat_mit_pc = "onClick=\"ga('send', 'event', 'Catalog', 'mitsuihome', 'PC');\"";
$cv_con_ksa_pc = "onClick=\"ga('send', 'event', 'Contact', 'mitsuihome-ksa', 'PC');\"";
$cv_eve_ksa_pc = "onClick=\"ga('send', 'event', 'EventEntry', 'mitsuihome-ksa', 'PC');\"";
if (isset($mh_ga)) {
$cv_mh_ksa_pc  = "onClick=\"ga('send', 'event', 'MHReservation', 'mitsuihome-ksa', 'PC');gtag('event', 'click', {'event_category': 'modelhouse','event_label': '".$mh_ga."'});\"";   
} else {
$cv_mh_ksa_pc  = "onClick=\"ga('send', 'event', 'MHReservation', 'mitsuihome-ksa', 'PC');\"";   
}
$cv_dr_mit_pc  = "onClick=\"ga('send', 'event', 'DrPlan', 'mitsuihome', 'PC');\"";

$mhhead = <<<EOM
	<div class="section-mv">
		<div class="container container-sm inner">
			<p class="h1">リノベーションモデル・<br class="only-sp">蟻ヶ崎台</p>
		</div>
	</div>

	<div class="breadcrumb">
		<div class="container container-sm inner">
			<a href="{$path}/reform/">ホーム</a>
			<a href="{$path}/reform/renovationmodel/">リノベーションモデル</a>
			<strong>{$mh_title}</strong>
		</div>
	</div>
EOM;

$mhreservation = <<<EOD
<div class="section02 py-7 py-md-9 bg-gray">
	<div class="container">
		<div class="text-center">
			<a class="btn btn-green-lighter btn-xl mx-auto" href="https://www.mitsuihome.co.jp/ksa/modelhouse/?title={$mhname_result}&office={$modelhouse_num}" target="_blank" {$cv_mh_ksa_pc}>ご来場のご予約はこちら</a>
			<p class="color-danger font-size-sm mt-3 mb-6">
				※ご予約はご来場日の2日前までにお願いいたします。<br>
				前日、当日の場合はお電話ください。
			</p>
			<!--<p><img class="img-fluid" src="{$path}/assets/images/modelhouse/common/banner.png"></a></p>-->
		</div>
	</div>
</div>
EOD;


//<a href="{$path}/modelhouse/">モデルハウス</a>
//<a href="{$path}/modelhouse/list/">モデルハウス一覧</a>
?>
