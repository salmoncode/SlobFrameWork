<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php bloginfo("title")?></title>
    <link rel=”icon” href="<?php echo get_template_directory_uri();?>/assets/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/base.css">
    <script src="<?php echo get_template_directory_uri();?>/assets/js/base.js"></script>
    <?php wp_head();?>
</head>
<body>
<div class="wrapper">
<header class="bg-dark">
    <div class="container">
        <div class="title text-white">
            <span><?php bloginfo("title")?></span>
        </div>
    </div>
</header>