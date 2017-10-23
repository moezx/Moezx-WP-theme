<li class="post">
<div class="type">
	<div class="mask">
		<i class="iconfont"></i>
	</div>
</div>
<h2 class="no-background" style="color: #666666">
<span>
<a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a>
</span>
<div class="post-time">
			<?php the_time('Y-m-d') ?>
</div>
</h2>
<div class="post-category">
	<?php the_category(', ') ?>
</div>
</li>