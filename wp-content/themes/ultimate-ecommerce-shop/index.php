<?php
/**
 * Displaying home page.
 *
 * This template display post by default.
 * @package Ultimate Ecommerce Shop
 */
get_header(); ?>

<?php do_action( 'ultimate_ecommerce_shop_index_header' ); ?>

<?php /** post section **/ ?>

<div class="container">
  <main id="main" role="main" class="content-with-sidebar">
    <?php
    $ultimate_ecommerce_shop_layout = get_theme_mod( 'ultimate_ecommerce_shop_theme_options','Right Sidebar');
    if($ultimate_ecommerce_shop_layout == 'One Column'){?>
      <div id="firstbox">          
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/post/content', get_post_format() ); 
          endwhile;
          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
              'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
            ) );
          ?>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($ultimate_ecommerce_shop_layout == 'Three Columns'){?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="firstbox" class="col-lg-6 col-md-6">          
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/post/content', get_post_format() ); 
              endwhile;
              else :
                get_template_part( 'no-results' ); 
              endif; 
            ?>
            <div class="navigation">
              <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
                  'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
                ) );
              ?>
              <div class="clearfix"></div>
            </div>
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
      </div>
    <?php }else if($ultimate_ecommerce_shop_layout == 'Four Columns'){?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="firstbox" class="col-lg-3 col-md-3">          
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/post/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
                'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
      </div>
    <?php }else if($ultimate_ecommerce_shop_layout == 'Right Sidebar'){?>
      <div class="row">
        <div id="firstbox" class="col-lg-8 col-md-8">          
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/post/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
                'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
      </div>
    <?php }else if($ultimate_ecommerce_shop_layout == 'Left Sidebar'){?>
      <div class="row">
        <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
        <div id="firstbox" class="col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/post/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
                'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>   
      </div>
    <?php }else if($ultimate_ecommerce_shop_layout == 'Grid Layout'){?>
      <div id="firstbox" > 
        <div class="row">         
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/post/grid-layout' ); 
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
        </div>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
              'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
            ) );
          ?>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php }else {?>
      <div class="row">
        <div id="firstbox" class="col-lg-8 col-md-8">          
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/post/content',get_post_format() ); 
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'ultimate-ecommerce-shop' ),
                'next_text'          => __( 'Next page', 'ultimate-ecommerce-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ultimate-ecommerce-shop' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
      </div>
    <?php } ?>
  </main>
</div>

<?php do_action( 'ultimate_ecommerce_shop_index_footer' ); ?>

<?php get_footer(); ?>