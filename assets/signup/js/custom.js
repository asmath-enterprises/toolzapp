
$(document).ready(function() {
	'use strict';

  $('.form-steps .step-btn').on('click', function(e) {
    e.preventDefault();
    $(this).parents('.form-steps').next().addClass('active');
    $(this).parents('.form-steps').removeClass('active');

  })

  $('.form-steps .step-btn-back').on('click', function(e) {
    e.preventDefault();
    $(this).parents('.form-steps').prev().addClass('active');
    $(this).parents('.form-steps').removeClass('active');

  })

  /*--------------------------------------------
  Donation
  --------------------------------------------*/

  $('.amount-preset span').on('click', function() {
    $('.amount-preset span').removeClass('active');
    $(this).addClass('active');
  })

  $('.custom-donation').on('click', function() {
    $('.amount-preset span').removeClass('active');
  })


})