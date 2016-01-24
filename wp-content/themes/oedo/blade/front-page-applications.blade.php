<div class="container">
	<ul class="row">
@postloop([
	'post_status' => 'publish',
	'post_type' => 'applications',
	'posts_per_page' => -1,
	'orderby' => 'meta_value',
	'meta_key' => 'display_order',
	'order' => 'ASC',
])
		<li class="col-md-4 col-sm-12 col-xs-12">
			<div><a href="{!! get_field('application_url') !!}">
				<img src="{!! get_field('icon') !!}" alt="{{ get_field('name') }}">
				<br>
				{{ get_field('name') }}
			</a></div>
		</li>
@postempty
	<li>アプリケーションを設定してください。</li>
@endpostloop
	</ul>
</div>
