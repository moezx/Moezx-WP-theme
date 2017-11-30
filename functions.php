<?php
//函数开始
include('includes/theme_options.php');//后台设置
//include('includes/pinyin-permalink.php');//固定连接文章名称转拼音,辣鸡功能
//theme info
include( 'includes/info.php' );
//定义菜单
    if (function_exists('register_nav_menus')){
        register_nav_menus( array(
            'nav' => __('导航')
        ) );
    }
//开启wordpress3.5友情链接管理
add_filter( 'pre_option_link_manager_enabled', '__return_true' ); 
//去除自带js
	wp_deregister_script( 'l10n' );
// 加载前端脚本及样式
function loo_scripts() {
	if (get_option('strive_alt_stylesheet')==''){wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '20150910' );};
	wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery' );
	if ( is_singular() ) {
		wp_enqueue_script( 'comments-ajax', get_template_directory_uri().'/comments-ajax.js', array(),true );	
	};
}
add_action( 'wp_enqueue_scripts', 'loo_scripts' );
//修改评论表情调用路径
add_filter('smilies_src','custom_smilies_src',1,10);
function custom_smilies_src ($img_src,$img,$siteurl){
return get_bloginfo('template_directory').'/images/smilies/'.$img;
}
function wp_smilies(){
  $a = array( 'good','tear','spit','reluctantly','doubt','haha','surprised','anger','tongue','theblackline','smilingeyes','spray','surprised2','Happy','rmb','Grievance','han','ku','bbd','se','shui','huaji' );
  $b = array( 'good','tear','spit','reluctantly','doubt','haha','surprised','anger','tongue','theblackline','smilingeyes','spray','surprised2','Happy','rmb','Grievance','han','ku','bbd','se','shui','huaji' );
  for( $i=0;$i<22;$i++ ){
    echo '<a title="'.$a[$i].'" href="javascript:grin('."'".$a[$i]."'".')"><img src="'.get_bloginfo('template_directory').'/images/smilies/icon_'.$b[$i].'.gif" /></a>';
  }
}
function smilies_reset() {
global $wpsmiliestrans;
// don't bother setting up smilies if they are disabled
if ( !get_option( 'use_smilies' ) )
    return;

    $wpsmiliestrans = array(
    ':good:' => 'icon_good.gif',
    ':han:' => 'icon_han.gif',
    ':spray:' => 'icon_spray.gif',
      ':Grievance:' => 'icon_Grievance.gif',
      ':shui:' => 'icon_shui.gif',
      ':reluctantly:' => 'icon_reluctantly.gif',
        ':anger:' => 'icon_anger.gif',
       ':tongue:' => 'icon_tongue.gif',
       ':se:' => 'icon_se.gif',
       ':haha:' => 'icon_haha.gif',
       ':rmb:' => 'icon_rmb.gif',
       ':doubt:' => 'icon_doubt.gif',
       ':tear:' => 'icon_tear.gif',
       ':surprised2:' => 'icon_surprised2.gif',
       ':Happy:' => 'icon_Happy.gif',
        ':ku:' => 'icon_ku.gif',
        ':surprised:' => 'icon_surprised.gif',
        ':theblackline:' => 'icon_theblackline.gif',
        ':smilingeyes:' => 'icon_smilingeyes.gif',
        ':spit:' => 'icon_spit.gif',
          '8-)' => 'icon_cool.gif',
          '8-O' => 'icon_eek.gif',
          ':-(' => 'icon_sad.gif',
          ':-)' => 'icon_smile.gif',
          ':-?' => 'icon_confused.gif',
          ':-D' => 'icon_biggrin.gif',
          ':-P' => 'icon_razz.gif',
          ':-o' => 'icon_surprised.gif',
          ':-x' => 'icon_mad.gif',
          ':-|' => 'icon_neutral.gif',
          ';-)' => 'icon_wink.gif',
    // This one transformation breaks regular text with frequency.
    //     '8)' => 'icon_cool.gif',
           '8O' => 'icon_eek.gif',
           ':(' => 'icon_sad.gif',
           ':)' => 'icon_smile.gif',
           ':?' => 'icon_confused.gif',
           ':D' => 'icon_biggrin.gif',
           ':P' => 'icon_razz.gif',
           ':o' => 'icon_surprised.gif',
           ':x' => 'icon_mad.gif',
           ':|' => 'icon_neutral.gif',
           ';)' => 'icon_wink.gif',
          ':huaji:' => 'icon_huaji.gif',
          ':bbd:' => 'icon_bbd.gif',
    );
}
smilies_reset();
//去除wordpress自带相册样式
add_filter( 'use_default_gallery_style', '__return_false' );
// 加载短代码文件
include_once( TEMPLATEPATH. '/includes/shortcodes.php' );
/* 替换图片链接为 https */
function my_content_manipulator($content){
    if( is_ssl() ){
        $content = str_replace('http://2heng.xin/wp-content/uploads', 'https://2heng.xin/wp-content/uploads', $content);
    }
    return $content;
    }
    add_filter('the_content', 'my_content_manipulator');
