<?php
/**
 * Template Name: Plantilla Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

 get_header();
 ?>

<main data-scroll-section class="page-template-<?php echo strtolower(get_the_title()); ?>">
  <div class="page-<?php echo strtolower(get_the_title()); ?>">
    <h1 class="page-<?php echo strtolower(get_the_title()); ?>__title">
      <div class="back">
        <a class="link" onclick="window.history.go(-1); return false;" href="#">
          <?php get_template_part('images/icons/arrow-prev-black'); ?>
        </a>
      </div>
      <?php the_title(); ?>
    </h1>
    <div class="page-<?php echo strtolower(get_the_title()); ?>__wrapper">
      <?php the_content(); ?>
    </div>
    <hr>
    <div class="page-<?php echo strtolower(get_the_title()); ?>__grid">
      <div>
        <p>
          <strong>
          Email
          </strong>
        </p>
        <p>
        contact@sannaofficial.com
        </p>
        <p>
          Recibirás un email con muestra respuesta
        </p>
      </div>
      <div>
        <p>
          <strong>
          Télefonos
          </strong>
        </p>
        <p>
        (+57) 320 566 8123
        </p>
        <p>
          De lunes a viernes, de 09:00 a 19:00
        </p>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();

