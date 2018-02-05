<div class="fat-footer">
	<div class="wrapper">
		<div class="layout layout--center">
			<div class="layout__item palm-mb">
				<div class="media"><a href="https://www.2heng.xin" target="_blank">
					<img class="media__img avatar" id="pagedown" src="https://2heng.xin/wp-content/uploads/2017/08/avatar1.jpg" alt="" height="50" width="50"></a>
					<div class="media__body">
						<h4><b><em>Just as Gump's mom said:</em></b></h4>
						<div><p style="font-size:20px"><b><em>"You got to put the past behind you before you can move on."</em></b></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Icon font-->
<link rel="stylesheet" href="https://at.alicdn.com/t/font_434143_aaewsyx2ypnzh0k9.css">
<center>
<!-- Below is popup box, you may add any popup window you like, all you need is a <a> tag to href="popupbox_name", popupbox_name is the id of the first layer of <div>
以下是弹出窗口部分，可自行添加窗口，通过跳转到"#popupbox_name"的a标签调用，popupbox_name就是下面第一层div的id，可自定义 -->
<?php  if ( wp_is_mobile() == false ) { ?>
<!-- About for computer -->
<div id="about" class="overlay">
	<div class="popup"><br>
		<h2><b>关于我</b></h2>
		<a class="close" href="#mashiro">&times;</a>
		<div class="content"><br>
			<p>Hello! 我是Mashiro，一个可爱的蓝孩子~</p>
			<p>就读于上海财经大学，向往技术却误入商科，不过也渐渐喜欢上了经济学…因为数据分析也需要Coder嘛</p>
			<p>主攻R和Python，偶尔折腾HTML/CSS/JS/PHP</p>
			<p>喜欢画画，希望有一天能够被称为画师</p>
			<p>Mashiro以及站名都来自一部动画，因为和主角有一样的爱好呀；为什么是白猫呢？因为对GitHub<i class="fa fa-github" aria-hidden="true"></i>有种执念…而且我真的是猫控！</p>
		</div>
	</div>
</div>
<?php } ?>
<?php  if ( wp_is_mobile() == true ) { ?>
<!-- About for mobile -->
<div id="about" class="overlay">
	<div class="popup-m"><br>
		<h2><b>关于我</b></h2>
		<a class="close" href="#mashiro">&times;</a>
		<div class="content">
			<p>Hello! 我是Mashiro，一个可爱的蓝孩子~</p>
			<p>就读于上海财经大学，向往技术却误入商科，不过也渐渐喜欢上了经济学…因为数据分析也需要Coder嘛</p>
			<p>主攻R和Python，偶尔折腾HTML/CSS/JS/PHP</p>
			<p>喜欢画画，希望有一天能够被称为画师</p>
			<p>Mashiro以及站名都来自一部动画，因为和主角有一样的爱好呀。为什么是白猫呢？因为对GitHub<i class="fa fa-github" aria-hidden="true"></i>有种执念…而且我真的是猫控！</p>
		</div>
	</div>
</div>
<?php } ?>
<!-- Subscribe, need plugin WP Easy Post Mailer -->
<div id="subscribebox" class="overlay">
	<div class="popup"><br>
		<h2><b>订阅喵~</b></h2>
		<a class="close" href="#mashiro">&times;</a>
		<div class="content">
			<?php #echo wpm_form(1); ?>
		</div>
	</div>
