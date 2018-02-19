<?php
/**
 * Template Name: Reviews Page
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
          <li><a href="/about">About</a></li>
          <li><a href="/reviews">Reviews</a></li>
        </ul>
        <ul class="social">
          <li><a href="#">facebook</a></li>
          <li><a href="#">twitter</a></li>
          <li><a href="#">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="full">
    <div class="half-col center">
      <h1 class="hollow">Reviews</h1>
      <ul class="reviews-list">
        <?php 
        
        $reviews = get_posts([
          'numberposts' => -1,
          'post_type' => 'review'
        ]);

        foreach($reviews as $review){

          $id = $review->ID;
          $url = get_permalink($id);
          $album = get_field('album', $id);
          $albumName = get_field('name', $album[0]->ID);

          $artist = get_field('artist', $album[0]->ID);
          $artistID = $artist[0]->ID;
          $artistName = get_field('name', $artistID);

          echo '<li>
                  <a href="'.$url.'">'.$artistName.' - '.$albumName.'</a>
                </li>';
        }
        
        ?> 
      </ul>
    </div>
  </div>
</div>