<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      
      <div class="interested">
      <br>
      <div class="row" id="three-columns">
        <div class="small-4 large-4 columns">
          <h3>Are you a teacher?</h3>
          </div>
        <div class="small-4 large-4 columns">
          <h3>Are you a student?</h3>
            </div>
        <div class="small-4 large-4 columns">
            <h3>Are you a professional?</h3>
             </div>
        </div>
        <br>
      <div class="row" id="three-columns">
       <div class="small-4 large-4 columns">
         <a href="about" class="button">Learn how you can impact your school.</a>
       </div>
        <div class="small-4 large-4 columns">
          <a href="about" class="button">Get connected with professional mentors.</a>
        </div>
        <div class="small-4 large-4 columns">
          <a href="about" class="button">Inspire young girls to achieve their dreams.</a>

        </div>
        <br>
        <br>
        <br>
        </div>

      </div>
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
