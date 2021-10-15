<?php
    if(in_category('bonk')) include('book-single.php');
?>
<?php 
    /* include('header.php') */
    get_header();
?>

<section class="product-container container">
<?php while(have_posts()) : the_post()?>
    <div class="col4">
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
    <div>
        <?php
            the_content();
        ?>
    </div>
<?php endwhile; ?>
</section>
    
<?php 
    /* include('footer.php') */
    get_footer();
?>