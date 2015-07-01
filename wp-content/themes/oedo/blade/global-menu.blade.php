
<div id="navbar">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				{{-- ハンバーガーボタン --}}
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				{{-- ブランド --}}
				<a class="navbar-brand" href="/">
					<img src="{!! bloginfo('template_directory') !!}/images/sitetitle.png" alt="Code for Oedo / コードフォー大江戸">
				</a>
			</div>
			<div id="navbar-top" class="collapse navbar-collapse">
				{{-- MEMO: お問い合わせはモーダルダイアログで出すために、WordPressメニューの外に出した。 --}}
				<ul class="nav navbar-nav navbar-right">
					<li class="menu-item menu-item-type-custom menu-item-object-custom">
						{{-- MEMO: href属性に "#" を指定するとモーダルダイアログが開かない --}}
						<a title="お問い合わせ" class="btn btn-default" href="" data-toggle="modal" data-target="#contact">お問い合わせ</a>
					</li>
				</ul>
				{{ wp_nav_menu([
					'menu'              => 'global-menu',
					'theme_location'    => 'global-menu',
					'depth'             => 2,
					'container'         => false,
					'menu_class'        => 'nav navbar-nav navbar-right',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker(),
				]) }}
			</div>
		</div>
	</nav>
</div>
