<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S7T4ZT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P26L7NW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<a id="top" name="top"></a>
<header class="globalnav fixed-top">
	<div class="container">
		<nav>
			<div class="globalnav-head">
				<div class="logo">
					<a href="<?php echo $path; ?>/">
						<img src="<?php echo $path; ?>/assets/images/common/logo.svg" width="160px" alt="三井ホーム 甲信アルプスホーム">
						<strong>甲信アルプスホーム</strong>
					</a>
				</div>
				<div class="globalnav-sub">
					<div class="icons">
						<a href="https://www.facebook.com/mitsuihome" target="_blank"><i class="icon-facebook"></i></a>
						<a href="https://www.instagram.com/mitsuihome/" target="_blank"><i class="icon-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UCAZcChRExJy9UoezYmT5gPQ" target="_blank"><i class="icon-youtube"></i></a>
					</div>
					<div class="text">
						<a href="<?php echo $path; ?>/about/company/profile/">会社概要</a>
						<a href="<?php echo $path; ?>/recruit/">採用情報</a>
						<a href="https://www.mitsuihomeclub.com/" target="_blank" rel="noopener noreferrer">オーナー様</a>
					</div>
					<div class="button">
						<a class="btn btn-green-lighter btn-md" href="<?php echo $path; ?>/news/"><i class="icon-user"></i>イベント情報</a>
						<a class="btn btn-blue-lighter btn-md" href="<?php echo $catalogurl; ?>" target="_blank"><i class="icon-text"></i>資料請求</a>
					</div>
				</div>
			</div>

			<div class="globalnav-body">
				<?php
				$global_menu = [
					'ホーム' => [
						'link' => '/',
						'no_modal' => true,
						'external' => false,
					],
					'甲信アルプスホームとは' => [
						'link' => '/about/',
						'img' => 'img_menu_01.png',
						'alt' => '',
						'items' => [
							[
								[
									'text' => '甲信アルプスホームについて',
									'link' => 'company/ksa/',
								],
								[
									'text' => '会社概要',
									'link' => 'company/profile/',
								],
								[
									'text' => '沿革',
									'link' => 'company/history/',
								],
								[
									'text' => '経営理念',
									'link' => 'company/philosophy/',
								],
								[
									'text' => 'トップメッセージ',
									'link' => 'company/message/',
								],
							],
							[
								[
									'text' => 'SDGs',
									'link' => 'company/ksa/info/-earth-with-wood-co2-sdg-sdgs-sdg-sdgs.php',
								],
								[
									'text' => '私たちの仕事',
									'link' => 'works/',
								],
								[
									'text' => 'スタッフ紹介',
									'link' => 'about/staff/',
								],
								[
									'text' => 'スポンサー活動',
									'link' => 'sponsor/',
								],
								[
									'text' => '設計コンサルタント',
									'link' => 'mc/',
								],
								[
									'text' => 'インテリアコーディネーター',
									'link' => 'ic/',
								],
							],
						],
						'external' => false,
						'no_modal' => false,
					],
					'テクノロジー' => [
						'link' => '/technology/',
						'img' => 'img_menu_02.png',
						'alt' => '',
						'items' => [
							[
								[
									'text' => '気候風土',
									'link' => 'climate/nagano/',
								],
								[
									'text' => '空気品質',
									'link' => 'cold-district/',
								],
								[
									'text' => '全館空調',
									'link' => 'air-conditioning/',
								],
								[
									'text' => '耐震',
									'link' => 'strong/',
								],
							],
						],
						'external' => false,
						'no_modal' => false,
					],
					'モデルハウス' => [
						'link' => '/modelhouse/',
						'img' => 'img_menu_03.png',
						'alt' => '',
						'items' => [
							[
								[
									'text' => 'モデルハウスに行ってみよう！',
									'link' => 'invitation/',
								],
								[
									'text' => 'モデルハウス一覧',
									'link' => 'list/',
								],
								[
									'text' => 'バーチャルモデルハウス',
									'link' => 'virtual/',
								],
							],
						],
						'external' => false,
						'no_modal' => false,
					],
					'実例紹介' => [
						'link' => '/gallery/',
						'img' => 'img_menu_04.png',
						'alt' => '',
						'items' => [
							[
								[
									'text' => '実例（戸建住宅）',
									'link' => 'works/',
								],
								[
									'text' => '実例（医院、施設建築、その他）',
									'link' => 'works02/',
								],
								[
									'text' => 'インタビュー（医院）',
									'link' => 'interview_clinic',
								],
								[
									'text' => 'インタビュー（店舗）',
									'link' => 'interview_shop',
								],
                [
									'text' => 'インタビュー（戸建住宅）',
									'link' => 'interview_house',
								],
                [
									'text' => 'インタビュー（施設建築）',
									'link' => 'interview_withwood',
								],
							],
						],
						'external' => false,
						'no_modal' => false,
					],
					'ライフスタイル' => [
						'link' => '/resort/',
						'img' => 'img_menu_05.png',
						'alt' => '',
						'items' => [
							[
								[
									'text' => '愛犬家住宅',
									'link' => 'doglover/',
								],
								[
									'text' => '田舎暮らし',
									'link' => 'country/',
								],
								[
									'text' => '別荘建築',
									'link' => 'villa/',
								],
								[
									'text' => '平屋の家',
									'link' => 'hiraya/',
								],
								[
									'text' => '信州＆甲斐',
									'link' => 'shinshu/',
								],
								[
									'text' => '平屋ライフ',
									'link' => 'morestory/',
								],
							],
						],
						'external' => false,
						'no_modal' => false,
					],
					'医院建築' => [
						'link' => '/doctors/',
						'img' => 'img_menu_06.png',
						'alt' => '',
						'items' => [
							[
								[
									'text' => 'ウィズ・ドクターとは',
									'link' => 'plan/',
								],
								[
									'text' => '医院設計のポイント',
									'link' => 'point/',
								],
								[
									'text' => '開業までのスケジュール',
									'link' => 'schedule/',
								],
							],
						],
						'external' => false,
						'no_modal' => false,
					],
					'施設建築' => [
						'link' => '/withwood/',
						'external' => false,
						'no_modal' => true,
					],
					'宅地・分譲住宅' => [
						'link' => 'https://www.mitsuihome.co.jp/bunjyo/contents/code/search_result?office=37',
						'external' => true,
						'no_modal' => true,
					],
				];
				?>
				<ul class="globalnav-left">
					<?php foreach ($global_menu as $title => $menu) : ?>
						<li class="globalnav-item">
							<a href="<?php echo $path . $menu['link']; ?>" <?php echo $menu['external'] ? 'target="_blank"' : ''; ?>><span><?php echo $title; ?></span></a>
							<?php if (!$menu['no_modal']) :  ?>
								<div class="globalnav-menu">
									<figure class="globalnav-menu__image">
										<img src="<?php echo $path; ?>/assets/images/index/<?php echo $menu['img']; ?>" alt="">
									</figure>
									<div class="globalnav-menu__body">
										<a href="<?php echo $path . $menu['link']; ?>" class="globalnav-menu__heading"><?php echo $title; ?><i class="icon-angle-right02"></i></a>
										<div class="globalnav-menu__child-body">
											<?php foreach ($menu['items'] as $col) : ?>
												<ul class="globalnav-menu__list">
													<?php foreach ($col as $item) : ?>
														<li class="globalnav-menu__item">
															<a href="<?php echo $path . $menu['link'] . $item['link'];  ?>" class="globalnav-menu__item-link"><?php echo $item['text']; ?></a>
                              <?php if (!empty($item['child_items'])): ?>
                              <ul class="globalnav-child-menu">
                                <?php foreach ($item['child_items'] as $child_item): ?>
                                <li class="globalnav-child-menu__item">
                                  <a href="<?php echo $path . $menu['link'] . $child_item['link']; ?>" class="globalnav-child-menu__link"><?php echo $child_item['text']; ?></a>
                                </li>
                                <?php endforeach; ?>
                              </ul>
                              <?php endif; ?>
														</li>
													<?php endforeach; ?>
												</ul>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="globalnav-right">
					<a class="globalnav-btn-reform" href="<?php echo $path; ?>/reform/">リフォームを<br>お考えの方はこちら</a>
				</div>
			</div>

		</nav>
	</div>
