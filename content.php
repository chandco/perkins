<div  class="post-item">
<p class="edit"><?php edit_post_link(); ?></p>
<span><?php //the_author_posts_link(); echo ' : '; the_date(); ?></span>
<h3>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</h3>
<?php the_content(); ?>
<?php 
#comment_form();
#comments_template(); 
?>
</div>
