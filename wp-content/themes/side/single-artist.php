<?php
/**
 * Template Name: Single Artist

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
        <h1>Mitski</h1>
        <h1>Puberty 2</h1>
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="/home">Reviews</a></li>
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
    <div class="artist-image artist-image--large" style="background:url('<?php echo get_field('image'); ?>');"></div>
    <h1 class="hollow"><?php echo get_field('name'); ?></h1>
    <?php echo get_field('description'); ?>
  </div>

</div>