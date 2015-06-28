
<div id="navbar">

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<img src="{!! bloginfo('template_directory') !!}/images/sitetitle.png" alt="Code for Oedo / コードフォー大江戸">
				</a>
			</div>
			<div id="navbar-top" class="collapse navbar-collapse">
{{--
				// menu - Primary Left Side
				wp_nav_menu([
					'menu'              => 'primary-left',
					'theme_location'    => 'primary-left',
					'depth'             => 2,
					'container'         => false,
					// 'container_class'   => 'collapse navbar-collapse',
					// 'container_id'      => 'L-navbar',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker(),
				])
				// menu - Primary Left Side
--}}
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
		</div><!-- /.Container-fluid -->
	</nav>
</div><!-- /.Navbar -->
