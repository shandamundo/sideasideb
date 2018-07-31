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
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="/reviews">Reviews</a></li>
          <li><a href="/">Home</a></li>
        </ul>
        <ul class="social">
          <li><a href="#">facebook</a></li>
          <li><a href="#">twitter</a></li>
          <li><a href="#">instagram</a></li>
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
        <h1 class="hollow"><?php echo get_field('side_a_score'); ?>/10</h1>
        <h5>Sounds like</h5>
        <?php echo get_field('side_a_sounds'); ?>
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
        <h1 class="hollow"><?php echo get_field('side_b_score'); ?>/10</h1>
        <h5>Sounds like</h5>
        <?php echo get_field('side_b_sounds'); ?>
    </div>
</div>
<script>
</script>