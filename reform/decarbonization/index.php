<?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/base.php"); ?>
<?php
$pageName = "脱炭素化リフォームのご提案";
$description = "三井のリフォームの脱炭素化リフォームのご案内。CO₂を抑制して地球温暖化対策の一歩となるだけでなく、日々の暮らしにもたくさんのメリットがあります。ご相談は電話またはメールでお気軽にご連絡ください。";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/meta.php"); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/node_modules/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="../css/style.css" media="screen">
  <link rel="stylesheet" href="../css/remodal.css" media="screen">
  <link rel="stylesheet" href="../css/remodal-default-theme.css" media="screen">
  <link rel="stylesheet" href="../css/decarbonization.css" media="screen">
  <script type="text/javascript" src="./js/remodal.js"></script>
</head>

<body>
  <div class="reform index">

    <!-- include header -->
    <?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/header.php"); ?>

    <main class="decarbonization">

      <div class="decarbonizing-mainVisual">
        <div class="decarbonizing-mainVisual--text">
          <div class="decarbonizing-mainVisual--text__innner">
            <p>
              暮らしにウレシイ、<br class="br480">地球もヨロコブ
            </p>
            <h1>
              脱炭素化リフォームの<br class="br768">ご提案
            </h1>
          </div>
        </div>
      </div>

      <?php /* 省エネリフォーム臨時掲載：ここから */ ?>
				<div class="ex-banner202303">
					<a href="/reform/news/reformAll/post-61.php" class="ex-banner202303__link"><img src="/reform/assets/img/banner/ecoreform-202303.jpg" alt="省エネリフォーム相談会開催中！ 補助金最大290万円" width="" height="" loading="lazy"></a>
				</div><!-- /.ex-banner202303 -->
				<style>
					.ex-banner202303{
						margin: 80px 0;
						padding: 0 30px;
					}
					.ex-banner202303__link{
						display: block;
						margin: auto;
						transition: opacity .3s;
						width: min(1000px, 90%);
					}
					.ex-banner202303__link:hover{
						opacity: .7;
					}
					.ex-banner202303__link img{
						max-width: 100%;
						height: auto;
					}
					@media screen and (max-width: 768px){
						.ex-banner202303{
							margin-top: 40px;
							margin-bottom: 40px;
						}
						.ex-banner202303__link{
							width: 95%;
						}
					}
          @media screen and (max-width: 480px){
            .ex-banner202303{
              margin-top: 16px;
              margin-bottom: 16px;
            }
          }
				</style>
				<?php /* 省エネリフォーム臨時掲載：ここまで */ ?>

      <div class="content__wrap bgcGreen">
        <div class="content__inner">
          <section>
            <h2 class="headLine01">脱炭素化リフォームのメリット</h2>
            <p class="decarbonizingText">CO₂を抑制して地球温暖化対策の一歩となるだけでなく、日々の暮らしにもウレシイことがいっぱい！<br>
              三井のリフォームは、今のお住まいを省エネ化する脱炭素化リフォームをおすすめしています。</p>
            <div class="reformMerit">
              <div class="reformMerit--item">
                <h3 class="headLine01 headLine01--icon02">快適</h3>
                <img src="/assets/images/reform/decarbonization/melit01.png" alt="" class="meritImage01">
                <p class="decarbonizingText">住まいの断熱性を高めると「暑い寒い」の解消につながります。<br>
                  また、機器の最新化は家事ラク機能など、省エネ以外の利点も。</p>
              </div>
              <div class="reformMerit--item">
                <h3 class="headLine01 headLine01--icon03">健康</h3>
                <img src="/assets/images/reform/decarbonization/melit02.png" alt="" class="meritImage02">
                <p class="decarbonizingText">「暑い寒い」の解消につながる高断熱化で、カラダの負担も軽減。特に冬場の寒さの解消は、様々な健康リスクを減らします。</p>
              </div>
              <div class="reformMerit--item">
                <h3 class="headLine01 headLine01--icon04">耐久性</h3>
                <img src="/assets/images/reform/decarbonization/melit03.png" alt="" class="meritImage03">
                <p class="decarbonizingText">高断熱化により、窓はもちろん躯体の劣化につながる内部結露も抑制。住まいを長持ちさせ、カビ・ダニの発生も抑えます。</p>
              </div>
              <div class="reformMerit--item">
                <h3 class="headLine01 headLine01 headLine01--icon03">節約</h3>
                <img src="/assets/images/reform/decarbonization/melit04.png" alt="" class="meritImage04">
                <p class="decarbonizingText">高効率設備への切り替え、創エネ設備の導入などで光熱費も大幅に抑制。住まいの高断熱化は冷暖房コストをさらに抑えます。</p>
              </div>
              <div class="reformMerit--item">
                <h3 class="headLine01 headLine01 headLine01--icon04">防災</h3>
                <img src="/assets/images/reform/decarbonization/melit05.png" alt="" class="meritImage05">
                <p class="decarbonizingText">CO₂削減に寄与する太陽光発電や蓄電池の導入は、地震や台風などの災害時、万一の停電時にも役立ち、在宅避難を可能に。</p>
              </div>
              <div class="reformMerit--item">
                <h3 class="headLine01 headLine01 headLine01--icon02">補助金</h3>
                <img src="/assets/images/reform/decarbonization/melit06.png" alt="" class="meritImage06">
                <p class="decarbonizingText">国や自治体で設けている各種補助金制度が利用でき、脱炭素化リフォームをおトクに行えます。<br>
                  ※自治体等により内容は異なります。</p>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="content__wrap bgcYellow contact__wrap">
        <div class="content__inner">
          <section class="conatact-section">
            <h2 class="headLine01">ご自宅から電話またはメールでご相談！</h2>
            <p class="decarbonizingText">施工事例もご覧いただけます</p>
            <a class="btn btn-red btn-fluid mx-auto  reform-renovationmodel__button" href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=脱炭素化リフォーム相談会&office=12" target="_blank">
              リフォーム無料相談　好評受付中
            </a>
            <p>リフォームのプロと考える、これからの住まい</p>
          </section>
        </div>
      </div>
      <div class="content__wrap city__wrap">
        <div class="content__inner">
          <section>
            <h2 class="headLine01">なぜ「脱炭素化」なの？</h2>
            <p class="decarbonizingText">私たちの暮らしに大きな影響を及ぼしている地球温暖化や気候変動。<br>
              このため、二酸化炭素をはじめとした温室効果ガスの排出をゼロに抑えようという取り組みが世界ではじまっています。<br>
              日本でも2050年までに「カーボンニュートラル」を目指すことを宣言。<br>
              「脱炭素化」は、未来を守るための世界共通のテーマなのです。</p>
            <div class="reformQuestion">
              <div class="reformQuestion--item">
                <div class="reformQuestion--item--left">
                  <h3 class="headLine02">そもそも「脱炭素化」って？</h3>
                  <p class="decarbonizingText">温室効果ガスの排出を招く化石燃料を用いたエネルギーの大量消費から脱却しようという取り組みです。しかし生活するうえで温室効果ガスの排出を完全にゼロにすることは難しいため、植林、森林管理などによる二酸化炭素の「吸収量」を差し引いて、実質的にゼロにしようという「カーボンニュートラル」の考え方が生まれました。</p>
                </div>
                <div class="reformQuestion--item--right">
                  <img src="/assets/images/reform/decarbonization/que01.jpg" alt="">
                  <p class="decarbonizingText">※「脱炭素化」は、持続可能でよりよい世界を目指す国際目標・SDGs（エスディージーズ）が掲げる「気候変動に具体的な対策を」などの目標達成にも不可欠といえます。</p>
                </div>
              </div>
              <div class="reformQuestion--item">
                <div class="reformQuestion--item--left">
                  <h3 class="headLine02">個人の暮らしと関係があるの？</h3>
                  <p class="decarbonizingText">私たちの衣食住や移動などに起因する温室効果ガスは、日本全体の排出量の約6割を占めるといわれています。また、住まいからのCO₂排出量は全体の16％（1億9200万トン）、1世帯あたり年間3.4トンのCO₂排出になるというデータもあります。国や企業だけでなく、各家庭での取り組みが求められています。</p>
                </div>
                <div class="reformQuestion--item--right">
                  <img src="/assets/images/reform/decarbonization/que02.jpg" alt="">
                  <p class="decarbonizingText--b">CO₂排出量の割合</p>
                  <p class="decarbonizingText">
                    出典：環境省「COOL CHOICE」ウェブサイトより加工・作成<br>
                    エネルギー起源CO₂排出量に占める割合<br>
                    〈間接排出量（電気・熱配分後）〉（2014年度データ）</p>
                </div>
              </div>
              <div class="reformQuestion--item">
                <div class="reformQuestion--item--left">
                  <h3 class="headLine02">どんなことをすればいいの？</h3>
                  <p class="decarbonizingText">住まいからのCO₂排出の割合は、暖房が約2割、給湯が約2割、照明・家電製品が約5割。高効率給湯器やLED照明の導入がCO₂削減につながります。また、1/4を占める冷暖房の対策も重要。省エネ性能の高いエアコンへの切り替え、住まいの断熱性能を高める施工などもCO₂削減に寄与します。</p>
                </div>
                <div class="reformQuestion--item--right">
                  <img src="/assets/images/reform/decarbonization/que03.jpg" alt="">
                  <p class="decarbonizingText--b">家庭におけるCO₂排出内訳</p>
                  <p class="decarbonizingText">
                    出典：環境省「COOL CHOICE」ウェブサイトより加工・作成<br>
                    ※戸建の数値<br>
                    （2014年10月～2015年9月調査）
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="content__wrap bgcYellow contact__wrap">
        <div class="content__inner">
          <section class="conatact-section">
            <h2 class="headLine01">ご自宅から電話またはメールでご相談！</h2>
            <p class="decarbonizingText">施工事例もご覧いただけます</p>
            <a class="btn btn-red btn-fluid mx-auto  reform-renovationmodel__button" href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=脱炭素化リフォーム相談会&office=12" target="_blank">
              リフォーム無料相談　好評受付中
            </a>
            <p>リフォームのプロと考える、これからの住まい</p>
          </section>
        </div>
      </div>
      <div class="content__wrap bgcGreen">
        <div class="content__inner">
          <section>
            <h2 class="headLine01">設備交換から断熱リフォームまで<br>
              おすすめの脱炭素化リフォーム</h2>
            <p class="decarbonizingText">取り入れやすい「設備機器の交換」から、間取りや内装変更と同時に考えたい「断熱リフォーム」まで、<br class="br-none950">
              オーナー様のライフスタイルやご希望に合わせて、三井のリフォームが最適なプランをご提案いたします。</p>
            <div class="reformrecommend">
              <div class="reformrecommend--item__wrap">
                <div class="reformrecommend--item reformrecommend--item--row">
                  <div class="reformrecommend--item--left">
                    <div class="reformrecommendTitle__wrap">
                      <p class="reformrecommend-point">POINT<span>1</span></p>
                      <h3 class="headLine02">断熱リフォーム</h3>
                    </div>
                    <div class="reformrecommend--icon">
                      <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon02.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon03.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon04.svg" alt="">
                    </div>
                    <p class="decarbonizingText">住まいの断熱性能を高めて、脱炭素化へ。外気温に左右されづらくなり、空調効率もアップ。<br>
                      夏冬が過ごしやすくなるとともに、CO₂の削減、健康リスクの低減につながります。<br>
                      屋根・天井、外壁、床の断熱材強化や断熱窓への改修、浴室の断熱改修もおすすめです。</p>
                  </div>
                  <div class="reformrecommend--item--right">
                    <a href="#modal01" class="modal">
                      <img src="/assets/images/reform/decarbonization/point1_img_case.png" alt="">
                    </a>
                    <div class="remodal" data-remodal-id="modal01">
                      <img src="/assets/images/reform/decarbonization/point1_img_case.png" alt="">
                      <button data-remodal-action="cancel" class="remodal-cancel">×</button>
                    </div>
                  </div>
                </div>
                <img src="/assets/images/reform/decarbonization/point1_img.jpg" alt="">
              </div>
              <div class="reformrecommend--item reformrecommend--item--row">
                <div class="reformrecommend--item--left">
                  <div class="reformrecommendTitle__wrap">
                    <p class="reformrecommend-point">POINT<span>2</span></p>
                    <h3 class="headLine02">太陽光発電システムの導入</h3>
                  </div>
                  <div class="reformrecommend--icon">
                    <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                    <img src="/assets/images/reform/decarbonization/rec-icon05.svg" alt="">
                  </div>
                  <img src="/assets/images/reform/decarbonization/point2_img.jpg" alt="">
                  <p class="decarbonizingText">CO₂を排出せずに電気をつくり、居住時のCO₂と光熱費を削減。停電時の非常用電源にもなります。「エネファーム」とのダブル発電や、太陽熱給湯との併用もおすすめです。</p>
                </div>
                <div class="reformrecommend--item--right">
                  <img src="/assets/images/reform/decarbonization/point2_img_case.jpg" alt="">
                </div>
              </div>
              <div class="reformrecommend--item reformrecommend--item--row">
                <div class="reformrecommend--item--left">
                  <div class="reformrecommendTitle__wrap">
                    <p class="reformrecommend-point">POINT<span>3</span></p>
                    <h3 class="headLine02">蓄電池の導入</h3>
                  </div>
                  <div class="reformrecommend--icon">
                    <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                    <img src="/assets/images/reform/decarbonization/rec-icon05.svg" alt="">
                  </div>
                  <img src="/assets/images/reform/decarbonization/point3_img.jpg" alt="">
                  <p class="decarbonizingText">太陽光発電と組み合わせることで、自宅でつくった電気を賢く貯めてムダなく利用でき、CO₂のさらなる削減に。災害時のより安心な備えにもなります。</p>
                </div>
                <div class="reformrecommend--item--right">
                  <img src="/assets/images/reform/decarbonization/point3_img_case.jpg" alt="">
                </div>
              </div>
              <div class="reformrecommend--item reformrecommend--item--row">
                <div class="reformrecommend--item--left">
                  <div class="reformrecommendTitle__wrap">
                    <p class="reformrecommend-point">POINT<span>4</span></p>
                    <h3 class="headLine02">V2H-充放電器の導入</h3>
                  </div>
                  <div class="reformrecommend--icon">
                    <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                    <img src="/assets/images/reform/decarbonization/rec-icon05.svg" alt="">
                  </div>
                  <img src="/assets/images/reform/decarbonization/point4_img.jpg" alt="">
                  <p class="decarbonizingText">電気自動車に素早く充電でき、クルマに貯めた電気を家で使えます。太陽光発電と組み合わせれば、CO₂削減、節約、停電時の安心につながります。</p>
                </div>
                <div class="reformrecommend--item--right">
                  <img src="/assets/images/reform/decarbonization/point4_img_case.jpg" alt="">
                </div>
              </div>
              <div class="reformrecommend--item--col__wrap">
                <div class="reformrecommend--item reformrecommend--item--col">
                  <div class="reformrecommend--item--left">
                    <div class="reformrecommendTitle__wrap">
                      <p class="reformrecommend-point">POINT<span>5</span></p>
                      <h3 class="headLine02">高効率給湯器に交換</h3>
                    </div>
                    <div class="reformrecommend--icon">
                      <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon02.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon05.svg" alt="">
                    </div>
                    <img src="/assets/images/reform/decarbonization/point5_img.jpg" alt="">
                    <p class="decarbonizingText">ガス式も電気式も新しい給湯器はCO₂排出や光熱費を抑制、宅外お湯張りや除菌機能なども揃います。また、ガスで電気とお湯をつくる「エアファーム」は停電時に使えるタイプも。暮らしに合わせてご一緒に検討しましょう。</p>
                  </div>
                  <div class="reformrecommend--item--right">
                    <img src="/assets/images/reform/decarbonization/point5_img_case.jpg" alt="">
                  </div>
                </div>
                <div class="reformrecommend--item reformrecommend--item--col">
                  <div class="reformrecommend--item--left">
                    <div class="reformrecommendTitle__wrap">
                      <p class="reformrecommend-point">POINT<span>6</span></p>
                      <h3 class="headLine02">LED照明に交換</h3>
                    </div>
                    <div class="reformrecommend--icon">
                      <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon02.svg" alt="">
                    </div>
                    <img src="/assets/images/reform/decarbonization/point6_img.jpg" alt="">
                    <p class="decarbonizingText">従来照明に比べて圧倒的に省電力・長寿命。家の照明をLED化すればCO₂も電気代も削減でき、交換頻度も低減。小型化によりデザインも多彩に楽しめます。</p>
                  </div>
                  <div class="reformrecommend--item--right">
                    <img src="/assets/images/reform/decarbonization/point6_img_case.jpg" alt="">
                  </div>
                </div>
                <div class="reformrecommend--item reformrecommend--item--col">
                  <div class="reformrecommend--item--left">
                    <div class="reformrecommendTitle__wrap">
                      <p class="reformrecommend-point">POINT<span>7</span></p>
                      <h3 class="headLine02">個別エアコンの交換</h3>
                    </div>
                    <div class="reformrecommend--icon">
                      <img src="/assets/images/reform/decarbonization/rec-icon01.svg" alt="">
                      <img src="/assets/images/reform/decarbonization/rec-icon02.svg" alt="">
                    </div>
                    <img src="/assets/images/reform/decarbonization/point7_img.jpg" alt="">
                    <p class="decarbonizingText">エアコンの省エネ性能は十数年前と比較すると大きく向上。買い替えにより電気代もCO₂も削減でき、使い心地もアップします。ぜひお気軽にご相談ください。</p>
                  </div>
                  <div class="reformrecommend--item--right">
                    <img src="/assets/images/reform/decarbonization/point7_img_case.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="content__wrap bgcYellow contact__wrap">
        <div class="content__inner">
          <section class="conatact-section">
            <h2 class="headLine01">ご自宅から電話またはメールでご相談！</h2>
            <p class="decarbonizingText">施工事例もご覧いただけます</p>
            <a class="btn btn-red btn-fluid mx-auto  reform-renovationmodel__button" href="https://www.mitsuihome.co.jp/ksa/reformevent/?title=脱炭素化リフォーム相談会&office=12" target="_blank">
              リフォーム無料相談　好評受付中
            </a>
            <p>リフォームのプロと考える、これからの住まい</p>
          </section>
        </div>
      </div>
    </main>

    <!-- include footer -->
    <?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/footer.php"); ?>

    <!-- include scripts -->
    <?php include("{$_SERVER['DOCUMENT_ROOT']}/template/reform/script.php"); ?>
  </div>
</body>

</html>