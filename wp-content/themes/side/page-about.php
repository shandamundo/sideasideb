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
        <div class="logo-col__info">
      </div>
      </div>
      <div class="menu-col menu-col--no-border">
        <h1 class="review-site-title"><a href="/home">sideAsideB</a></h1>
        <ul class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about" class="active">About</a></li>
          <li><a href="/singles">Singles</a></li>
          <li><a href="/albums">Albums</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://instagram.com/sideasidebblog" target="_blank">instagram</a></li>
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