</div>
<div id="linkme" class="overlay">
	<div class="popup"><br>
		<h2><b>如何捕获野生喵？</b></h2>
		<a class="close" href="#mashiro">&times;</a>
		<div class="container2">
				<div class="body" id="mashiro">
					<div><br>
						<a data-balloon="QQ" data-balloon-pos="up" href="#qqbox"><i class="fa fa-qq"></i></a>
						<!--<a data-balloon="微信" data-balloon-pos="up" href="#wxbox"><i class="fa fa-weixin"></i></a>-->
						<a data-balloon="微博" data-balloon-pos="up" target="_blank" href="http://weibo.com/2960337711"><i class="fa fa-weibo"></i></a>
						<a data-balloon="咦，这是什么？" data-balloon-pos="up" target="_blank" href="http://twitter.com/2hengxin"><i class="fa fa-twitter"></i></a>
						<a data-balloon="Telegram，最棒的通信应用没有之一" data-balloon-pos="up" target="_blank" href="https://t.me/SakurasoNoMashiro"><i class="fa fa-telegram"></i></a>
						<a data-balloon="GitHub" data-balloon-pos="up" target="_blank" href="http://github.com/mashirozx"><i class="fa fa-github"></i></a>
						<?php  if ( wp_is_mobile() == false ) { ?>
						<a data-balloon="一个理财网站" data-balloon-pos="up" target="_blank" href="http://steamcommunity.com/id/necomashiro"><i class="fa fa-steam"></i></a>
						<a data-balloon="Instagram" data-balloon-pos="up" target="_blank" href="http://instagram.com/mashiro.zx"><i class="fa fa-instagram"></i></a>
						<!--<a data-balloon="Google+" data-balloon-pos="up" target="_blank" href="https://plus.google.com/108592328418802919577"><i class="fa fa-google-plus"></i></a>-->
						<?php } ?>
						<a data-balloon="蚊香 ╮(￣▽￣)╭" data-balloon-pos="up" target="_blank" href="http://music.163.com/m/user/home?id=2655217"><i class="myiconfont myicon-could-music"  style="font-size: 23px;"></i></a>
						<a data-balloon="提高资势水平" data-balloon-pos="up" target="_blank" href="https://www.zhihu.com/people/young-dolphin"><i class="myiconfont myicon-zhihu"  style="font-size: 18px;"></i></a>
						<a data-balloon="摸鱼的萌新" data-balloon-pos="up" target="_blank" href="https://pixiv.me/mashirozx"><i class="myiconfont myicon-pixiv"  style="font-size: 16px;"></i></a>
						<a data-balloon="呜哇，真的要抓我呀QAQ" data-balloon-pos="up" target="_blank" href="https://www.google.cn/maps/place/上海市+楊浦区+五角場/@31.3028018,121.5028193,11z/data=!4m2!3m1!1s0x35b273c620699f27:0x2329169c05532408?hl=ja"><i class="fa fa-map-marker"></i></a>
						<?php  if ( wp_is_mobile() == false ) { ?>
						<a data-balloon="Bug Report" data-balloon-pos="up" target="_blank" href="mailto:adadam@qq.com"><i class="fa fa-bug"></i></a>
						<?php } ?>
						<br><br>
					</div>
				</div>
		</div>
		<a href="#subscribebox"><span style="color: #ff748c;">邮件订阅&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i></span></a><br><br>
	</div>
</div>
<div id="donatebox" class="overlay">
	<div class="popup-m"><br>
		<h2><i class="fa fa-hand-o-right" aria-hidden="true"></i> <b><span class="hpopup my-face-shake" data-popuptext="留言/邮件(i@shino.cc)告诉我地址，过节时会寄明信片哦~"><i class="fa fa-gift" aria-hidden="true" style="color:#ff748c"></i></span> 谢谢饲主了喵~</b></h2>
		<a class="close" href="#mashiro">&times;</a>
		<div class="content">
			<img src="https://2heng.xin/wp-content/uploads/2017/09/donate.png" alt="Donate"><br><br>
			<p><a href="https://paypal.me/mashirozx" target="_blank"><span style="color: #ff748c;">Donate with PayPal&nbsp;<i class="fa fa-cc-paypal" aria-hidden="true"></i></span></a></p>
		</div>
	</div>
</div>
<div id="qqbox" class="overlay">
	<div class="popup"><br>
		<h2><b>QQ</b></h2>
		<a class="close" href="#linkme">&times;</a>
		<div class="content"><br>
			<h1><b>2436156978</b></h1>
			<br>
			请注明来自博客 (⑉•ᴗ•⑉)Thanks❤︎"
		</div>
	</div>
</div>
<div id="wxbox" class="overlay">
	<div class="popup">
		<h2><b>微信</b></h2>
		<a class="close" href="#linkme">&times;</a>
		<div class="content">
			<img src="https://2heng.xin/wp-content/uploads/2017/10/weixin_friends.jpg" alt="扫一扫">
                           请注明来自博客 :)
		</div>
	</div>
</div>
<div id="statisticsbox" class="overlay">
	<div class="popup">
		<a class="close" href="#mashiro">&times;</a>
		<div class="content">
			<center><i class="myiconfont myicon-cat-head"  style="font-size: 60px;"></i></center>
			<br><span id="span_dt_dt"></span>
			<br>---------------------
			<br><b>服务器情报</b>
			<br>MySQL在<?php timer_stop(3); ?>秒内处理了<?php echo get_num_queries(); ?>条请求
			<br>域名解析和CDN由<a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=9vqtqvpr&utm_source=9vqtqvpr" target="_blank" rel="noopener" style="color: #ff748c;">阿里云</a>提供
			<br>静态资源托管于<a href="https://portal.qiniu.com/signup?code=3law7j8vjpniq" target="_blank" rel="noopener" style="color: #ff748c;">七牛云</a> 
			<br>服务器托管于东京<a href="http://www.vultr.com/?ref=7196564" target="_blank" rel="noopener" style="color: #ff748c;">Vultr</a><br><br><br>
		</div>
	</div>
