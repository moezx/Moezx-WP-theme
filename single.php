<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/smilies.js"></script>
<div style="" class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" id="ajax-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1583&h=550&zc=1);"></figure>
	<canvas id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>
<div class="wrapper" id="ajax-main">
	<article id="post-1108" class="post-1108 post type-post status-publish format-status has-post-thumbnail hentry category-uncategorized tag-520 js-gallery">
	<h1 class="post-title">
		<?php the_title_attribute(); ?>	
	</h1>
	<p style="text-align: right;"><em><span style="color: #c5c5c5;">Last updated in&nbsp;<?php the_modified_time('Y-m-j'); ?></span>  <?php 

global $user_ID; if( $user_ID && current_user_can('level_10') ) : ?><span style="color: #c5c5c5">&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;<?php echo (wp_statistics_pages(total,wp_statistics_get_uri(),wp_statistics_uri_to_id(wp_statistics_get_uri()))+1); ?></span><?php endif; ?></em></p>
	<div class="post-body js-gallery mb">
	<?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<p><b>以上。 <span style="font-size:18px"><i class="fa fa-github" aria-hidden="true"></i></span></b></p>
	<p>如果你喜欢这篇文章可以资助我，我将非常感激，因为服务器本身是一项不小的开支、博客的维护也需要大量精力，而博主只是一个普通的本科生  (,,• ₃ •,,)</p>
	<!--<iframe src="https://2heng.xin/donate/" style="overflow-x:hidden;overflow-y:hidden; border:0xp none #fff; min-height:240px; width:100%;"  frameborder="0" scrolling="no"></iframe>-->
	<a href="#donatebox"><span style="color: #ff6600;">打赏 | Donate</span></a><a href="#linkme"><span style="color: #ff6600;">&nbsp;&nbsp;&nbsp;关注 | Follow</span></a><span style="color: #ff6600;" id="social-share">&nbsp;&nbsp;&nbsp;分享 | Share</span><br>
	<div style="display: none;" class="" id="social">
		<center><br><br><div class="social-share" data-disabled="diandian"></div></center>
	</div>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/css/share.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.16/js/social-share.min.js"></script>
	<br>
	<p align="center">本站全部文字在<a href="https://creativecommons.org/licenses/by/4.0/deed.zh" target="_blank" style="text-decoration: none;color:#444;text-decoration:underline"><i class="fa fa-creative-commons" aria-hidden="true"></i>署名 4.0 国际 (CC BY 4.0)</a>条款下提供，<b>转载请注明出处</b>。</p>
	</div>
	<div class="meta split split--responsive cf">
		<div class="split__title">
			<time datetime="2016-05-20 17:31">
				<?php the_time('Y-m-d') ?>发布
			</time>
&nbsp;共<?php echo count_words ($text); ?>&nbsp;
<?php if ((get_the_modified_time('Y')*365+get_the_modified_time('z')) > (get_the_time('Y')*365+get_the_time('z'))) : ?><?php #原最后修改时间#the_modified_time('Y-m-j'); ?><?php else : ?><?php the_date_xml(); ?><?php endif; ?>
			&nbsp;标签:
			<span class=""><?php the_tags('', ' '); ?></span>
		</div>
		<div class="slide">
			<a class="btn-slide" title="Comments"><i class="iconfont"></i>展开评论</a>
		</div>
	</div>
	</article>
</div>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
<div style="display: none;" id="panel">
	<?php if (comments_open()) comments_template( '', true ); ?>
</div>
<div class="wrapper">
</div>
<?php get_footer();?>