<!DOCTYPE html>
<!--　ねえ、この大佬様、私のコードを幸せにコピーして欲しい！:P　-->
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="theme-color" content="#222022">
<meta property="og:site_name" content="Mashiro's Codes" />
<?php include('includes/seo.php');?>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
<link rel="shortcut icon" type="images/x-icon" href="<?php echo stripslashes(get_option('strive_favicon')); ?>">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lib.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
<?php if ( is_single() ) { ?>
<!-- Codes Highlight -->
<style>
.hljs-comment,.hljs-quote{color:#8e908c}
.hljs-deletion,.hljs-name,.hljs-regexp,.hljs-selector-class,.hljs-selector-id,.hljs-tag,.hljs-template-variable,.hljs-variable{color:#c82829}
.hljs-built_in,.hljs-builtin-name,.hljs-link,.hljs-literal,.hljs-meta,.hljs-number,.hljs-params,.hljs-type{color:#f5871f}
.hljs-attribute{color:#eab700}
.hljs-addition,.hljs-bullet,.hljs-string,.hljs-symbol{color:#718c00}
.hljs-section,.hljs-title{color:#4271ae}
.hljs-keyword,.hljs-selector-tag{color:#8959a8}
.hljs{display:block;overflow-x:auto;background:#fff;color:#4d4d4c;padding:.5em}
.hljs-emphasis{font-style:italic}
.hljs-strong{font-weight:700}
</style>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script >hljs.initHighlightingOnLoad();</script>
<?php } ?>
<style>
.gototop{display:none;-webkit-animation:hide 350ms ease-out forwards 1;animation:hide 350ms ease-out forwards 1;padding:16px 16px;border:0;border-radius:16px;text-align:center;background-color:rgba(242,242,242,.5);color:#858585;position:fixed;bottom:16px;right:16px;-webkit-transition:background-color .1s ease-in-out;transition:background-color .1s ease-in-out}.gototop>span{display:inline-block;-webkit-transition:transform .1s .1s ease-in-out;transition:transform .1s .1s ease-in-out}.gototop:focus,.gototop:hover{background-color:#D5D6E2}.gototop:focus>span,.gototop:hover>span{-webkit-transform:translateY(-2px);transform:translateY(-2px)}.isvisible{-webkit-animation:show 1s ease-out forwards 1;animation:show 1s ease-out forwards 1}@-webkit-keyframes hide{0%{opacity:1;-webkit-transform:translateY(0)}25%{opacity:.5;-webkit-transform:rotate(-3deg) translateY(-40px)}75%{-webkit-transform:rotate(3deg)}100%{opacity:0;-webkit-transform:translateY(100px)}}@keyframes hide{0%{opacity:1;transform:translateY(0)}25%{opacity:.5;transform:rotate(-3deg) translateY(-40px)}75%{transform:rotate(3deg)}100%{opacity:0;transform:translateY(100px)}}@-webkit-keyframes show{0%{-webkit-transform:rotate(0)}25%{opacity:.5;-webkit-transform:rotate(-3deg) translateY(-40px)}75%{-webkit-transform:rotate(3deg)}100%{opacity:1;-webkit-transform:rotate(0)}}@keyframes show{0%{transform:rotate(0)}25%{opacity:.5;transform:rotate(-3deg) translateY(-40px)}75%{transform:rotate(3deg)}100%{opacity:1;transform:rotate(0)}}
</style>
<script type="text/javascript" src="https://use.fontawesome.com/da85397146.js"  async="async"></script>
<style>
.post [rel="gallery"]:after {background: #666666;}
.post [rel="gallery"]:after {background: #666666;background: -moz-linear-gradient(top,  #666666 0%, #666666 100%);background: -webkit-gradient(linear, top center, bottom center, color-stop(0%,#666666), color-stop(100%,#666666));background: -webkit-linear-gradient(top,  #666666 0%,#666666 100%);background: -o-linear-gradient(top,  #666666 0%,#666666 100%);background: -ms-linear-gradient(top,  #666666 0%,#666666 100%);background: linear-gradient(to bottom,  #666666 0%,#666666 100%);}
.wpcf7-text:focus,.wpcf7-number:focus,.wpcf7-select:focus,.wpcf7-textarea:focus,.text-input:focus {border-color: #666666;}[id="submit"],.wpcf7-submit,.btn--primary {background: #666666;}.post-status {color: #666666;}
a {color: #666666;}
</style>
<?php my_scripts_method; wp_head()?>
<?php echo stripslashes(get_option('strive_tjcode')); ?>
<style>
/** Do not delete this. **/
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 80%;
	height: 5%;
	z-index: 9999;
}
</style>
<script>
	$(window).load(function() {
		<?php #// Animate loader off screen?>
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<!-- Lazyload -->
<script>
/*! Lazy Load 1.9.3 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);console.log("\n %c WP Theme: Moezx %c https://github.com/moezx/Moezx-WP-theme \n\n","color: #fadfa3; background: #030307; padding:5px 0;","background: #fadfa3; padding:5px 0;");
</script>
<script type="text/javascript">
    $(function() {
        $("img").lazyload({
            effect:"fadeIn"
          });
        });
</script> 
<!-- Lazyload --> 
<!-- Google Analytics -->
<script>
// Your GA code here
</script>
<!-- Google Analytics End -->
</head>
<!--　大佬扒代码愉快！ :P　-->
<body class="home blog fancy-captions round-avatars" id="ajax-body">
<?php include('includes/loading.php'); ?>
<header>
<?php # Top-Scroll-line, if you like, just uncomment here # <!--<div class="scroll-line"></div>-->?>
<a id="logo" href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
<img src="<?php echo stripslashes(get_option('strive_mylogo')); ?>" alt="<?php bloginfo('name');?>" /></a>
<a id="nav-toggle" href="#"><span></span></a>
<nav>
<div class="menu-top-container">
	<ul id="menu-top" class="menu">
		<?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'nav')); ?>
	</ul>
</div>
</nav>
<i class=" js-toggle-search iconfont"></i>
</header>
