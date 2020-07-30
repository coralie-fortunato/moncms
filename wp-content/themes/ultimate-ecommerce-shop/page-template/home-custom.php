<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'ultimate_ecommerce_shop_above_slider' ); ?>
  <?php /** slider section **/ ?>
  <?php if( get_theme_mod('ultimate_ecommerce_shop_slider_hide') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
        <?php $content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'ultimate_ecommerce_shop_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $content_pages[] = $mod;
            }
          }
          if( !empty($content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h2><?php the_title(); ?></h2>
                  <div class="more-btn">              
                    <a href="<?php esc_url(the_permalink()); ?>"><?php esc_html_e('EXPLORE NOW','ultimate-ecommerce-shop'); ?><span class="screen-reader-text"><?php esc_html_e( 'EXPLORE NOW','ultimate-ecommerce-shop' );?></span></a>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous','ultimate-ecommerce-shop' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next','ultimate-ecommerce-shop' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'ultimate_ecommerce_shop_after_slider' ); ?>

  <?php if( get_theme_mod('ultimate_ecommerce_shop_product_title') != ''){ ?>
    <section id="top_products">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <?php $content_pages = array();
              $mod = intval( get_theme_mod( 'ultimate_ecommerce_shop_product_title'));
              if ( 'page-none-selected' != $mod ) {
                $content_pages[] = $mod;
              }
            if( !empty($content_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $content_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="title-sec">
                    <h3><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                    <div class="entry-content"><p><?php the_excerpt(); ?></p></div>
                  </div>
                <?php endwhile; 
                wp_reset_postdata();?>
              <?php else : ?>
              <div class="no-postfound"></div>
              <?php endif;
            endif;?>
          </div>
          <div class="col-lg-9 col-md-8">
            <?php $content_pages = array();
              
              $mod = absint( get_theme_mod( 'ultimate_ecommerce_shop_top_products' ));
                if ( 'page-none-selected' != $mod ) {
                  $content_pages[] = $mod;
                }
              if( !empty($content_pages) ) :
                $args = array(
                  'post_type' => 'page',
                  'post__in' => $content_pages,
                  'orderby' => 'post__in'
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php the_content(); ?>
                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="no-postfound"></div>
              <?php endif;
            endif;
            wp_reset_postdata()?>
          </div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'ultimate_ecommerce_shop_below_top_product' ); ?>

  <div class="main-content container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>