</header>

<header class="globalnav globalnav-sm fixed-top">
	<div class="container">
		<nav>
			<div class="globalnav-head">
				<div class="logo">
					<a href="<?php echo $path; ?>/">
						<img src="<?php echo $path; ?>/assets/images/common/logo.svg" width="160px" class="三井ホーム 甲信アルプスホーム">
						<strong>甲信アルプスホーム</strong>
					</a>
				</div>
				<div class="globalnav-sub">
					<div class="button">
						<a class="btn btn-green-lighter btn-md" href="<?php echo $path; ?>/news/"><i class="icon-user"></i>イベント情報</a>
						<a class="btn btn-blue-lighter btn-md" href="https://www.mitsuihome.co.jp/catalog/" target="_blank"><i class="icon-text"></i>資料請求</a>
					</div>
					<div class="hamb">
						<div class="inner">
							<span class="icon-hamb"></span>
						</div>
					</div>
				</div>
			</div>

		</nav>
	</div>

	<div class="hamb-body">
		<div class="scroll">
			<ul class="list-type02">
				<?php foreach ($global_menu as $title => $menu) : ?>
					<li>
						<a href="<?php echo $path . $menu['link']; ?>" <?php echo $menu['external'] ? 'target="_blank"' : ''; ?> class="hamb-body__link <?php echo $menu['no_modal'] ? '' : 'hamb-body__link-pulldown'; ?>"><?php echo $title; ?></a>
						<?php if (!$menu['no_modal']) :  ?>
							<div class="globalnav-menu-sm">
								<?php foreach ($menu['items'] as $col) : ?>
									<ul class="globalnav-menu-sm__list">
										<li class="globalnav-menu-sm__item">
											<a href="<?php echo $path . $menu['link']; ?>" class="globalnav-menu-sm__item-link"><?php echo $title; ?></a>
										</li>
										<?php foreach ($col as $item) : ?>
											<li class="globalnav-menu-sm__item">
												<a href="<?php echo $path . $menu['link'] . $item['link'];  ?>" class="globalnav-menu-sm__item-link"><?php echo $item['text']; ?></a>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
				<li>
					<a href="<?php echo $path; ?>/reform/" class="hamb-body__link">リフォームをお考えの方はこちら
					</a>
				</li>
			</ul>
			<!-- <ul class="list-type02">
				<li>
					<a href="<?php echo $path; ?>/" class="hamb-body__link">ホーム</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/about/" class="hamb-body__link hamb-body__link-pulldown">甲信アルプスホームとは</a>
					<div class="globalnav-menu-sm">
						<ul class="globalnav-menu-sm__list">
							<li class="globalnav-menu-sm__item">
								<a href="<?php echo $path; ?>/about/" class="globalnav-menu-sm__item-link">甲信アルプスホームとは</a>
							</li>
							<li class="globalnav-menu-sm__item">
								<a href="<?php echo $path; ?>/about/company/ksa/" class="globalnav-menu-sm__item-link">甲信アルプスホームについて</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="<?php echo $path; ?>/technology/" class="hamb-body__link hamb-body__link-pulldown">テクノロジー</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/modelhouse/" class="hamb-body__link hamb-body__link-pulldown">モデルハウス</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/gallery/" class="hamb-body__link hamb-body__link-pulldown">実例紹介</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/resort/" class="hamb-body__link hamb-body__link-pulldown">ライフスタイル</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/doctors/" class="hamb-body__link hamb-body__link-pulldown">医院建築</a>
				</li>
				<li>
					<a href="https://www.mitsuihome.co.jp/bunjyo/contents/code/search_result?office=37" target="_blank" class="hamb-body__link">宅地・分譲住宅</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/reform/" class="hamb-body__link">
						<img src="<?php echo $path; ?>/assets/images/common/logo-reform.svg" alt=" 三井のリフォーム">
					</a>
				</li>
			</ul> -->
			<div class="buttons">
				<a class="btn" href="<?php echo $path; ?>/about/company/profile/">会社概要</a>
				<a class="btn" href="<?php echo $path; ?>/recruit/">採用情報</a>
				<a class="btn" href="https://www.mitsuihomeclub.com/" target="_blank" rel="noopener noreferrer">オーナー様</a>
			</div>
			<div class="contact-button">
				<a class="btn" href="<?php echo $contacturl; ?>" target="_blank"><i class="icon-mail"></i>お問い合わせ</a>
			</div>
			<div class="icons">
				<a href="https://www.facebook.com/mitsuihome" target="_blank"><i class="icon-facebook"></i></a>
				<a href="https://www.instagram.com/mitsuihome/" target="_blank"><i class="icon-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCAZcChRExJy9UoezYmT5gPQ" target="_blank"><i class="icon-youtube"></i></a>
			</div>
		</div>
	</div>

</header>


<div class="side-nav d-none d-xl-block">
	<nav>
		<a href="<?php echo $contacturl; ?>" target="_blank"><i class="icon-mail"></i>お問い合わせ</a>
	</nav>
</div>
