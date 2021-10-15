<!DOCTYPE html>
<html lang="en" style="margin: 0 !important">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cook World</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ejp1kam.css">
    <?php wp_head() ?>
</head>
<body  style="background-image: url('<?php bloginfo('template_directory'); ?> /img/backgrounds/marble.png');">
    <header>
        <h1 class="push1">
            <a href="/">
                Cook World
            </a>
        </h1>
        <div id="booknote" class="push10">
            <p>
                Get our books
                <?php 
                    wp_nav_menu( array("theme_location" => "book-menu") );
                ?>
            </p>
        </div>
    </header>