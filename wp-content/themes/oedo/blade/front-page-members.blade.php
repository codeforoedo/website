<div class="container">
	<ul class="row">
@postloop([
	'post_status' => 'publish',
	'post_type' => 'members',
	'posts_per_page' => -1,
	'orderby' => 'meta_value',
	'meta_key' => 'display_order',
	'order' => 'ASC',
])
<?php
	$image_url = wp_get_attachment_image_src(get_field('thumbnail'), 'member_thumbnail')[0];
?>
		<li class="col-sm-4 col-xs-6">
			<img class="img-circle" src="{!! $image_url !!}" alt="{{ get_field('name') }}">
			<dl class="profile">
				<dt class="ja">{{ get_field('name') }}<span>{{ get_field('pronunciation') }}</span></dt>
				<dd>{{ get_field('post_edo') }}
@if (get_field('post_present'))
／ {{ get_field('post_present') }}
@endif
				</dd>
				<dd>{{ get_field('comment') }}</dd>
			</dl>
		</li>
@postempty
		<li>メンバーを設定してください。</li>
@endpostloop
	</ul>

</div>

<div class="vaycat">
	<img src="{!! bloginfo('template_directory') !!}/images/vaycat.png" alt="">
	<h4>空猫（ベイキャット）</h4>
	<p>
		空猫はCODE for 大江戸の財政を支える募金猫です。
		空猫の背中の溝に入れられた募金は、空猫基金（そらねこききん）としてCODE for 大江戸の活動に役立てられます。
	</p>
</div>
