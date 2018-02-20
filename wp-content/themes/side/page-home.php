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
  <div class="half center br">
    <div class="half-col">
      <h1 class="hollow">Welcome</h1>
      <?php echo get_field('text_1'); ?>
      <?php echo get_field('text_2'); ?>
    </div>
  </div>
  <div class="half">
    <div class="half-col center">
      <div class="padded">
        <div class="stamp">
          <h1 class="hollow">Latest</h1>
        </div>
        <div class="latest">

          <ul class="latest-list">
            <?php 

            $reviews = get_posts([
              'numberposts' => 4,
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

              echo '<li class="latest-list__card" style="background: url('.$albumArt.')">
                      <a href="'.$url.'"><span class="latest-list__name">'.$artistName.' - '.$albumName.'</span></a>
                    </li>';
            }
            
            ?>
            <!-- <li class="latest-list__card" style="background: url('https://f4.bcbits.com/img/0006708744_10.jpg')">
              <span class="latest-list__name">Mitski - Puberty 2</span>
            </li>
            </li>
            <li class="latest-list__card" style="background: url('https://f4.bcbits.com/img/0006708744_10.jpg')">
              <span class="latest-list__name">Mitski - Puberty 2</span>
            </li>
            </li>
            <li class="latest-list__card" style="background: url('https://f4.bcbits.com/img/0006708744_10.jpg')">
              <span class="latest-list__name">Mitski - Puberty 2</span>
            </li> -->
          </ul>
          <div class="stamp rt">
            <h1 class="hollow">Reviews</h1>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>