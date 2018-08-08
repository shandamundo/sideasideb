<?php
/**
 * Template Name: Single Reviews Page
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
        <h1><a href="/home">sideAsideB</a></h1>
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/reviews">Reviews</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://www.instagram.com/sideasidebblog/" target="_blank">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="full center">
    <div class="half-col center">
      <h1 class="hollow">Singles</h1>
      <ul class="reviews-list">
        <?php 
        
        $reviews = get_posts([
          'numberposts' => -1,
          'post_type' => 'single'
        ]);

        foreach($reviews as $review){

          $id = $review->ID;
          $url = get_permalink($id);
          $artist = get_field('artist', $id);
          $name = $artist->post_title;

          echo '<li>
                  <a href="'.$url.'">
                    <span class="reviews-list__thumb">
                  <b style="text-decoration: underline;">'.$name.'</b><br/>'.get_field('title', $id).'
                    </span>
                  </a>
                </li>';
        }
        
        ?> 
      </ul>
    </div>
  </div>
</div>