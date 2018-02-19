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
        <h1>Artist</h1>
        <h1>Profile</h1>
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
  <div class="full center">
    <div class="artist-image artist-image--large" style="background:url('<?php echo get_field('image'); ?>');"></div>
    <h1 class="hollow"><?php echo $name; ?></h1>
    <?php echo get_field('description'); ?>
    <h2>Reviews</h2>
    <?php 

      $albums = get_posts([
        'numberposts' => -1,
        'post_type' => 'album',
        'meta_query' => [
          [
            'key' => 'artist',
            'value' => get_the_ID(),
            'compare' => 'LIKE'
          ]
        ]
      ]);

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
              <img src="'.$albumArt.'" alt="'.$albumName.'"/>
              </a>
              </div>';
  
      }
      

    ?>
  </div>

</div>