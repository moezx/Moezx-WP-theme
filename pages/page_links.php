<?php
/*
Template Name: 友情链接
*/
?>
<?php get_header(); ?>
<div class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" id="ajax-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1583&h=550&zc=1);"></figure>
	<canvas height="550" width="1585" id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>

<div class="wrapper">
	
	<article class="block post linkpage">
			<h1 class="post-title">友人帐</h1>

			<p><b>乱七八糟的个人 web 服务 ∠( ᐛ 」∠)＿</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'me'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><b>后宫的小伙伴们 ╮(￣▽￣)╭</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'normal'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><b>好像阵亡了一些诶，谨以此悼念他们...（如果恢复了请留言告诉我哦）</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'dead'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="nofollow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><b>下面推荐一些优秀的博客（真大佬）</b></p>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'dalao'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>
			<p><em>欢迎交换友链哦</em>ꉂ(ˊᗜˋ)<em><br>请提供你的：<strong>1、名字</strong>；<strong>2、头像url</strong>（守卫小锁，请尽量提供https哦）；<strong>3、一句话简介</strong>（如果是熟人我会亲自帮你写一个介绍的哦）；<strong>4、主页地址</strong>~<br>Emmmm...如你所见，名字太长手机上看就悲催了，CSS排版方面我不太擅长的QAQ</em></p>
	</article>
</div>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
<div>
	<?php comments_template();?>
</div>
<div class="wrapper">
</div>
<?php get_footer();?>