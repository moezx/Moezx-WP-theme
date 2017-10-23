<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
<p class="nocomments">必须输入密码，才能查看评论！</p>
<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = '';
?>
    <!-- You can start editing here. -->
    <?php if ('open' == $post->comment_status) : ?>
    <div class="comment-area comments clearfix">
        <div class="comments clearfix">
            <div class="wrapper">
                <?php else : ?>
                <?php endif; ?>
				
				<?php if ('open' == $post->comment_status) : ?>
                
                <div class="comment-title"><span>留下点什么吧(￣▽￣)~*</span></div>
                <div id="respond" class="comment-respond">
                    <div id="respond">
                        <div class="cancel-comment-reply">
                            <small><?php cancel_comment_reply_link(); ?></small>
                        </div>
                        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
                        <p>
                            <?php print '您必须'; ?><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"> [ 登录 ] </a>才能发表留言！</p>
                        <?php else : ?>
                        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                            <?php if ( $user_ID ) : ?>
                            <h5 id="replytitle" class="comment-reply-title">
                                <?php print '当前登录：'; ?>
                                <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php">
                                    <?php echo $user_identity; ?>
                                </a>&nbsp;&nbsp;
                                <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出">
                                    <?php print '[ 退出 ]'; ?>
                                </a>
                            </h5>
                            <?php elseif ( '' != $comment_author ): ?>
                            <h5 id="replytitle" class="comment-reply-title">
                                <?php printf(__('欢迎回来 <strong>%s</strong>'), $comment_author); ?>
                                <a href="javascript:toggleCommentAuthorInfo();" id="toggle-comment-author-info">[ 更改 ]</a></h5>
                            <script type="text/javascript" charset="utf-8">
                                //<![CDATA[
                                var changeMsg = "[ 更改 ]";
                                var closeMsg = "[ 隐藏 ]";

                                function toggleCommentAuthorInfo() {
                                    jQuery('#comment-author-info').slideToggle('slow', function() {
                                        if (jQuery('#comment-author-info').css('display') == 'none') {
                                            jQuery('#toggle-comment-author-info').text(changeMsg);
                                        } else {
                                            jQuery('#toggle-comment-author-info').text(closeMsg);
                                        }
                                    });
                                }
                                jQuery(document).ready(function() {
                                    jQuery('#comment-author-info').hide();
                                });
                                //]]>

                            </script>
                            <?php endif; ?>
                            <?php if ( ! $user_ID ): ?>
                            <div id="comment-author-info">
                                <ul class="comment_input">
                                    <input type="text" placeholder="昵  称 : " name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                                    <input type="email" placeholder="邮  箱（用于接收评论回复通知） : " name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                                    <input type="text" placeholder="网  址（选填） : " name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                                </ul>
                            </div>
                            <?php endif; ?>
                            <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
                            <div class="clear"></div>
                            <div class="comt-box"><link rel="stylesheet" href="https://moezx.github.io/js/OwO/dist/OwO.min.css">
                                <p><i class="fa fa-github-alt" aria-hidden="true"></i> Markdown Supported while <i class="fa fa-code" aria-hidden="true"></i> Forbidden</p>
								<p><textarea class="text_area" rows="3" cols="80" name="comment" id="comment" tabindex="4" placeholder="你是我一生只会遇见一次的惊喜……"></textarea></p>
                                <!--待移植--<div class="comt-smilies">
                                    <?php wp_smilies() ?>
                                </div>-->
                                <span class="OwO">Loading...</span>
                                <script src="https://moezx.github.io/js/OwO/dist/OwO.min.js"></script>
								<script>
									var OwO_demo = new OwO({
										logo: 'OωO 表情',
										container: document.getElementsByClassName('OwO')[0],
										target: document.getElementsByClassName('text_area')[0],
										api: 'https://moezx.github.io/js/OwO/demo/OwO.json',
										position: 'down',
										width: '100%',
										maxHeight: '250px'
									});
								</script>
								<?php spam_protection_math();?>
                                <p class="send">
                                    <input style="background: rgb(102, 102, 102) none repeat scroll 0% 0%; width: 100%" name="submit" class="button" id="submit" tabindex="5" value="BiuBiuBiu~" type="submit">
                                    <?php comment_id_fields(); ?>
                                </p>
                            </div>
                            <script type="text/javascript">
                                //Crel+Enter
                                //<![CDATA[
                                jQuery(document).keypress(function(e) {
                                    if (e.ctrlKey && e.which == 13 || e.which == 10) {
                                        jQuery(".submit").click();
                                        document.body.focus();
                                    } else if (e.shiftKey && e.which == 13 || e.which == 10) {
                                        jQuery(".submit").click();
                                    }
                                })
                                // ]]>

                            </script>
                            <?php do_action('comment_form', $post->ID); ?>
                        </form>
                        <div class="clear"></div>
                        <?php endif; // If registration required and not logged in ?>
                    </div>
                </div>
                <?php endif; // if you delete this the sky will fall on your head ?>
				
                <?php if ($comments) : ?>
                <div id="comments-title"><span><?php comments_number('0', '1', '%' );?></span>条留言/戳头像试试(｀・ω・´)</div>
				
				<!--蜜汁Ajax-->
                <div class="commentshow" id="commentshow">
					<div id="loading-comments"><span>Loading...</span></div>
                    <ol class="comments-list">
                        <?php wp_list_comments('type=comment&callback=weisay_comment&reverse_top_level=1'); ?>
                    </ol>
					<div class="commentnav">
						<?php paginate_comments_links(); ?>
						<script>
						//Ajax评论,为避免二次调用失效的问题，故放到回调内容中每次加载时刷新。待优化。。
						$body=(window.opera)?(document.compatMode=="CSS1Compat"?$('html'):$('body')):$('html,body');
						$('.commentnav a').on('click', function(e){
							e.preventDefault();
							$.ajax({
								type: "GET",
								url: $(this).attr('href'),
								beforeSend: function(){
									$('.commentnav').remove();
									$('.comments-list').remove();
									$('#loading-comments').slideDown();
									$body.animate({scrollTop: $('#comments-title').offset().top - 65}, 800 );
								},
								dataType: "html",
								success: function(out){
									result = $(out).find('.comments-list');
									nextlink = $(out).find('.commentnav');
									$('#loading-comments').slideUp('fast');
									$('#loading-comments').after(result.fadeIn(500));
									$('.comments-list').after(nextlink);
									$body.animate({scrollTop: $('#comments-title').offset().top - 65}, 800 );
								}
							});
						});
						</script>
					</div>
                </div>
				<style>#loading-comments {display: none; width: 100%; height: 45px; background: #a0d536; text-align: center; color: #fff; font-size: 22px; line-height: 45px; }
				</style>
				
                <?php else : // this is displayed if there are no comments so far ?>
                <?php if ('open' == $post->comment_status) : ?>
                <!-- If comments are open, but there are no comments. -->
                <!--<h3 id="comments">
                    <?php the_title(); ?>：等您坐沙发呢！</h3> php bug-->
                <?php else : // comments are closed ?>
                <!-- If comments are closed. -->
                <!--<p class="nocomments">报歉!评论已关闭.</p>-->
                <?php endif; ?>
                <?php endif; ?>
				
                
                <?php if ('open' == $post->comment_status) : ?>
            </div>
        </div>
    </div>
    <?php else : ?>
    <?php endif; ?>

    <script type="text/javascript">
        function ajacpload() {
            $('#comment_pager a').click(function() {
                var wpurl = $(this).attr("href").split(/(\?|&)action=AjaxCommentsPage.*$/)[0];
                var commentPage = 1;
                if (/comment-page-/i.test(wpurl)) {
                    commentPage = wpurl.split(/comment-page-/i)[1].split(/(\/|#|&).*$/)[0];
                } else if (/cpage=/i.test(wpurl)) {
                    commentPage = wpurl.split(/cpage=/)[1].split(/(\/|#|&).*$/)[0];
                };
                alert(commentPage);//获取页数
                var postId = $('#cp_post_id').text();
                //alert(postId);//获取postid
                var url = wpurl.split(/#.*$/)[0];
                url += /\?/i.test(wpurl) ? '&' : '?';
                url += 'action=AjaxCommentsPage&post=' + postId + '&page=' + commentPage;
                //alert(url);//看看传入参数是否正确
                $.ajax({
                    url: url,
                    type: 'GET',
                    beforeSend: function() {
                        document.body.style.cursor = 'wait';
                        var C = 0.7; //修改下面的选择器，评论列表div的id，分页部分的id
                        $('#thecomments,#comment_pager').css({
                            opacity: C,
                            MozOpacity: C,
                            KhtmlOpacity: C,
                            filter: 'alpha(opacity=' + C * 100 + ')'
                        });
                        var loading = 'Loading';
                        $('#comment_pager').html(loading);
                    },
                    error: function(request) {
                        alert(request.responseText);
                    },
                    success: function(data) {
                        var responses = data.split('');
                        $('#thecomments').html(responses[0]);
                        $('#comment_pager').html(responses[1]);
                        var C = 1; //修改下面的选择器，评论列表div的id，分页部分的id
                        $('#thecomments,#comment_pager').css({
                            opacity: C,
                            MozOpacity: C,
                            KhtmlOpacity: C,
                            filter: 'alpha(opacity=' + C * 100 + ')'
                        });
                        $('#cmploading').remove();
                        document.body.style.cursor = 'auto';
                        ajacpload(); //自身重载一次
                        //single_js();//需要重载的js，注意
                        $body.animate({
                            scrollTop: $('#comment_header').offset().top - 200
                        }, 1000);
                    } //返回评论列表顶部
                });
                return false;
            });
        }

    </script>
