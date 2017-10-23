<?php
/**
 * Shortcodes 主题文件
 *
 * @package    YEAHZAN
 * @subpackage ZanBlog
 * @since      ZanBlog 3.0.0
 
 */

add_action( 'admin_print_footer_scripts', 'shortcode_buttons', 100 );
function shortcode_buttons() {
?>
<script type="text/javascript">
QTags.addButton( '1', '对话框A', '[a-dialog]内容[/a-dialog]' ); 
QTags.addButton( '2', '对话框B', '[b-dialog]内容[/b-dialog]' );     
QTags.addButton( '6', '链接按钮', '[btn-button href=""]内容[/btn-button]' );
</script>
<?php }

/* 对话框 */
function a_dialog( $atts, $content="" ) { 
	return '<div class="chatbox cf"><section class="red chat_content left"><div class="chat-arrow"></div><div class="bub">'.$content.'</div></section></div>'; 
} 
add_shortcode( 'a-dialog', 'a_dialog' ); 

function b_dialog( $atts, $content="" ) { 
	return '<div class="chatbox cf"><section class="green chat_content right"><div class="chat-arrow"></div><div class="bub">'.$content.'</div></section></div>'; 
} 
add_shortcode( 'b-dialog', 'b_dialog' ); 

/*按钮 */

function btn_button( $atts, $content="" ) { 
	extract( shortcode_atts( array( 
		"href" => 'http://', 
	), $atts ) );
	return '<a href="'.$href.'" class="milli" rel="nofollow" target="_blank"><span class="btn btn--primary">'.$content.'</span></a>'; 
}
add_shortcode( 'btn-button', 'btn_button' ); 

?>