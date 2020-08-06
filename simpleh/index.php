<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset= "<?php bloginfo('charset'); ?>">
  <title><?php  bloginfo('name'); ?></title>
  <link rel="stylesheet"
    href="<?php bloginfo('stylesheet_url'); ?> ">
  <?php wp_head();?>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <span><?php bloginfo('description'); ?></span>
  </header>
  <div class="main">
  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <div class="meta">
      Creado Por <?php the_author(); ?> en <?php the_time('F j, Y g:i a'); ?>
      </div>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php else : ?>
    <?php echo wpaoutop('Lo sentimos no encontramos posts'); ?>
  <?php endif; ?>
  </div>
  <footer>
    <p> &copy; 
      <?php the_date('Y'); ?> </br> 
      <?php bloginfo('name'); ?>   
    </p>
  </footer>
</body>
</html>

    
