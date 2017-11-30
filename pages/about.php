<?php
/*
Template Name: 关于
*/
?>
<?php get_header(); ?>
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
	<div class="post-body js-gallery mb">
	<div class="popcontainer" id="hello-mashiro"><bot-ui></bot-ui></div><br>
	<span style="color: #c5c5c5;">Last updated in&nbsp;<?php the_modified_time('Y-m-j'); ?></span>
	<br><p>歌单同步自<a href="http://music.163.com/#/user/home?id=2655217" target="_blank">我的网易云音乐</a></p>
	<?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	</div>
	</article>
</div>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
<div class="wrapper">
</div>
<script src="https://cdn.jsdelivr.net/vue/latest/vue.min.js"></script>
<script src="https://www.2heng.xin/botui/build/botui.min.js"></script>
<script>var botui=new BotUI("hello-mashiro");
botui.message.add({delay:800,content:"\u4f60\u597d\ud83d\udc4b"}).then(function(){botui.message.add({delay:1100,content:"\u6211\u662f Mashiro"}).then(function(){botui.message.add({delay:1100,content:"\u4e00\u4e2a\u53ef\u7231\u7684\u84dd\u5b69\u5b50~"}).then(function(){botui.action.button({delay:1600,action:[{text:"\u7136\u540e\u5462\uff1f \ud83d\ude15",value:"sure"},{text:"\u5c11\u5e9f\u8bdd\uff01 \ud83d\ude44",value:"skip"}]}).then(function(a){"sure"==a.value&&sure();"skip"==a.value&&end()})})})});
var sure=function(){botui.message.add({delay:1E3,content:"\u8c22\u8c22\ud83d\ude18"}).then(function(){secondpart()})},end=function(){botui.message.add({delay:1E3,content:"\ud83d\ude12\u6211\u731c\u4f60\u5927\u6982\u5f88\u7740\u6025"}).then(function(){secondpart()})},secondpart=function(){botui.message.add({delay:1500,content:"\u6211\u76ee\u524d\u5c31\u8bfb\u4e8e\u4e0a\u6d77\u8d22\u7ecf\u5927\u5b66"}).then(function(){botui.message.add({delay:1500,content:"\u5411\u5f80\u6280\u672f\u5374\u8bef\u5165\u5546\u79d1\uff0c\u4f46\u540e\u6765\u559c\u6b22\u4e0a\u4e86\u7ecf\u6d4e\u5b66\u2026"}).then(function(){botui.message.add({delay:1800,
content:"\u56e0\u4e3a\u6570\u636e\u5206\u6790\u4e5f\u9700\u8981Coder\u561b"}).then(function(){botui.message.add({delay:1E3,content:"\u5e73\u65f6\u4e3b\u653bR\u548cPython\uff0c\u5076\u5c14\u4e5f\u6298\u817eHTML/CSS/JS/PHP"}).then(function(){botui.message.add({delay:1800,content:"\u559c\u6b22\u753b\u753b\uff0c\u5e0c\u671b\u6709\u4e00\u5929\u80fd\u591f\u88ab\u79f0\u4e3a\u753b\u5e08"}).then(function(){botui.action.button({delay:1100,action:[{text:"\u4e3a\u4ec0\u4e48\u53ebMashiro\u5462\uff1f \ud83e\udd14",
value:"why-mashiro"}]}).then(function(a){thirdpart()})})})})})})},thirdpart=function(){botui.message.add({delay:1E3,content:"Mashiro\u4ee5\u53ca\u7ad9\u540d\u90fd\u6765\u81ea\u4e00\u90e8\u52a8\u753b\uff0c\u56e0\u4e3a\u548c\u4e3b\u89d2\u6709\u4e00\u6837\u7684\u7231\u597d\u5440"}).then(function(){botui.action.button({delay:1500,action:[{text:"\u4e3a\u4ec0\u4e48\u662f\u767d\u732b\u5462\uff1f \ud83e\udd14",value:"why-cat"}]}).then(function(a){fourthpart()})})},fourthpart=function(){botui.message.add({delay:1E3,
content:"\u56e0\u4e3a\u5bf9GitHub\u6709\u79cd\u6267\u5ff5\u2026"}).then(function(){botui.message.add({delay:1100,content:"\u800c\u4e14\u6211\u771f\u7684\u662f\u732b\u63a7\uff01"}).then(function(){botui.message.add({delay:1600,content:"\u90a3\u4e48\uff0c\u4ed4\u7ec6\u770b\u770b\u6211\u7684\u535a\u5ba2\u5427\uff1f ^_^"})})})};
</script>
<?php get_footer();?>