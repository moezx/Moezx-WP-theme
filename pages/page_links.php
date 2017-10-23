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

<style>
article h4 {
	margin: 0;
	padding: 0;
}

article {
	overflow:hidden;
	padding: 0;
	margin: auto;
}

article h1 {
	box-sizing: border-box;
	color: #666;
	display: block;
	font-family: din,Hiragino Sans GB,Microsoft Yahei,Arial,sans-serif;
	font-size: 20px;
	font-weight: 400;
	height: 30px;
	line-height: 30px;
	margin: 0 0 70px;
	padding: 0;
	position: relative;
	text-size-adjust: 100%;
	width: 505px;
	-webkit-font-smoothing: antialiased;
	-webkit-margin-after: 70px;
	-webkit-margin-before: 0;
	-webkit-margin-end: 0;
	-webkit-margin-start: 0
}

article h4 {
	line-height: 30px
}

article ul {
	list-style: none
}

article a {
	outline: none;
	text-decoration: none;
	color: #444
}

article p {
	max-height: 100%;
}

.block {
	position: relative;
	background: #fff;
	padding: 15px;
	margin-bottom: 20px;
	border-radius: 5px
}

.post.block {
	margin-bottom: 40px
}

#content .post {
	white-space: normal;
	word-break: break-all;
	word-wrap: break-word
}

.linkpage h3 {
	padding: 15px 0;
	font-size: 25px
}

.linkpage ul:after {
	content: " ";
	clear: both;
	display: block
}

.linkpage li {
	overflow:hidden;
	float: left;
	width: 50%;
	position: relative;
	transition: all .3s ease-out;
	border-radius: 5px
}

.linkpage li:hover {
	background: rgba(255,243,245,.8)
}

.linkpage li a {
	display: block;
	padding: 0 10px 0 90px;
	height: 90px
}

.linkpage li a img {
	width: 60px;
	height: 60px;
	border-radius: 50%;
	position: absolute;
	top: 15px;
	left: 15px;
	cursor: pointer
}

.linkpage li a h4 {
	font-size: 20px;
	padding-top: 8px
}

.linkpage li a h4,.linkpage li a p {
	cursor: pointer;
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden
	margin:margin: auto auto 0 auto;
}

.linkpage li a p {
	color: #999
}

::selection {
	background: rgba(0,149,255,.2)
}

::-moz-selection {
	background: rgba(0,149,255,.2)
}

</style>

<div class="wrapper">
	
	<article class="block post linkpage">
			<h1 class="post-title">友人帐</h1>
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
			<p><b>后宫的小伙伴们╮(￣▽￣)╭</b></p>
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
			</ul><!--
			<h3>好像阵亡了一些诶，谨以此悼念他们...</h3>
			<ul>
				<?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'dead'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img class="media__img avatar" data-original="%s" src="/wp-content/uploads/2017/08/loader3.gif" alt="后宫" height="60" width="60" style="display: block;" scale="0"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : '/wp-content/uploads/2017/08/loader3.gif', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙好懒什么都没留哦╮(╯▽╰)╭' );
                }
                ?>
			</ul>--><p><p/>
			<p><em>欢迎交换友链哦</em>ꉂ(ˊᗜˋ<em>)<br>请提供你的：<strong>1、名字</strong>；<strong>2、头像url</strong>（守卫小锁，请尽量提供https哦）；<strong>3、一句话简介</strong>（如果是熟人我会亲自帮你写一个介绍的哦）；<strong>4、主页地址</strong>~<br>Emmmm...如你所见，名字太长手机上看就悲催了，CSS排版方面我不太擅长的QAQ</em></p>
	</article>
</div>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
<div>
	<?php comments_template();?>
</div>
<div class="wrapper">
</div>
<?php get_footer();?>