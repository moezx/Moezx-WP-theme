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
        switch( $num )
        {
        case 1: $image_file = stripslashes(get_option('strive_indexsuiji1'));
        break;
        case 2: $image_file = stripslashes(get_option('strive_indexsuiji2'));
        break;
        case 3: $image_file = stripslashes(get_option('strive_indexsuiji3'));
        break;
        case 4: $image_file = stripslashes(get_option('strive_indexsuiji4'));
        break;
        case 5: $image_file = stripslashes(get_option('strive_indexsuiji5'));
        break;
        }
        echo $image_file;
    ?> );"></figure>
	<canvas height="550" width="1585" id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>
<div class="wrapper" id="ajax-main" style="color: rgba(2, 0, 0, 0.6);">
	<article id="post-404">
		<h1 class="mb-">404</h1>
		<p>
			We haven't found the page you were looking for. Perhaps, you should try the search below, or just			<a href="<?php bloginfo('url'); ?>">return to homepage</a>.
		</p>
		<form class="search-form mb+" method="get" action="<?php bloginfo('url'); ?>" role="search">
			<div class="search-form__inner">
				<p class="micro mb-">Use the field below to search the site...</p>
				<div>
					<i class="iconfont"></i>
					<input class="text-input" name="s" placeholder="Enter keyword..." type="search">
				</div>
			</div>
		</form>
	</article>
</div>
<?php get_footer();?>