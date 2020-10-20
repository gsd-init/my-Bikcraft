<?php 
// Template Name: Contact
?>
<?php get_header(); ?>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

<section class="contato container animar-interno">
    <form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" name="form"
        class="formphp contato_form grid-8">
        <label for="nome">Name</label>
        <input id="nome" name="nome" type="text">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="text">
        <label for="telefone">Phone</label>
        <input id="telefone" name="telefone" type="text">

        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
        <input type="text" class="nao-aparece" name="leaveblank">
        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
        <input type="text" class="nao-aparece" name="dontchange" value="http://">

        <label for="mensagem">Message</label>
        <textarea name="mensagem" id="mensagem"></textarea>

        <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Send</button>
    </form>

    <div class="contato_dados grid-8">
        <h3>Contact Us</h3>
        <span><?php the_field('phone_number');?></span>
        <span><?php the_field('email');?></span>
        <span><?php the_field('address1');?></span>
        <span><?php the_field('address2');?></span>
        <h3>Social Media</h3>
        <?php include(TEMPLATEPATH . "/inc/social-media.php"); ?>
    </div>
</section>

<section class="container contato_mapa">
    <a href="<?php the_field('link_map');?>" target="_blank" class="grid-16"><img src="<?php the_field('img_map');?>"
            alt="<?php the_field('text_map');?>"></a>
</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>