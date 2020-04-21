(function ($) {
  'use strict'; // Start of use strict

  // Floating label headings for the contact form
  $('body')
    .on('input propertychange', '.floating-label-form-group', function (e) {
      $(this).toggleClass('floating-label-form-group-with-value', !!$(e.target).val());
    })
    .on('focus', '.floating-label-form-group', function () {
      $(this).addClass('floating-label-form-group-with-focus');
    })
    .on('blur', '.floating-label-form-group', function () {
      $(this).removeClass('floating-label-form-group-with-focus');
    });

  // Show the navbar when the page is scrolled up
  var MQL = 992;

  //primary navigation slide-in effect
  if ($(window).width() > MQL) {
    var headerHeight = $('#mainNav').height();
    $(window).on(
      'scroll',
      {
        previousTop: 0,
      },
      function () {
        var currentTop = $(window).scrollTop();
        //check if user is scrolling up
        if (currentTop < this.previousTop) {
          //if scrolling up...
          if (currentTop > 0 && $('#mainNav').hasClass('is-fixed')) {
            $('#mainNav').addClass('is-visible');
          } else {
            $('#mainNav').removeClass('is-visible is-fixed');
          }
        } else if (currentTop > this.previousTop) {
          //if scrolling down...
          $('#mainNav').removeClass('is-visible');
          if (currentTop > headerHeight && !$('#mainNav').hasClass('is-fixed'))
            $('#mainNav').addClass('is-fixed');
        }
        this.previousTop = currentTop;
      }
    );
  }

  // =======================================================================

  // Add classes to WordPress menu
  const ulMenu = $('#navbarResponsive ul');
  ulMenu.addClass('navbar-nav ml-auto');

  const liMenu = [...$('#navbarResponsive li')];
  liMenu.map((li) => {
    li.classList.add('nav-item');
    li.firstChild.classList.add('nav-link');
  });

  //Add classes to Search button
  const searchBtn = $('.search-submit');
  searchBtn.addClass('btn btn-info');

  // Add class to comment submit btn
  const commentBtn = $('#respond #submit');
  commentBtn.addClass('btn btn-info');
  const cancelCommentBtn = $('#cancel-comment-reply-link');
  cancelCommentBtn.addClass('btn btn-info');
})(jQuery); // End of use strict
