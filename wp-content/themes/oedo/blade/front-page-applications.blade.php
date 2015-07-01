<div id="container">
	<ul class="row">
@postloop([
	'post_status' => 'publish',
	'post_type' => 'applications',
	'posts_per_page' => -1,
])
<?php
/*
	$attachment_id = get_field('mem_thumb');
	$size = 'member_thumb';
	$image_urls = wp_get_attachment_image_src($attachment_id, $size);
	$image_url = $image_urls[0];
*/
?>
{{--
		<li class="col-md-4 col-xs-6">
			<p class="name-thumb"><img src="{!! $image_url !!}" alt="{{ the_field('mem_name') }}"></p>
			<dl class="profile">
				<dt class="ja"><?php the_field('mem_name'); ?><span>{{ the_field('mem_name_en') }}</span></dt>
				<dd>{{ the_field('mem_post_edo') }}：{{ the_field('mem_post') }}</dd>
				<dd>{{ the_field('mem_comment') }}</dd>
			</dl>
		</li>
--}}
@postempty
アプリケーションがありません。
@endpostloop
	</ul>
</div>{{-- .container --}}
