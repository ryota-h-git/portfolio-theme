<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="privacy__inner">
            <div class="privacy__wrapper">
                <?php the_content(); ?>
            </div>
            <a href="<?php echo home_url(); ?>" class="section__detail archive-detail">topへ</a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>