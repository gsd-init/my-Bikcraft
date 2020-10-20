<?php $about = get_page_by_title('about'); ?>
<section class="qualidade container">
			<h2 class="subtitulo"><?php the_field('quality_name', $about); ?></h2>
			<img src="<?php the_field('logo_bikcraft', $about); ?>" alt="Bikcraft">
			<ul class="qualidade_lista">
            <?php if(have_rows('item_quality', $about)) : while (have_rows('item_quality', $about)) : the_row(); ?>
				<li class="grid-1-3">
					<h3><?php the_sub_field('title_item_quality', $about); ?></h3>
					<p><?php the_sub_field('description_item_quality', $about); ?></p>
				</li>
                <?php endwhile; else : endif; ?>             
			</ul>           
            <?php if(!is_page('about')) { ?>
			<div class="call">
				<p><?php the_field('call_about', $about); ?></p>
				<a href="<?php bloginfo('url'); ?>/about/" class="btn btn-preto">About</a>
			</div>
            <?php } ?>            
		</section>