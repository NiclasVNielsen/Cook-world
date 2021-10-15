<?php
    function cook_enqueue_styles () {
        wp_enqueue_style("cook-style", get_stylesheet_uri());
    }
    add_action("wp_enqueue_scripts", "cook_enqueue_styles");

    function cook_register_menu() {
        register_nav_menu("main-menu", "main menu");
        register_nav_menu("book-menu", "book menu");
    }
    add_action("init", "cook_register_menu");

    
    function default_page(){
        if(is_home() or is_front_page()){
            exit( wp_redirect("/category/recipe/"));
        }
    }
    add_action('template_redirect', 'default_page');
?>