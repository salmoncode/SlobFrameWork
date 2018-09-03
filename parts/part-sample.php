<div class="container">
    <div class="post-title text-center">
        <h1><?php echo $post->post_title?></h1>
    </div>

    <div class="post-date text-right">
        <time><?php echo $post->post_date?></time>
    </div>
    
    <div class="post-author text-right">
        <p><?php echo get_userdata($post->post_author)->user_login?></p>
    </div>

    <div class="post-content">
        <?php echo $post->post_content; ?>
    </div>
</div>