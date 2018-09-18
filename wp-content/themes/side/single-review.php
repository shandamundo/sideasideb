<?php
/**
 * Template Name: Single Review
 *
 * @package WordPress
 * @subpackage Side
 * @since Side 1.0
 */
?>

<?php get_header(); ?>

<?php

  $album = get_field('album')[0];
  $albumID = $album->ID;
  
  $albumName = get_field('name', $albumID);
  $albumYear = get_field('year', $albumID);
  $albumArt = get_field('image', $albumID);

  $albumArtist = get_field('artist', $albumID);
  $artistID = $albumArtist[0]->ID;
  $artistLink = get_permalink($artistID);

  $artistName = get_field('name', $artistID);

?>

<div class="container main">
  <button class="single-review__mobile-button">B</button>
  <div class="left-col br">
    <div class="col">
      <div class="logo-col">
        <a href="<?php echo $artistLink; ?>"><img src="<?php echo $albumArt; ?>" class="album-art" /></a>
        <h2><?php echo $albumName; ?></h2>
        <h3><a href="<?php echo $artistLink; ?>"><?php echo $artistName; ?></a></h3>
        <h1 class="review-site-title"><a href="/home">sideAsideB</a></h1>
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/singles">Singles</a></li>
          <li><a href="/reviews">Reviews</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://instagram.com/sideasidebblog" target="_blank">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
    <?php 
    $authorInfoA = get_field('side_a_author');
    $authorInfoB = get_field('side_b_author');
    ?>
    <div class="half center half--review half--a">
        <h1 class="hollow">Side A</h1>
        <h3 class="author"><?php echo $authorInfoA['user_firstname'] . ' ' . $authorInfoA['user_lastname']; ?></h3>
        <p><?php echo get_field('side_a_intro'); ?></p>
        <h4>What I Liked</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_a_liked'); ?>
        </div>
        <h4>What I Disliked</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_a_disliked'); ?>
        </div>
        <h4>Final Thoughts</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_a_final'); ?>
        </div>
        <h4>Sounds like</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_a_sounds'); ?>
        </div>
        <h1 class="hollow"><?php echo get_field('side_a_score'); ?>/10</h1>
    </div>
    <div class="half center half--review half--b">
        <h1 class="hollow">Side B</h1>
        <h3 class="author"><?php echo $authorInfoB['user_firstname'] . ' ' . $authorInfoB['user_lastname']; ?></h3>
        <p><?php echo get_field('side_b_intro'); ?></p>
        <h4>What I Liked</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_b_liked'); ?>
        </div>
        <h4>What I Disliked</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_b_disliked'); ?>
        </div>
        <h4>Final Thoughts</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_b_final'); ?>
        </div>
        <h4>Sounds like</h4>
        <div class="review half--review__point">
          <?php echo get_field('side_b_sounds'); ?>
        </div>
        <h1 class="hollow"><?php echo get_field('side_b_score'); ?>/10</h1>
    </div>
</div>
<script>
</script>