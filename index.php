<?php 
    /* include('header.php') */
    get_header();
?>

<section>
    <div class="textcenter heading-text">
        <h2 class="title texthighlight abril">
            <?php the_field("fact_box_1")?>
            Pick your poison!
        </h2>
        <p class="lower-title texthighlight">
            Filter to your cooking needs
        </p>
    </div>
    <section class="filters-container container">
        <div class="filter-group">
            <p class="filter-title textcenter lower-title abril">
                Time of Day
            </p>
            <div class="filters container">
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Breakfast.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Breakfast
                    </p>
                </div>
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Lunch.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Lunch
                    </p>
                </div>
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Dinner.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Dinner
                    </p>
                </div>
            </div>
        </div>
        <div class="filter-group">
            <p class="filter-title textcenter lower-title abril">
                Difficulty
            </p>
            <div class="filters container">
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Beginner.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Beginner
                    </p>
                </div>
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Intermidiate.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Intermidiate
                    </p>
                </div>
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Advanced.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Advanced
                    </p>
                </div>
            </div>
        </div>
        <div class="filter-group">
            <p class="filter-title textcenter lower-title abril">
                Diet
            </p>
            <div class="filters container">
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Vegan.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Vegan &lt;3
                    </p>
                </div>
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Vegetarian.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Vegetarian
                    </p>
                </div>
                <div class="filter">
                    <div class="textcenter">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/icons/Keto.png"/>
                    </div>
                    <p class="textcenter texthighlight">
                        Keto
                    </p>
                </div>
                <?php 
                    wp_nav_menu( array("theme_location" => "main-menu") );
                ?>
            </div>
        </div>
    </section> <!-- filters-container container -->
    <div class="search">
        <input class="blockcenter" type="text">
    </div>
</section>
<section class="product-container container">
<?php while(have_posts()) : the_post()?>
    <div class="col4">
        <a href="/<?php echo get_post_field( 'post_name', get_post() ); ?>">
            Monkey
        </a>
        <img src="<?php the_field("img"); ?>" alt="">
        <h3>
            <?php the_title(); ?>
        </h3>
        <ul>
            <li>
                <?php the_field("duration"); ?>
            </li>
            <li>
                <?php the_field("level"); ?>
            </li>
            <li>
                <?php the_field("time_of_day"); ?>
            </li>
        </ul>
    </div>
<?php endwhile; ?>
</section>
    
<?php 
    /* include('footer.php') */
    get_footer();
?>