</div>
<div id="hitokotobox" class="overlay">
	<div class="popup">
		<br>
		<br>
		<a class="close" href="#mashiro">&times;</a>
		<div class="content">
			<script>
				window.onload=function () {
					var hitokoto = document.querySelector('.hitokoto');
					var from = document.querySelector('.from');
					update();
					function update() {
						gethi = new XMLHttpRequest();
						gethi.open("GET","https://api.shino.cc/hi/"); 
						gethi.send();
						gethi.onreadystatechange = function () {
						if (gethi.readyState===4 && gethi.status===200) {
							var Hi = JSON.parse(gethi.responseText);
							hitokoto.innerHTML = Hi.hitokoto;
							from.innerHTML = "from: <b>" + Hi.from + "</b>"; 
							}
						}
					};
				}
			</script>
			<a id="hi.reload">
			<img src="https://2heng.xin/wp-content/uploads/2017/10/saytapme.png" alt="miao~" scale="0" style="display: inline;">
			<img src="https://2heng.xin/wp-content/uploads/2017/08/loadcat.gif" alt="miao~" scale="0" style="display: inline;"></a>
			<div>
				<br>
				<br>
				<p class="hitokoto" style="text-align: left; font-size:20px">
				</p>
				<br>
				<p class="from"style="text-align: right;">
				</p>
			</div>
			<script>
				document.getElementById("hi.reload").addEventListener("click", function() {
					var hitokoto = document.querySelector('.hitokoto');
					var from = document.querySelector('.from');
					var updatehi = document.querySelector('.sub');
					update();

					function update() {
						gethi = new XMLHttpRequest();
						gethi.open("GET", "https://api.shino.cc/hi/");
						gethi.send();
						gethi.onreadystatechange = function() {
							if (gethi.readyState === 4 && gethi.status === 200) {
								var Hi = JSON.parse(gethi.responseText);
								hitokoto.innerHTML = Hi.hitokoto;
								from.innerHTML = "from: <b>" + Hi.from + "</b>";
							}
						}
					};
				});		
			</script>
		</div>
		<p>
			<span style="font-size: 8pt;"><a href="https://hi.shino.cc" target="_blank" rel="noopener"><span style="color: #999999;">FULLSCREEN | 全屏</span></a></span>
		</p>
	</div>
</div>
</center>
<?php #<!-- bibi~　終わり --> ?>
<script language="javascript">
	function show_date_time() {
		window.setTimeout("show_date_time()", 1000);
		BirthDay = new Date("06/02/2017 18:00:00"); 
		today = new Date();
		timeold = (today.getTime() - BirthDay.getTime());
		sectimeold = timeold / 1000
		secondsold = Math.floor(sectimeold);
		msPerDay = 24 * 60 * 60 * 1000
		e_daysold = timeold / msPerDay
		daysold = Math.floor(e_daysold);
		e_hrsold = (e_daysold - daysold) * 24;
		hrsold = setzero(Math.floor(e_hrsold));
		e_minsold = (e_hrsold - hrsold) * 60;
		minsold = setzero(Math.floor((e_hrsold - hrsold) * 60));
		seconds = setzero(Math.floor((e_minsold - minsold) * 60));
		span_dt_dt.innerHTML = "博客已经萌萌哒运行了<br>" + daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
		//If you need only days, uncomment next line.
		//monitorday.innerHTML = daysold;
	}

	function setzero(i) {
		if (i < 10) {
			i = "0" + i
		};
		return i;
	}
	show_date_time();
</script>
<footer class="footer" role="contentinfo">
<div class="wrapper wrapper--wide split split--responsive">
	<div class="split__title">
		© 2017 Mashiro 沪ICP备17028213号
	</div>
		Powered by WordPress, Theme <a href="https://github.com/moezx/Moezx-WP-theme" target="_blank">Moezx</a> by <a href="https://2heng.xin" target="_blank">Mashiro</a>
</div>
</footer>
<form class="js-search search-form search-form--modal" method="get" action="<?php bloginfo('url'); ?>" role="search">
	<div class="search-form__inner">
		<div>
			<i class="iconfont"></i>
			<input class="text-input" name="s" placeholder="Enter keyword ..." type="search">
		</div>
	</div>