//修改文本编辑器
add_filter('mce_buttons_3','my_buttons');
function my_buttons($buttons){
	$mces=array(
		'cut',
		'copy',
		'paste',
		'hr',
		'fontselect',
		'fontsizeselect',
		'sub',
		'sup',
		'backcolor',
		'anchor',
	);
	foreach($mces as $mce){
		$buttons[]=$mce;
	}
	return $buttons;
}
//给WordPress添加文章形式
add_theme_support( 'post-formats', array( 'status', 'audio' ) );
//移除顶部小工具
add_filter( 'show_admin_bar', '__return_false' );
//禁止WordPress自动生成缩略图
function ztmao_remove_image_size($sizes) {
                unset( $sizes['small'] );
                unset( $sizes['medium'] );
                unset( $sizes['large'] );
                return $sizes;
        }
        add_filter('image_size_names_choose', 'ztmao_remove_image_size');
	
//禁用 auto-embeds
remove_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );
//日志修订功能
//define('WP_POST_REVISIONS', false);
//禁用XML-RPC接口
add_filter('xmlrpc_enabled', '__return_false');
//禁用WP Cron
define('DISABLE_WP_CRON', true);
//禁止代码标点转换
remove_filter('the_content', 'wptexturize');
//删除菜单多余css class
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
//删除后台多余菜单栏


if ( is_admin() ) {
  // 删除左侧菜单
  add_action('admin_menu', 'remove_menus');
}
add_filter('pre_site_transient_update_themes',  create_function('$a', "return null;")); // 关闭主题提示
remove_action('admin_init', '_maybe_update_themes');  // 禁止 WordPress 更新主题
//暗箱效果自动添加标签属性
function lightbox_auto($content) {
	global $post;
	$pattern = "/<a(.*?)href=('|\")([A-Za-z0-9\/_\.\~\:-]*?)(\.bmp|\.gif|\.jpg|\.jpeg|\.png)('|\")([^\>]*?)>/i";
	$replacement = '<a$1href=$2$3$4$5$6 data-title="'.$post->post_title.'" data-lightbox="'.$post->ID.'">';
	$content = preg_replace($pattern, $replacement, $content);
	return $content;
}
add_filter('the_content', 'lightbox_auto',99);
//自动用文章标题为图片添加alt
add_filter( 'the_content', 'image_alt' );
function image_alt($c) {
 global $post;
 $title = $post->post_title;
 $s = array('/src="(.+?.(jpg|bmp|png|jepg|gif))"/i' => 'src="$1" alt="'.$title.'"');
 foreach($s as $p => $r){
  $c = preg_replace($p,$r,$c);
    }
    return $c;
}
/*分类描述*/
function loo_deletehtml($str) {  
    return trim(strip_tags($str)); 
} 
add_filter('category_description', 'loo_deletehtml');

//图片默认连接到媒体文件(原始链接)
update_option('image_default_link_type', 'file');
//去除头部冗余代码
remove_action( 'wp_head',   'feed_links_extra', 3 ); 
remove_action( 'wp_head',   'rsd_link' ); 
remove_action( 'wp_head',   'wlwmanifest_link' ); 
remove_action( 'wp_head',   'index_rel_link' ); 
remove_action( 'wp_head',   'start_post_rel_link', 10, 0 ); 
remove_action( 'wp_head',   'wp_generator' ); 

/* 评论作者链接新窗口打开 */
function specs_comment_author_link() {
    $url    = get_comment_author_url( $comment_ID );
    $author = get_comment_author( $comment_ID );
    if ( empty( $url ) || 'http://' == $url )
        return $author;
    else
        return "<a target='_blank' href='$url' rel='external nofollow' class='url'>$author</a>";
}
add_filter('get_comment_author_link', 'specs_comment_author_link');
/* 设置评论字数限制开始 */
function set_comments_length($commentdata) {
	$minCommentlength = 5;		//最少字数限制
	$maxCommentlength = 200;	//最多字数限制
	$pointCommentlength = mb_strlen($commentdata['comment_content'],'UTF8');	//mb_strlen 1个中文字符当作1个长度
	if ($pointCommentlength < $minCommentlength){
		err('抱歉，您的评论字数过少，请至少输入' . $minCommentlength .'个字（目前字数：'. $pointCommentlength .'个字）');
		exit;
	}
	if ($pointCommentlength > $maxCommentlength){
		err('对不起，您的评论字数过多，请少于' . $maxCommentlength .'个字（目前字数：'. $pointCommentlength .'个字）');
		exit;
	}
	return $commentdata;
}
add_filter('preprocess_comment', 'set_comments_length');
/* 设置评论字数限制结束 */

