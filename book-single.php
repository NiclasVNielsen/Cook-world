<?php 
    /* include('header.php') */
    get_header();
?>

<section class="product-container">
<?php while(have_posts()) : the_post()?>
    <div>
        <?php
            the_title();
        ?>
        <?php
            the_content();
        ?>
    </div>
    <div>
        <a href="<?php the_field("link"); ?>">Buy Bonk</a>
    </div>
<?php endwhile; ?>
</section>
    
<?php 
    /* include('footer.php') */
    get_footer();
?>