</form>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/module.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<button class="gototop"><span  class="goTOP">:)</span></button>
<script>
	!function(o,t,i,n){"use strict";o.gototop=function(n,s){var e=0,l=o("html, body"),a=this;a.$el=o(n),a.el=n,a.$el.data("gototop",a),a.initialize=function(){a.options=o.extend({},o.gototop.defaultOptions,s),a.listen()},a.listen=function(){t.addEventListener("scroll",a.getScrollPosition,!1),a.$el.on("click",{position:a.options.position,duration:a.options.duration},a.scrolltotop)},a.getScrollPosition=function(){e=i.body.scrollTop||t.pageYOffset,a.checkPosition()},a.checkPosition=function(){e>=a.options.visibleAt?(a.$el.show(),a.$el.addClass(a.options.classname)):a.$el.removeClass(a.options.classname)},a.scrolltotop=function(o){l.animate({scrollTop:o.data.position},o.data.duration)},a.initialize()},o.gototop.defaultOptions={position:50,duration:3e3,classname:"isvisible",visibleAt:500},o.fn.gototop=function(t){return this.each(function(){new o.gototop(this,t)})}}(jQuery,window,document);
</script>
<script type="text/javascript">
	$(function(){
			// $(".gototop").gototop();
			$(".gototop").gototop({
				position : 0,
				duration : 1250,
				visibleAt : 300,
				classname : "isvisible"
			});
		});
</script>
<script>
		var infinite_scroll = {
			loading: {
				img: '<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif',
				msgText: '',
				finishedMsg: ''
			},
			nextSelector: '.js-next a',
			navSelector: '.js-pagination',
			itemSelector: '.post',
			contentSelector: '.js-posts'
		};
	</script>
<script type="text/javascript">
function  showImg(){
document.getElementById("wxImg").style.display='block';
}
function hideImg(){
document.getElementById("wxImg").style.display='none';
}
</script>
<script>
	$(window).scroll(function(){
	var wintop = $(window).scrollTop(), docheight = 
		
		$(document).height(), winheight = $(window).height();
				var scrolled = (wintop/(docheight-winheight))*100;
	  
			//$('.scroll-line').css('width', (scrolled + '%'));
		
		$('.goTOP').each(function () {
			var gotop = scrolled.toFixed(0)
			$(this).html(gotop + '% <i class="fa fa-arrow-up" aria-hidden="true"></i>');
		});
	});
