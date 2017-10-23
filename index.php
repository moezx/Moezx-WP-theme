<?php get_header();?>
<div class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" id="ajax-image" style="background-image: url(
	<?php
        srand( microtime() * 1000000 );
        $num = rand( 1, 5 );
        $image_file = stripslashes(get_option('strive_indexsuiji'.$num));
        echo $image_file;
    ?> );"></figure>
	<canvas height="550" width="1585" id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>
<div class="wrapper" id="ajax-main">
	<ul class="posts-list mb+ js-posts">
		<i class="post-status iconfont"></i>
		<?php if (have_posts()) : ?>
			<?php while ( have_posts() ) : the_post();?>
				<?php if( has_post_format( 'status' )) { //状态 ?>
					<?php include( 'includes/excerpt-status.php' );?>
				<?php } else if ( has_post_format( 'audio' )) { //日志 ?>
					<?php include( 'includes/excerpt-audio.php' );?>
				<?php } else{ //标准 ?>
					<?php include( 'includes/excerpt.php' );?>
			<?php } ?>
		    <?php endwhile; endif ;?>
	</ul>
	<div class="pagination mb+ js-pagination">
		<div class="js-next pagination__load">
			<?php echo next_posts_link('<i class="iconfont"></i>','');?>
		</div>
	</div>
</div>
<?php get_footer();?>