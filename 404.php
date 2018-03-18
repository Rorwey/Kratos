<?php get_header(); ?>
<div class="kratos-start kratos-hero"></div>
<div id="kratos-blog-post">
    <div class="page404">
        <div class="kratos-hentry kratos-post-inner clearfix">
            <div class="col-md-7">
                <img style="width:100%" src="<?php echo bloginfo('template_url'); ?>/images/404.png">
            </div>
            <div class="col-md-5 text-center errtxt">
                <h3><?php echo kratos_option('error_text1'); ?></h3>
                <h5><?php echo kratos_option('error_text2'); ?></h5>
                <p><a href="javascript:history.go(-1)" class="back-p"><?php _e('返回上页','dmeng');?></a><a href="<?php echo get_option('home'); ?>" class="back-index"><?php _e('返回上页','dmeng');?></a></p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>