</script>
<!--これはぼくの花火ですあなたが好きならそれを取る:P-->
<!-- ps. This is also avaliable in Atom Editor, search for Active Power Mode plugin. -->
<script>
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(7 1D(a,b){6(E 9===\'11\'&&E 1h===\'11\')1h.9=b();D 6(E Z===\'7\'&&Z.2Z)Z([],b);D 6(E 9===\'11\')9["v"]=b();D a["v"]=b()})(2Y,7(){q(7(c){4 d={};7 F(a){6(d[a])q d[a].9;4 b=d[a]={9:{},1o:a,1p:T};c[a].2X(b.9,b,b.9,F);b.1p=19;q b.9}F.m=c;F.c=d;F.p="";q F(0)})([7(g,h,j){\'2S 2M\';4 k=8.S(\'2H\');k.L=t.1r;k.G=t.1v;k.C.2G=\'M:2F;H:0;I:0;2E-2D:2C;z-2b:28\';t.27(\'1W\',7(){k.L=t.1r;k.G=t.1v});8.B.V(k);4 l=k.1T(\'2d\');4 m=[];4 n=0;v.13=19;7 K(a,b){q r.A()*(b-a)+a}7 12(a){6(v.18){4 u=K(0,1Q);q\'1P(\'+K(u-10,u+10)+\', 1O%, \'+K(1L,1K)+\'%, \'+1+\')\'}D{q t.U(a).w}}7 1j(){4 a=8.1J;4 b;6(a.1l===\'1I\'||(a.1l===\'W\'&&a.1H(\'1G\')===\'1F\')){4 c=j(1)(a,a.1z);b=a.1s();q{x:c.I+b.I,y:c.H+b.H,w:12(a)}}4 d=t.2l();6(d.1x){4 e=d.1y(0);4 f=e.1A;6(f.1B===8.1C){f=f.1w}b=e.1s();q{x:b.I,y:b.H,w:12(f)}}q{x:0,y:0,w:\'1E\'}}7 1q(x,y,a){q{x:x,y:y,O:1,w:a,N:{x:-1+r.A()*2,y:-3.5+r.A()*2}}}7 v(){{4 a=1j();4 b=5+r.R(r.A()*10);1M(b--){m[n]=1q(a.x,a.y,a.w);n=(n+1)%1N}}{6(v.13){4 c=1+2*r.A();4 x=c*(r.A()>0.5?-1:1);4 y=c*(r.A()>0.5?-1:1);8.B.C.1d=x+\'1b\';8.B.C.1a=y+\'1b\';1R(7(){8.B.C.1d=\'\';8.B.C.1a=\'\'},1S)}}};v.18=T;7 Q(){1t(Q);l.1U(0,0,k.L,k.G);1V(4 i=0;i<m.1X;++i){4 a=m[i];6(a.O<=0.1)1Y;a.N.y+=0.1Z;a.x+=a.N.x;a.y+=a.N.y;a.O*=0.20;l.21=a.O;l.22=a.w;l.23(r.R(a.x-1.5),r.R(a.y-1.5),3,3)}}1t(Q);g.9=v},7(n,o){(7(){4 l=[\'24\',\'25\',\'L\',\'G\',\'26\',\'1m\',\'1k\',\'29\',\'2a\',\'1i\',\'2c\',\'2e\',\'2f\',\'2g\',\'2h\',\'2i\',\'2j\',\'2k\',\'37\',\'2m\',\'2n\',\'2o\',\'2p\',\'2q\',\'2r\',\'2s\',\'2t\',\'2u\',\'2v\',\'2w\',\'2x\'];4 m=t.2y!=2z;7 J(b,c,d){4 e=d&&d.2A||T;6(e){4 f=8.2B(\'#1g-1f-1e-M-17-Y\');6(f){f.1w.1n(f)}}4 g=8.S(\'Y\');g.1o=\'1g-1f-1e-M-17-Y\';8.B.V(g);4 h=g.C;4 i=t.U?U(b):b.2I;h.2J=\'2K-2L\';6(b.16!==\'W\')h.2N=\'2O-2P\';h.M=\'2Q\';6(!e)h.2R=\'15\';l.2T(7(a){h[a]=i[a]});6(m){6(b.2U>X(i.G))h.1m=\'2V\'}D{h.2W=\'15\'}g.P=b.1c.1u(0,c);6(b.16===\'W\')g.P=g.P.30(/\\s/g,"\\31");4 j=8.S(\'32\');j.P=b.1c.1u(c)||\'.\';g.V(j);4 k={H:j.33+X(i[\'1k\']),I:j.34+X(i[\'1i\'])};6(e){j.C.35=\'#36\'}D{8.B.1n(g)}q k}6(E n!="14"&&E n.9!="14"){n.9=J}D{t.J=J}}())}])});',62,194,'||||var||if|function|document|exports|||||||||||||||||return|Math||window||POWERMODE|color||||random|body|style|else|typeof|__webpack_require__|height|top|left|getCaretCoordinates|getRandom|width|position|velocity|alpha|textContent|loop|round|createElement|false|getComputedStyle|appendChild|INPUT|parseInt|div|define||object|getColor|shake|undefined|hidden|nodeName|mirror|colorful|true|marginTop|px|value|marginLeft|caret|textarea|input|module|borderLeftWidth|getCaret|borderTopWidth|tagName|overflowY|removeChild|id|loaded|createParticle|innerWidth|getBoundingClientRect|requestAnimationFrame|substring|innerHeight|parentNode|rangeCount|getRangeAt|selectionStart|startContainer|nodeType|TEXT_NODE|webpackUniversalModuleDefinition|transparent|text|type|getAttribute|TEXTAREA|activeElement|80|50|while|500|100|hsla|360|setTimeout|75|getContext|clearRect|for|resize|length|continue|075|96|globalAlpha|fillStyle|fillRect|direction|boxSizing|overflowX|addEventListener|999999|borderRightWidth|borderBottomWidth|index|borderStyle||paddingTop|paddingRight|paddingBottom|paddingLeft|fontStyle|fontVariant|fontWeight|getSelection|fontSize|fontSizeAdjust|lineHeight|fontFamily|textAlign|textTransform|textIndent|textDecoration|letterSpacing|wordSpacing|tabSize|MozTabSize|mozInnerScreenX|null|debug|querySelector|none|events|pointer|fixed|cssText|canvas|currentStyle|whiteSpace|pre|wrap|strict|wordWrap|break|word|absolute|visibility|use|forEach|scrollHeight|scroll|overflow|call|this|amd|replace|u00a0|span|offsetTop|offsetLeft|backgroundColor|aaa|fontStretch'.split('|'),0,{}))
</script>  
<script>  
POWERMODE.colorful = true; // make power mode colorful  
POWERMODE.shake = false; // turn off shake  
document.body.addEventListener('input', POWERMODE);  
</script>
<!--花火以上です。-->  
<div id="fb-root">
</div>
<?php echo stripslashes(get_option('strive_yjtjcode')); ?>
<?php wp_footer(); ?>
</body>
</html>
