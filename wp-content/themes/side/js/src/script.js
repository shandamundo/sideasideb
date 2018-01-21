import $  from 'jquery';

$(document).ready(() => {

//mobile switch review buttons
let buttonRight = $('.half__button--right'),
    buttonLeft = $('.half__button--left'),
    buttonBottom = $('.half__button--bottom');

buttonRight.click((e) => {
  $('.half--b').addClass('active');
  $('.half--a').addClass('hide');
});

buttonLeft.click((e) => {
  $('.half--b').removeClass('active');
  $('.half--a').removeClass('hide');
});

buttonBottom.click(() => {
  reviewA.css('height', '');
  $('html,body').animate({ scrollTop: "0vh" }, 'slow');
});

//Set heights on reviews for mobile devices to prevent overflow issues
let highestReview,
    reviewA = $('.half--a'),
    reviewB = $('.half--b');

highestReview = reviewA.outerHeight() > reviewB.outerHeight() ? reviewA : reviewB;

reviewA.css('height', highestReview.outerHeight());

});
