<?php
if(post_password_required()) return;
?>
<div id="comments" class="comments-area">
<?php if(have_comments()){ ?>
    <ol class="comment-list">
    <?php wp_list_comments(array(
            'style'=>'ol',
            'short_ping'=>true,
            'avatar_size'=>50,
        )); ?>
    </ol>
<?php if(get_comment_pages_count()>1&&get_option('page_comments')){ ?>
<div id="comments-nav">
<?php paginate_comments_links('prev_text=上一页&next_text=下一页');?>
</div><?php 
    }
}
    $fields=array(
            'author'=>'<div class="comment-form-author form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input class="form-control" placeholder="昵称 Nickname" id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30" /><span class="form-control-feedback required">*</span></div></div>',
            'email'=>'<div class="comment-form-email form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope-o"></i></div><input class="form-control" placeholder="邮箱 E-mail" id="email" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'" size="30" /><span class="form-control-feedback required">*</span></div></div>',
            'url'=>'<div class="comment-form-url form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-link"></i></div><input class="form-control" placeholder="网站 Website" id="url" name="url" type="text" value="'.esc_attr($commenter['comment_author_url']).'" size="30" /></div></div>',
    );
    $args=array(
        'title_reply_before'=>'<h4 id="reply-title" class="comment-reply-title">',
        'title_reply_after'=>'</h4>',
        'fields'=>$fields,
        'class_submit'=>'btn btn-primary',
        'comment_field'=>'<div class="comment form-group has-feedback"><div class="input-group"><textarea class="form-control" id="comment" placeholder="|´・ω・)ノ说点什么呀 Say something poi~" name="comment" rows="5" aria-required="true" required  onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById(\'submit\').click();return false}};"></textarea></div><div class="OwO"></div></div>',
    );
    comment_form($args); ?>
</div>