<div  class="post-item">
<p class="edit"><?php edit_post_link(); ?></p>
<span><?php //the_author_posts_link(); echo ' : '; the_date(); ?></span>
<h3 class='page-feed'>

<?php if ( is_category( 'news' ) ) {
	?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php
} else {
	?><?php the_title(); ?><?php
}
?>
</h3>
<?php the_content(); ?>
<?php 
#comment_form();
#comments_template(); 
?>
</div>
