<?php get_header(); ?>
<!--Here's where the loop starts-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="box"><!-- Styles container for each post -->
  <h1><?php the_title(); ?></h1>
  <p class="metablock"><span class="meta">Posted on <?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?></span></p>
  <div class="entry">
    <?php the_content('<p>Continue reading…</p>');?>
    <?php wp_link_pages(); ?>
    <?php the_tags('<p>Tags:&nbsp;', ', ', '</p>'); ?>
  </div>
  <!--<?php trackback_rdf(); ?>-->
  </div><!-- Close post box -->
  <?php endwhile; else: ?>
  <div class="box">
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </div>
  <?php endif; ?>
 <!-- End of the loop -->

<?php get_footer(); ?>