/*过滤wordpress评论中的html代码*/
function plc_comment_post( $incoming_comment ) {
        $incoming_comment['comment_content'] = htmlspecialchars($incoming_comment['comment_content']);
        $incoming_comment['comment_content'] = str_replace( "'", '&apos;', $incoming_comment['comment_content'] ); 
        return( $incoming_comment );
}
function plc_comment_display( $comment_to_display ) {
        $comment_to_display = str_replace( '&apos;', "'", $comment_to_display );
        return $comment_to_display;
}
add_filter( 'preprocess_comment', 'plc_comment_post', '', 1);
add_filter( 'comment_text', 'plc_comment_display', '', 1);
add_filter( 'comment_text_rss', 'plc_comment_display', '', 1);
add_filter( 'comment_excerpt', 'plc_comment_display', '', 1);
// 评论回复
function weisay_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment;
global $commentcount,$wpdb, $post;
     if(!$commentcount) { //初始化楼层计数器
          $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = $post->ID AND comment_type = '' AND comment_approved = '1' AND !comment_parent");
          $cnt = count($comments);//获取主评论总数量
          $page = get_query_var('cpage');//获取当前评论列表页码
          $cpp=get_option('comments_per_page');//获取每页评论显示数量
         if (ceil($cnt / $cpp) == 1 || ($page > 1 && $page  == ceil($cnt / $cpp))) {
             $commentcount = $cnt + 1;//如果评论只有1页或者是最后一页，初始值为主评论总数
         } else {
             $commentcount = $cpp * $page + 1;
         }
     }
?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
   <article id="div-comment-<?php comment_ID() ?>" class="comment-body">
   <div class="comment-meta ">
      <?php $add_below = 'div-comment'; ?>
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
		</div>
		<div class="comment-chat" <?php if(get_avatar($comment, 40)==true)?>>
        	<div class="comment-metadata"><div class="fn"><?php comment_author_link() ?><?php #echo convertua(get_comment_agent());?><?php if($comment->user_id == 1) echo '<span id="comment_admin">博主</span>' ?></div> :<?php edit_comment_link('编辑','&nbsp;&nbsp;',''); ?><time><?php echo timeago( $comment->comment_date_gmt ); ?></time> <div class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复', 'add_below' =>$add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div></div>
			<?php if ( $comment->comment_approved == '0' ){?><span style="color:#C00; font-style:inherit">您的评论正在等待审核中...</span><br /><?php } ?>
			<?php comment_text() ?>
<div class="comment-metaip"><time><?php echo convertip(get_comment_author_ip()); ?></time></div>
        </div>
	</div>
		<div class="clear"></div>
  </article>
<?php
}
function weisay_end_comment() {
		echo '</li>';
}
//时间倒计时
function timeago( $ptime ) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if($etime < 1) return __('刚刚');
    $interval = array (
        12 * 30 * 24 * 60 * 60  =>  __('年前', 'haoui').' ('.date('Y-m-d', $ptime).')',
        30 * 24 * 60 * 60       =>  __('个月前', 'haoui').' ('.date('m-d', $ptime).')',
        7 * 24 * 60 * 60        =>  __('周前', 'haoui').' ('.date('m-d', $ptime).')',
        24 * 60 * 60            =>  __('天前', 'haoui'),
        60 * 60                 =>  __('小时前', 'haoui'),
        60                      =>  __('分钟前', 'haoui'),
        1                       =>  __('秒前', 'haoui')
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };
}
//评论html过滤
function loo_comment_post( $incoming_comment ) {
	$incoming_comment['comment_content'] = htmlspecialchars($incoming_comment['comment_content']);
	$incoming_comment['comment_content'] = str_replace( "'", '&apos;', $incoming_comment['comment_content'] );
	return( $incoming_comment );
	}
	function loo_comment_display( $comment_to_display ) {
	$comment_to_display = str_replace( '&apos;', "'", $comment_to_display );
	return $comment_to_display;
	}
	add_filter( 'preprocess_comment', 'loo_comment_post', '', 1);
	add_filter( 'comment_text', 'loo_comment_display', '', 1);
	add_filter( 'comment_text_rss', 'loo_comment_display', '', 1);
	add_filter( 'comment_excerpt', 'loo_comment_display', '', 1);
