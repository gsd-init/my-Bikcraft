<?php get_header(); ?>

<section class="introducao-interna introducao-blog">
    <div class="container">
        <h1>Blog</h1>
        <p>The main news about bicycles</p>
    </div>
</section>

<div class="container blog-container">
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="grid-16 blog-post">
        <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
    </article>

<?php endwhile; ?>

    <div class="nav-blog grid-16">
        <?php next_posts_link( 'Previous Posts' ); ?>
        <?php previous_posts_link( 'New Posts' ); ?>
    </div>
<?php else: endif; ?>
</div>


<?php get_footer(); ?>
