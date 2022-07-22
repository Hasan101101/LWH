<?php
get_header();
?>

<div class="container-fluid">
   <main class="row">
      <div id="content" class="col-md-8">
         <?php
         if (have_posts()) {
            while (have_posts()) {
               the_post();
         ?>
               <div <?php post_class('singlePost mt-5 mb-5'); ?>>
                  <a href="<?php the_permalink(); ?>">
                     <h2 class="post-title"><?php the_title(); ?></h2>
                  </a>
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                     <img src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" alt="<?php echo get_the_author_meta('display_name'); ?>" class="postAuthor img-fluid" />
                  </a>
                  <span class="authorName">
                     <?php echo get_the_author_meta('display_name'); ?>
                  </span>
                  <span class="dot"><?php echo esc_html('.'); ?></span>
                  <span class="date"><?php echo get_the_date('j M Y'); ?></span>
                  <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail('full', array('class' => 'postThumbnail img-fluid')); ?>
                  </a>
                  <p class="excerpt">
                     <?php the_excerpt(); ?>
                  </p>
               </div>
         <?php
            }
         }
         ?>
      </div>
         <?php get_sidebar(); ?>
   </main>
</div>

<?php
get_footer();
wp_footer();
?>
</body>

</html>