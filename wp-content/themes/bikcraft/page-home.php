<?php 
// Template Name: Home
get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
	$imagem_id = get_field('background_home');
	$background_large = wp_get_attachment_image_src($imagem_id, 'large');
	$background_medium = wp_get_attachment_image_src($imagem_id, 'medium');

?>

<style type="text/css">
.introducao {
	background: url('<?php echo $background_large[0]?>') no-repeat center;
	background-size: cover;
}

@media only screen and (max-width: 767px) {
.introducao {
	background: url('<?php echo $background_medium[0]?>') no-repeat center;
    background-size: cover;
	}
}
</style>

<section class="introducao">
    <div class="container">
        <h1><?php the_field('intro_title'); ?></h1>
        <blockquote class="quote-externo">
            <p><?php the_field('quote_intro'); ?></p>
            <cite><?php the_field('citation_intro'); ?></cite>
        </blockquote>
        <a href="<?php bloginfo('url'); ?>/products/" class="btn">GET A QUOTE</a>
    </div>
</section>

<section class="produtos container animar">
    <h2 class="subtitulo">Products</h2>
    <ul class="produtos_lista">
    <?php $args = array (
		'post_type' => 'products',
		'order' => 'ASC'
		);
		$the_query = new WP_Query ($args );
	?>

    <?php if( $the_query->have_posts() ) : while ( $the_query -> have_posts() ) : $the_query->the_post(); ?>
        <li class="grid-1-3">
        <a href="<?php the_permalink();?>">
        <div class="produtos_icone">
            <img src="<?php the_field('icon_product'); ?>" alt="Bikcraft Passeio">
            </div>
            <h3><?php the_title();?></h3>
            <p><?php the_field('product_summary');?></p>
            </a>
        </li>
        
        <?php endwhile; else: endif; ?>
        <?php wp_reset_query(); wp_reset_postdata(); ?>        
    </ul>

    <div class="call">
        <p><?php the_field('call_products'); ?></p>
        <a href="<?php bloginfo('url'); ?>/products/" class="btn btn-preto">Products</a>
    </div>

</section>
<!-- Fecha Produtos -->

<section class="portfolio">
    <div class="container">
        <h2 class="subtitulo">Portfolio</h2>
        <?php include(TEMPLATEPATH . "/inc/clients-portfolio.php");?>
    </div>
</section>

<?php include(TEMPLATEPATH . "/inc/quality.php"); ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>