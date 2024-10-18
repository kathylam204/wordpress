<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <h2><?php the_title(); ?></h2>
            <div><?php the_excerpt(); ?></div>
            <a class="button" href="<?php the_permalink(); ?>">Read More</a>
        </article>
    <?php endwhile; else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
