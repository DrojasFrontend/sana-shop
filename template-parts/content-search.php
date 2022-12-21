<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

?>

<li class="page-search__item">
  <a href="<?php the_permalink(); ?>">
    <figure>
      <?php the_post_thumbnail( '', array( 'loading' => '' ) ); ?>
    </figure>
    <div class="page-search__info">
      <h2>
      <?php the_title(); ?>
      </h2>
      <p>
        <?php 
          $excerpt = get_the_excerpt(); 

          $excerpt = substr( $excerpt, 0, 100 );
          $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
          echo $result;
        ?>
      </p>
    </div>
  </a>
</li>