<?php
/**
 * Template Name: Single Artist

 * @package WordPress
 * @subpackage Side
 * @since Side 1.0
 */
?>

<?php 

$name = get_field('name');

?>

<?php get_header(); ?>
<div class="container main">

  <div class="left-col br">
    <div class="col">
      <div class="logo-col">
        <a href="<?php echo $artistLink; ?>"><img src="<?php echo get_field('image'); ?>" class="album-art" /></a>
        <h1>Artist Profile</h1>
      </div>
      <div class="menu-col">
        <ul class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/reviews">Reviews</a></li>
          <li><a href="/singles">Singles</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://www.instagram.com/sideasidebblog/" target="_blank">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="full center">
    <div class="artist-info">
      <h1 class="hollow"><?php echo $name; ?></h1>
      <?php echo get_field('description'); ?>
    </div>
    <?php 
    
    $albums = get_posts([
      'numberposts' => -1,
      'post_type' => 'album',
      'meta_query' => array(
        array(
          'key' => 'artist',
          'value' => '"' . get_the_ID() . '"',
          'compare' => 'LIKE'
        )
      )
    ]);

    ?>

    <?php if(count($albums) > 0): ?>
    <h2>Album Reviews</h2>
    <?php endif; ?>
    <?php 

      $reviews = [];

      foreach($albums as $album){

        $review = get_posts([
          'numberposts' => -1,
          'post_type' => 'review',
          'meta_query' => [
            [
              'key' => 'album',
              'value' =>  $album->ID,
              'compare' => 'LIKE'
            ]
          ]
        ]);

        array_push($reviews, $review);

      }


      foreach($reviews as $review) {

        $reviewID = $review[0]->ID;
        $url = get_permalink($reviewID);
        $album = get_field('album', $reviewID);
        $albumID = $album[0]->ID;
        $albumName = get_field('name', $albumID);
        $albumArt = get_field('image', $albumID);

        echo '<div class="review-thumb">
              <a href="'.$url.'">
              <img src="'.$albumArt.'" alt="'.$albumName.'" class="album-art"/>
              </a>
              </div>';
  
      }
      

    ?>
  </div>

</div>