//登陆显示头像
function weisay_get_avatar($email, $size = 48){
return get_avatar($email, $size);
}
//评论回复邮件通知（所有回复都邮件通知）*（美化版）
function comment_mail_notify($comment_id) {
$comment = get_comment($comment_id);
$parent_id = $comment->comment_parent ? $comment->comment_parent : '';
$spam_confirmed = $comment->comment_approved;
if (($parent_id != '') && ($spam_confirmed != 'spam')) {
$wp_email = 'no-reply@' . preg_replace('#^www\.#', '', strtolower($_SERVER['SERVER_NAME'])); //e-mail 发出点, no-reply 可改为可用的 e-mail.
$to = trim(get_comment($parent_id)->comment_author_email);
$subject = '您在 [' . get_option("blogname") . '] 的留言有了回复';
$message = '
<div style="background-color:#fff; border:1px solid #666666; color:#111;
-moz-border-radius:8px; -webkit-border-radius:8px; -khtml-border-radius:8px;
border-radius:8px; font-size:12px; width:702px; margin:0 auto; margin-top:10px;
font-family:微软雅黑, Arial;">
<div style="background:#666666; width:100%; height:60px; color:white;
-moz-border-radius:6px 6px 0 0; -webkit-border-radius:6px 6px 0 0;
-khtml-border-radius:6px 6px 0 0; border-radius:6px 6px 0 0; ">
<span style="height:60px; line-height:60px; margin-left:30px; font-size:12px;">
您在<a style="text-decoration:none; color:#00bbff;font-weight:600;"
href="' . get_option('home') . '"> ' . get_option('blogname') . '
</a>博客上的留言有回复啦！</span></div>
<div style="width:90%; margin:0 auto">
<p>' . trim(get_comment($parent_id)->comment_author) . ', 您好!</p>
<p>您曾在 [' . get_option("blogname") . '] 的文章
《' . get_the_title($comment->comment_post_ID) . '》 上发表评论:
<p style="background-color: #EEE;border: 1px solid #DDD;
padding: 20px;margin: 15px 0;"> ' . (get_comment($parent_id)->comment_content) . '</p>
<p>' . trim($comment->comment_author) . ' 给您的回复如下:
<p style="background-color: #EEE;border: 1px solid #DDD;padding: 20px;
margin: 15px 0;"> ' . ($comment->comment_content) . '</p>
<p>您可以点击 <a style="text-decoration:none; color:#00bbff"
href="' . htmlspecialchars(get_comment_link($parent_id)) . '">查看回复的完整內容</a></p>
<p>欢迎再次光临 <a style="text-decoration:none; color:#00bbff"
href="' . get_option('home') . '">' . get_option('blogname') . '</a></p>
<p>(此邮件由系统自动发出, 请勿回复.)</p>
</div>
</div>';
$message = convert_smilies($message);
$from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
$headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
wp_mail( $to, $subject, $message, $headers );
//echo 'mail to ', $to, '<br/> ' , $subject, $message; // for testing
}
}
add_action('comment_post', 'comment_mail_notify');
//添加特色缩略图支持
if ( function_exists('add_theme_support') )add_theme_support('post-thumbnails');
//输出缩略图地址
function post_thumbnail_src(){
	global $post;
	if( $values = get_post_custom_values("thumb") ) {	//输出自定义域图片地址
		$values = get_post_custom_values("thumb");
		$post_thumbnail_src = $values [0];
	} elseif( has_post_thumbnail() ){    //如果有特色缩略图，则输出缩略图地址
		$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
		$post_thumbnail_src = $thumbnail_src [0];
	} else {
		$post_thumbnail_src = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		if(!empty($matches[1][0])){
			$post_thumbnail_src = $matches[1][0];   //获取该图片 src
		}else{	//如果日志中没有图片，则显示随机图片
			$random = mt_rand(1, 5);
			$post_thumbnail_src = stripslashes(get_option('strive_indexsuiji'.$random));
			//$post_thumbnail_src = get_template_directory_uri().'/images/random/'.$random.'.jpg';
			//如果日志中没有图片，则显示默认图片
			//$post_thumbnail_src = get_template_directory_uri().'/images/default_thumb.jpg';
		}
	};
	echo $post_thumbnail_src;
}
//修改登录页logo和链接
if ( !function_exists( 'loostrive_login_logo' ) ) {
	function loostrive_login_logo() {
	    echo '<style type="text/css">
	        h1 a { background-image:url('.stripslashes(get_option(strive_mylogo)).') !important; background-size: auto auto !important;width:auto !important; }
	    </style>';
	}
}
add_action('login_head', 'loostrive_login_logo');
if ( !function_exists( 'loostrive_wp_login_url' ) ) {
	function loostrive_wp_login_url() {
		return home_url();
	}
}
add_filter('login_headerurl', 'loostrive_wp_login_url');
if ( !function_exists( 'loostrive_wp_login_title' ) ) {
	function loostrive_wp_login_title() {
		return get_option('blogname');
	}
}
add_filter('login_headertitle', 'loostrive_wp_login_title');
//去除谷歌字体
    if (!function_exists('remove_wp_open_sans')) :
    function remove_wp_open_sans() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    }
	// 前台删除Google字体CSS
    add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
	// 后台删除Google字体CSS
    add_action('admin_enqueue_scripts', 'remove_wp_open_sans');
  endif; 
