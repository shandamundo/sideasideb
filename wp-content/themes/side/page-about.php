<?php
/**
 * Template Name: About Page
 * @package WordPress
 * @subpackage Side
 * @since Side 1.0
 */
?>

<?php get_header(); ?>
<div class="container main">

  <div class="left-col br">
    <div class="col">
      <div class="logo-col">
        <h1>sideAsideB</h2>
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="#">About</a></li>
          <li><a href="#">Reviews</a></li>
        </ul>
        <ul class="social">
          <li><a href="#">facebook</a></li>
          <li><a href="#">twitter</a></li>
          <li><a href="#">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="full center">
    <h1 class="hollow">About</h1>
    <?php echo get_field('about_text'); ?>
    <h1 class="hollow">Review Format</h1>
    <?php echo get_field('review_format_text'); ?>
  </div>
</div>