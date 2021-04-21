$(function () {
  /* Preloader*/

  $(window).on('load', function () {
    $('#loading').fadeOut('slow', function () {
      $(this).remove();
    });
  });

  var delay = 11 * 1000;

  /* COUNTDOWN  */
  function getCountDown() {
    return new Date(new Date().valueOf() + (delay - 1000));
  }

  setTimeout(function () {
    $('#tload').html('');
    $('#clock-c').html(
      '<span class="h1 font-weight-bold">EVENT FINISHED</span>'
    );
  }, delay);

  $('#clock-c').countdown(getCountDown(), function (event) {
    var $this = $(this).html(
      event.strftime(
        '' +
          '<span class="h1 font-weight-bold">%D</span> Day%!d' +
          '<span class="h1 font-weight-bold">%H</span> Hr' +
          '<span class="h1 font-weight-bold">%M</span> Min' +
          '<span class="h1 font-weight-bold">%S</span> Sec'
      )
    );
  });
});

$(document).ready(function () {
  $('.aniview').AniView();
});