/* 在 WordPress 编辑器添加“下一页”按钮
add_filter('mce_buttons','add_next_page_button');
function add_next_page_button($mce_buttons) {
	$pos = array_search('wp_more',$mce_buttons,true);
	if ($pos !== false) {
		$tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
		$tmp_buttons[] = 'wp_page';
		$mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
	}
	return $mce_buttons;
}*/
//取消内容转义
$qmr_work_tags = array(
  'the_title',             // 标题
  'the_content',           // 内容 *
  'the_excerpt',           // 摘要 *
  'single_post_title',     // 单篇文章标题
  'comment_author',        // 评论作者
  'comment_text',          // 评论内容 *
  'link_description',      // 友链描述（已弃用，但还很常用）
  'bloginfo',              // 博客信息
  'wp_title',              // 网站标题
  'term_description',      // 项目描述
  'category_description',  // 分类描述
  'widget_title',          // 小工具标题
  'widget_text'            // 小工具文本
  );
foreach ( $qmr_work_tags as $qmr_work_tag ) {
  remove_filter ($qmr_work_tag, 'wptexturize');
}
//Gravatar头像
function get_avatar_loo($avatar) { 
        $protocol=is_ssl()?'https':'http';
        $avatar_source='cn.gravatar.com';
        $avatar = preg_replace('/.*\/avatar\/(.*)\?s=([\d]+)&.*/','<img src="'.$protocol.'://'.$avatar_source.'/avatar/$1?s=$2" class="avatar avatar-$2" height="$2" width="$2">',$avatar);
        return $avatar;
}
add_filter('get_avatar', 'get_avatar_loo');

/*移动判断*/
function is_mobile() {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$mobile_browser = Array(
		"mqqbrowser", //手机QQ浏览器
		"opera mobi", //手机opera
		"juc","iuc",//uc浏览器
		"fennec","ios","applewebKit/420","applewebkit/525","applewebkit/532","ipad","iphone","ipaq","ipod",
		"iemobile", "windows ce",//windows phone
		"240x320","480x640","acer","android","anywhereyougo.com","asus","audio","blackberry","blazer","coolpad" ,"dopod", "etouch", "hitachi","htc","huawei", "jbrowser", "lenovo","lg","lg-","lge-","lge", "mobi","moto","nokia","phone","samsung","sony","symbian","tablet","tianyu","wap","xda","xde","zte"
	);
	$is_mobile = false;
	foreach ($mobile_browser as $device) {
		if (stristr($user_agent, $device)) {
			$is_mobile = true;
			break;
		}
	}
	return $is_mobile;
}

