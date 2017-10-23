<title><?php if ( is_tag() ) {
		echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );
	} elseif ( is_archive() ) {
		echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' );echo' | ';bloginfo('description');$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);
	} elseif ( is_404() ) {
		echo '页面不存在！ |'; bloginfo( 'name' );
	} elseif ( is_single()) {
	    echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | さくら荘の白猫';//bloginfo( 'name' );	
	} else {
		echo trim(wp_title('',0)).' | さくら荘の白猫';//bloginfo( 'name' );
	} ?>
</title>
<meta property="og:title" content="<?php if ( is_tag() ) {
		echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );
	} elseif ( is_archive() ) {
		echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | ';bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' );echo' | ';bloginfo('description');$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);
	} elseif ( is_404() ) {
		echo '页面不存在！ |'; bloginfo( 'name' );
	} elseif ( is_single()) {
	    echo trim(wp_title('',0));if($paged > 1) printf(' - 第%s页',$paged);echo ' | さくら荘の白猫';//bloginfo( 'name' );		
	} else {
		echo trim(wp_title('',0)).' | さくら荘の白猫';//bloginfo( 'name' );
	} ?>" />
<?php
if ( is_single()){
    if ($post->post_excerpt) {
        $description  = strip_tags(trim($post->post_excerpt));
    } else {
   		$description = strip_tags(trim(wp_trim_words($post->post_content, 130,"") ));
  	} 
    $keywords = "";     
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {
        $keywords = $keywords . $tag->name . ",";
    }
}
?>
<?php echo "\n"; ?>
<?php if ( is_single()) { ?>
<meta name="description" content="<?php echo trim($description); ?>" />
<meta property="og:description" content="<?php echo trim($description); ?>" />
<meta name="keywords" content="<?php echo rtrim($keywords,','); ?>" />
<?php } ?>
<?php if ( is_home() ) { ?>
<meta name="description" content="<?php echo get_option('strive_description'); ?>" />
<meta property="og:description" content="<?php echo get_option('strive_description'); ?>" />
<meta name="keywords" content="<?php echo get_option('strive_keywords'); ?>" />
<?php } ?>
<?php if ( is_archive() ) { ?>
<meta name="description" content="<?php echo category_description(); ?>" />
<meta property="og:description" content="<?php echo category_description(); ?>" />
<?php } ?>
<?php if ( is_page() ) { 
	if( !empty( $post->post_excerpt ) ) {
	  $text = $post->post_excerpt;
	} else {
	  $text = $post->post_content;
	}
	$description = trim( str_replace( array( "\r\n", "\r", "\n", "　", " "), " ", str_replace( "\"", "'", strip_tags( $text ) ) ) );
	if ( !( $description ) ) $description = $blog_name . "-" . trim( wp_title('', false) );
	?>
	
<meta name="description" content="<?php echo mb_substr( $description, 0, 130, 'utf-8' ); ?>" />
<meta property="og:description" content="<?php echo mb_substr( $description, 0, 130, 'utf-8' ); ?>" />
<meta name="keywords" content="<?php echo trim( wp_title('', false) );; ?>" />
<meta property="og:image" content="<?php
        srand( microtime() * 1000000 );
        $num = rand( 1, 5 );
        $image_file = stripslashes(get_option('strive_indexsuiji'.$num));
        echo $image_file;
    ?>" />
<?php } ?>