<?php $contact = get_page_by_title('contact'); ?>

<ul>
<?php if(have_rows('social_media_all', $contact)): while(have_rows('social_media_all', $contact)) : the_row(); ?>
    <li><a href="<?php the_sub_field('link_social');?>" target="_blank"><img src="<?php the_sub_field('image_social');?>"
             alt="<?php the_sub_field('social_platform_name');?>"></a></li>
<?php endwhile; else : endif; ?>
</ul>