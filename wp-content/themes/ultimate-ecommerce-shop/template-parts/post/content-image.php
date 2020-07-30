<i class="far fa-comments"></i><?php
/**
 * The template part for displaying Image
 * @package Ultimate Ecommerce Shop 
 * @subpackage ultimate_ecommerce_shop
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-wrap">
    <div class="box-image">
      <?php 
        if(has_post_thumbnail()) {
          the_post_thumbnail();
          ?>
          <span class="entry-date"><?php the_date(); ?></span>
        <?php }?>
    </div>    
    <div class="post-main">
      <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
      <div class="adminbox">  
        <span class="entry-date"><i class="far fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
        <span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
        <span class="entry-comments"><i class="far fa-comments"></i><?php comments_number( __('0 Comment', 'ultimate-ecommerce-shop'), __('0 Comments', 'ultimate-ecommerce-shop'), __('% Comments', 'ultimate-ecommerce-shop') ); ?> </span>
      </div>   
      <div class="entry-content"><p><?php the_excerpt();?></p></div>
      <div class="continue-read">
        <a href="<?php esc_url(the_permalink()); ?>"><span><?php esc_html_e('READ MORE...','ultimate-ecommerce-shop'); ?></span><span class="screen-reader-text"><?php esc_html_e( 'READ MORE...','ultimate-ecommerce-shop');?></span></a>
      </div>
    </div>
  </div>
</article>