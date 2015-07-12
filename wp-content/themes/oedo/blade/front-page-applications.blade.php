<div class="container">
	<ul class="row">
@postloop([
	'post_status' => 'publish',
	'post_type' => 'applications',
	'posts_per_page' => -1,
])
		<li class="col-sm-12 col-xs-12">
			<div><a href="{!! the_field('landingpage_url') !!}">
				<img src="{!! the_field('icon') !!}" alt="{{ the_field('name') }}">
				<br>
				{{ the_field('name') }}
			</a></div>
		</li>
@postempty
	<li>アプリケーションを設定してください。</li>
@endpostloop
	</ul>
</div>
