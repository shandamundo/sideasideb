<?php
/**
 * Template Name: Home Page
 *
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
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/singles">Singles</a></li>
          <li><a href="/albums">Albums</a></li>
        </ul>
        <ul class="social">
          <li><a href="https://www.facebook.com/sideasidebblog" target="_blank">facebook</a></li>
          <li><a href="https://www.instagram.com/sideasidebblog/" target="_blank">instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="half center br">
    <div class="half-col">
      <h1 class="hollow">Welcome</h1>
      <?php echo get_field('text_1'); ?>
      <?php echo get_field('text_2'); ?>
    </div>
  </div>
  <div class="half">
    <div class="half-col center latest-col">
      <div class="padded">
        <div class="stamp">
          <h1 class="hollow">Latest</h1>
        </div>
        <div class="latest">

          <ul class="latest-list">
            <?php 

            $reviews = get_posts([
              'numberposts' => 24,
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

              echo '<li class="latest-list__card">
                      <a href="'.$url.'" class="image--red latest-list__name">
                      '.$artistName.' - '.$albumName.'
                      <span class="latest-list__album-art"  style="background: url('.$albumArt.')"></span>
                      </a>
                    </li>';
            }
            
            ?>
          </ul>
        </div>
        <div class="stamp rt">
          <h1 class="hollow">Reviews</h1>
        </div>
      </div>  
    </div>
  </div>
</div>