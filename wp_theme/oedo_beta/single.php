<?php get_header('single'); ?>
<?php the_post(); ?>
<ol id="bred">
	<li id="home"><a href="/">Home</a></li>
	<li><?php the_title(); ?></li>
</ol>

<div class="headings-area">
	<h1 id="sec01-headings" class="headings"><?php the_title(); ?></h1>
	<p class="lead"><?php the_time('Y年n月j日'); ?> Posted</p>
</div>
<div id="single-main">
	<div id="single-post">
		<?php the_content(); ?>
		<p id="go-top"><a href="/">トップページに戻る &gt;</a></p>
	</div><!--/single-post-->
</div><!--main-->

<?php get_footer('post'); ?>