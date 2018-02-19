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
        <span class="half__button half__button--right">Side B ></span>
        <h1 class="hollow">Side A</h1>
        <h3 class="author"><?php echo $authorInfoA['user_firstname'] . ' ' . $authorInfoA['user_lastname']; ?></h3>
        <p><?php echo get_field('side_a_intro'); ?></p>
        <h4>What I Liked</h4>
        <?php echo get_field('side_a_liked'); ?>
        <h4>What I Disliked</h4>
        <?php echo get_field('side_a_disliked'); ?>
        <h4>Final Thoughts</h4>
        <?php echo get_field('side_a_final'); ?>
        <h1 class="hollow"><?php echo get_field('side_a_score'); ?>/10</h1>
        <h5>Sounds like</h5>
        <?php echo get_field('side_a_sounds'); ?>
        <span class="half__button half__button--right half__button--bottom">Side B ></span>
    </div>
    <div class="half center half--review half--b">
        <span class="half__button half__button--left">< Side A</span>
        <h1 class="hollow">Side B</h1>
        <h3 class="author"><?php echo $authorInfoB['user_firstname'] . ' ' . $authorInfoB['user_lastname']; ?></h3>
        <p><?php echo get_field('side_b_intro'); ?></p>
        <h4>What I Liked</h4>
        <?php echo get_field('side_b_liked'); ?>
        <h4>What I Disliked</h4>
        <?php echo get_field('side_b_disliked'); ?>
        <h4>Final Thoughts</h4>
        <?php echo get_field('side_b_final'); ?>
        <h1 class="hollow"><?php echo get_field('side_b_score'); ?>/10</h1>
        <h5>Sounds like</h5>
        <?php echo get_field('side_b_sounds'); ?>
        <span class="half__button half__button--left half__button--bottom">< Side A</span>
    </div>

</div>