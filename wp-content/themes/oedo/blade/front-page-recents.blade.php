<div class="container">
	<div class="row">
		{{-- 最近の記事リスト --}}
		<div class="top-event-sec col-md-10 col-xs-12">
			<ul>
@postloop([
	'post_status' => 'publish',
//	'category_name' => 'event',
	'posts_per_page' => 5,
])
<?php $category = get_the_category()[0] ?>
				<li><a href="{!! the_permalink(); !!}">
					<dl>
						<dt>{{ the_time(get_option('date_format')) }}</dt>
						<dd>
@if (get_field('event_date'))
							<span class="label label-primary">{{ date('n月j日', strtotime(get_field('event_date'))) }}開催</span>
@endif
							{{ the_title() }}
						</dd>
					</dl>
				</a></li>
@postempty
				<li>記事がありません。</li>
@endpostloop
			</ul>
			<p class="more-btn"><a href="/all/">もっと読む &gt;</a></p>
		</div>

		{{-- カテゴリリスト --}}
		<div class="col-md-2 col-xs-12">
			{!! bootstrap_category_list() !!}
		</div>
	</div>
</div>
