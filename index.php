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
<div class="wrapper">
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
<?php  if ( wp_is_mobile() == false ) { ?>
<?php #<link type="text/css" rel="stylesheet" media="screen" href="https://moezx.2heng.xin/js/sakura/jquery-sakura.css" /> ?>
<?php #<script src="https://moezx.2heng.xin/js/sakura/jquery-sakura.js"></script> ?>
<style>
@-webkit-keyframes fall{0%{opacity:.9;top:0}100%{opacity:.2;top:100%}}@keyframes fall{0%{opacity:.9;top:0}100%{opacity:.2;top:100%}}@-webkit-keyframes blow-soft-left{0%{margin-left:0}100%{margin-left:-50%}}@keyframes blow-soft-left{0%{margin-left:0}100%{margin-left:-50%}}@-webkit-keyframes blow-medium-left{0%{margin-left:0}100%{margin-left:-100%}}@keyframes blow-medium-left{0%{margin-left:0}100%{margin-left:-100%}}@-webkit-keyframes blow-soft-right{0%{margin-left:0}100%{margin-left:50%}}@keyframes blow-soft-right{0%{margin-left:0}100%{margin-left:50%}}@-webkit-keyframes blow-medium-right{0%{margin-left:0}100%{margin-left:100%}}@keyframes blow-medium-right{0%{margin-left:0}100%{margin-left:100%}}@-webkit-keyframes sway-0{0%{-webkit-transform:rotate(-5deg)}40%{-webkit-transform:rotate(28deg)}100%{-webkit-transform:rotate(3deg)}}@keyframes sway-0{0%{-ms-transform:rotate(-5deg);transform:rotate(-5deg)}40%{-ms-transform:rotate(28deg);transform:rotate(28deg)}100%{-ms-transform:rotate(3deg);transform:rotate(3deg)}}@-webkit-keyframes sway-1{0%{-webkit-transform:rotate(10deg)}40%{-webkit-transform:rotate(43deg)}100%{-webkit-transform:rotate(15deg)}}@keyframes sway-1{0%{-ms-transform:rotate(10deg);transform:rotate(10deg)}40%{-ms-transform:rotate(43deg);transform:rotate(43deg)}100%{-ms-transform:rotate(15deg);transform:rotate(15deg)}}@-webkit-keyframes sway-2{0%{-webkit-transform:rotate(15deg)}40%{-webkit-transform:rotate(56deg)}100%{-webkit-transform:rotate(22deg)}}@keyframes sway-2{0%{-ms-transform:rotate(15deg);transform:rotate(15deg)}40%{-ms-transform:rotate(56deg);transform:rotate(56deg)}100%{-ms-transform:rotate(22deg);transform:rotate(22deg)}}@-webkit-keyframes sway-3{0%{-webkit-transform:rotate(25deg)}40%{-webkit-transform:rotate(74deg)}100%{-webkit-transform:rotate(37deg)}}@keyframes sway-3{0%{-ms-transform:rotate(25deg);transform:rotate(25deg)}40%{-ms-transform:rotate(74deg);transform:rotate(74deg)}100%{-ms-transform:rotate(37deg);transform:rotate(37deg)}}@-webkit-keyframes sway-4{0%{-webkit-transform:rotate(40deg)}40%{-webkit-transform:rotate(68deg)}100%{-webkit-transform:rotate(25deg)}}@keyframes sway-4{0%{-ms-transform:rotate(40deg);transform:rotate(40deg)}40%{-ms-transform:rotate(68deg);transform:rotate(68deg)}100%{-ms-transform:rotate(25deg);transform:rotate(25deg)}}@-webkit-keyframes sway-5{0%{-webkit-transform:rotate(50deg)}40%{-webkit-transform:rotate(78deg)}100%{-webkit-transform:rotate(40deg)}}@keyframes sway-5{0%{-ms-transform:rotate(50deg);transform:rotate(50deg)}40%{-ms-transform:rotate(78deg);transform:rotate(78deg)}100%{-ms-transform:rotate(40deg);transform:rotate(40deg)}}@-webkit-keyframes sway-6{0%{-webkit-transform:rotate(65deg)}40%{-webkit-transform:rotate(92deg)}100%{-webkit-transform:rotate(58deg)}}@keyframes sway-6{0%{-ms-transform:rotate(65deg);transform:rotate(65deg)}40%{-ms-transform:rotate(92deg);transform:rotate(92deg)}100%{-ms-transform:rotate(58deg);transform:rotate(58deg)}}@-webkit-keyframes sway-7{0%{-webkit-transform:rotate(72deg)}40%{-webkit-transform:rotate(118deg)}100%{-webkit-transform:rotate(68deg)}}@keyframes sway-7{0%{-ms-transform:rotate(72deg);transform:rotate(72deg)}40%{-ms-transform:rotate(118deg);transform:rotate(118deg)}100%{-ms-transform:rotate(68deg);transform:rotate(68deg)}}@-webkit-keyframes sway-8{0%{-webkit-transform:rotate(94deg)}40%{-webkit-transform:rotate(136deg)}100%{-webkit-transform:rotate(82deg)}}@keyframes sway-8{0%{-ms-transform:rotate(94deg);transform:rotate(94deg)}40%{-ms-transform:rotate(136deg);transform:rotate(136deg)}100%{-ms-transform:rotate(82deg);transform:rotate(82deg)}}.sakura{background:-webkit-linear-gradient(120deg,rgba(255,183,197,.9),rgba(255,197,208,.9));background:linear-gradient(120deg,rgba(255,183,197,.9),rgba(255,197,208,.9));pointer-events:none;position:absolute}
</style>
<script>
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(t($){9 o=0;9 p=[\'1n\',\'o\',\'1B\',\'1A\',\'\'];9 q=p.1o;1d(9 x=0;x<q&&!u.A;++x){u.A=u[p[x]+\'1E\'];u.O=u[p[x]+\'26\']||u[p[x]+\'1X\']}w(!u.A){u.A=t(a){9 b=1U 1T().1S();9 c=r.1O(0,16-(b-o));9 d=u.T(t(){a(b+c)},c);o=b+c;F d}}w(!u.O){u.O=t(a){1z(a)}}$.1i.Q=t(a,b){1d(9 x=0;x<q;++x){w(!p[x]){a=a.1q()}1h=(v 1j Z?v[0]:v);1h.1H(p[x]+a,b,1J)}F v};t P(a){w(a 1j Z){a=a[0]}9 b=a.1G();F(b.1b>=0&&b.N>=0&&b.1K<=(u.1L||M.L.18)&&b.R<=(u.1I||M.L.1f))}t S(a){F a[r.E(r.D()*a.1o)]}t z(a,b){F r.E(r.D()*(b-a+1))+a}$.1i.B=t(i,j){9 k=v.1p==""?$(\'1v\'):v;9 l={U:[\'H-19-N\',\'H-1a-N\',\'H-19-R\',\'H-1a-R\'],V:\'B\',1c:1,G:14,W:10,X:1Q,Y:[\'y-0\',\'y-1\',\'y-2\',\'y-3\',\'y-4\',\'y-5\',\'y-6\',\'y-7\',\'y-8\']};9 j=$.1r({},l,j);w(1s i===\'1t\'||i===\'1u\'){k.17({\'1w-x\':\'1x\'});9 m=t(){w(k.K(\'B-J-I\')){T(t(){A(m)},j.X)}9 b=S(j.U);9 c=S(j.Y);9 d=((M.L.18*0.1C)+r.1D(r.D()*5))*j.1c;9 e=\'1F \'+d+\'s 11 12 1\'+\', \'+b+\' \'+(((d>1e?d:1e)-20)+z(0,20))+\'s 11 12 1g\'+\', \'+c+\' \'+z(2,4)+\'s 11 12 1g\';9 f=$(\'<1M 1N="\'+j.V+\'" />\');9 g=z(j.W,j.G);9 h=g-r.E(z(0,j.W)/3);f.Q(\'1P\',t(){w(!P(v)){$(v).13()}}).Q(\'1R\',t(a){w(($.1k(a.1l,j.U)!=-1||$.1k(a.1l,j.Y)!=-1)&&!P(v)){$(v).13()}}).17({\'-1n-1m\':e,1m:e,\'1V-1W\':z(j.G,(j.G+r.E(r.D()*10)))+\'C \'+z(1,r.E(h/4))+\'C\',1Y:g+\'C\',N:(r.D()*M.L.1f-1Z)+\'C\',\'21-1b\':(-(r.E(r.D()*20)+15))+\'C\',22:h+\'C\'});k.23(f)};k.K(\'B-J-I\',A(m))}24 w(i===\'25\'){9 n=k.K(\'B-J-I\');w(n){O(n);k.K(\'B-J-I\',27)}T(t(){$(\'.\'+j.V).13()},(j.X+1y))}}}(Z));',62,132,'|||||||||var||||||||||||||||||Math||function|window|this|if||sway|randomInt|requestAnimationFrame|sakura|px|random|floor|return|maxSize|blow|id|anim|data|documentElement|document|left|cancelAnimationFrame|elementInViewport|prefixedEvent|right|randomArrayElem|setTimeout|blowAnimations|className|minSize|newOn|swayAnimations|jQuery||linear|0s|remove||||css|clientHeight|soft|medium|top|fallSpeed|for|30|clientWidth|infinite|el|fn|instanceof|inArray|animationName|animation|webkit|length|selector|toLowerCase|extend|typeof|undefined|start|body|overflow|hidden|50|clearTimeout|moz|ms|007|round|RequestAnimationFrame|fall|getBoundingClientRect|addEventListener|innerWidth|false|bottom|innerHeight|div|class|max|AnimationEnd|300|AnimationIteration|getTime|Date|new|border|radius|CancelRequestAnimationFrame|height|100||margin|width|append|else|stop|CancelAnimationFrame|null'.split('|'),0,{}))
</script>
<script>
    $(function() {
        $('body').sakura();
    });
    $(window).load(function() {
        $('body').sakura();
    });
</script>
<?php } ?>
<?php get_footer();?>