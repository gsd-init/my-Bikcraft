<?php 
// Template Name: Portfolio
get_header(); ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

<section class="container animar-interno">
    <ul class="rslides">
    <?php if( have_rows('quote_portfolio')) : while ( have_rows('quote_portfolio')) : the_row(); ?>
        <li>
            <blockquote class="quote_clientes">
                <?php the_sub_field('quote'); ?>
                <cite><?php the_sub_field('quote_author'); ?></cite>
            </blockquote>
        </li>
        <?php endwhile; else: endif; ?>
    </ul>
</section>

<section class="portfolio">
    <div class="container">
        <?php include(TEMPLATEPATH . "/inc/clients-portfolio.php");?>
    </div>
</section>


<?php endwhile; else: endif; ?>

<?php get_footer(); ?>


<!-- <p>“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por
                    esta atividade. Recomendo à todos que amo.”</p>
                <cite>Barbara Moss</cite>
            </blockquote>

            <p>“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel,
                    nunca me traiu e está sempre a minha disposição.”</p>
                <cite>Jhony Rato</cite>

                <p>“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a
                    velocidade transcendental. Nunca vida nada igual.”</p>
                <cite>Bernardo</cite> -->