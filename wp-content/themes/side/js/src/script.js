import $  from 'jquery';

$(document).ready(() => {

  const aOffset = $('.half--a').offset().top;
  const bOffset = $('.half--b').offset().top;

  let aIsActive = true;

  $(window).on('scroll', () => {
    const windowOffset = $(window).scrollTop();
    if(windowOffset > bOffset){
      $('.single-review__mobile-button').html('A');
      aIsActive = false;
    } else {
      console.log('setting A active');
      $('.single-review__mobile-button').html('B');
      aIsActive = true;
    }
  });

  $('.single-review__mobile-button').on('click', () => {
    $('html, body').animate({ scrollTop: $(`.half--${aIsActive ? 'b' : 'a'}`).offset().top + 10 }, 1000, () => {
      // callback
    });
  });


});
