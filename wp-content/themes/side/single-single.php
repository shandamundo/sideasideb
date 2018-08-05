<?php
/**
 * Template Name: Single Artist

 * @package WordPress
 * @subpackage Side
 * @since Side 1.0
 */
?>

<?php 

$albumArtist = get_field('artist', $albumID);

$artistID = $albumArtist->ID;
$artistLink = get_permalink($artistID);

$artistName = get_field('name', $artistID);

$singleArt = get_field('single_art')

?>

<?php get_header(); ?>
<div class="container main">

  <div class="left-col br">
    <div class="col">
      <div class="logo-col">
        <a href="<?php echo $artistLink; ?>"><img src="<?php echo $singleArt; ?>" class="album-art" /></a>
        <h2><?php echo $albumName; ?></h2>
        <h3><a href="<?php echo $artistLink; ?>"><?php echo $artistName; ?></a></h3>
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="/reviews">Reviews</a></li>
          <li><a href="/">Home</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://instagram.com/sideasidebblog" target="_blank">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="full center">
    <div class="single-track__info">
      <h1 class="hollow"><?php echo $artistName; ?></h1>
      <h3 class="hollow hollow--sml"><?php echo get_field('title'); ?></h3>
    </div>
    <div class="single-track__snapshot">
      <h2>"<?php echo get_field('review_excerpt'); ?>"</h2>
    </div>
    <div class="single-track__spotify">
      <iframe src="https://open.spotify.com/embed/album/<?php echo get_field('spotify_album_id'); ?>" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
    </div>
    <div class="single-track__body">
      <?php echo get_field('review'); ?>
    </div>
    <h2 class="hollow">What others thought</h2>
    <dv class="single-track__micro-reviews ">
      <ul class="single-track__micro-review-list">
        <?php 
        
        $micro = get_field('micro_reviews');

        foreach($micro as $review){
          echo 
            '<li>
              <span class="rating">'.$review['rating'].'</span>
              <p>'.$review['text'].'</p>
              <h5>'.$review['reviewer']->user_firstname. ' ' . $review['reviewer']->user_lastname.'</h5>
            </li>';
        }
        ?>
      </ul>
    </div>
  </div>

</div>