/*Disable the emoji's*/
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );    
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
}
/*去除链接中的category*/
add_action( 'load-themes.php',  'no_category_base_refresh_rules');
add_action('created_category', 'no_category_base_refresh_rules');
add_action('edited_category', 'no_category_base_refresh_rules');
add_action('delete_category', 'no_category_base_refresh_rules');
function no_category_base_refresh_rules() {
    global $wp_rewrite;
    $wp_rewrite -> flush_rules();
}
// register_deactivation_hook(__FILE__, 'no_category_base_deactivate');
// function no_category_base_deactivate() {
//     remove_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
//     // We don't want to insert our custom rules again
//     no_category_base_refresh_rules();
// }
// Remove category base
add_action('init', 'no_category_base_permastruct');
function no_category_base_permastruct() {
    global $wp_rewrite, $wp_version;
    if (version_compare($wp_version, '3.4', '<')) {
        // For pre-3.4 support
        $wp_rewrite -> extra_permastructs['category'][0] = '%category%';
    } else {
        $wp_rewrite -> extra_permastructs['category']['struct'] = '%category%';
    }
}
// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
function no_category_base_rewrite_rules($category_rewrite) {
    //var_dump($category_rewrite); // For Debugging
    $category_rewrite = array();
    $categories = get_categories(array('hide_empty' => false));
    foreach ($categories as $category) {
        $category_nicename = $category -> slug;
        if ($category -> parent == $category -> cat_ID)// recursive recursion
            $category -> parent = 0;
        elseif ($category -> parent != 0)
            $category_nicename = get_category_parents($category -> parent, false, '/', true) . $category_nicename;
        $category_rewrite['(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
    }
    // Redirect support from Old Category Base
    global $wp_rewrite;
    $old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
    $old_category_base = trim($old_category_base, '/');
    $category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';
    
    //var_dump($category_rewrite); // For Debugging
    return $category_rewrite;
}
    
// Add 'category_redirect' query variable
add_filter('query_vars', 'no_category_base_query_vars');
function no_category_base_query_vars($public_query_vars) {
    $public_query_vars[] = 'category_redirect';
    return $public_query_vars;
}
    
// Redirect if 'category_redirect' is set
add_filter('request', 'no_category_base_request');
function no_category_base_request($query_vars) {
    //print_r($query_vars); // For Debugging
    if (isset($query_vars['category_redirect'])) {
        $catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
        status_header(301);
        header("Location: $catlink");
        exit();
    }
    return $query_vars;
}

//主题函数结束

//字数统计
function count_words ($text) {
global $post;
if ( '' == $text ) {
   $text = $post->post_content;
   if (mb_strlen($output, 'UTF-8') < mb_strlen($text, 'UTF-8')) $output .= '' . mb_strlen(preg_replace('/\s/','',html_entity_decode(strip_tags($post->post_content))),'UTF-8') . '字';
   return $output;}
}

//给外部链接加上跳转
add_filter('the_content','the_content_nofollow',999);
function the_content_nofollow($content)
{
    preg_match_all('/<a(.*?)href="(.*?)"(.*?)>/',$content,$matches);
    if($matches){
        foreach($matches[2] as $val){
            if(strpos($val,'://')!==false && strpos($val,home_url())===false && !preg_match('/\.(jpg|jepg|png|ico|bmp|gif|tiff)/i',$val)){
                $content=str_replace("href=\"$val\"", "href=\"".home_url()."/go/?url=$val\" ",$content);
            }
        }
    }
    return $content;
}

//上传大小限制
@ini_set( 'upload_max_size' , '50M' ); 
@ini_set( 'post_max_size', '50M'); 
@ini_set( 'max_execution_time', '300' ); 

//Comment Location Start
function convertip($ip) {
	$dat_path = dirname(__FILE__).'/QQWry.Dat'; //*数据库路径/QQWry.Dat*//
    if(!$fd = @fopen($dat_path, 'rb')){
        return 'IP date file not exists or access denied';
    }
    $ip = explode('.', $ip);
    $ipNum = $ip[0] * 16777216 + $ip[1] * 65536 + $ip[2] * 256 + $ip[3];
    $DataBegin = fread($fd, 4);
    $DataEnd = fread($fd, 4);
    $ipbegin = implode('', unpack('L', $DataBegin));
    if($ipbegin < 0) $ipbegin += pow(2, 32);
    $ipend = implode('', unpack('L', $DataEnd));
    if($ipend < 0) $ipend += pow(2, 32);
    $ipAllNum = ($ipend - $ipbegin) / 7 + 1;
    $BeginNum = 0;
    $EndNum = $ipAllNum;
    while($ip1num>$ipNum || $ip2num<$ipNum) {
        $Middle= intval(($EndNum + $BeginNum) / 2);
        fseek($fd, $ipbegin + 7 * $Middle);
        $ipData1 = fread($fd, 4);
        if(strlen($ipData1) < 4) {
            fclose($fd);
            return 'System Error';
        }
        $ip1num = implode('', unpack('L', $ipData1));
        if($ip1num < 0) $ip1num += pow(2, 32);
        if($ip1num > $ipNum) {
            $EndNum = $Middle;
            continue;
        }
        $DataSeek = fread($fd, 3);
        if(strlen($DataSeek) < 3) {
            fclose($fd);
            return 'System Error';
        }
        $DataSeek = implode('', unpack('L', $DataSeek.chr(0)));
        fseek($fd, $DataSeek);
        $ipData2 = fread($fd, 4);
        if(strlen($ipData2) < 4) {
            fclose($fd);
            return 'System Error';
        }
        $ip2num = implode('', unpack('L', $ipData2));
        if($ip2num < 0) $ip2num += pow(2, 32);
        if($ip2num < $ipNum) {
            if($Middle == $BeginNum) {
                fclose($fd);
                return 'Unknown';
            }
            $BeginNum = $Middle;
        }
    }
    $ipFlag = fread($fd, 1);
    if($ipFlag == chr(1)) {
        $ipSeek = fread($fd, 3);
        if(strlen($ipSeek) < 3) {
            fclose($fd);
            return 'System Error';
        }
        $ipSeek = implode('', unpack('L', $ipSeek.chr(0)));
        fseek($fd, $ipSeek);
        $ipFlag = fread($fd, 1);
    }
    if($ipFlag == chr(2)) {
        $AddrSeek = fread($fd, 3);
        if(strlen($AddrSeek) < 3) {
            fclose($fd);
            return 'System Error';
        }
        $ipFlag = fread($fd, 1);
        if($ipFlag == chr(2)) {
            $AddrSeek2 = fread($fd, 3);
            if(strlen($AddrSeek2) < 3) {
                fclose($fd);
                return 'System Error';
            }
            $AddrSeek2 = implode('', unpack('L', $AddrSeek2.chr(0)));
            fseek($fd, $AddrSeek2);
        } else {
            fseek($fd, -1, SEEK_CUR);
        }
        while(($char = fread($fd, 1)) != chr(0))
        $ipAddr2 .= $char;
        $AddrSeek = implode('', unpack('L', $AddrSeek.chr(0)));
        fseek($fd, $AddrSeek);
        while(($char = fread($fd, 1)) != chr(0))
        $ipAddr1 .= $char;
    } else {
        fseek($fd, -1, SEEK_CUR);
        while(($char = fread($fd, 1)) != chr(0))
        $ipAddr1 .= $char;

        $ipFlag = fread($fd, 1);
        if($ipFlag == chr(2)) {
            $AddrSeek2 = fread($fd, 3);
            if(strlen($AddrSeek2) < 3) {
                fclose($fd);
                return 'System Error';
            }
            $AddrSeek2 = implode('', unpack('L', $AddrSeek2.chr(0)));
            fseek($fd, $AddrSeek2);
        } else {
            fseek($fd, -1, SEEK_CUR);
        }
        while(($char = fread($fd, 1)) != chr(0)){
            $ipAddr2 .= $char;
        }
    }
    fclose($fd);
    if(preg_match('/http/i', $ipAddr2)) {
        $ipAddr2 = '';
    }
    $ipaddr = "$ipAddr1 $ipAddr2";
    $ipaddr = preg_replace('/CZ88.Net/is', '', $ipaddr);
    $ipaddr = preg_replace('/^s*/is', '', $ipaddr);
    $ipaddr = preg_replace('/s*$/is', '', $ipaddr);
    if(preg_match('/http/i', $ipaddr) || $ipaddr == '') {
        $ipaddr = 'Unknown';
    }
    $ipaddr = iconv('gbk', 'utf-8//IGNORE', $ipaddr);
    if( $ipaddr != '  ' )
        return $ipaddr;
    else
        $ipaddr = '火星来客';
        return $ipaddr;
}
//Comment Location End

/**
代码功能：实现js异步加载
代码地址：http://www.chenxingweb.com/wordpress-async-js.html

大量报错，暂不使用
**/
/**
add_filter( 'clean_url', 'chenxing_async_script',11,1);
function chenxing_async_script( $url ){
    if(strpos($url, '.js') === false){
        return $url;
    }
    return "$url' async='async";
};**/

/**
复制版权信息
**/
//内容被复制后自动添加文章链接 
/*function add_copyright_text() { 
global $user_ID; 
if( $user_ID && current_user_can('level_10') ) {}
else { ?>
<script type='text/javascript'>
    function addLink() {
        var body_element = document.getElementsByTagName('body')[0];
        var selection;
        selection = window.getSelection();
        var pagelink = "<br /><br /> 转载请注明来源: <a href='" + document.location.href + "'>" + document.location.href + "</a>";
        var copy_text = selection + pagelink;
        var new_div = document.createElement('div');
        new_div.style.left = '-99999px';
        new_div.style.position = 'absolute';
        body_element.appendChild(new_div);
        new_div.innerHTML = copy_text;
        selection.selectAllChildren(new_div);
        window.setTimeout(function() {
            body_element.removeChild(new_div);
        }, 0);
    }
    document.oncopy = addLink;
</script>
<?php }?>

<?php } add_action( 'wp_footer', 'add_copyright_text');

*/
/**
新窗口打开链接（该主题无效）
**/
//让所有的链接都在新窗口打开↓ 
/**function autoblank($text) {
    $return = str_replace('<a', '<a target="_blank"', $text);
    return $return;
}
add_filter('the_content', 'autoblank');**/
//让所有的链接都在新窗口打开↑

/**azyload**/

add_filter ('the_content', 'lazyload');
function lazyload($content) {
    $loadimg_url='https://2heng.xin/wp-content/uploads/2017/08/loading.gif';
    if(!is_feed()||!is_robots) {
        $content=preg_replace('/<img(.+)src=[\'"]([^\'"]+)[\'"](.*)>/i',"<center><img\$1data-original=\"\$2\" src=\"$loadimg_url\"\$3></center>\n<noscript>\$0</noscript>",$content);
    }
    return $content;
}

/* 验证码 */

function spam_protection_math(){
	$num1=rand(0,9);
	$num2=rand(0,9);
	echo "<input type=\"text\" placeholder=\"验  证：$num1 x $num2 = ?\" name=\"sum\" value=\"\" id=\"url\" size=\"22\" tabindex=\"5\">\n";
	//_POST变量传参
	echo "<input type=\"hidden\" name=\"num1\" value=\"$num1\">\n";
	echo "<input type=\"hidden\" name=\"num2\" value=\"$num2\">\n";
}
function spam_protection_pre($commentdata){
	$sum=$_POST['sum'];
	
	if ($sum == $_POST['num1']*$_POST['num2']) {
		return $commentdata;
	} elseif ($sum == null) {
		//wp_die('请输入验证码 :P');
		err( __('请输入验证码(｡•ˇ‸ˇ•｡)') );
	} else {
		//wp_die('验证码错误 :P');
		err( __('验证码错误，你该不会是机器人吧？(｡•ˇ‸ˇ•｡)') );
	}
	
}
if($comment_data['comment_type']==''){
	add_filter('preprocess_comment','spam_protection_pre');
}

/* Get UA */
/* Get comment_agent */
function get_comment_agent( $comment_ID = 0 ) {
    $comment = get_comment( $comment_ID );
 
    /**
     * Filters the comment author's returned User Agent.
     *
	 * Added by Mashiro
	 * Based on get_comment_author_IP function. See: https://developer.wordpress.org/reference/functions/get_comment_author_ip/
     *
     * @param string     $comment_author_IP The comment author's IP address.
     * @param int        $comment_ID        The comment ID.
     * @param WP_Comment $comment           The comment object.
     */
    return apply_filters( 'get_comment_agent', $comment->comment_agent, $comment->comment_ID, $comment );
}

/* Convert UA to HTML */
function convertua($ua) {
	// URLencode
	$url_parm=urlencode($ua);
	// Request API
	error_reporting(E_ERROR);
	//ini_set("display_errors", "Off");
	$request = "http://www.useragentstring.com/?uas=" . $url_parm . "&getJSON=all";
	$getua = json_decode(file_get_contents($request));
	$AgentName = $getua->agent_name; //Chrome / Android Webkit Browser / Safari / Firefox / BlackBerry / Internet Explorer / Edge
	$OsType = $getua->os_type; //Windows / Android / Linux / Macintosh / BlackBerryOS 
	$OsName = $getua->os_name; //Windows 10 / Windows 8 / Windows 8.1 / Windows 7 / Windows XP /  / Android / Linux / OS X / iPhone OS / BlackBerryOS / FreeBSD
	$LinuxDistibution = $getua->linux_distibution; //Ubuntu / CentOS / Fedora / Debian / Red Hat
	
	// Browser name
	if (($AgentName == "Chrome") || ($AgentName == "Android Webkit Browser") || ($AgentName == "Safari") || ($AgentName == "Firefox") || ($AgentName == "BlackBerry") || ($AgentName == "Internet Explorer") || ($AgentName == "Edge")) {
		if (($AgentName == "Android Webkit Browser") || ($AgentName == "Internet Explorer")) {
			$print_browser = str_replace( " ", "-",$AgentName);
		} else {
			$print_browser = $AgentName;
		}
	}
	else {
		$print_browser = "unkwon-browser";
	}
	
	// System name
	if (($LinuxDistibution == "Ubuntu") || ($LinuxDistibution == "CentOS") || ($LinuxDistibution == "Fedora") || ($LinuxDistibution == "Debian") || ($LinuxDistibution == "Red Hat")) {
		if ($LinuxDistibution == "Red Hat") {
			$print_system = str_replace( " ", "-",$LinuxDistibution);
		} else {
			$print_system = $LinuxDistibution; // Linux Distributions
		}
	} elseif (($OsName == "Windows 10") || ($OsName == " Windows 8") || ($OsName == "Windows 7") || ($OsName == "Windows XP") || ($OsName == "Android") || ($OsName == "Linux") || ($OsName == "OS X") || ($OsName == "iPhone OS") || ($OsName == "BlackBerryOS") || ($OsName == "FreeBSD")) {
		if (($OsName == "Windows 10") || ($OsName == " Windows 8") || ($OsName == "Windows 8.1") || ($OsName == "Windows 7") || ($OsName == "Windows XP") || ($OsName == "OS X") || ($OsName == "iPhone OS")) {
			$print_system = str_replace( " ", "-",$OsName);
		} elseif ($OsName == "Windows 8.1") {
			$print_system = "Windows-9";
		} else {
			$print_system = $OsName; // OS name like Windows 10, iPhone
		}
	} elseif (($OsType == "Windows") || ($OsType == "Android") || ($OsType == "Linux") || ($OsType == "Macintosh") || ($OsType == "BlackBerryOS")) {
		$print_system = $OsType; // No specified OS info
	} else { 
		$print_system = "unkwon-system";
	}
	
	return "&nbsp;<a title=\"OS: " . $print_system . "; Browser: " . $print_browser . "\"><svg class=\"icon\" aria-hidden=\"true\" ><use xlink:href=\"#system-icon-" . $print_system . "\"></use></svg>&nbsp;<svg class=\"icon\" aria-hidden=\"true\"><use xlink:href=\"#system-icon-" . $print_browser . "\"></use></svg></a>";
	//return "<i class=\"system-icon system-icon-" . $print_system . "\"></i><i class=\"system-icon system-icon-" . $print_browser . "\"></i>";	
	//return $print_system . $print_browser;
	//return $ua;
}
/* Get UA End */

/* Tag Cloud */
/* 待完善，需要仅显示排名靠前的tags */
function wpb_tags() { 
$wpbtags =  get_tags();
foreach ($wpbtags as $tag) { 
$string .= '<span class="tagbox"><a class="taglink" href="'. get_tag_link($tag->term_id) .'">&nbsp;'. $tag->name . '&nbsp;</a><span class="tagcount">&nbsp;'. $tag->count .'&nbsp;</span></span>' . "\n"   ;
} 
return $string;
} 
add_shortcode('wpbtags' , 'wpb_tags' );
/* Tag Cloud End */

?>
