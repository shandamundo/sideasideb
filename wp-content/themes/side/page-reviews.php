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
        <div class="logo-col__info">
      </div>
      </div>
      <div class="menu-col menu-col--no-border">
        <h1 class="review-site-title"><a href="/home">sideAsideB</a></h1>
        <ul class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/singles">Singles</a></li>
          <li><a href="/albums" class="active">Albums</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://instagram.com/sideasidebblog" target="_blank">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="full center">
    <div class="half-col center">
      <h1 class="hollow">Albums</h1>
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
          $albumArt = get_field('image', $album[0]->ID);
          $artist = get_field('artist', $album[0]->ID);
          $artistID = $artist[0]->ID;
          $artistName = get_field('name', $artistID);

          echo '<li>
                  <a href="'.$url.'">
                    <img src="'.$albumArt.'" class="review-list__art" />
                    <span class="reviews-list__thumb">
                  <b style="text-decoration: underline;">'.$artistName.'</b><br/>'.$albumName.'
                    </span>
                  </a>
                </li>';
        }
        
        ?> 
      </ul>
    </div>
  </div>
</div>