<div class="container"><div class="row">
	{{-- 最近の記事リスト --}}
	<div class="top-event-sec col-md-10 col-xs-12">
		<ul>
@postloop([
		'post_status' => 'publish',
//		'category_name' => 'event',
		'posts_per_page' => 5,
])
			<li><a href="{!! the_permalink(); !!}">
				<dl>
					<dt>{{ the_time(get_option('date_format')) }}</dt>
					<dd>{{ the_title() }}</dd>
				</dl>
			</a></li>
@postempty
記事がありません。
@endpostloop
		</ul>
		<p class="more-btn"><a href="/all/">もっと見る &gt;</a></p>
	</div>

	{{-- カテゴリリスト --}}
	<div class="col-md-2 col-xs-12">
		{!! bootstrap_category_list() !!}
	</div>
</div></div>
